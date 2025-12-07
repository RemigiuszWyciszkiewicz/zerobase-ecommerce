<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:18
  from '/home/zerobat/www/themes/AngarTheme/templates/_partials/theme_styles/theme_css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d72671cf27_68338716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ce06cf7f04cfcbbe18a59ff514daa4f183beadd' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/_partials/theme_styles/theme_css.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d72671cf27_68338716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<style type="text/css">

@media (min-width:768px) {
	<?php if (!empty($_smarty_tpl->tpl_vars['css1']->value)) {?>
		<?php if (strstr($_smarty_tpl->tpl_vars['css1']->value,'texture')) {?>
			<?php if (preg_match('/texture(03|06|07|08|09|10|11|12|13|14|15|16)/',$_smarty_tpl->tpl_vars['css1']->value)) {?>
				.<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css1']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 { background-image: url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
textures/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css1']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
.png);}
			<?php } else { ?>
				.<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css1']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 { background-image: url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
textures/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css1']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
.jpg);}
			<?php }?>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['css1']->value != 'no_bg' && $_smarty_tpl->tpl_vars['css1']->value != 'color_only') {?>
				.<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css1']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 { background-image: url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
patterns/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css1']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
.png);}
			<?php }?>
		<?php }?>
	<?php } else { ?>
		.texture20 { background-image: url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
textures/texture20.jpg);}
	<?php }?>
}

body {
	background-color: <?php if (!empty($_smarty_tpl->tpl_vars['css2']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css2']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
	font-family: "<?php if (!empty($_smarty_tpl->tpl_vars['css59']->value)) {
echo htmlspecialchars((string) smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css59']->value,'htmlall','UTF-8' )),'_',' '), ENT_QUOTES, 'UTF-8');
} else { ?>Poppins<?php }?>", Arial, Helvetica, sans-serif;
}

.products .product-miniature .product-title {
    height: <?php if (!empty($_smarty_tpl->tpl_vars['css26']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css26']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>32<?php }?>px;
}

.products .product-miniature .product-title a {
    font-size: <?php if (!empty($_smarty_tpl->tpl_vars['css27']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css27']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>14<?php }?>px;
    line-height: <?php if (!empty($_smarty_tpl->tpl_vars['css28']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css28']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>16<?php }?>px;
}

#content-wrapper .products .product-miniature .product-desc {
    height: <?php if (!empty($_smarty_tpl->tpl_vars['css61']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css61']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>36<?php }?>px;
}

@media (min-width: 991px) {
    #home_categories ul li .cat-container {
        min-height: <?php if (!empty($_smarty_tpl->tpl_vars['css56']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css56']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>px;
    }
}

@media (min-width: 768px) {
    #_desktop_logo {
        padding-top: <?php if (!empty($_smarty_tpl->tpl_vars['css44']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css44']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>px;
        padding-bottom: <?php if (!empty($_smarty_tpl->tpl_vars['css60']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css60']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>px;
    }
}

div#search_widget form input[type=text],
div#search_widget form button[type=submit] {
    border-radius: <?php if (!empty($_smarty_tpl->tpl_vars['css82']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css82']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>px;
}

.cart_style_1 #header div#_desktop_cart .blockcart .header {
    border-radius: <?php if (!empty($_smarty_tpl->tpl_vars['css83']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css83']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>px;
}


nav.header-nav {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color1']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color1']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

nav.header-nav,
.header_sep2 #contact-link span.shop-phone,
.header_sep2 #contact-link span.shop-phone.shop-tel,
.header_sep2 #contact-link span.shop-phone:last-child,
.header_sep2 .lang_currency_top,
.header_sep2 .lang_currency_top:last-child,
.header_sep2 #_desktop_currency_selector,
.header_sep2 #_desktop_language_selector,
.header_sep2 #_desktop_user_info {
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color2']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color2']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#d6d4d4<?php }?>;
}

#contact-link,
#contact-link a,
.lang_currency_top span.lang_currency_text,
.lang_currency_top .dropdown i.expand-more,
nav.header-nav .user-info span,
nav.header-nav .user-info a.logout,
#languages-block-top div.current,
nav.header-nav a {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color3']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color3']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#000000<?php }?>;
}

#contact-link span.shop-phone strong,
#contact-link span.shop-phone strong a,
.lang_currency_top span.expand-more,
nav.header-nav .user-info a.account {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color4']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color4']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

#contact-link span.shop-phone i {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color5']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color5']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

.header-top {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color6']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color6']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

.search_style_1 div#search_widget form button[type=submit] {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color7']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color7']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color78']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color78']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

.search_style_1 div#search_widget form button[type=submit]:hover {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color8']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color8']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color79']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color79']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

.search_style_2 div#search_widget form button[type=submit] {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color90']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color90']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#000000<?php }?>;
}

.search_style_2 div#search_widget form button[type=submit]:hover {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color91']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color91']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#000000<?php }?>;
}


.cart_style_1 #header div#_desktop_cart .blockcart .header {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color9']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color9']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

.cart_style_1 #header div#_desktop_cart .blockcart .header a.cart_link {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color80']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color80']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

.cart_style_2 #header div#_desktop_cart .blockcart .header a.cart_link,
.cart_style_3 #header div#_desktop_cart .blockcart .header a.cart_link,
.cart_style_4 #header div#_desktop_cart .blockcart .header a.cart_link,
.cart_style_5 #header div#_desktop_cart .blockcart .header a.cart_link,
#cart_icons a {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color92']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color92']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#000000<?php }?>;
}

.cart_style_3 #header div#_desktop_cart .blockcart .header a.cart_link span.cart-products-count span.cart_qty,
.cart_style_5 #header div#_desktop_cart .blockcart .header a.cart_link span.cart-products-count span.cart_qty {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color93']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color93']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}


.stickycart_yes.sticky_cart #header div#_desktop_cart .blockcart .header .cart_index_title {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color86']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color86']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

.stickycart_yes.sticky_cart #header div#_desktop_cart .blockcart .header a.cart_link span.cart-products-count span.cart_qty span {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color87']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color87']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ff5722<?php }?>;
}

.stickycart_yes.sticky_cart #header div#_desktop_cart .blockcart .header a.cart_link {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color88']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color88']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

#homepage-slider .bx-wrapper .bx-pager.bx-default-pager a:hover,
#homepage-slider .bx-wrapper .bx-pager.bx-default-pager a.active{
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color10']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color10']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

div#rwd_menu {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color11']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color11']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#1b1a1b<?php }?>;
}

div#rwd_menu,
div#rwd_menu a {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color13']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color13']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

div#rwd_menu,
div#rwd_menu .rwd_menu_item,
div#rwd_menu .rwd_menu_item:first-child {
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color12']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color12']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#363636<?php }?>;
}

div#rwd_menu .rwd_menu_item:hover,
div#rwd_menu .rwd_menu_item:focus,
div#rwd_menu .rwd_menu_item a:hover,
div#rwd_menu .rwd_menu_item a:focus {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color14']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color14']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color15']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color15']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

#mobile_top_menu_wrapper2 .top-menu li a:hover,
.rwd_menu_open ul.user_info li a:hover {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color16']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color16']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color81']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color81']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

#_desktop_top_menu{
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color11']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color11']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#1b1a1b<?php }?>;
}

#_desktop_top_menu,
#_desktop_top_menu > ul > li,
.menu_sep1 #_desktop_top_menu > ul > li,
.menu_sep1 #_desktop_top_menu > ul > li:last-child,
.menu_sep2 #_desktop_top_menu,
.menu_sep2 #_desktop_top_menu > ul > li,
.menu_sep2 #_desktop_top_menu > ul > li:last-child,
.menu_sep3 #_desktop_top_menu,
.menu_sep4 #_desktop_top_menu,
.menu_sep5 #_desktop_top_menu,
.menu_sep6 #_desktop_top_menu {
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color12']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color12']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#363636<?php }?>;
}

#_desktop_top_menu > ul > li > a {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color13']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color13']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

#_desktop_top_menu > ul > li:hover > a {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color14']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color14']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color15']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color15']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

.submenu1 #_desktop_top_menu .popover.sub-menu ul.top-menu li a:hover,
.submenu3 #_desktop_top_menu .popover.sub-menu ul.top-menu li a:hover,
.live_edit_0.submenu1 #_desktop_top_menu .popover.sub-menu ul.top-menu li:hover > a,
.live_edit_0.submenu3 #_desktop_top_menu .popover.sub-menu ul.top-menu li:hover > a {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color16']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color16']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color81']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color81']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}


#home_categories .homecat_title span {
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color60']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color60']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

#home_categories ul li .homecat_name span {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color61']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color61']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

#home_categories ul li a.view_more {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color62']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color62']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color63']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color63']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color64']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color64']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

#home_categories ul li a.view_more:hover {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color65']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color65']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#1b1a1b<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color66']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color66']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color67']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color67']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#1b1a1b<?php }?>;
}

.columns .text-uppercase a,
.columns .text-uppercase span,
.columns div#_desktop_cart .cart_index_title a,
#home_man_product .catprod_title a span {
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color17']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color17']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

#index .tabs ul.nav-tabs li.nav-item a.active,
#index .tabs ul.nav-tabs li.nav-item a:hover,
.index_title a,
.index_title span {
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color19']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color19']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

a.product-flags-plist span.product-flag,
a.product-flags-plist span.product-flag.new,
#home_cat_product a.product-flags-plist span.product-flag.new,
#product #content .product-flags li,
#product #content .product-flags .product-flag.new {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color20']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color20']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

a.product-flags-plist span.product-flag.discount-percentage,
a.product-flags-plist span.product-flag.discount,
a.product-flags-plist span.product-flag.out_of_stock,
.product-prices span.discount,
#product #content .product-flags .product-flag.discount,
#product #content .product-flags .product-flag.out_of_stock {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color94']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color94']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ff0000<?php }?>;
}

.products .product-miniature .product-title a,
#home_cat_product ul li .right-block .name_block a {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color21']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color21']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#000000<?php }?>;
}

.products .product-miniature span.price,
#home_cat_product ul li .product-price-and-shipping .price,
.ui-widget .search_right span.search_price,
body#view #main .wishlist-product-price {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color22']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color22']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ff5722<?php }?>;
}

.button-container .add-to-cart:hover,
#subcart .cart-buttons .viewcart:hover,
body#view ul li.wishlist-products-item .wishlist-product-bottom .btn-primary:hover {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color26']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color26']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color27']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color27']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color28']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color28']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

.button-container .add-to-cart,
.button-container .add-to-cart:disabled,
#subcart .cart-buttons .viewcart,
body#view ul li.wishlist-products-item .wishlist-product-bottom .btn-primary {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color23']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color23']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color24']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color24']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#1b1b1b<?php }?>;
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color25']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color25']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#d6d4d4<?php }?>;
}

#home_cat_product .catprod_title span {
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color68']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color68']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

#home_man .man_title span {
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color71']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color71']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

div#angarinfo_block .icon_cms {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color29']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color29']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

.footer-container {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color30']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color30']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#1b1a1b<?php }?>;
}

.footer-container,
.footer-container .h3,
.footer-container .links .title,
.row.social_footer {
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color31']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color31']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#363636<?php }?>;
}

.footer-container .h3 span,
.footer-container .h3 a,
.footer-container .links .title span.h3,
.footer-container .links .title a.h3 {
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color32']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color32']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

.footer-container,
.footer-container .h3,
.footer-container .links .title .h3,
.footer-container a,
.footer-container li a,
.footer-container .links ul>li a {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color33']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color33']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

.block_newsletter .btn-newsletter {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color34']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color34']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color82']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color82']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

.block_newsletter .btn-newsletter:hover {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color35']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color35']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color83']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color83']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

.footer-container .bottom-footer {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color36']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color36']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#1b1a1b<?php }?>;
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color37']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color37']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#363636<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color38']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color38']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

.product-prices .current-price span.price {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color39']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color39']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ff5722<?php }?>;
}

.product-add-to-cart button.btn.add-to-cart:hover {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color43']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color43']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#282828<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color44']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color44']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color45']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color45']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#282828<?php }?>;
}

.product-add-to-cart button.btn.add-to-cart,
.product-add-to-cart button.btn.add-to-cart:disabled {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color40']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color40']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color41']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color41']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color42']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color42']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

#product .tabs ul.nav-tabs li.nav-item a.active,
#product .tabs ul.nav-tabs li.nav-item a:hover,
#product .index_title span,
.page-product-heading span,
body #product-comments-list-header .comments-nb {
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color46']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color46']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

body .btn-primary:hover {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color50']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color50']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#3aa04c<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color51']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color51']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color52']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color52']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#196f28<?php }?>;
}

body .btn-primary,
body .btn-primary.disabled,
body .btn-primary:disabled,
body .btn-primary.disabled:hover {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color47']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color47']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#43b754<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color48']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color48']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color49']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color49']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#399a49<?php }?>;
}

body .btn-secondary:hover {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color56']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color56']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#eeeeee<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color57']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color57']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#000000<?php }?>;
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color58']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color58']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#d8d8d8<?php }?>;
}

body .btn-secondary,
body .btn-secondary.disabled,
body .btn-secondary:disabled,
body .btn-secondary.disabled:hover {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color53']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color53']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#f6f6f6<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color54']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color54']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#000000<?php }?>;
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color55']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color55']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#d8d8d8<?php }?>;
}

.form-control:focus, .input-group.focus {
    border-color: <?php if (!empty($_smarty_tpl->tpl_vars['color72']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color72']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#dbdbdb<?php }?>;
    outline-color: <?php if (!empty($_smarty_tpl->tpl_vars['color72']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color72']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#dbdbdb<?php }?>;
}

body .pagination .page-list .current a,
body .pagination .page-list a:hover,
body .pagination .page-list .current a.disabled,
body .pagination .page-list .current a.disabled:hover {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color73']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color73']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

.page-my-account #content .links a:hover i {
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color74']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color74']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
}

#scroll_top {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color76']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color76']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#83c127<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color84']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color84']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

#scroll_top:hover,
#scroll_top:focus {
    background: <?php if (!empty($_smarty_tpl->tpl_vars['color77']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color77']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#1b1a1b<?php }?>;
    color: <?php if (!empty($_smarty_tpl->tpl_vars['color85']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color85']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;
}

</style>
<?php }
}
