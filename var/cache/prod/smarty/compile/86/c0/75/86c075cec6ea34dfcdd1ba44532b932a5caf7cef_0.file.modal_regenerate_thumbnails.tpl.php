<?php
/* Smarty version 4.3.4, created on 2025-12-05 14:01:51
  from '/home/zerobat/www/admin5859/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d7bf89ac69_76295422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86c075cec6ea34dfcdd1ba44532b932a5caf7cef' => 
    array (
      0 => '/home/zerobat/www/admin5859/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl',
      1 => 1739192952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d7bf89ac69_76295422 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Regenerate thumbnails for the selected images? With the \"erase\" option enabled, the previously selected thumbnails will be deleted.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

</div>
<?php }
}
