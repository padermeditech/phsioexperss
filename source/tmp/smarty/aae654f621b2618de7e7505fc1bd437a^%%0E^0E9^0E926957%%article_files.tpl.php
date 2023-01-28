<?php /* Smarty version 2.6.31, created on 2022-12-30 10:55:06
         compiled from article_files.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'article_files.tpl', 1, false),array('function', 'oxmultilang', 'article_files.tpl', 71, false),array('function', 'oxinputhelp', 'article_files.tpl', 71, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>
<?php $this->assign('edit', $this->_tpl_vars['oView']->getArticle()); ?>

<script type="text/javascript">
<!--
window.onload = function ()
{
    <?php if ($this->_tpl_vars['updatelist'] == 1): ?>
        top.oxid.admin.updateList('<?php echo $this->_tpl_vars['oxid']; ?>
');
    <?php endif; ?>
    top.reloadEditFrame();
}
function editThis( sID )
{
    var oTransfer = top.basefrm.edit.document.getElementById( "transfer" );
    oTransfer.oxid.value = sID;
    oTransfer.cl.value = top.basefrm.list.sDefClass;

    //forcing edit frame to reload after submit
    top.forceReloadingEditFrame();

    var oSearch = top.basefrm.list.document.getElementById( "search" );
    oSearch.oxid.value = sID;
    oSearch.actedit.value = 0;
    oSearch.submit();
}
function _groupExp(el) {
    var _cur = el.parentNode;

    if (_cur.className == "exp") _cur.className = "";
      else _cur.className = "exp";
}
//-->
</script>

<form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="article_files">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>

<?php $this->assign('oFiles', $this->_tpl_vars['edit']->getArticleFiles()); ?>
<table cellspacing="0" cellpadding="0" border="0" width="98%">
    <?php if (count ( $this->_tpl_vars['oFiles'] ) > 0): ?>
        <colgroup>
            <col width="100%">
        </colgroup>
    <?php endif; ?>
     <tr>
        <td valign="top" class="edittext" <?php if (count ( $this->_tpl_vars['oFiles'] ) > 0): ?>align="left"<?php endif; ?>>
          <form name="newFileUpload" id="newFileUpload" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" enctype="multipart/form-data" method="post">
          <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['iMaxUploadFileSize']; ?>
">
          <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

          <input type="hidden" name="cl" value="article_files">
          <input type="hidden" name="fnc" value="">
          <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
          <input type="hidden" name="voxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
          <input type="hidden" name="oxparentid" value="<?php echo $this->_tpl_vars['oxparentid']; ?>
">
          <input type="hidden" name="editval[article__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
          <fieldset title="New file upload" style="padding-left: 5px;">
            <table cellspacing="0" cellpadding="0" border="0" width="98%">
              
                  <tr>
                   <td class="edittext">
                      <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_FILES_ENTER_FILENAME'), $this);?>
 <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_FILES_NEW'), $this);?>
 <input class="edittext" type="text" name="newfile[oxfiles__oxfilename]" class="edittext" <?php echo $this->_tpl_vars['readonly']; ?>
> <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_FILES_OR'), $this);?>
 (<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_MAX_FILE_UPLOAD'), $this);?>
 <?php echo $this->_tpl_vars['sMaxFormattedFileSize']; ?>
) <input type="file" name="newArticleFile" class="edittext" <?php echo $this->_tpl_vars['readonly']; ?>
>
                    </td>
                  </tr>
                  <tr>
                    <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_FILES_NEW_PURCHASEDONLY'), $this);?>

                        <input class="edittext" type="hidden" name="newfile[oxfiles__oxpurchasedonly]" value='0'>
                        <input class="edittext" type="checkbox" checked name="newfile[oxfiles__oxpurchasedonly]" value='1' <?php echo $this->_tpl_vars['readonly']; ?>
>
                    </td>
                  </tr>
              
              
              <tr>
                <td>
                    <div class="groupExp">
                        <div>
                            <a href="#" onclick="_groupExp(this);return false;" class="rc" style="line-height: 30px;"><b><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_OTHER_OPTIONS'), $this);?>
</b></a>
                             <dl style="padding-top: 5px;">
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_MAX_DOWNLOADS_COUNT'), $this);?>
</td>
                                        <td class="edittext">
                                            <input type=text class="txt" name="newfile[oxfiles__oxmaxdownloads]" <?php echo $this->_tpl_vars['readonly']; ?>
>
                                            <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT'), $this);?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LINK_EXPIRATION_TIME_UNREGISTERED'), $this);?>
</td>
                                        <td class="edittext">
                                            <input type=text class="txt" name="newfile[oxfiles__oxmaxunregdownloads]" <?php echo $this->_tpl_vars['readonly']; ?>
>
                                            <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED'), $this);?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LINK_EXPIRATION_TIME'), $this);?>
</td>
                                        <td class="edittext">
                                            <input type=text class="txt" name="newfile[oxfiles__oxlinkexptime]" <?php echo $this->_tpl_vars['readonly']; ?>
>
                                            <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME'), $this);?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_DOWNLOAD_EXPIRATION_TIME'), $this);?>
</td>
                                        <td class="edittext">
                                            <input type=text class="txt" name="newfile[oxfiles__oxdownloadexptime]" <?php echo $this->_tpl_vars['readonly']; ?>
>
                                            <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME'), $this);?>

                                        </td>
                                    </tr>
                                </table>
                            </dl>
                         </div>
                    </div>
                  </td>
                </tr>
              
                <tr>
                  <td>
                    <input type="submit" class="saveButton" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_FILES_NEW_UPLOAD'), $this);?>
" onclick="Javascript:document.newFileUpload.fnc.value='upload'" <?php echo $this->_tpl_vars['readonly']; ?>
>
                  </td>
                </tr>
            </table>
          </fieldset>
        </form>
    </td>
  </tr>
  <tr>
      <td><hr/></td>
  </tr>
  <tr>
      <td>
          <table cellspacing="0" cellpadding="0" border="0" width="98%">
              <tr>
                  <td valign="top" class="edittext">
                      <form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
                          <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                          <input type="hidden" name="cl" value="article_files">
                          <input type="hidden" name="fnc" value="">
                          <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
                          <input type="hidden" name="editval[article__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
                          <input type="hidden" name="voxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
                          <input type="hidden" name="oxparentid" value="<?php echo $this->_tpl_vars['oxparentid']; ?>
">
                          <table cellspacing="0" cellpadding="0" border="0" width="98%">
                              
                                  <tr>
                                      <td class="edittext" width="120">
                                          <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_FILES_ISDOWNLOADABLE'), $this);?>

                                      </td>
                                      <td class="edittext">
                                          <input class="edittext" type="hidden" name="editval[oxarticles__oxisdownloadable]" value='0'>
                                          <input class="edittext" type="checkbox" name="editval[oxarticles__oxisdownloadable]" value='1' <?php if ($this->_tpl_vars['edit']->oxarticles__oxisdownloadable->value == 1): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['oxparentid']): ?>readonly disabled<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                                          <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_IS_DOWNLOADABLE'), $this);?>

                                      </td>
                                  </tr>
                              
                          </table>
                          <?php if (count ( $this->_tpl_vars['oFiles'] ) > 0): ?>
                                <p><b><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_FILES_TABLE_UPLOADEDFILES'), $this);?>
</b></p>
                                    <?php $_from = $this->_tpl_vars['oFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oArticleFile']):
?>
                                        <?php if ($this->_tpl_vars['readonly'] || ! $this->_tpl_vars['oArticleFile']->isUploaded()): ?>
                                            <?php $this->assign('readonlyRename', 'readonly disabled'); ?>
                                        <?php else: ?>
                                            <?php $this->assign('readonlyRename', ""); ?>
                                        <?php endif; ?>

                                        
                                            <div class="groupExp">
                                                <div>
                                                    <a class="delete" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=article_files&amp;fileid=<?php echo $this->_tpl_vars['oArticleFile']->getId(); ?>
&amp;fnc=deletefile&amp;oxid=<?php echo $this->_tpl_vars['oxid']; ?>
&amp;editlanguage=<?php echo $this->_tpl_vars['editlanguage']; ?>
" onClick='return confirm("<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_YOUWANTTODELETE'), $this);?>
")'></a>
                                                    <a href="#" onclick="_groupExp(this);return false;" class="rc"><b><?php echo $this->_tpl_vars['oArticleFile']->oxfiles__oxfilename->value; ?>
</b></a>
                                                    <dl style="padding-top:5px;">
                                                        <table cellspacing="0" cellpadding="0" border="0">
                                                            <tr>
                                                                <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_FILES_TABLE_FILENAME'), $this);?>
</td>
                                                                <td class="edittext">
                                                                    <input type="text" class="editinput" size="40" maxlength="<?php echo $this->_tpl_vars['oArticleFile']->oxfiles__oxfilename->fldmax_length; ?>
" name="article_files[<?php echo $this->_tpl_vars['oArticleFile']->getId(); ?>
][oxfiles__oxfilename]" value="<?php echo $this->_tpl_vars['oArticleFile']->oxfiles__oxfilename->value; ?>
" <?php echo $this->_tpl_vars['readonlyRename']; ?>
>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_FILES_NEW_PURCHASEDONLY'), $this);?>
</td>
                                                                <td class="edittext">
                                                                    <input class="edittext" type="hidden" name="article_files[<?php echo $this->_tpl_vars['oArticleFile']->getId(); ?>
][oxfiles__oxpurchasedonly]" value='0'>
                                                                    <input class="edittext" type="checkbox" name="article_files[<?php echo $this->_tpl_vars['oArticleFile']->getId(); ?>
][oxfiles__oxpurchasedonly]" value='1' <?php if ($this->_tpl_vars['oArticleFile']->oxfiles__oxpurchasedonly->value == 1): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_MAX_DOWNLOADS_COUNT'), $this);?>
</td>
                                                                <td class="edittext">
                                                                    <input type=text class="txt" name="article_files[<?php echo $this->_tpl_vars['oArticleFile']->getId(); ?>
][oxfiles__oxmaxdownloads]" value="<?php echo $this->_tpl_vars['oView']->getConfigOptionValue($this->_tpl_vars['oArticleFile']->oxfiles__oxmaxdownloads->value); ?>
">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LINK_EXPIRATION_TIME_UNREGISTERED'), $this);?>
</td>
                                                                <td class="edittext">
                                                                    <input type=text class="txt" name="article_files[<?php echo $this->_tpl_vars['oArticleFile']->getId(); ?>
][oxfiles__oxmaxunregdownloads]"  value="<?php echo $this->_tpl_vars['oView']->getConfigOptionValue($this->_tpl_vars['oArticleFile']->oxfiles__oxmaxunregdownloads->value); ?>
">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LINK_EXPIRATION_TIME'), $this);?>
</td>
                                                                <td class="edittext">
                                                                    <input type=text class="txt" name="article_files[<?php echo $this->_tpl_vars['oArticleFile']->getId(); ?>
][oxfiles__oxlinkexptime]"  value="<?php echo $this->_tpl_vars['oView']->getConfigOptionValue($this->_tpl_vars['oArticleFile']->oxfiles__oxlinkexptime->value); ?>
">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_DOWNLOAD_EXPIRATION_TIME'), $this);?>
</td>
                                                                <td class="edittext">
                                                                    <input type=text class="txt" name="article_files[<?php echo $this->_tpl_vars['oArticleFile']->getId(); ?>
][oxfiles__oxdownloadexptime]"  value="<?php echo $this->_tpl_vars['oView']->getConfigOptionValue($this->_tpl_vars['oArticleFile']->oxfiles__oxdownloadexptime->value); ?>
">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </dl>
                                                </div>
                                            </div>
                                        
                                    <?php endforeach; endif; unset($_from); ?>
                              <?php endif; ?>
                          <input type="submit" class="saveButton" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SAVE'), $this);?>
" onClick="Javascript:document.myedit.fnc.value='save'" <?php echo $this->_tpl_vars['readonly']; ?>
>
                      </form>
                  </td>
              </tr>
          </table>
      </td>
  </tr>

</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomnaviitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>