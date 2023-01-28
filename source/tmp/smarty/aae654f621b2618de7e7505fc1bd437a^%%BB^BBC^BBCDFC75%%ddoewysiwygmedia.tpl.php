<?php /* Smarty version 2.6.31, created on 2023-01-04 14:44:33
         compiled from dialog/ddoewysiwygmedia.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'dialog/ddoewysiwygmedia.tpl', 4, false),)), $this); ?>
<div class="dd-media<?php if (! $_GET['overlay']): ?> dd-media-overview<?php endif; ?>">

    <div class="dd-media-drag-helper">
        <span><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MEDIA_DRAG_INFO'), $this);?>
</span>
    </div>

    <div role="tabpanel" class="dd-media-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"<?php if ($this->_tpl_vars['iFileCount']): ?> class="active"<?php endif; ?>>
                <a href="#mediaList" role="tab" data-toggle="tab"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MEDIA_LIST'), $this);?>
</a>
            </li>
            <li role="presentation"<?php if (! $this->_tpl_vars['iFileCount']): ?> class="active"<?php endif; ?>>
                <a href="#mediaUpload" role="tab" data-toggle="tab"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MEDIA_UPLOAD'), $this);?>
</a>
            </li>
            <li class="pull-right">
                <form class="dd-media-search-form">
                    <input type="text" class="form-control input-sm" name="msearch" id="mediaSearchField" placeholder="Suche" />
                </form>
            </li>

            <?php if ($this->_tpl_vars['iFileCount']): ?>
                <li class="pull-right">
                    <div class="dd-media-header-info">
                        <span class="dd-media-file-count"><?php echo $this->_tpl_vars['iFileCount']; ?>
</span>
                        <span><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MEDIA_FILES_FOUND'), $this);?>
</span>
                    </div>
                </li>
            <?php endif; ?>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane<?php if ($this->_tpl_vars['iFileCount']): ?> active<?php endif; ?>" id="mediaList">

                    <div class="dd-media-list<?php if (! $this->_tpl_vars['iFileCount']): ?> empty<?php endif; ?>">

                    <div class="dd-media-list-items">

                        <div class="row">

                        <div class="dd-media-list-empty-info">
                                <div class="col-sm-12">
                            <?php echo smarty_function_oxmultilang(array('ident' => 'DD_MEDIA_EMPTY_LIST'), $this);?>

                        </div>
                            </div>

                        <div class="dd-media-dz-helper" style="display: none;">
                                <div class="dd-media-col <?php if (! $_GET['overlay']): ?>col-md-2<?php else: ?>col-md-3<?php endif; ?> col-sm-3 col-xs-4">
                                <a class="dd-media-item" href="javascript:void(null);">
                                    <div class="dd-media-item-preview">
                                        <div class="dd-media-item-centered">
                                            <i class="dd-media-icon fa fa-3x fa-file" style="display: none;"></i>
                                            <img class="dd-media-thumb" data-dz-thumbnail />
                                            <div class="dd-media-upload-progress">
                                                <span data-dz-uploadprogress></span>
                                            </div>
                                        </div>
                                        <div class="dd-media-item-label" style="display: none;">
                                            <small data-dz-name></small>
                                            <small class="text-danger" data-dz-errormessage></small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <?php $_from = $this->_tpl_vars['aFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['files'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['files']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['file']):
        $this->_foreach['files']['iteration']++;
?>

                                <div class="dd-media-col <?php if (! $_GET['overlay']): ?>col-md-2<?php else: ?>col-md-3<?php endif; ?> col-sm-3 col-xs-4">
                                    <a class="dd-media-item" href="javascript:void(null);" data-id="<?php echo $this->_tpl_vars['file']['OXID']; ?>
" data-file="<?php echo $this->_tpl_vars['file']['DDFILENAME']; ?>
" data-filetype="<?php echo $this->_tpl_vars['file']['DDFILETYPE']; ?>
" data-filesize="<?php echo $this->_tpl_vars['file']['DDFILESIZE']; ?>
"<?php if ($this->_tpl_vars['file']['DDIMAGESIZE']): ?> data-imagesize="<?php echo $this->_tpl_vars['file']['DDIMAGESIZE']; ?>
"<?php endif; ?>>
                                    <div class="dd-media-item-preview">
                                        <?php if ($this->_tpl_vars['file']['DDTHUMB']): ?>
                                            <div class="dd-media-item-centered">
                                                <img src="<?php echo $this->_tpl_vars['sThumbsUrl']; ?>
<?php echo $this->_tpl_vars['file']['DDTHUMB']; ?>
" class="dd-media-thumb" />
                                            </div>
                                        <?php else: ?>
                                            <div class="dd-media-item-centered">
                                                <i class="dd-media-icon fa fa-3x fa-file"></i>
                                            </div>
                                            <div class="dd-media-item-label">
                                                <small><?php echo $this->_tpl_vars['file']['DDFILENAME']; ?>
</small>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>

                        <?php endforeach; endif; unset($_from); ?>

                        </div>

                    </div>

                    <div class="dd-media-list-details">

                        <div class="clearfix" style="height: 3px;"></div>

                        <form class="form dd-media-details-form" method="post" style="display: none;">

                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object dd-media-details-preview" src="" style="max-width: 50px; max-height: 50px;">
                                    <i class="dd-media-details-preview-icon fa fa-file fa-3x text-muted"></i>
                                </div>
                                <div class="media-body">
                                    <strong class="media-heading dd-media-details-name"></strong>
                                    <div class="clearfix"></div>
                                    <small class="dd-media-details-infos"></small>
                                </div>
                            </div>

                            <div class="clearfix" style="height: 30px;"></div>

                            <div class="form-group">
                                <label>URL</label>
                                <input type="text" class="form-control dd-media-details-input-url" name="media[url]" value="" readonly="readonly" />
                            </div>

                            <div class="clearfix" style="height: 30px;"></div>

                            <a href="javascript:void(null);" class="dd-media-details-delete-action text-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MEDIA_REMOVE'), $this);?>
</a>

                        </form>

                    </div>

                </div>

            </div>
            <div role="tabpanel" class="tab-pane<?php if (! $this->_tpl_vars['iFileCount']): ?> active<?php endif; ?>" id="mediaUpload">

                <div class="dd-media-upload">

                    <div class="dd-media-upload-info">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'DD_MEDIA_UPLOAD_INFO'), $this);?>

                    </div>

                    <div class="dd-media-upload-fallback" style="display: none;">
                        <span><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MEDIA_FALLBACK_INFO'), $this);?>
</span>
                        <br />
                        <iframe src="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
cl=ddoewysiwygmedia_view&fnc=fallback" frameborder="0" scrolling="no"></iframe>
                    </div>

                </div>

            </div>
        </div>

    </div>



</div>