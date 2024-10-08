<?php
/* Smarty version 4.1.0, created on 2023-04-30 17:13:09
  from 'app:frontendpagesprivacy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_644e8585737f29_84496488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e9355d736f1a824701a88bfa3ecd03068d56f99' => 
    array (
      0 => 'app:frontendpagesprivacy.tpl',
      1 => 1681396410,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_644e8585737f29_84496488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"manager.setup.privacyStatement"), 0, false);
?>

<div class="page page_privacy container">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"manager.setup.privacyStatement"), 0, false);
?>
	<?php echo $_smarty_tpl->tpl_vars['privacyStatement']->value;?>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
