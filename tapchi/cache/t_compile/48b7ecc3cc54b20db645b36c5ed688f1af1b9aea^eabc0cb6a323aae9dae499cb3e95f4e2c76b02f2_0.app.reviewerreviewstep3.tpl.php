<?php
/* Smarty version 4.1.0, created on 2023-06-24 07:56:25
  from 'app:reviewerreviewstep3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_649685895ec5a5_14236088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eabc0cb6a323aae9dae499cb3e95f4e2c76b02f2' => 
    array (
      0 => 'app:reviewerreviewstep3.tpl',
      1 => 1675470231,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:reviewer/review/reviewerRecommendations.tpl' => 1,
    'core:reviewer/review/step3.tpl' => 1,
  ),
),false)) {
function content_649685895ec5a5_14236088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "additionalFormFields", null);?>
	<?php $_smarty_tpl->_subTemplateRender("app:reviewer/review/reviewerRecommendations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("core:reviewer/review/step3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
