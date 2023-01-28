<?php /* Smarty version 2.6.31, created on 2023-01-04 14:44:33
         compiled from dialog/ddoewysiwygmedia_wrapper.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxstyle', 'dialog/ddoewysiwygmedia_wrapper.tpl', 13, false),array('function', 'oxmultilang', 'dialog/ddoewysiwygmedia_wrapper.tpl', 27, false),array('function', 'oxscript', 'dialog/ddoewysiwygmedia_wrapper.tpl', 47, false),array('modifier', 'cat', 'dialog/ddoewysiwygmedia_wrapper.tpl', 47, false),array('modifier', 'html_entity_decode', 'dialog/ddoewysiwygmedia_wrapper.tpl', 53, false),array('modifier', 'regex_replace', 'dialog/ddoewysiwygmedia_wrapper.tpl', 54, false),array('modifier', 'rtrim', 'dialog/ddoewysiwygmedia_wrapper.tpl', 54, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
    <title>MediaLibrary</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

    <?php $this->assign('oViewConf', $this->_tpl_vars['oView']->getViewConfig()); ?>
    <?php $this->assign('oConf', $this->_tpl_vars['oView']->getConfig()); ?>

    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg','out/src/css/bootstrap.min.css')), $this);?>

    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg','out/src/css/font-awesome.min.css')), $this);?>

    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg','out/src/css/medialibrary.min.css')), $this);?>


    <?php echo smarty_function_oxstyle(array(), $this);?>

</head>
<body class="dd-media-wrapper<?php if ($_GET['overlay']): ?> dd-overlay<?php endif; ?>">

    <?php if (! $_GET['overlay']): ?>
        <nav class="navbar navbar-default dd-navbar">
            <div class="container-fluid">

                <div class="navbar-header">
                    <a class="navbar-brand" href="javascript:void(null);">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'DD_MEDIA_DIALOG'), $this);?>

                    </a>
                </div>

                <?php if (! $_GET['popout']): ?>
                    <ul class="nav navbar-nav navbar-right hidden-xs">
                        <li><a href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
cl=<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
&popout=1" target="_blank" class="dd-admin-popout-action"><i class="fa fa-expand"></i></a></li>
                    </ul>
                <?php endif; ?>

            </div>
        </nav>
    <?php endif; ?>

    <div class="dd-content">

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "dialog/ddoewysiwygmedia.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    </div>

<?php echo smarty_function_oxscript(array('include' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, 'cl=ddoewysiwyglangjs') : smarty_modifier_cat($_tmp, 'cl=ddoewysiwyglangjs')),'priority' => 1), $this);?>


<?php echo smarty_function_oxscript(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg','out/src/js/jquery.min.js'),'priority' => 1), $this);?>

<?php echo smarty_function_oxscript(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg','out/src/js/bootstrap.min.js'),'priority' => 1), $this);?>

<?php echo smarty_function_oxscript(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg','out/src/js/medialibrary.min.js'),'priority' => 1), $this);?>


<?php $this->assign('sActionLink', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp) : html_entity_decode($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, "overlay=".($_GET['overlay'])."&") : smarty_modifier_cat($_tmp, "overlay=".($_GET['overlay'])."&"))); ?>
<?php $this->assign('sMediaLink', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oConf']->getCurrentShopUrl(true))) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/([^\/])(\/admin)/', '$1') : smarty_modifier_regex_replace($_tmp, '/([^\/])(\/admin)/', '$1')))) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/http(s)?\:/', '') : smarty_modifier_regex_replace($_tmp, '/http(s)?\:/', '')))) ? $this->_run_mod_handler('rtrim', true, $_tmp, '/') : rtrim($_tmp, '/')))) ? $this->_run_mod_handler('cat', true, $_tmp, '/out/pictures/ddmedia/') : smarty_modifier_cat($_tmp, '/out/pictures/ddmedia/')))) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp) : html_entity_decode($_tmp))); ?>

<?php echo smarty_function_oxscript(array('add' => "MediaLibrary.setActionLink('".($this->_tpl_vars['sActionLink'])."');",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "MediaLibrary.setResourceLink('".($this->_tpl_vars['sMediaLink'])."');",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "MediaLibrary.init( /image\/.*/i, null );",'priority' => 10), $this);?>



<?php echo smarty_function_oxscript(array(), $this);?>


</body>
</html>