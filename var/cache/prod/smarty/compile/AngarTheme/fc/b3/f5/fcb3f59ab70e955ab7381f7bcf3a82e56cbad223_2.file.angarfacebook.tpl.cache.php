<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:18
  from '/home/zerobat/www/modules/angarfacebook/views/templates/front/angarfacebook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d726111170_92424716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcb3f59ab70e955ab7381f7bcf3a82e56cbad223' => 
    array (
      0 => '/home/zerobat/www/modules/angarfacebook/views/templates/front/angarfacebook.tpl',
      1 => 1764937859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d726111170_92424716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20421108746932d72610f763_44994779';
?>

<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value != '') {?>
<div id="likebox_content">
	<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow us on Facebook','mod'=>'angarfacebook'),$_smarty_tpl ) );?>
</h4>
	<div class="likebox_tab"></div>
	<div class="fb-page" data-href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebookurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-lazy="true" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebookurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebookurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">Facebook</a></blockquote></div></div>
</div>
<?php }
}
}
