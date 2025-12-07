<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:18
  from '/home/zerobat/www/modules/angarmanufacturer/views/templates/front/at_manufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d7260d4903_73430219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8b2ae2d10447da929f1b67e783e3b585da571cb' => 
    array (
      0 => '/home/zerobat/www/modules/angarmanufacturer/views/templates/front/at_manufacturer.tpl',
      1 => 1764937859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d7260d4903_73430219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18815865426932d7260d0774_92823978';
?>


<div id="home_man">

	<div class="man_title">
		<a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'),'html' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured manufacturers','mod'=>'angarmanufacturer'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured manufacturers','mod'=>'angarmanufacturer'),$_smarty_tpl ) );?>
</span></a>
		<div class="arrows_container">
			<div id="next_man" class="slider-btn"></div>
			<div id="prev_man" class="slider-btn"></div>
		</div>
	</div>

	<ul id="bx_manufacturer">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeManufacturers']->value, 'homeManufacturer', false, NULL, 'atHomeMan', array (
));
$_smarty_tpl->tpl_vars['homeManufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['homeManufacturer']->value) {
$_smarty_tpl->tpl_vars['homeManufacturer']->do_else = false;
?>
		<li>
			<a title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homeManufacturer']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['homeManufacturer']->value['id'], ENT_QUOTES, 'UTF-8');
$_prefixVariable11 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['homeManufacturer']->value['link_rewrite'], ENT_QUOTES, 'UTF-8');
$_prefixVariable12 = ob_get_clean();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getManufacturerLink($_prefixVariable11,$_prefixVariable12),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
				<img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['img_manu_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homeManufacturer']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homeManufacturer']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
			</a>
		</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>

<div class="clearfix"></div>

</div><?php }
}
