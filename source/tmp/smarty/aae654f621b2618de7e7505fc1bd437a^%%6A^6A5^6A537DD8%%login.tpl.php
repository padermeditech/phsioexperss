<?php /* Smarty version 2.6.31, created on 2022-12-28 10:41:55
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'login.tpl', 4, false),array('modifier', 'lower', 'login.tpl', 9, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN_TITLE'), $this);?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <link rel="shortcut icon" href="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl(); ?>
favicon.ico">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
login.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
colors_<?php echo ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getEdition())) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.css">
</head>
<body>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/login_messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="admin-login-box">

    <div id="shopLogo"><img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('logo_dark.svg'); ?>
" /></div>

    <form action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" target="_top" method="post" name="login" id="login">

        
            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>


            <input type="hidden" name="fnc" value="checklogin">
            <input type="hidden" name="cl" value="login">

            <?php if (! empty ( $this->_tpl_vars['Errors']['default'] )): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_error.tpl", 'smarty_include_vars' => array('Errorlist' => $this->_tpl_vars['Errors']['default'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>

            <label for="usr"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_USER'), $this);?>
</label>
            <input type="text" name="user" id="usr" value="<?php echo $this->_tpl_vars['user']; ?>
" size="49" autofocus><br>

            <label for="pwd"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_PASSWORD'), $this);?>
</label>
            <input type="password" name="pwd" id="pwd" value="<?php echo $this->_tpl_vars['pwd']; ?>
" size="49"><br>

            <label for="lng"><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN_LANGUAGE'), $this);?>
</label>
            <select name="chlanguage" id="lng">
                <?php $_from = $this->_tpl_vars['aLanguages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iLang'] => $this->_tpl_vars['oLang']):
?>
                <option value="<?php echo $this->_tpl_vars['oLang']->id; ?>
" <?php if ($this->_tpl_vars['oLang']->selected): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['oLang']->name; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select><br>

            <?php if ($this->_tpl_vars['profiles']): ?>
            <label for="prf"><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN_PROFILE'), $this);?>
</label>
            <select name="profile" id="prf">
                <?php $_from = $this->_tpl_vars['profiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['position'] => $this->_tpl_vars['curr_profile']):
?>
                   <option value="<?php echo $this->_tpl_vars['position']; ?>
" <?php if ($this->_tpl_vars['curr_profile']['2']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['curr_profile']['0']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select><br>
            <?php endif; ?>
        

        <input type="submit" value="<?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN_START'), $this);?>
" class="btn"><br>
    </form>
</div>

<script type="text/javascript">if (window != window.top) top.location.href = document.location.href;</script>

</body>
</html>