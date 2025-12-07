<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:17
  from '/home/zerobat/www/themes/AngarTheme/modules/productcomments/views/templates/front/productcomments_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d725df6e48_24917096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '637dd5272412c3fad1194effdaa9e745056cff73' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/modules/productcomments/views/templates/front/productcomments_reviews.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d725df6e48_24917096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11038632516932d725df2d62_97177594';
?>
<div class="comments_note">
	<div class="star-content star_content clearfix">
		<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<?php if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
				<div class="star"></div>
			<?php } else { ?>
				<div class="star star_on"></div>
			<?php }?>
		<?php
}
}
?>
	</div>
	<span class="nb-comments"><span class="pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review(s)','mod'=>'productcomments'),$_smarty_tpl ) );?>
: <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nbComments']->value, ENT_QUOTES, 'UTF-8');?>
</span></span></span>
</div><?php }
}
