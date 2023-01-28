<?php /* Smarty version 2.6.31, created on 2022-12-28 10:44:23
         compiled from ddoewysiwyg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'html_entity_decode', 'ddoewysiwyg.tpl', 23, false),array('modifier', 'cat', 'ddoewysiwyg.tpl', 23, false),array('function', 'oxscript', 'ddoewysiwyg.tpl', 49, false),)), $this); ?>
<style type="text/css">
    @import url('<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg','out/src/css/font-awesome.min.css'); ?>
');
    @import url('<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg','out/src/css/backend.min.css'); ?>
');

    #ddoew {
        position: relative;
    }
</style>

<div class="ddoe-wysiwyg" id="ddoew">
    <div class="ddoe-wysiwyg-editor">
        <textarea <?php if ($this->_tpl_vars['blTextEditorDisabled']): ?>disabled <?php endif; ?>id="editor_<?php echo $this->_tpl_vars['sEditorField']; ?>
" name="<?php echo $this->_tpl_vars['sEditorField']; ?>
" style="width: <?php if ($this->_tpl_vars['iEditorWidth']): ?><?php echo $this->_tpl_vars['iEditorWidth']; ?>
<?php else: ?>100%<?php endif; ?>; height: <?php if ($this->_tpl_vars['iEditorheight']): ?><?php echo $this->_tpl_vars['iEditorheight']; ?>
<?php else: ?>300px<?php endif; ?>;"><?php echo $this->_tpl_vars['sEditorValue']; ?>
</textarea>
    </div>
</div>

<script type="text/javascript">
    var _win = top.basefrm;
    var _doc = _win.document;

    if( !_win.isOverlayLoaded )
    {
        _win.editorModuleUrl     = '<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg'); ?>
';
        _win.editorControllerUrl = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp) : html_entity_decode($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, 'cl=ddoewysiwygmedia_wrapper&overlay=1') : smarty_modifier_cat($_tmp, 'cl=ddoewysiwygmedia_wrapper&overlay=1')); ?>
';
        _win.isOverlayLoaded     = true;

        var loadScript = function( src, cb )
        {
            var headElement   = _doc.getElementsByTagName( 'head' )[ 0 ];
            var scriptElement = _doc.createElement( 'script' );

            scriptElement.setAttribute( 'src', src );

            if( typeof cb === 'function' )
            {
                scriptElement.addEventListener( 'load', function( e ) { cb( null, e ); }, false );
            }

            headElement.appendChild( scriptElement );
        };

        loadScript( '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp) : html_entity_decode($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, 'cl=ddoewysiwyglangjs') : smarty_modifier_cat($_tmp, 'cl=ddoewysiwyglangjs')); ?>
', function()
            {
                loadScript( '<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg','out/src/js/overlay.min.js'); ?>
' );
            }
        );
    }
</script>

<?php echo smarty_function_oxscript(array('include' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, 'cl=ddoewysiwyglangjs') : smarty_modifier_cat($_tmp, 'cl=ddoewysiwyglangjs')),'priority' => 1), $this);?>


<script type="text/javascript" src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg','out/src/js/jquery.min.js'); ?>
"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg','out/src/js/bootstrap.min.js'); ?>
"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg','out/src/js/backend.min.js'); ?>
"></script>

<?php if ($this->_tpl_vars['langabbr'] == 'de'): ?>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('ddoewysiwyg','out/src/js/lang/summernote-de.min.js'); ?>
"></script>
<?php endif; ?>