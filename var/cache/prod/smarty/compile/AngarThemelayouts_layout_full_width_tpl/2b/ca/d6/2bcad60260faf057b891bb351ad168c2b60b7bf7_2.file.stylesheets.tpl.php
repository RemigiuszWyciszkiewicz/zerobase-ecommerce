<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:18
  from '/home/zerobat/www/themes/AngarTheme/templates/_partials/stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d7266cf304_57093808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bcad60260faf057b891bb351ad168c2b60b7bf7' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/_partials/stylesheets.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d7266cf304_57093808 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
$_smarty_tpl->tpl_vars['stylesheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->do_else = false;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
$_smarty_tpl->tpl_vars['stylesheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->do_else = false;
?>
  <style>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if (!empty($_smarty_tpl->tpl_vars['css59']->value)) {?>
<link rel="stylesheet" rel="preload" as="style" href="http<?php if (Tools::usingSecureMode()) {?>s<?php }?>://fonts.googleapis.com/css?family=<?php echo htmlspecialchars((string) smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['css59']->value,'htmlall','UTF-8' )),'_','+'), ENT_QUOTES, 'UTF-8');?>
:400,<?php if ($_smarty_tpl->tpl_vars['css59']->value == 'Poppins' || $_smarty_tpl->tpl_vars['css59']->value == 'Open_Sans' || $_smarty_tpl->tpl_vars['css59']->value == 'Oswald' || $_smarty_tpl->tpl_vars['css59']->value == 'Dosis' || $_smarty_tpl->tpl_vars['css59']->value == 'Raleway' || $_smarty_tpl->tpl_vars['css59']->value == 'Montserrat' || $_smarty_tpl->tpl_vars['css59']->value == 'Nunito' || $_smarty_tpl->tpl_vars['css59']->value == 'Fira_Sans' || $_smarty_tpl->tpl_vars['css59']->value == 'Titillium_Web') {?>600<?php } else { ?>700<?php }?>&amp;subset=latin,latin-ext&display=block" type="text/css" media="all" />
<?php } else { ?>
<link rel="stylesheet" rel="preload" as="style" href="http<?php if (Tools::usingSecureMode()) {?>s<?php }?>://fonts.googleapis.com/css?family=Poppins:400,600&amp;subset=latin,latin-ext&display=block" type="text/css" media="all" />
<?php }
}
}
