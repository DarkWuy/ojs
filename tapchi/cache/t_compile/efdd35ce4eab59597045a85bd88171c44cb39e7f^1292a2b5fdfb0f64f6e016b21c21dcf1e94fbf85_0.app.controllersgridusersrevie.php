<?php
/* Smarty version 4.1.0, created on 2024-06-20 13:13:41
  from 'app:controllersgridusersrevie' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_66740ee57c5da9_42039596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1292a2b5fdfb0f64f6e016b21c21dcf1e94fbf85' => 
    array (
      0 => 'app:controllersgridusersrevie',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66740ee57c5da9_42039596 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#unassignReviewerForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="unassignReviewerForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"updateUnassignReviewer"),$_smarty_tpl ) );?>
" >
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<input type="hidden" name="reviewAssignmentId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['reviewAssignmentId']->value ));?>
" />
	<input type="hidden" name="reviewRoundId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['reviewRoundId']->value ));?>
" />
	<input type="hidden" name="reviewerId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['reviewerId']->value ));?>
" />
	<input type="hidden" name="stageId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stageId']->value ));?>
" />
	<input type="hidden" name="submissionId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionId']->value ));?>
" />

	<!--  Message to reviewer textarea -->
	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"editor.review.personalMessageToReviewer",'for'=>"personalMessage"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"editor.review.personalMessageToReviewer",'for'=>"personalMessage"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'name'=>"personalMessage",'id'=>"personalMessage",'value'=>$_smarty_tpl->tpl_vars['personalMessage']->value,'rich'=>true),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"editor.review.personalMessageToReviewer",'for'=>"personalMessage"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<!-- Skip email checkbox -->
	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"skipEmail",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'list'=>true));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('for'=>"skipEmail",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"skipEmail",'name'=>"skipEmail",'label'=>"editor.review.skipEmail"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('for'=>"skipEmail",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php if ($_smarty_tpl->tpl_vars['dateConfirmed']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('submitText'=>"editor.review.cancelReviewer"),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('submitText'=>"editor.review.unassignReviewer"),$_smarty_tpl ) );?>

	<?php }?>
</form>
<?php }
}
