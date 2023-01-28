<?php /* Smarty version 2.6.31, created on 2022-12-28 10:42:01
         compiled from mxOrderChart.tpl */ ?>
<input type="hidden" id="mwHorizonOrders" value="<?php echo $this->_tpl_vars['horizont']; ?>
" />
<input type="hidden" id="mwHorizonOrders_maxCount" value="<?php echo $this->_tpl_vars['maxCount']; ?>
" />
<input type="hidden" id="mwHorizonOrders_optionMonth" value="<?php echo $this->_tpl_vars['optionTitle']; ?>
" />
<input type="hidden" id="mwHorizonOrders_optionYear" value="<?php echo $this->_tpl_vars['year']; ?>
" />
<input type="hidden" id="mwHorizonOrders_option" value="<?php echo $this->_tpl_vars['option']; ?>
" />

<?php $_from = $this->_tpl_vars['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['datapoints'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['datapoints']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['point']):
        $this->_foreach['datapoints']['iteration']++;
?>
    <input type="hidden" id="mwHorizonOrders_point-<?php echo $this->_tpl_vars['point']['horizontitem']; ?>
" value="<?php echo $this->_tpl_vars['point']['ordercount']; ?>
" />
<?php endforeach; endif; unset($_from); ?>
<script>
    updateOrderChartIncome(<?php echo $this->_tpl_vars['incomeBrut']; ?>
,<?php echo $this->_tpl_vars['incomeNet']; ?>
);
</script>