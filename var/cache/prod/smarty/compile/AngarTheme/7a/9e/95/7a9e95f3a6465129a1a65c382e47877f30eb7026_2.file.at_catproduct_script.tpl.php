<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:18
  from '/home/zerobat/www/modules/angarcatproduct/views/templates/front/at_catproduct_script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d726360ce7_46397833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a9e95f3a6465129a1a65c382e47877f30eb7026' => 
    array (
      0 => '/home/zerobat/www/modules/angarcatproduct/views/templates/front/at_catproduct_script.tpl',
      1 => 1764937859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d726360ce7_46397833 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
	<?php if (!empty($_smarty_tpl->tpl_vars['enableconfig']->value)) {?>
		<?php echo '<script'; ?>
>
		$(document).ready(function() {

			var sliders = [];

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catProducts']->value, 'catProduct', false, NULL, 'atCatProducts', array (
));
$_smarty_tpl->tpl_vars['catProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catProduct']->value) {
$_smarty_tpl->tpl_vars['catProduct']->do_else = false;
?>
				sliders.push(
					$('#bxslider_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').bxSlider({
						auto: <?php if ($_smarty_tpl->tpl_vars['auto']->value == 0) {?>false<?php } else { ?>true<?php }?>,
						minSlides: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['visible']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
						maxSlides: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['visible']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
						mode: 'vertical',
						pager: false,
						pause: 3000,
						nextSelector: '#home-next_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
',
						prevSelector: '#home-prev_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
',
						nextText: '>',
						prevText: '<',
						moveSlides: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['move']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
						infiniteLoop: <?php if ($_smarty_tpl->tpl_vars['loop']->value == 0) {?>false<?php } else { ?>true<?php }?>,
						hideControlOnEnd: true,
						useCSS: false
					})
				);
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			$('#theme_customization .page_width label').on('click', function() {
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
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catProducts']->value, 'catProduct', false, NULL, 'atCatProducts', array (
));
$_smarty_tpl->tpl_vars['catProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catProduct']->value) {
$_smarty_tpl->tpl_vars['catProduct']->do_else = false;
?>
				$('#bxslider_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').bxSlider({
					auto: <?php if ($_smarty_tpl->tpl_vars['auto']->value == 0) {?>false<?php } else { ?>true<?php }?>,
					minSlides: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['visible']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
					maxSlides: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['visible']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
					mode: 'vertical',
					pager: false,
					pause: 3000,
					nextSelector: '#home-next_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
',
					prevSelector: '#home-prev_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['catProduct']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
',
					nextText: '>',
					prevText: '<',
					moveSlides: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['move']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
,
					infiniteLoop: <?php if ($_smarty_tpl->tpl_vars['loop']->value == 0) {?>false<?php } else { ?>true<?php }?>,
					hideControlOnEnd: true,
					useCSS: false
				});
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		});
		<?php echo '</script'; ?>
>
	<?php }
}
}
}
