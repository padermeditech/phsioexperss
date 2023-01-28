<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:53
         compiled from tcklarna_country_select_popup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'tcklarna_country_select_popup.tpl', 7, false),array('function', 'counter', 'tcklarna_country_select_popup.tpl', 32, false),array('modifier', 'lower', 'tcklarna_country_select_popup.tpl', 21, false),array('modifier', 'upper', 'tcklarna_country_select_popup.tpl', 57, false),)), $this); ?>
<div class="klarna-modal modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-default close pull" data-dismiss="modal">&times;</button>
                <h3 class="modal-title"
                    id="myModalLabel"><?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_CHOOSE_YOUR_SHIPPING_COUNTRY'), $this);?>
</h3>
            </div>
            <div class="modal-body">
                <form class="form" id="select-country-form" name="select-country"
                      action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
"
                      method="post">
                    <div class="hidden">
                        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                        <input type="hidden" name="cl" value="KlarnaExpress">
                        <input type="hidden" name="selected-country" value="">
                    </div>
                    <?php $_from = $this->_tpl_vars['oView']->getKlarnaModalFlagCountries(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['flagCountries'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['flagCountries']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['country']):
        $this->_foreach['flagCountries']['iteration']++;
?>
                        <button type="button"
                                class="btn btn-default" value="<?php echo $this->_tpl_vars['country']->oxcountry__oxisoalpha2->value; ?>
">
                            <div class="klarna-flag <?php echo ((is_array($_tmp=$this->_tpl_vars['country']->oxcountry__oxisoalpha2->value)) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
"></div>
                            <span class="country-name"><?php echo $this->_tpl_vars['country']->oxcountry__oxtitle->value; ?>
</span>
                        </button>
                    <?php endforeach; endif; unset($_from); ?>
                </form>
                <div class="other-countries-select">
                    <div class="form-group">
                        <select class="form-control js-country-select" id="other-countries">
                            <option disabled selected><?php echo smarty_function_oxmultilang(array('ident' => 'TCKLARNA_MORE_COUNTRIES'), $this);?>
</option>
                            <?php $this->assign('shopCountriesCount', 0); ?>
                            <?php $_from = $this->_tpl_vars['oView']->getActiveShopCountries(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['otherCountries'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['otherCountries']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['country']):
        $this->_foreach['otherCountries']['iteration']++;
?>
                                <?php echo smarty_function_counter(array('assign' => 'shopCountriesCount'), $this);?>

                                <option value="<?php echo $this->_tpl_vars['country']->oxcountry__oxisoalpha2->value; ?>
"><?php echo $this->_tpl_vars['country']->oxcountry__oxtitle->value; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    </div>
                </div>
                            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var showModal = false;
    <?php if ($this->_tpl_vars['blShowPopUp'] && $this->_tpl_vars['sKlarnaIframe'] && $this->_tpl_vars['shopCountriesCount'] > 1): ?>
        showModal = true;
    <?php endif; ?>
    if (window.addEventListener) {
        window.addEventListener('load', countryPopupHandler)
    } else {
        window.attachEvent('onload', countryPopupHandler)
    }

    function countryPopupHandler() {
        var loadedPurchaseCountry = "<?php echo ((is_array($_tmp=$this->_tpl_vars['sPurchaseCountry'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
";
        var $modal = $('#myModal');

        $('#resetCountry').on('click', 'a', function () {
            $modal.modal('show');
        });

        var $form = $('#select-country-form').closest('form');
        var $input = $form.find('input[name="selected-country"]');

        $('button', $form).click(function (e) {
            if (this.value === loadedPurchaseCountry) {
                $modal.modal('hide');
                return;
            }
            e.preventDefault();
            $input.val(this.value);
            $form.submit();
        });

        $('.js-country-select').change(function () {
            if (this.value === loadedPurchaseCountry) {
                $modal.modal('hide');
                return;
            }
            $input.val(this.value);
            $form.submit();
        });
    }


</script>