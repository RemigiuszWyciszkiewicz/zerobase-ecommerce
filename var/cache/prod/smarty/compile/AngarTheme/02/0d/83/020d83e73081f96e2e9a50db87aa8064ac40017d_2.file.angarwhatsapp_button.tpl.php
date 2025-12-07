<?php
/* Smarty version 4.3.4, created on 2025-12-05 14:58:26
  from '/home/zerobat/www/modules/angarwhatsapp/views/templates/front/angarwhatsapp_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932e50299b573_17739385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '020d83e73081f96e2e9a50db87aa8064ac40017d' => 
    array (
      0 => '/home/zerobat/www/modules/angarwhatsapp/views/templates/front/angarwhatsapp_button.tpl',
      1 => 1764937859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932e50299b573_17739385 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['angarwhatsapp_phone']->value != '') {?>
	<?php if ($_smarty_tpl->tpl_vars['angarwhatsapp_productlink']->value == "1") {?>
		<a class="whatsapp_button" href="https://wa.me/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarwhatsapp_phone']->value, ENT_QUOTES, 'UTF-8');?>
?text=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarwhatsapp_productpage_message']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us on WhatsApp','mod'=>'angarwhatsapp'),$_smarty_tpl ) );?>
">
			<i class="fa fa-whatsapp"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ask about the product on WhatsApp','mod'=>'angarwhatsapp'),$_smarty_tpl ) );?>
</span>
		</a>
	<?php }
}
}
}
