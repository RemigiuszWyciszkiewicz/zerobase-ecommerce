<?php
/* Smarty version 4.3.4, created on 2025-12-06 04:21:56
  from '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/miniatures/brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6933a154384556_17002425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '777612b4b35a92ecf50ea5a60226035209022500' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/miniatures/brand.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6933a154384556_17002425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15813570056933a1543799b3_05267967', 'brand_miniature_item');
?>

<?php }
/* {block 'brand_miniature_item'} */
class Block_15813570056933a1543799b3_05267967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand_miniature_item' => 
  array (
    0 => 'Block_15813570056933a1543799b3_05267967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<li class="brand col-xs-12 col-sm-4 col-md-3">
	<div class="brand-block">
		<div class="brand-img">
			<span class="man_img_spacer"></span>
			<?php if ((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null) >= '9.0') {?>
				<picture>
				  <?php if (!empty($_smarty_tpl->tpl_vars['brand']->value['image']['bySize']['small_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image']['bySize']['small_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
				  <?php if (!empty($_smarty_tpl->tpl_vars['brand']->value['image']['bySize']['small_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image']['bySize']['small_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
				  <img
					src="<?php echo htmlspecialchars((string) smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['brand']->value['image']['bySize']['small_default']['url'],'-small_default',''),'-default',''), ENT_QUOTES, 'UTF-8');?>
"
					alt="<?php if (!empty($_smarty_tpl->tpl_vars['brand']->value['image']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
					class="img-fluid"
					loading="lazy"
				  >
				</picture>
			<?php } else { ?>
				<img src="<?php echo htmlspecialchars((string) smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['brand']->value['image'],'-small_default',''),'-default',''), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
			<?php }?>
		</div>

		<div class="brand-infos">
			<h3><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h3>
			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['nb_products'], ENT_QUOTES, 'UTF-8');?>
</a>
		</div>
		
		<div class="brand-products">
			<a class="btn btn-primary" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View products','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
		</div>
	</div>
</li>
<?php
}
}
/* {/block 'brand_miniature_item'} */
}
