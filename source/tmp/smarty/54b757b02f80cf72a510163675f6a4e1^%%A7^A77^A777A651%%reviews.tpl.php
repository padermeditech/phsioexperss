<?php /* Smarty version 2.6.31, created on 2023-01-02 11:16:01
         compiled from page/account/reviews.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'page/account/reviews.tpl', 3, false),array('function', 'oxmultilang', 'page/account/reviews.tpl', 7, false),array('modifier', 'oxmultilangassign', 'page/account/reviews.tpl', 6, false),array('modifier', 'date_format', 'page/account/reviews.tpl', 22, false),array('modifier', 'truncate', 'page/account/reviews.tpl', 26, false),array('insert', 'oxid_tracker', 'page/account/reviews.tpl', 87, false),)), $this); ?>
<?php ob_start(); ?>

    <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxlistremovebutton.min.js",'priority' => 10), $this);?>


    
        <?php $this->assign('template_title', ((is_array($_tmp='MY_REVIEWS')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
        <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'MY_REVIEWS'), $this);?>
</h1>
    

    
        <div id="review">
            <?php if ($this->_tpl_vars['oView']->getReviewAndRatingItemsCount()): ?>
                <div class="spacer"></div>
                <div class="reviews-landscape">
                    <?php $_from = $this->_tpl_vars['oView']->getReviewList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ReviewsCounter'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ReviewsCounter']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['review']):
        $this->_foreach['ReviewsCounter']['iteration']++;
?>
                        
                            <div class="panel panel-default" id="reviewName_<?php echo $this->_foreach['ReviewsCounter']['iteration']; ?>
" itemprop="review" itemscope itemtype="http://schema.org/Review">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-3 date">
                                            <span>
                                                <time itemprop="datePublished" datetime="<?php echo ((is_array($_tmp=$this->_tpl_vars['review']->getCreatedAt())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['review']->getCreatedAt())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
</time>
                                            </span>
                                        </div>
                                        <div class="col-md-5 articleTitle">
                                            <span itemprop="itemreviewed"><?php echo ((is_array($_tmp=$this->_tpl_vars['review']->getObjectTitle())) ? $this->_run_mod_handler('truncate', true, $_tmp, 60) : smarty_modifier_truncate($_tmp, 60)); ?>
</span>
                                        </div>
                                        <div class="col-md-3 rating text-right">
                                            <?php if ($this->_tpl_vars['review']->getRating()): ?>
                                                <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                                    <?php unset($this->_sections['starRatings']);
$this->_sections['starRatings']['name'] = 'starRatings';
$this->_sections['starRatings']['start'] = (int)0;
$this->_sections['starRatings']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['starRatings']['show'] = true;
$this->_sections['starRatings']['max'] = $this->_sections['starRatings']['loop'];
$this->_sections['starRatings']['step'] = 1;
if ($this->_sections['starRatings']['start'] < 0)
    $this->_sections['starRatings']['start'] = max($this->_sections['starRatings']['step'] > 0 ? 0 : -1, $this->_sections['starRatings']['loop'] + $this->_sections['starRatings']['start']);
else
    $this->_sections['starRatings']['start'] = min($this->_sections['starRatings']['start'], $this->_sections['starRatings']['step'] > 0 ? $this->_sections['starRatings']['loop'] : $this->_sections['starRatings']['loop']-1);
if ($this->_sections['starRatings']['show']) {
    $this->_sections['starRatings']['total'] = min(ceil(($this->_sections['starRatings']['step'] > 0 ? $this->_sections['starRatings']['loop'] - $this->_sections['starRatings']['start'] : $this->_sections['starRatings']['start']+1)/abs($this->_sections['starRatings']['step'])), $this->_sections['starRatings']['max']);
    if ($this->_sections['starRatings']['total'] == 0)
        $this->_sections['starRatings']['show'] = false;
} else
    $this->_sections['starRatings']['total'] = 0;
if ($this->_sections['starRatings']['show']):

            for ($this->_sections['starRatings']['index'] = $this->_sections['starRatings']['start'], $this->_sections['starRatings']['iteration'] = 1;
                 $this->_sections['starRatings']['iteration'] <= $this->_sections['starRatings']['total'];
                 $this->_sections['starRatings']['index'] += $this->_sections['starRatings']['step'], $this->_sections['starRatings']['iteration']++):
$this->_sections['starRatings']['rownum'] = $this->_sections['starRatings']['iteration'];
$this->_sections['starRatings']['index_prev'] = $this->_sections['starRatings']['index'] - $this->_sections['starRatings']['step'];
$this->_sections['starRatings']['index_next'] = $this->_sections['starRatings']['index'] + $this->_sections['starRatings']['step'];
$this->_sections['starRatings']['first']      = ($this->_sections['starRatings']['iteration'] == 1);
$this->_sections['starRatings']['last']       = ($this->_sections['starRatings']['iteration'] == $this->_sections['starRatings']['total']);
?>
                                                        <?php if ($this->_tpl_vars['review']->getRating() >= $this->_sections['starRatings']['iteration']): ?>
                                                            <i class="fa fa-star"></i>
                                                        <?php else: ?>
                                                            <i class="fa fa-star-o"></i>
                                                        <?php endif; ?>
                                                    <?php endfor; endif; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        
                                            <div class="col-md-1 pull-right">
                                                <div class="actions text-center">
                                                    <div class="btn-group">
                                                        <button
                                                                type="submit"
                                                                class="btn btn-danger btn-block hasTooltip"
                                                                title="<?php echo smarty_function_oxmultilang(array('ident' => 'DD_DELETE_REVIEW_AND_RATING'), $this);?>
"
                                                                data-toggle="modal"
                                                                data-target="#delete_review_<?php echo $this->_foreach['ReviewsCounter']['iteration']; ?>
"
                                                        >
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <?php if ($this->_tpl_vars['review']->getReviewText()): ?>
                                    <div class="panel-body" id="reviewText_<?php echo $this->_foreach['ReviewsCounter']['iteration']; ?>
" itemprop="description"><?php echo $this->_tpl_vars['review']->getReviewText(); ?>
</div>
                                <?php endif; ?>
                            </div>
                        
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/account/delete_review_confirmation.tpl", 'smarty_include_vars' => array('reviewId' => $this->_tpl_vars['review']->getReviewId(),'ratingId' => $this->_tpl_vars['review']->getRatingId(),'reviewCounterIteration' => $this->_foreach['ReviewsCounter']['iteration'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endforeach; endif; unset($_from); ?>
                </div>
            <?php else: ?>
                
                    <div class="alert alert-info">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'DD_REVIEWS_NOT_AVAILABLE'), $this);?>

                    </div>
                
            <?php endif; ?>
        </div>
    

    
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/locator/listlocator.tpl", 'smarty_include_vars' => array('locator' => $this->_tpl_vars['oView']->getPageNavigation(),'place' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    

    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>


<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/account/inc/account_menu.tpl", 'smarty_include_vars' => array('active_link' => 'reviewlist')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_sidebar', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>