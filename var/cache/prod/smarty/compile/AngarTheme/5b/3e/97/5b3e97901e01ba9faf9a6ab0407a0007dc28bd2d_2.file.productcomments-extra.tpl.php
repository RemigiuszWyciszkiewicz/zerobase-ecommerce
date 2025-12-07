<?php
/* Smarty version 4.3.4, created on 2025-12-05 14:58:26
  from '/home/zerobat/www/themes/AngarTheme/modules/productcomments/views/templates/front/productcomments-extra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932e5028e6bd3_89329262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b3e97901e01ba9faf9a6ab0407a0007dc28bd2d' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/modules/productcomments/views/templates/front/productcomments-extra.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932e5028e6bd3_89329262 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div id="product_comments_block_extra" class="no-print">

	<div class="comments_note clearfix">
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rating','mod'=>'productcomments'),$_smarty_tpl ) );?>
&nbsp;</span>
		<div class="star-content star_content clearfix">
			<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
					<div class="star"></div>
				<?php } else { ?>
					<div class="star star_on"></div>
				<?php }?>
			<?php
}
}
?>
		</div>
	</div> <!-- .comments_note -->

	<ul class="comments_advices">
		<?php if ($_smarty_tpl->tpl_vars['nbComments']->value != 0) {?>
			<li>
				<a href="javascript:void(0);" class="reviews"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read reviews','mod'=>'productcomments'),$_smarty_tpl ) );?>
 (<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nbComments']->value, ENT_QUOTES, 'UTF-8');?>
</span>)</a>
			</li>
		<?php }?>
		<?php if (($_smarty_tpl->tpl_vars['too_early']->value == false && ($_smarty_tpl->tpl_vars['logged']->value || $_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
			<li>
				<a class="open-comment-form" href="#new_comment_form"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write a review','mod'=>'productcomments'),$_smarty_tpl ) );?>
</a>
			</li>
		<?php }?>
	</ul>

<div class="clearfix"></div>

</div>

<!--  /Module ProductComments --><?php }
}
