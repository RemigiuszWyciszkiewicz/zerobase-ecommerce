<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:17
  from '/home/zerobat/www/modules/angarcontact/views/templates/front/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d725b70291_90906458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7ed276e70905c0ba1fdf99f88af6431e223fd53' => 
    array (
      0 => '/home/zerobat/www/modules/angarcontact/views/templates/front/nav.tpl',
      1 => 1764937859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d725b70291_90906458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/function.mailto.php','function'=>'smarty_function_mailto',),));
$_smarty_tpl->compiled->nocache_hash = '3206622936932d725b6c472_04245910';
?>

<div id="_desktop_contact_link">
  <div id="contact-link">

	<?php if ($_smarty_tpl->tpl_vars['angarcontact_phone']->value) {?>
		<span class="shop-phone contact_link">
			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact','mod'=>'angarcontact'),$_smarty_tpl ) );?>
</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['angarcontact_phone']->value) {?>
		<span class="shop-phone shop-tel">
			<i class="fa fa-phone"></i>
			<span class="shop-phone_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone:','mod'=>'angarcontact'),$_smarty_tpl ) );?>
</span>
			<strong><a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarcontact_phone']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarcontact_phone']->value, ENT_QUOTES, 'UTF-8');?>
</a></strong>
		</span>
	<?php } else { ?>
		<span class="shop-phone contact_link">
			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact','mod'=>'angarcontact'),$_smarty_tpl ) );?>
</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['angarcontact_email']->value) {?>
		<span class="shop-phone shop-email">
			<i class="fa fa-envelope"></i>
			<span class="shop-phone_text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email:','mod'=>'angarcontact'),$_smarty_tpl ) );?>
</span>
			<strong><?php echo smarty_function_mailto(array('address'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['angarcontact_email']->value,'html','UTF-8' )),'encode'=>"hex"),$_smarty_tpl);?>
</strong>
		</span>
	<?php }?>


  </div>
</div>
<?php }
}
