<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:18
  from '/home/zerobat/www/themes/AngarTheme/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d7267b8996_79355432',
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
function content_6932d7267b8996_79355432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>

	<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value)) {?>

	<?php } else { ?>
	<section id="content" class="page-content page-not-found">
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8296707726932d7267b6298_47300911', 'page_content');
?>

	</section>
	<?php }?>

<?php } else { ?>

	<section id="content" class="page-content page-not-found">
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2247424086932d7267b78f1_53676030', 'page_content');
?>

	</section>

<?php }?>

<?php }
/* {block 'search'} */
class Block_10573650196932d7267b6bb4_18780795 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_5928806326932d7267b70d4_48028469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_8296707726932d7267b6298_47300911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_8296707726932d7267b6298_47300911',
  ),
  'search' => 
  array (
    0 => 'Block_10573650196932d7267b6bb4_18780795',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_5928806326932d7267b70d4_48028469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10573650196932d7267b6bb4_18780795', 'search', $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5928806326932d7267b70d4_48028469', 'hook_not_found', $this->tplIndex);
?>


	  <?php
}
}
/* {/block 'page_content'} */
/* {block 'search'} */
class Block_19187839546932d7267b7ef1_15625824 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_13034640316932d7267b8346_79997139 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_2247424086932d7267b78f1_53676030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_2247424086932d7267b78f1_53676030',
  ),
  'search' => 
  array (
    0 => 'Block_19187839546932d7267b7ef1_15625824',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_13034640316932d7267b8346_79997139',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19187839546932d7267b7ef1_15625824', 'search', $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13034640316932d7267b8346_79997139', 'hook_not_found', $this->tplIndex);
?>


	  <?php
}
}
/* {/block 'page_content'} */
}
