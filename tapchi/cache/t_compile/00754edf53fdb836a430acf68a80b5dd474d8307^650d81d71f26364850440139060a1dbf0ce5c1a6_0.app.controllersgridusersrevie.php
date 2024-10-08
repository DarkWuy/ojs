<?php
/* Smarty version 4.1.0, created on 2023-06-24 08:16:40
  from 'app:controllersgridusersrevie' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64968a481ef779_80100339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '650d81d71f26364850440139060a1dbf0ce5c1a6' => 
    array (
      0 => 'app:controllersgridusersrevie',
      1 => 1675470231,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:reviewer/review/reviewerRecommendations.tpl' => 1,
    'core:controllers/grid/users/reviewer/readReview.tpl' => 1,
  ),
),false)) {
function content_64968a481ef779_80100339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "reviewerRecommendations", null);?>
	<?php $_smarty_tpl->_subTemplateRender("app:reviewer/review/reviewerRecommendations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('description'=>"reviewer.article.selectRecommendation.byEditor",'required'=>false), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#readReviewForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("core:controllers/grid/users/reviewer/readReview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
