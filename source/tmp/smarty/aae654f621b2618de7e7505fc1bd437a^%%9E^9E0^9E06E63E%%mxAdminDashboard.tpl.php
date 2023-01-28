<?php /* Smarty version 2.6.31, created on 2022-12-28 10:42:00
         compiled from mxAdminDashboard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'mxAdminDashboard.tpl', 4, false),array('modifier', 'date_format', 'mxAdminDashboard.tpl', 19, false),array('modifier', 'oxaddslashes', 'mxAdminDashboard.tpl', 25, false),array('modifier', 'truncate', 'mxAdminDashboard.tpl', 194, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title><?php echo smarty_function_oxmultilang(array('ident' => 'MAIN_TITLE'), $this);?>
</title>
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
main.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
colors.css">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../modules/mx/admindashboard/out/src/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="../modules/mx/admindashboard/out/src/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="../modules/mx/admindashboard/out/src/js/jquery-3.1.1.min.js"></script>
    <script src="../modules/mx/admindashboard/out/src/js/bootstrap.min.js"></script>
    <script src="../modules/mx/admindashboard/out/src/js/jquery.flot.min.js"></script>
    <script src="../modules/mx/admindashboard/out/src/js/jquery.flot.pie.min.js"></script>
    <script src="../modules/mx/admindashboard/out/src/js/jquery.flot.categories.min.js"></script>
    <script src="../modules/mx/admindashboard/out/src/js/mxAdminDashboard.js?<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H%M%S") : smarty_modifier_date_format($_tmp, "%H%M%S")); ?>
"></script>

</head>
<body>

<script type="text/javascript">
    parent.sShopTitle = "<?php echo ((is_array($_tmp=$this->_tpl_vars['actshop'])) ? $this->_run_mod_handler('oxaddslashes', true, $_tmp) : smarty_modifier_oxaddslashes($_tmp)); ?>
";
    parent.setTitle();
</script>
<style>
    #mwToggleSidebar {
        width: 35px;
        height: 35px;
        background: #333;
        color: #fff;
        position: fixed;
        bottom: 10px;
        right: 10px;
        z-index: 100;
        text-align: center;
        line-height: 35px;
        cursor: pointer;
    }

    .panel-body {
        position: relative;
    }
    .panel-body .loader {
        position: absolute;
            top: 0;
            left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.6);
        z-index: 99;
    }

    .vcenter {
        display: inline-block;
        vertical-align: middle;
        float: none;
    }

</style>

<div id="mwToggleSidebar"">><</div>

<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">

        <div class="navbar-header">
                        <a class="navbar-brand" href="#"><?php echo smarty_function_oxmultilang(array('ident' => 'MXDASHBOARD'), $this);?>
</a>
        </div>
            </div>
</nav>

<div class="container-fluid">

    <?php if ($this->_tpl_vars['aMessage']): ?>
        <div class="messagebox">
            <?php echo smarty_function_oxmultilang(array('ident' => 'MAIN_INFO'), $this);?>
:<br>
            <?php $_from = $this->_tpl_vars['aMessage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['class'] => $this->_tpl_vars['sMessage']):
?>
            <p class="<?php echo $this->_tpl_vars['class']; ?>
"><?php echo $this->_tpl_vars['sMessage']; ?>
</p>
            <?php endforeach; endif; unset($_from); ?>
        </div>
    <hr>
    <?php endif; ?>

    <!-- First row -->
    <?php if ($this->_tpl_vars['orderCharts'] != 'DONTSHOW'): ?>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXDASHBOARDORDERDATA'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <div class="loader">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                            <rect x="19" y="19" width="20" height="20" fill="#93dbe9">
                                <animate attributeName="fill" values="#689cc5;#93dbe9;#93dbe9" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0s" calcMode="discrete"></animate>
                            </rect><rect x="40" y="19" width="20" height="20" fill="#93dbe9">
                                <animate attributeName="fill" values="#689cc5;#93dbe9;#93dbe9" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.125s" calcMode="discrete"></animate>
                            </rect><rect x="61" y="19" width="20" height="20" fill="#93dbe9">
                                <animate attributeName="fill" values="#689cc5;#93dbe9;#93dbe9" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.25s" calcMode="discrete"></animate>
                            </rect><rect x="19" y="40" width="20" height="20" fill="#93dbe9">
                                <animate attributeName="fill" values="#689cc5;#93dbe9;#93dbe9" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.875s" calcMode="discrete"></animate>
                            </rect><rect x="61" y="40" width="20" height="20" fill="#93dbe9">
                                <animate attributeName="fill" values="#689cc5;#93dbe9;#93dbe9" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.375s" calcMode="discrete"></animate>
                            </rect><rect x="19" y="61" width="20" height="20" fill="#93dbe9">
                                <animate attributeName="fill" values="#689cc5;#93dbe9;#93dbe9" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.75s" calcMode="discrete"></animate>
                            </rect><rect x="40" y="61" width="20" height="20" fill="#93dbe9">
                                <animate attributeName="fill" values="#689cc5;#93dbe9;#93dbe9" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.625s" calcMode="discrete"></animate>
                            </rect><rect x="61" y="61" width="20" height="20" fill="#93dbe9">
                                <animate attributeName="fill" values="#689cc5;#93dbe9;#93dbe9" keyTimes="0;0.125;1" dur="1s" repeatCount="indefinite" begin="0.5s" calcMode="discrete"></animate>
                            </rect>
                        </svg>
                    </div>
                    <form name="orderChart" id="orderChart" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
                        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                        <input type="hidden" name="cl" value="mxAdminDashboard">
                        <input type="hidden" name="fnc" value="changeOrderChartView">
                        <input type="hidden" id="orderChartOption" name="option" value="m">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="btn-group" id="orderoverviewType">
                                    <button type="submit" data-option="m" class="btn btn-default active"><?php echo smarty_function_oxmultilang(array('ident' => 'MXDASHBOARDORDERDATA_MONTH'), $this);?>
</button>
                                    <button type="submit" data-option="y" class="btn btn-default"><?php echo smarty_function_oxmultilang(array('ident' => 'MXDASHBOARDORDERDATA_YEAR'), $this);?>
</button>
                                                                    </div>
                                <div class="btn-group" id="orderoverviewNavigation">
                                    <button data-option="prev" class="btn btn-default"><</button>
                                    <button data-option="next" class="btn btn-default">></button>
                                </div>
                                <h4 id="orderChartPeriod"><?php echo ((is_array($_tmp=$this->_tpl_vars['orderCharts']['timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B") : smarty_modifier_date_format($_tmp, "%B")); ?>
</h4>
                            </div>
                            <div class="col-sm-6 text-right">
                                <h2 id="orderChartINCOME"><?php echo smarty_function_oxmultilang(array('ident' => 'MXBESTBUYER_BRUT'), $this);?>
: <span id="incomeBrut"><?php echo $this->_tpl_vars['orderCharts']['incomeBrut']; ?>
</span> € - <?php echo smarty_function_oxmultilang(array('ident' => 'MXBESTBUYER_NET'), $this);?>
: <span id="incomeNet"><?php echo $this->_tpl_vars['orderCharts']['incomeNet']; ?>
</span> €</h2>
                            </div>
                        </div>
                    </form>

                    <div id="orderoverview" style="height: 300px;"></div>
                    <div id="orderoverviweData">
                        <input type="hidden" id="MXHorizonOrders" value="<?php echo $this->_tpl_vars['orderCharts']['horizont']; ?>
" />
                        <input type="hidden" id="MXHorizonOrders_maxCount" value="<?php echo $this->_tpl_vars['orderCharts']['maxCount']; ?>
" />
                        <input type="hidden" id="MXHorizonOrders_optionTitle" value="<?php echo $this->_tpl_vars['orderCharts']['optionTitle']; ?>
" />
                        <input type="hidden" id="MXHorizonOrders_optionYear" value="<?php echo $this->_tpl_vars['orderCharts']['year']; ?>
" />
                        <input type="hidden" id="MXHorizonOrders_option" value="<?php echo $this->_tpl_vars['orderCharts']['option']; ?>
" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row">
        <?php if ($this->_tpl_vars['aBestSellingDays'] != 'DONTSHOW'): ?>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXBESTSELLINGDAYS'), $this);?>
</h3>
                    </div>
                    <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <?php $_from = $this->_tpl_vars['aBestSellingDays']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['day']):
?>
                                        <td><h3><b><?php echo ((is_array($_tmp=$this->_tpl_vars['day']['day'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 3, "") : smarty_modifier_truncate($_tmp, 3, "")); ?>
</b></b></h3></td>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tr>
                                <tr>
                                    <?php $_from = $this->_tpl_vars['aBestSellingDays']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['day']):
?>
                                        <td><b><?php echo $this->_tpl_vars['day']['orderscount']; ?>
</b></td>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tr>
                            </table>
                    </div>
                </div>

            </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['aBestSellingMonth'] != 'DONTSHOW'): ?>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXBESTSELLINGMONTH'), $this);?>
</h3>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <tr>
                            <?php $_from = $this->_tpl_vars['aBestSellingMonth']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['day']):
?>
                            <td><h4><b><?php echo ((is_array($_tmp=$this->_tpl_vars['day']['day'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 3, "") : smarty_modifier_truncate($_tmp, 3, "")); ?>
</b></b></h4></td>
                            <?php endforeach; endif; unset($_from); ?>
                        </tr>
                        <tr>
                            <?php $_from = $this->_tpl_vars['aBestSellingMonth']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['day']):
?>
                            <td><b><?php echo $this->_tpl_vars['day']['orderscount']; ?>
</b></td>
                            <?php endforeach; endif; unset($_from); ?>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['aBestSellingHour'] != 'DONTSHOW'): ?>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXBESTSELLINGHOUR'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <?php $_from = $this->_tpl_vars['aBestSellingHour']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['day']):
?>
                            <td><h3><b><?php echo $this->_tpl_vars['day']['hour']; ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'MXBESTSELLINGHOUR_LABEL'), $this);?>
</b></b></h3></td>
                            <?php endforeach; endif; unset($_from); ?>
                        </tr>
                        <tr>
                            <?php $_from = $this->_tpl_vars['aBestSellingHour']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['day']):
?>
                            <td><b><?php echo $this->_tpl_vars['day']['countorders']; ?>
</b></td>
                            <?php endforeach; endif; unset($_from); ?>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['orderPayments'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXUSEDPAYMENT'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <div id="orderChartPayment" style="height: 300px;"></div>
                    <div id="orderChartPaymentData">
                        <?php $_from = $this->_tpl_vars['orderPayments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['datapoints'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['datapoints']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['point']):
        $this->_foreach['datapoints']['iteration']++;
?>
                            <input type="hidden" class="paymentsCharItem" id="MXPayments_point-<?php echo $this->_tpl_vars['point']['paymentcount']; ?>
" value="<?php echo $this->_tpl_vars['point']['oxdesc']; ?>
" />
                        <?php endforeach; endif; unset($_from); ?>
                    </div>
                    <hr>
                    Gehe zu: <a class="btn btn-default btn-xs" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=admin_payment">Bezahlarten</a>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['topCats'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXTOPSELLERCATS'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <div id="orderChartCategory" style="height: 300px;"></div>
                    <div id="orderChartCategoryData">
                        <?php $_from = $this->_tpl_vars['topCats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aCat']):
?>
                            <input class="topSellerCategoy" type="hidden" data-option="<?php echo $this->_tpl_vars['aCat']['iSellCounter']; ?>
" value="<?php echo $this->_tpl_vars['aCat']['oxtitle']; ?>
" />
                        <?php endforeach; endif; unset($_from); ?>
                    </div>
                    <hr>
                    Gehe zu: <a class="btn btn-default btn-xs" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=category">Kategorien</a>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="row">
        <?php if ($this->_tpl_vars['aYearDevelop'] != 'DONTSHOW'): ?>
            <div class="col-sm-4" id="yearChart">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXYEARDEVELOPMENT'), $this);?>
</h3>
                    </div>
                    <div class="panel-body">

                        <div id="yearDevelopment" style="height: 300px;"></div>
                        <div id="yearDevelopmentData">
                            <?php $this->assign('maxYearValue', 0); ?>

                            <?php $_from = $this->_tpl_vars['aYearDevelop']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['yearData']):
?>
                                <?php if ($this->_tpl_vars['maxYearValue'] < $this->_tpl_vars['yearData']['brutsum']): ?>
                                    <?php $this->assign('maxYearValue', $this->_tpl_vars['yearData']['brutsum']); ?>
                                <?php endif; ?>
                                <input type="hidden" class="yearDevelopment" data-year="<?php echo $this->_tpl_vars['yearData']['yeardate']; ?>
" value="<?php echo $this->_tpl_vars['yearData']['brutsum']; ?>
" />
                            <?php endforeach; endif; unset($_from); ?>
                            <input type="hidden" id="yearMaxVal" value="<?php echo $this->_tpl_vars['maxYearValue']; ?>
" />
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['aYearDevelopOrder'] != 'DONTSHOW'): ?>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXYEARDEVELOPMENTORDER'), $this);?>
</h3>
                </div>
                <div class="panel-body">

                    <div id="yearOrderDevelopment" style="height: 300px;"></div>
                    <div id="yearOrderDevelopmentData">
                        <?php $this->assign('maxYearOrderValue', 0); ?>

                        <?php $_from = $this->_tpl_vars['aYearDevelopOrder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['yearData']):
?>
                            <?php if ($this->_tpl_vars['maxYearOrderValue'] < $this->_tpl_vars['yearData']['counter']): ?>
                                <?php $this->assign('maxYearOrderValue', $this->_tpl_vars['yearData']['counter']); ?>
                            <?php endif; ?>
                            <input type="hidden" class="yearOrderDevelopment" data-year="<?php echo $this->_tpl_vars['yearData']['yeardate']; ?>
" value="<?php echo $this->_tpl_vars['yearData']['counter']; ?>
" />
                        <?php endforeach; endif; unset($_from); ?>
                        <input type="hidden" id="yearOrderMaxVal" value="<?php echo $this->_tpl_vars['maxYearOrderValue']; ?>
" />
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['aGenderOrders'] != 'DONTSHOW'): ?>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXGENDERORDERS'), $this);?>
</h3>
                    </div>
                    <div class="panel-body">
                        <div id="genderOrderChartQuality" style="height: 300px;"></div>
                        <div id="genderOrderChartQualityData">
                            <input type="hidden" class="qualityGenderOrder" id="aGenderMen" value="<?php echo $this->_tpl_vars['aGenderOrders']['MR']; ?>
" />
                            <input type="hidden" class="qualityGenderOrder" id="aGenderWomen" value="<?php echo $this->_tpl_vars['aGenderOrders']['MRS']; ?>
" />
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>


    <!-- THIRD row -->
    <div class="row">
        <?php if ($this->_tpl_vars['aQualityOrders'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXORDERSQUALITY'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <div id="orderChartQuality" style="height: 370px;"></div>
                    <div id="orderChartQualityData">
                        <input type="hidden" class="qualityOrder" id="aQualityOrdersStorno" value="<?php echo $this->_tpl_vars['aQualityOrders']['storno']; ?>
" />
                        <input type="hidden" class="qualityOrder" id="aQualityOrdersNostorno" value="<?php echo $this->_tpl_vars['aQualityOrders']['nostorno']; ?>
" />
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['aOrderFolderStates'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXORDERSTATES'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <div id="orderFolderStates" style="height: 370px;">
                    </div>
                    <hr>
                    Gehe zu: <a class="btn btn-warning btn-xs" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=admin_order&parameter[folder]=ORDERFOLDER_NEW">Neu</a>
                    <a class="btn btn-default btn-xs" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=admin_order&parameter[folder]=ORDERFOLDER_FINISHED">Bearbeitete</a>
                    <a class="btn btn-danger btn-xs" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=admin_order&parameter[folder]=ORDERFOLDER_PROBLEMS">Probleme</a>

                    <div id="orderFolderStatesData">
                        <input type="hidden" class="orderFolderState" id="orderFolderStateNew" value="<?php echo $this->_tpl_vars['aOrderFolderStates']['oxnew']; ?>
" />
                        <input type="hidden" class="orderFolderState" id="orderFolderStateProblem" value="<?php echo $this->_tpl_vars['aOrderFolderStates']['oxproblems']; ?>
" />
                        <input type="hidden" class="orderFolderState" id="orderFolderStateFinnished" value="<?php echo $this->_tpl_vars['aOrderFolderStates']['oxfinished']; ?>
" />
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['aOrderVals'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXORDERVALUES'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXTYPE'), $this);?>
</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXORDERVALUE'), $this);?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo smarty_function_oxmultilang(array('ident' => 'MXBIGGEST'), $this);?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'MXORDERVALUE'), $this);?>
</td>
                            <td><?php echo $this->_tpl_vars['aOrderVals']['maxval']; ?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo smarty_function_oxmultilang(array('ident' => 'MXAVG'), $this);?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'MXORDERVALUE'), $this);?>
</td>
                            <td><?php echo $this->_tpl_vars['aOrderVals']['avgval']; ?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo smarty_function_oxmultilang(array('ident' => 'MXSMALLEST'), $this);?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'MXORDERVALUE'), $this);?>
</td>
                            <td><?php echo $this->_tpl_vars['aOrderVals']['minval']; ?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo smarty_function_oxmultilang(array('ident' => 'MXORDERVALUE'), $this);?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'MXALL'), $this);?>
</td>
                            <td><?php echo $this->_tpl_vars['ordertotalsum']; ?>
</td>
                        </tr>

                        <tr>
                            <td><?php echo smarty_function_oxmultilang(array('ident' => 'MXORDERVALUE'), $this);?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'MXTODAY'), $this);?>
</td>
                            <td><?php echo $this->_tpl_vars['ordersum']; ?>
</td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXTYPE'), $this);?>
</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXCOUNT'), $this);?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo smarty_function_oxmultilang(array('ident' => 'MXORDERSTODAY'), $this);?>
</td>
                            <td><?php echo $this->_tpl_vars['ordercnt']; ?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo smarty_function_oxmultilang(array('ident' => 'MXORDERSTHISMONTH'), $this);?>
</td>
                            <td><?php echo $this->_tpl_vars['iOrderMonthCount']; ?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo smarty_function_oxmultilang(array('ident' => 'MXORDERSCOMPLETE'), $this);?>
</td>
                            <td><?php echo $this->_tpl_vars['ordertotalcnt']; ?>
</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>


    <!-- Fourth row -->
    <div class="row">
        <?php if ($this->_tpl_vars['userAccounts'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXUSERACCOUNT'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <div id="userChart" style="height: 300px;"></div>
                    <div id="userAccountData">
                        <input type="hidden" id="userAccountVal" value="<?php echo $this->_tpl_vars['userAccounts']['Account']; ?>
" />
                        <input type="hidden" id="userNoAccountVal" value="<?php echo $this->_tpl_vars['userAccounts']['noAccount']; ?>
" />
                        <input type="hidden" id="userAminVal" value="<?php echo $this->_tpl_vars['userAccounts']['Admin']; ?>
" />
                    </div>
                    <hr>
                    Gehe zu: <a class="btn btn-default btn-xs" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=admin_user">Benutzern</a>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['customerBought'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Kunden/Gäste vs. Bestellungen</h3>
                </div>
                <div class="panel-body">
                    <div id="userBought" style="height: 300px;"></div>
                    <div id="userBoughtData">
                        <input type="hidden" id="userCounter" value="<?php echo $this->_tpl_vars['customerBought']['registeredUser']; ?>
" />
                        <input type="hidden" id="userBoughtCounter" value="<?php echo $this->_tpl_vars['customerBought']['registeredUserOrders']; ?>
" />
                        <input type="hidden" id="guestCounter" value="<?php echo $this->_tpl_vars['customerBought']['guestUser']; ?>
" />
                        <input type="hidden" id="guestBoughtCounter" value="<?php echo $this->_tpl_vars['customerBought']['guestUserOrders']; ?>
" />
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['userNewsletterAccounts'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXNEWSLETTER'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <div id="userNewsletterChart" style="height: 300px;"></div>
                    <div id="userNewsletterData">
                        <input type="hidden" id="userNewsletteroptinVal" value="<?php echo $this->_tpl_vars['userNewsletterAccounts']['optin']; ?>
" />
                        <input type="hidden" id="userNewsletteroptinconfirmesVal" value="<?php echo $this->_tpl_vars['userNewsletterAccounts']['optinconfirmed']; ?>
" />
                        <input type="hidden" id="userNewsletteraccountsVal" value="<?php echo $this->_tpl_vars['userNewsletterAccounts']['accounts']; ?>
" />
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <!-- row -->
    <div class="row">
        <?php if ($this->_tpl_vars['aArticleOnlyDatas'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXARTICLEINFOS'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXTYPE'), $this);?>
</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXCOUNT'), $this);?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo smarty_function_oxmultilang(array('ident' => 'MXARTICLEALL'), $this);?>
</td>
                            <td><?php echo $this->_tpl_vars['aArticleOnlyDatas']['oxarticlesall']; ?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo smarty_function_oxmultilang(array('ident' => 'MXARTICLEPARENTS'), $this);?>
</td>
                            <td><?php echo $this->_tpl_vars['aArticleOnlyDatas']['oxarticlesparents']; ?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo smarty_function_oxmultilang(array('ident' => 'MXARTICLEVARIANTS'), $this);?>
</td>
                            <td><?php echo $this->_tpl_vars['aArticleOnlyDatas']['oxarticlesvariants']; ?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo smarty_function_oxmultilang(array('ident' => 'MXARTICLEACTIVE'), $this);?>
</td>
                            <td><?php echo $this->_tpl_vars['aArticleOnlyDatas']['oxarticlesactive']; ?>
</td>
                        </tr>
                        </tbody>
                    </table>
                    <hr>
                    Gehe zu: <a class="btn btn-default btn-xs" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=article">Artikel</a>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['articlesTopsellerOnlyActive'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXARTICLESTOPONLYACTIVE'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXARTICLE'), $this);?>
</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXSELLCOUNT'), $this);?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $_from = $this->_tpl_vars['articlesTopsellerOnlyActive']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['articleSelled'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['articleSelled']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['articleSelled']['iteration']++;
?>
                            <tr>
                                <th scope="row"><?php echo $this->_foreach['articleSelled']['iteration']; ?>
</th>
                                <td><?php echo $this->_tpl_vars['article']['oxtitle']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['article']['oxamount']; ?>
</td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['articlesTopseller'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXARTICLESTOPALL'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXARTICLE'), $this);?>
</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXSELLCOUNT'), $this);?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $_from = $this->_tpl_vars['articlesTopseller']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['articleSelled'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['articleSelled']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['articleSelled']['iteration']++;
?>
                            <tr>
                                <th scope="row"><?php echo $this->_foreach['articleSelled']['iteration']; ?>
</th>
                                <td><?php echo $this->_tpl_vars['article']['oxtitle']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['article']['oxamount']; ?>
</td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="row">


        <?php if ($this->_tpl_vars['aBestBuyers'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXBESTBUYER'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXBESTBUYER_COUNT'), $this);?>
</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXBESTBUYER_CUSTOMER'), $this);?>
</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXBESTBUYER_NET'), $this);?>
</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXBESTBUYER_BRUT'), $this);?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $_from = $this->_tpl_vars['aBestBuyers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bestbuyerlist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bestbuyerlist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['buyerUser']):
        $this->_foreach['bestbuyerlist']['iteration']++;
?>
                            <tr>
                                <th scope="row"><?php echo $this->_foreach['bestbuyerlist']['iteration']; ?>
</th>
                                <td><?php echo $this->_tpl_vars['buyerUser']['counter']; ?>
</td>
                                <td>
                                    <?php echo $this->_tpl_vars['buyerUser']['oxcustnr']; ?>
 - <?php echo $this->_tpl_vars['buyerUser']['oxusername']; ?>
<br>
                                    <?php echo $this->_tpl_vars['buyerUser']['oxfname']; ?>
 <?php echo $this->_tpl_vars['buyerUser']['oxlname']; ?>

                                </td>
                                <td><?php echo $this->_tpl_vars['buyerUser']['netsum']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['buyerUser']['brutsum']; ?>
</td>
                            </tr>
                        <?php endforeach; endif; unset($_from); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['aNonSellers'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => "MXARTICLESLADENHÜTER"), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXARTICLE'), $this);?>
</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXSELLCOUNT'), $this);?>
</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXSELLSTOCK'), $this);?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $_from = $this->_tpl_vars['aNonSellers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['articleSelled'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['articleSelled']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['articleSelled']['iteration']++;
?>
                            <tr>
                                <th scope="row"><?php echo $this->_foreach['articleSelled']['iteration']; ?>
</th>
                                <td><?php echo $this->_tpl_vars['article']['oxartnum']; ?>
 - <?php echo $this->_tpl_vars['article']['oxtitle']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['article']['oxsoldamount']; ?>
</td>
                                <td><?php if ($this->_tpl_vars['article']['oxstockflag'] != 4): ?><?php echo $this->_tpl_vars['article']['oxstock']; ?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'MXSELLSTOCKFLAGOTHER'), $this);?>
<?php endif; ?></td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['aLowStockArticles'] != 'DONTSHOW'): ?>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo smarty_function_oxmultilang(array('ident' => 'MXARTICLELOWSTOCK'), $this);?>
</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXARTICLE'), $this);?>
</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXSELLCOUNT'), $this);?>
</th>
                            <th scope="col"><?php echo smarty_function_oxmultilang(array('ident' => 'MXSELLSTOCK'), $this);?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $_from = $this->_tpl_vars['aLowStockArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['articleSelled'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['articleSelled']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['articleSelled']['iteration']++;
?>
                            <tr>
                                <th scope="row"><?php echo $this->_foreach['articleSelled']['iteration']; ?>
</th>
                                <td><?php echo $this->_tpl_vars['article']['oxtitle']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['article']['oxamount']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['article']['oxstock']; ?>
</td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <!-- Last row -->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3"><img src="<?php echo $this->_tpl_vars['oViewConf']->getBaseDir(); ?>
/modules/mx/admindashboard/maexware.png" hspace="20" vspace="10"></div>
                        <div class="col-md-9 vcenter"><?php echo smarty_function_oxmultilang(array('ident' => 'MXINFO_DASHBOARD'), $this);?>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript">
    <!--
    function _homeExpAct(mnid,sbid){
        top.navigation.adminnav._navExtExpAct(mnid,sbid);
    }
    //-->
</script>

</body>
</html>
