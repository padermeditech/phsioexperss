<?php /* Smarty version 2.6.31, created on 2022-12-28 10:40:47
         compiled from widget/reviews/rating.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'widget/reviews/rating.tpl', 14, false),)), $this); ?>
<div>
    <?php $this->assign('iRatingValue', $this->_tpl_vars['oView']->getRatingValue()); ?>

    <?php if ($this->_tpl_vars['iRatingValue']): ?><?php echo '<div class="hidden" itemtype="http://schema.org/AggregateRating" itemscope="" itemprop="aggregateRating"><span itemprop="worstRating">1</span><span itemprop="bestRating ">5</span><span itemprop="ratingValue">'; ?><?php echo $this->_tpl_vars['iRatingValue']; ?><?php echo '</span><span itemprop="reviewCount">'; ?><?php echo $this->_tpl_vars['oView']->getRatingCount(); ?><?php echo '</span></div>'; ?>
<?php endif; ?>

    <?php if (! $this->_tpl_vars['oxcmp_user']): ?>
        <?php $this->assign('_star_title', ((is_array($_tmp='MESSAGE_LOGIN_TO_RATE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
    <?php elseif (! $this->_tpl_vars['oView']->canRate()): ?>
        <?php $this->assign('_star_title', ((is_array($_tmp='MESSAGE_ALREADY_RATED')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
    <?php else: ?>
        <?php $this->assign('_star_title', ((is_array($_tmp='MESSAGE_RATE_THIS_ARTICLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
    <?php endif; ?>


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
        <?php if ($this->_tpl_vars['iRatingValue'] == 0): ?>
            <i class="fa fa-star rating-star-empty"></i>
        <?php else: ?>
            <?php if ($this->_tpl_vars['iRatingValue'] > 1): ?>
                <i class="fa fa-star rating-star-filled"></i>
                <?php $this->assign('iRatingValue', $this->_tpl_vars['iRatingValue']-1); ?>
            <?php else: ?>
                <?php if ($this->_tpl_vars['iRatingValue'] < 0.5): ?>
                    <?php if ($this->_tpl_vars['iRatingValue'] < 0.3): ?>
                        <i class="fa fa-star rating-star-empty"></i>
                    <?php else: ?>
                        <i class="fa fa-star-half-o rating-star-filled"></i>
                    <?php endif; ?>
                    <?php $this->assign('iRatingValue', 0); ?>
                <?php elseif ($this->_tpl_vars['iRatingValue'] > 0.7): ?>
                    <i class="fa fa-star rating-star-filled"></i>
                    <?php $this->assign('iRatingValue', 0); ?>
                <?php else: ?>
                    <i class="fa fa-star-half-o rating-star-filled"></i>
                    <?php $this->assign('iRatingValue', 0); ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endfor; endif; ?>
</div>