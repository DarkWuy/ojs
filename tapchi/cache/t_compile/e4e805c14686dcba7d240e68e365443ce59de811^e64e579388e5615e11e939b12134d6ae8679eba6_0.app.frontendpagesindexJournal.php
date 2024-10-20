<?php
/* Smarty version 4.1.0, created on 2024-10-20 16:20:47
  from 'app:frontendpagesindexJournal' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_671511bf24ece8_31569035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64e579388e5615e11e939b12134d6ae8679eba6' => 
    array (
      0 => 'app:frontendpagesindexJournal',
      1 => 1729434023,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/objects/issue_toc.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_671511bf24ece8_31569035 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedName()), 0, false);
?>

<div class="page_index_journal container">

    
        <?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
        <section class="current_issue pt-5" data-aos="fade-up" data-aos-delay="200">
           <div class="current_issue_container rounded p-1 d-flex align-items-center" style="max-width: 910px; max-height: 40px;background-color: #ecf0f1; border: none;">
    <a id="homepageIssue" class="homepageIssue " href="javascript:void(0)" onclick="toggleHeading()">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.currentIssue"),$_smarty_tpl ) );?>

    </a>
    <span class="mx-2">/</span>
    <div class="current_issue_title">
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ));?>

    </div>
</div>
            <?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/issue_toc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('heading'=>"h3",'class'=>"heading",'htmlAttributes'=>'hidden="true"'), 0, false);
?> <!-- Sửa hidden -->
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"issue",'op'=>"archive"),$_smarty_tpl ) );?>
" class="read_more">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.viewAllIssues"),$_smarty_tpl ) );?>

            </a>
        </section>
    <?php }?>
</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
function toggleHeading() {
    var heading = document.querySelector('[class="heading"]');  // Sử dụng querySelector với class
    if (heading.hasAttribute('hidden')) {
        heading.removeAttribute('hidden');
    } else {
        heading.setAttribute('hidden', 'true');
    }
}
<?php echo '</script'; ?>
>
<?php }
}
