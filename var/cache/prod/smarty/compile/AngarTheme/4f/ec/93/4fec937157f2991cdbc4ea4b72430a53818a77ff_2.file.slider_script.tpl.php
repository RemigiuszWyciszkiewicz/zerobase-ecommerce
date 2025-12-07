<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:18
  from '/home/zerobat/www/modules/angarslider/views/templates/hook/slider_script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d726352496_67599469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fec937157f2991cdbc4ea4b72430a53818a77ff' => 
    array (
      0 => '/home/zerobat/www/modules/angarslider/views/templates/hook/slider_script.tpl',
      1 => 1764937859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d726352496_67599469 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
	<?php if (!empty($_smarty_tpl->tpl_vars['enableconfig']->value)) {?>
		<?php echo '<script'; ?>
>
		$(document).ready(function() {
			var sliders = [];

			$('.angarslider').each(function() {
				sliders.push(
					$(this).bxSlider({
						auto: true,
						minSlides: 1,
						maxSlides: 1,
						slideWidth: 1920,
						mode: 'horizontal',
						pager: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pager']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
						autoHover: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pause_hover']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
						speed: 500,
						pause: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pause']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
						infiniteLoop: true,
						adaptiveHeight: true,
						touchEnabled: true
					})
				);
			});

			$('#theme_customization .page_width label, #theme_customization .slider_size label, #theme_customization .lc_index label, #theme_customization .lc_width label, #theme_customization .slider_position label').on('click', function() {
				sliders.forEach(function(slider) {
					slider.reloadSlider();
				});
			});
		});
		<?php echo '</script'; ?>
>
	<?php } else { ?>
		<?php echo '<script'; ?>
>
		$(document).ready(function() {
			$('#angarslider').bxSlider({
				maxSlides: 1,
				slideWidth: 1920,
				infiniteLoop: true,
				auto: true,
				pager: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pager']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
				autoHover: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pause_hover']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
				speed: 500,
				pause: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pause']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
				adaptiveHeight: true,
				touchEnabled: true
			});
		});
		<?php echo '</script'; ?>
>
	<?php }
}
}
}
