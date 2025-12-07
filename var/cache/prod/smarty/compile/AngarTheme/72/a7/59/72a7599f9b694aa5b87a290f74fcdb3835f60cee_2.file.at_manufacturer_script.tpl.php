<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:18
  from '/home/zerobat/www/modules/angarmanufacturer/views/templates/front/at_manufacturer_script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d726375bc0_24758365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72a7599f9b694aa5b87a290f74fcdb3835f60cee' => 
    array (
      0 => '/home/zerobat/www/modules/angarmanufacturer/views/templates/front/at_manufacturer_script.tpl',
      1 => 1764937859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d726375bc0_24758365 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo '<script'; ?>
>
	$(document).ready(function() {
	if (!!$.prototype.bxSlider)
		$('#bx_manufacturer').bxSlider({
			auto: <?php if ($_smarty_tpl->tpl_vars['man_auto']->value == 0) {?>false<?php } else { ?>true<?php }?>,
			minSlides: 1,
			maxSlides: <?php if (!empty($_smarty_tpl->tpl_vars['man_max']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['man_max']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>5<?php }?>,
			slideWidth: <?php if (!empty($_smarty_tpl->tpl_vars['man_width']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['man_width']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>234<?php }?>,
			pager: false,
			pause: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['man_pause']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
			nextSelector: '#next_man',
			prevSelector: '#prev_man',
			nextText: '>',
			prevText: '<',
			moveSlides: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['man_move']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
			infiniteLoop: <?php if ($_smarty_tpl->tpl_vars['man_loop']->value == 0) {?>false<?php } else { ?>true<?php }?>,
			hideControlOnEnd: true,
			touchEnabled: true
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
}
