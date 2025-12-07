<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:18
  from '/home/zerobat/www/themes/AngarTheme/templates/_partials/theme_styles/body_classes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d726757f30_15571896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e8a054b3926924ecc2b299de60c759c0db33521' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/_partials/theme_styles/body_classes.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d726757f30_15571896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
live_edit_<?php if (!empty($_smarty_tpl->tpl_vars['enableconfig']->value)) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['enableconfig']->value, ENT_QUOTES, 'UTF-8');
}?> <?php if (!empty($_smarty_tpl->tpl_vars['enableconfig']->value) && (isset($_smarty_tpl->tpl_vars['demo']->value)) && $_smarty_tpl->tpl_vars['enableconfig']->value == 1 && $_smarty_tpl->tpl_vars['demo']->value == 0) {?>demo<?php }?> ps_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( smarty_modifier_replace((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null),'.',''),3,'' )), ENT_QUOTES, 'UTF-8');?>
 <?php if (!empty($_smarty_tpl->tpl_vars['css1']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css1']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>texture20<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css3']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css3']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>bg_attatchment_fixed<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css4']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css4']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>bg_position_tl<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css5']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css5']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>bg_repeat_xy<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css6']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css6']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>bg_size_initial<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css7']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css7']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>slider_position_column<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css8']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css8']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>slider_controls_black<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css9']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css9']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>banners_top2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css10']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css10']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>banners_top_tablets2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css11']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css11']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>banners_top_phones1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css12']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css12']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>banners_bottom2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css13']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css13']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>banners_bottom_tablets2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css14']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css14']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>banners_bottom_phones1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css15']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css15']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>submenu1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css16']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css16']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_1col_qty_5<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css17']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css17']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_2col_qty_4<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css18']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css18']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_3col_qty_3<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css19']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css19']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_1col_qty_bigtablets_4<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css20']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css20']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_2col_qty_bigtablets_3<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css21']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css21']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_3col_qty_bigtablets_2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css22']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css22']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_1col_qty_tablets_3<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css23']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css23']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_1col_qty_phones_1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css24']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css24']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>home_tabs1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css25']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css25']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_border_type2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css29']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css29']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_button_icon_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css30']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css30']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_button_qty2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css31']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css31']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_desc_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css32']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css32']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_reviews_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css33']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css33']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_availability_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css34']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css34']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>product_layout2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css35']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css35']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>hide_reference_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css36']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css36']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>hide_reassurance_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css37']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css37']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>product_tabs1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css41']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css41']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>menu_sep1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css42']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css42']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>header_sep1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css43']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css43']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>slider_boxed<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css45']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css45']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>feat_cat_style2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css46']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css46']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>feat_cat4<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css47']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css47']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>feat_cat_bigtablets2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css48']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css48']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>feat_cat_tablets2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css49']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css49']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>feat_cat_phones0<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css50']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css50']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>all_products_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css51']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css51']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_colors_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css52']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css52']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>newsletter_info_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css53']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css53']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>stickycart_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css54']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css54']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>stickymenu_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css55']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css55']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>homeicon_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css57']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css57']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_man_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css58']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css58']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>product_hide_man_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css62']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css62']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>cart_style_1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css63']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css63']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_ref_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css64']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css64']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>header_style_1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css59']->value)) {?>mainfont_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css59']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> <?php if (!empty($_smarty_tpl->tpl_vars['color75']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color75']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> <?php if (!empty($_smarty_tpl->tpl_vars['css65']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css65']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>page_width_1200<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css66']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css66']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_qty_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css67']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css67']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_stock_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css68']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css68']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>product_stock_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css69']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css69']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>cat_image_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css70']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css70']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>cat_desc_mobile_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css71']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css71']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>subcat_image_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css72']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css72']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>subcat_style_0<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css73']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css73']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>subcat_qty_5<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css74']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css74']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_price_default<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css75']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css75']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>product_price_default<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css76']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css76']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>footer_style_1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css77']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css77']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_grayout_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css78']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css78']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_gallery_type_2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css79']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css79']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>nav_uppercase_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css80']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css80']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>logo_center_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css81']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css81']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>search_style_1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css84']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css84']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>menu_center_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css85']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css85']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>menu_uppercase_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css86']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css86']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>submenu_uppercase_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css87']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css87']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>lc_index_hide_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css88']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css88']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>lc_category_hide_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css89']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css89']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>lc_product_hide_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css90']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css90']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>lc_cms_hide_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css91']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css91']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>lc_width_25<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css92']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css92']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>lc_category_style_1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css93']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css93']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>lc_banner_hide_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css94']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css94']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_align_center<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css95']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css95']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_name_uppercase_yes<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css96']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css96']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>pl_qv_style_2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css97']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css97']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>footer_links_style_1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css98']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css98']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>footer_links_column_2<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css99']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css99']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>footer_social_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css100']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css100']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>prod_arrows_no<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css101']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css101']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>prod_thumb_style_1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css102']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css102']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>popup_thumb_style_1<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['css17']->value) && $_smarty_tpl->tpl_vars['css17']->value != 'pl_2col_qty_3') {?>standard_carusele<?php }?> <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged'] == 0) {?>not_logged<?php }?> <?php if ($_smarty_tpl->tpl_vars['configuration']->value['show_prices'] == 0) {?>hide_prices<?php }?> <?php if ($_smarty_tpl->tpl_vars['configuration']->value['is_catalog'] == 1) {?>hide_prices_catalog_mode<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['color89']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color89']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> <?php }
}
