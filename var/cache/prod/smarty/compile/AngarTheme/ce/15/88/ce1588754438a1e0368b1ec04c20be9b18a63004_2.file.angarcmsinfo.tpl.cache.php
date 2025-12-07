<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:18
  from '/home/zerobat/www/modules/angarcmsinfo/views/templates/front/angarcmsinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d7260f8f47_72015342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce1588754438a1e0368b1ec04c20be9b18a63004' => 
    array (
      0 => '/home/zerobat/www/modules/angarcmsinfo/views/templates/front/angarcmsinfo.tpl',
      1 => 1764937859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d7260f8f47_72015342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->compiled->nocache_hash = '7171516996932d7260f7525_61806591';
?>

<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
<!-- MODULE Block cmsinfo -->
<div id="angarinfo_block">
	<div class="container">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'info2');
$_smarty_tpl->tpl_vars['info2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info2']->value) {
$_smarty_tpl->tpl_vars['info2']->do_else = false;
?>
			<div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['info2']->value['text'];?>
 </div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }
}
}
