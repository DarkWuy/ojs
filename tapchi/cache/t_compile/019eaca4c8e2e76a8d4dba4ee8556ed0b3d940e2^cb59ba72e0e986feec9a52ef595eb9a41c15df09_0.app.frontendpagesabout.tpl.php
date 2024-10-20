<?php
/* Smarty version 4.1.0, created on 2024-10-20 14:58:27
  from 'app:frontendpagesabout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6714fe73b52c87_13608849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb59ba72e0e986feec9a52ef595eb9a41c15df09' => 
    array (
      0 => 'app:frontendpagesabout.tpl',
      1 => 1729429105,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/editLink.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6714fe73b52c87_13608849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"about.aboutContext"), 0, false);
?>

<div class="page page_about container">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"about.aboutContext"), 0, false);
?>
	
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"context",'anchor'=>"masthead",'sectionTitleKey'=>"about.aboutContext"), 0, false);
?>

	<style>
        .page_about .about_content {
            font-size: calc(1em + 2px);
        }
    </style>
    <div class="about_content">
        <?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('about');?>

    </div>
</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
