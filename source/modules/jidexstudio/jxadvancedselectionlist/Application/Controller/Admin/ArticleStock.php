<?php

namespace JidexStudio\JxAdvancedSelectionList\Application\Controller\Admin;

use JidexStudio\JxAdvancedSelectionList\Application\Service\ArticleService;
use OxidEsales\Eshop\Application\Model\Article;

/**
 * Admin article inventory manager.
 * Collects such information about article as stock quantity, delivery status,
 * stock message, etc; Updates information (on user submit).
 * Admin Menu: Manage Products -> Articles -> Inventory.
 */
class ArticleStock extends ArticleStock_parent
{
    /**
     * Loads article Inventory information and
     * returns the name of template file.
     *
     * @return string
     */
    public function render()
    {
        $tpl = parent::render();

        $myConfig = $this->getConfig();

        $oArticle = $this->_aViewData["edit"];


        if ($oArticle) {
            $soxId = $oArticle->getId();
            if ($myConfig->getConfigParam('blMallInterchangeArticles')) {
                $sShopSelect = '1';
            } else {
                $sShopID = $myConfig->getShopID();
                $sShopSelect = " oxshopid =  '$sShopID' ";
            }

            $oPriceList = oxNew(\OxidEsales\Eshop\Core\Model\ListModel::class);
            $oPriceList->init('oxbase', "oxprice2article");
            $sQ = "select * from oxprice2article where oxartid = :oxartid " .
                "and {$sShopSelect} and (oxamount > 0 or oxamountto > 0) and jxpricegroup = 0 order by oxamount ";
            $oPriceList->selectstring($sQ, [
                ':oxartid' => $soxId
            ]);

            $this->_aViewData["amountprices"] = $oPriceList;


            $oPriceList = oxNew(\OxidEsales\Eshop\Core\Model\ListModel::class);
            $oPriceList->init('oxbase', "oxprice2article");
            $sQ = "select * from oxprice2article where oxartid = :oxartid " .
                "and {$sShopSelect} and (oxamount > 0 or oxamountto > 0) and jxpricegroup > 0 order by oxamount ";
            $oPriceList->selectstring($sQ, [
                ':oxartid' => $soxId
            ]);

            if ($oPriceList->count()) {
                $this->_aViewData["amountgroupprices"] = $oPriceList;
            }
        }

        return $tpl;
    }

    /**
     * Updates all amount prices for article at once
     */
    public function updateprices()
    {
        parent::updateprices();

        $soxId = $this->getEditObjectId();
        /** @var Article $oArticle */
        $oArticle = oxNew(\OxidEsales\Eshop\Application\Model\Article::class);
        $oArticle->loadInLang($this->_iEditLang, $soxId);

        if ($oArticle->isVariant()) {
            $parentId = $oArticle->getParentId();
            /** @var Article $oArticle */
            $oParent = oxNew(\OxidEsales\Eshop\Application\Model\Article::class);
            $oParent->loadInLang($this->_iEditLang, $parentId);

            /** @var ArticleService $articleService */
            $articleService = oxNew(ArticleService::class, $this->getConfig());
            $articleService->shareDiscountsBetweenVariants($oParent);
        }
    }
}
