<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:18
  from '/home/zerobat/www/modules/angarwhatsapp/views/templates/front/angarwhatsapp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d7261f9807_84968444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec04b9b9db525c523e1107c21848047067a09716' => 
    array (
      0 => '/home/zerobat/www/modules/angarwhatsapp/views/templates/front/angarwhatsapp.tpl',
      1 => 1764937859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d7261f9807_84968444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12860064286932d7261f8520_83775771';
?>

<?php if ($_smarty_tpl->tpl_vars['angarwhatsapp_phone']->value != '') {?>
	<div id="whatsapp-chat-footer" class="style_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarwhatsapp_style']->value, ENT_QUOTES, 'UTF-8');?>
 position_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarwhatsapp_position']->value, ENT_QUOTES, 'UTF-8');?>
 size_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarwhatsapp_size']->value, ENT_QUOTES, 'UTF-8');?>
">
		<a href="https://wa.me/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarwhatsapp_phone']->value, ENT_QUOTES, 'UTF-8');?>
?text=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarwhatsapp_default_message']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us on WhatsApp','mod'=>'angarwhatsapp'),$_smarty_tpl ) );?>
">
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'WhatsApp','mod'=>'angarwhatsapp'),$_smarty_tpl ) );?>
</span>
		</a>
	</div>
<?php }?>

<?php }
}
