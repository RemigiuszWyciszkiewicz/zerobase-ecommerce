<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:18
  from '/home/zerobat/www/modules/angarcontact/views/templates/front/angarcontact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d7261aed12_38431936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8f365f424c5e3e6d8f5f79696be0c907700d5e5' => 
    array (
      0 => '/home/zerobat/www/modules/angarcontact/views/templates/front/angarcontact.tpl',
      1 => 1764937859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d7261aed12_38431936 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/function.mailto.php','function'=>'smarty_function_mailto',),));
$_smarty_tpl->compiled->nocache_hash = '17204316066932d7261aba90_42958692';
?>
<div class="block-contact col-md-3 links wrapper">
  <div class="h3 block-contact-title hidden-sm-down">
    <a class="text-uppercase" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact','mod'=>'angarcontact'),$_smarty_tpl ) );?>

    </a>
  </div>
  <div class="title clearfix hidden-md-up" data-target="#footer_contact" data-toggle="collapse">
    <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact','mod'=>'angarcontact'),$_smarty_tpl ) );?>
</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_contact">
    <?php if ($_smarty_tpl->tpl_vars['angarcontact_company']->value != '') {?><li><?php echo $_smarty_tpl->tpl_vars['angarcontact_company']->value;?>
 </li><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['angarcontact_address']->value != '') {?><li><?php echo $_smarty_tpl->tpl_vars['angarcontact_address']->value;?>
 </li><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['angarcontact_phone']->value != '') {?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone:','mod'=>'angarcontact'),$_smarty_tpl ) );?>
 <strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarcontact_phone']->value, ENT_QUOTES, 'UTF-8');?>
</strong></li><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['angarcontact_whatsapp']->value != '') {?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'WhatsApp:','mod'=>'angarcontact'),$_smarty_tpl ) );?>
 <strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['angarcontact_whatsapp']->value, ENT_QUOTES, 'UTF-8');?>
</strong></li><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['angarcontact_email']->value != '') {?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email:','mod'=>'angarcontact'),$_smarty_tpl ) );?>
 <strong><?php echo smarty_function_mailto(array('address'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['angarcontact_email']->value,'html','UTF-8' )),'encode'=>"hex"),$_smarty_tpl);?>
</strong></li><?php }?>
  </ul>
</div><?php }
}
