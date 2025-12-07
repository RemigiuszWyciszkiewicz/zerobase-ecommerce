<?php
/* Smarty version 4.3.4, created on 2025-12-06 04:22:30
  from '/home/zerobat/www/themes/AngarTheme/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6933a1767f5a62_25926636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba823d92a8091b147dcf4a174560d609ee5db558' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/errors/not-found.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6933a1767f5a62_25926636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>

	<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value)) {?>

	<?php } else { ?>
	<section id="content" class="page-content page-not-found">
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20080643766933a1767f2b29_23235813', 'page_content');
?>

	</section>
	<?php }?>

<?php } else { ?>

	<section id="content" class="page-content page-not-found">
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186212746933a1767f4942_80290116', 'page_content');
?>

	</section>

<?php }?>

<?php }
/* {block 'search'} */
class Block_1569117486933a1767f3a28_75029075 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_21021803766933a1767f4143_00530277 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_20080643766933a1767f2b29_23235813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_20080643766933a1767f2b29_23235813',
  ),
  'search' => 
  array (
    0 => 'Block_1569117486933a1767f3a28_75029075',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_21021803766933a1767f4143_00530277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1569117486933a1767f3a28_75029075', 'search', $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21021803766933a1767f4143_00530277', 'hook_not_found', $this->tplIndex);
?>


	  <?php
}
}
/* {/block 'page_content'} */
/* {block 'search'} */
class Block_5056349726933a1767f4f44_89803251 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_4853076676933a1767f53b8_54952574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_186212746933a1767f4942_80290116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_186212746933a1767f4942_80290116',
  ),
  'search' => 
  array (
    0 => 'Block_5056349726933a1767f4f44_89803251',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_4853076676933a1767f53b8_54952574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5056349726933a1767f4f44_89803251', 'search', $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4853076676933a1767f53b8_54952574', 'hook_not_found', $this->tplIndex);
?>


	  <?php
}
}
/* {/block 'page_content'} */
}
