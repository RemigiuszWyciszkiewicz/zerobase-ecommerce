<?php
/* Smarty version 4.3.4, created on 2025-12-05 17:30:09
  from '/home/zerobat/www/modules/ps_mbo/views/templates/hook/dashboard-zone-three.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6933089156d868_55604228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4c69a0fb52dd5966e2a51ee326cc0f2578fad65' => 
    array (
      0 => '/home/zerobat/www/modules/ps_mbo/views/templates/hook/dashboard-zone-three.tpl',
      1 => 1757950116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6933089156d868_55604228 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-dashboard-news'));
        renderCdcError($('#cdc-stay-by-your-side'));
        renderCdcError($('#cdc-dashboard-ps-update'));
      });
    }
  } else {
    const dashboardNewsContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;
    const dashboardStayByYourSideContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;
    const dashboardPrestashopUpdateContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    const renderNews = window.mboCdc.renderDashboardNews
    renderNews(dashboardNewsContext, '#cdc-dashboard-news')

    const renderStayByYourSide = window.mboCdc.renderDashboardStayByYourSide
    renderStayByYourSide(dashboardStayByYourSideContext, '#cdc-stay-by-your-side')

    const renderPrestashopUpdate = window.mboCdc.renderDashboardPrestashopUpdate
    renderPrestashopUpdate(dashboardPrestashopUpdateContext, '#cdc-dashboard-ps-update')
  }
<?php echo '</script'; ?>
>

<section id="cdc-dashboard-news" class="dash_news cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>

<section id="cdc-dashboard-ps-update" class="cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>

<section id="cdc-stay-by-your-side" class="cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>
<?php }
}
