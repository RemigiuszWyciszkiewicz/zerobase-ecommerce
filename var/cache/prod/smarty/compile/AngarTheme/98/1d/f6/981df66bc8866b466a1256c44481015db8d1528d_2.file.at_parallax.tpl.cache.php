<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:18
  from '/home/zerobat/www/modules/angarparallax/views/templates/front/at_parallax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d7260665e9_44165022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '981df66bc8866b466a1256c44481015db8d1528d' => 
    array (
      0 => '/home/zerobat/www/modules/angarparallax/views/templates/front/at_parallax.tpl',
      1 => 1764937859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d7260665e9_44165022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17653331456932d726063da0_76453497';
?>

<div id="parallax_baner" <?php if ((isset($_smarty_tpl->tpl_vars['parallax_img']->value))) {?>style="background-image: url(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['parallax_img']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)"<?php }?>>

	<div class="parallax_desc">
		<?php echo $_smarty_tpl->tpl_vars['parallax_desc']->value;?>
 	</div>

	<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['parallax_link']->value,'htmlall','UTF-8' ))) {?>
		<a class="parallax_button" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['parallax_link']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See more','mod'=>'angarparallax'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See more','mod'=>'angarparallax'),$_smarty_tpl ) );?>
 <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'about us','mod'=>'angarparallax'),$_smarty_tpl ) );?>
</span></a>
	<?php }?>

</div>
<?php }
}
