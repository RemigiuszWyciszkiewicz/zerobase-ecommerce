<?php
/* Smarty version 4.3.4, created on 2025-12-05 14:58:26
  from '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product-discount-countdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932e50295c3b6_44637387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6065c175c98adacc6b77c6cbbe9a703ff36ff16f' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product-discount-countdown.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932e50295c3b6_44637387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>


<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
	<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] > '0000-00-00 00:00:00') {?>
		<div class="countdown-container">
			<div class="countdown-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Promotion ends in:','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
</div>
			<div class="countdown" data-endtime="<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],' ','T'), ENT_QUOTES, 'UTF-8');?>
">
				<div class="countdown-item"><span data-type="days">0</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Days','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
</div>
				<div class="countdown-item"><span data-type="hours">0</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hours','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
</div>
				<div class="countdown-item"><span data-type="minutes">0</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minutes','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
</div>
				<div class="countdown-item"><span data-type="seconds">0</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seconds','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
</div>
				<div class="clearfix"></div>
			</div>
		</div>
	<?php }
}
}
}
