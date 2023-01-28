<?php

namespace JidexStudio\JxAdvancedSelectionList\Application\Model;

use OxidEsales\Eshop\Core\Field;

/**
 * Class Article
 * @package JidexStudio\JxAdvancedSelectionList\Application\Model
 */
class Article extends Article_parent
{
    protected $priceSuffixToJxGroupPrice = [
        'a' => 1,
        'b' => 2,
        'c' => 3
    ];

    /**
     * @return string
     */
    public function getVariantsIconDirPath()
    {
        return SelectionListOption::ICONSDIR;
    }

    /**
     * @return array
     */
    public function getVariantsAdditionalData()
    {
        if ($this->isVariant()) {
            return [];
        }

        try {
            $additionalData = \json_decode($this->oxarticles__jxadvancedselectionlistvariantsdata->rawValue, true);
        } catch (\Exception $e) {
            $additionalData = [];
        }

        return $additionalData;
    }

    /**
     * @param array $additionalData
     * @return Field|void
     */
    public function setVariantsAdditionalData(array $additionalData)
    {
        if ($this->isVariant()) {
            return;
        }

        try {
            $additionalData = \json_encode($additionalData, JSON_UNESCAPED_UNICODE);
        } catch (\Exception $e) {
            $additionalData = '';
        }

        return $this->oxarticles__jxadvancedselectionlistvariantsdata = new Field($additionalData, Field::T_RAW);
    }

    /**
     * Collecting assigned to article amount-price list.
     *
     * @return \OxidEsales\Eshop\Application\Model\AmountPriceList
     */
    protected function buildAmountPriceList()
    {
        $oAmountPriceList = parent::buildAmountPriceList();

        if (!$this->skipDiscounts()) {
            $sPriceSufix = $this->_getUserPriceSufix();
            $iPriceGroup = $this->priceSuffixToJxGroupPrice[$sPriceSufix] ?: 0;

            // remove prices that are not allowed for current user group
            foreach ($oAmountPriceList as $oAmPrice) {
                if ((int)($oAmPrice->oxprice2article__jxpricegroup->value) !== $iPriceGroup) {
                    $oAmountPriceList->offsetUnset($oAmPrice->getId());
                }
            }
        }

        $this->_oAmountPriceList = $oAmountPriceList;

        return $this->_oAmountPriceList;
    }

    /**
     * get user Group A, B or C price, returns db price if user is not in groups
     *
     * EXTENDED: use parent ABC prices for variants
     *
     * @return double
     * @deprecated underscore prefix violates PSR12, will be renamed to "getGroupPrice" in next major
     */
    protected function _getGroupPrice() // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        $sPriceSufix = $this->_getUserPriceSufix();
        $sVarName = "oxarticles__oxprice{$sPriceSufix}";
        $dPrice = $this->$sVarName->value;


        // #1437/1436C - added config option, and check for zero A,B,C price values
        if ($this->getConfig()->getConfigParam('blOverrideZeroABCPrices') && (double) $dPrice == 0) {
            if ($this->isVariant()
                && ($oParentArticle = $oParentArticle = $this->getParentArticle())
                && (double)($dPrice = $oParentArticle->$sVarName->value) > 0
            ) {
            } else {
                $dPrice = $this->oxarticles__oxprice->value;
            }
        }

        return $dPrice;
    }
}
