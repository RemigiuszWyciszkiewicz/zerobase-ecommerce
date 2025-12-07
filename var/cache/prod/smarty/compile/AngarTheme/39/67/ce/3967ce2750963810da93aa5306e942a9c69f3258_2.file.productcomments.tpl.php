<?php
/* Smarty version 4.3.4, created on 2025-12-05 14:58:26
  from '/home/zerobat/www/themes/AngarTheme/modules/productcomments/views/templates/front/productcomments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932e502a0c9a3_22570969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3967ce2750963810da93aa5306e942a9c69f3258' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/modules/productcomments/views/templates/front/productcomments.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932e502a0c9a3_22570969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>


<div class="tab-pane fade in" id="productcomments" role="tabpanel">

<?php echo '<script'; ?>
 type="text/javascript">
    var productcomments_controller_url = '<?php echo $_smarty_tpl->tpl_vars['productcomments_controller_url']->value;?>
';
    var confirm_report_message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure that you want to report this comment?','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );?>
';
    var secure_key = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['secure_key']->value, ENT_QUOTES, 'UTF-8');?>
';
    var productcomments_url_rewrite = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productcomments_url_rewriting_activated']->value, ENT_QUOTES, 'UTF-8');?>
';
    var productcomment_added = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been added!','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );?>
';
    var productcomment_added_moderation = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been submitted and will be available once approved by a moderator.','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );?>
';
    var productcomment_title = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New comment','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );?>
';
    var productcomment_ok = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','mod'=>'productcomments','js'=>1),$_smarty_tpl ) );?>
';
    var moderation_active = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['moderation_active']->value, ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
>

<div id="productCommentsBlock">
    <div class="h5 text-uppercase index_title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl ) );?>
</span></div>
    <div class="tabs">

        <div id="new_comment_form_ok" class="alert alert-success" style="display:none;padding:15px 25px"></div>

        <div id="product_comments_block_tab">
            <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['comment']->value['content']) {?>
                        <div class="comment clearfix">
                            <div class="comment_author">
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grade','mod'=>'productcomments'),$_smarty_tpl ) );?>
&nbsp</span>
                                <div class="star-content star_content clearfix">
                                    <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= 5; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                        <?php if ($_smarty_tpl->tpl_vars['comment']->value['grade'] <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
                                            <div class="star"></div>
                                        <?php } else { ?>
                                            <div class="star star_on"></div>
                                        <?php }?>
                                    <?php
}
}
?>
                                </div>
                                <div class="comment_author_infos">
                                    <div>
										<strong><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['customer_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</strong>
									</div>
                                    <em content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['date_add'],'html','UTF-8' )),'full'=>0),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['date_add'],'html','UTF-8' )),'full'=>0),$_smarty_tpl ) );?>
</em>
                                </div>
                            </div>
                            <div class="comment_details">
                                <h4 class="title_block"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comment']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h4>
                                <p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'nl2br' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['comment']->value['content'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'html','UTF-8' )) ));?>
</p>


                                <?php echo hook::exec('displayProductComment',$_smarty_tpl->tpl_vars['comment']->value);?>

                            </div>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <?php if ((!$_smarty_tpl->tpl_vars['too_early']->value && ($_smarty_tpl->tpl_vars['logged']->value || $_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
                    <p class="align_center alert alert-info">
                        <a id="new_comment_tab_btn" class="open-comment-form" href="#new_comment_form"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be the first to write your review','mod'=>'productcomments'),$_smarty_tpl ) );?>
 !</a>
                    </p>
                <?php } else { ?>
                    <p class="align_center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer reviews for the moment.','mod'=>'productcomments'),$_smarty_tpl ) );?>
</p>
                <?php }?>
            <?php }?>
        </div>

        <div class="clearfix comments_openform">
            <?php if (($_smarty_tpl->tpl_vars['too_early']->value == false && ($_smarty_tpl->tpl_vars['logged']->value || $_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
                <a class="open-comment-form btn btn-primary" href="#new_comment_form"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','mod'=>'productcomments'),$_smarty_tpl ) );?>
</a>
            <?php }?>
        </div>


    </div>

    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value) {?>
        <!-- Fancybox -->
        <div style="display:none">
            <div id="new_comment_form">
                <form id="id_new_comment_form" action="#">
                    <h3 class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','mod'=>'productcomments'),$_smarty_tpl ) );?>
</h3>
                    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value) {?>
                        <div class="product clearfix">
                            <div class="product_desc">
								<img src="<?php if (!empty($_smarty_tpl->tpl_vars['productcomment_cover_image']->value)) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productcomment_cover_image']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
en-default-home_default.jpg<?php }?>" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productcomment_name']->value, ENT_QUOTES, 'UTF-8');?>
" />
                                <p class="product_name"><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productcomment_name']->value, ENT_QUOTES, 'UTF-8');?>
</strong></p>
                                <?php echo $_smarty_tpl->tpl_vars['productcomment_desc']->value;?>

                            </div>
                        </div>
                    <?php }?>
                    <div class="new_comment_form_content">
                        <div class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','mod'=>'productcomments'),$_smarty_tpl ) );?>
</div>
                        <div id="new_comment_form_error" class="error" style="display:none;padding:15px 25px">
                            <ul></ul>
                        </div>
                        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['criterions']->value) > 0) {?>
                            <ul id="criterions_list">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['criterions']->value, 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?>
                                    <li>
                                        <label><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</label>
                                        <div class="star-content star_content">
                                            <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="1"/>
                                            <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="2"/>
                                            <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="3"/>
                                            <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="4"/>
                                            <input class="star" type="radio" name="criterion[<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion'], (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
]" value="5" checked="checked"/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['allow_guests']->value == true && !$_smarty_tpl->tpl_vars['logged']->value) {?>
                            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your name','mod'=>'productcomments'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
                            <input id="commentCustomerName" name="customer_name" type="text" value=""/>
                        <?php }?>

                        <label for="comment_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title for your review','mod'=>'productcomments'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
                        <input id="comment_title" name="title" type="text" value=""/>

                        <label for="content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your review','mod'=>'productcomments'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
                        <textarea id="content" name="content"></textarea>

                        <div id="new_comment_form_footer">
                            <input id="id_product_comment_send" name="id_product" type="hidden" value='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_product_comment_form']->value, ENT_QUOTES, 'UTF-8');?>
'/>
                            <p class="fr">
                                <button class="btn btn-primary" id="submitNewMessage" name="submitMessage" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','mod'=>'productcomments'),$_smarty_tpl ) );?>
</button>&nbsp;
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or','mod'=>'productcomments'),$_smarty_tpl ) );?>
&nbsp;<a href="#" onclick="$.fancybox.close();"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'productcomments'),$_smarty_tpl ) );?>
</a>
                            </p>
                            <p class="fl required"><sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required fields','mod'=>'productcomments'),$_smarty_tpl ) );?>
</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form><!-- /end new_comment_form_content -->
            </div>
        </div>
        <!-- End fancybox -->
    <?php }?>
</div>


</div>


<?php }
}
