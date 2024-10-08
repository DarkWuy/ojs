<?php
/* Smarty version 4.1.0, created on 2023-04-25 17:11:13
  from 'app:paymentspaymentTypesForm.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6447ed911f2821_96968701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eb0a0509431d19379827939d3dbcf91402a33f4' => 
    array (
      0 => 'app:paymentspaymentTypesForm.',
      1 => 1675470231,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_6447ed911f2821_96968701 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#paymentTypesForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>
<form class="pkp_form" id="paymentTypesForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"savePaymentTypes"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"paymentTypesFormNotification"), 0, false);
?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.payment.authorFees"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"manager.payment.authorFees"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.payment.authorFeesDescription"),$_smarty_tpl ) );?>

		<?php if ($_smarty_tpl->tpl_vars['publicationFee']->value == 0) {
$_smarty_tpl->_assignInScope('publicationFee', '');
}?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'name'=>"publicationFee",'id'=>"publicationFee",'label'=>"manager.payment.options.publicationFee",'value'=>$_smarty_tpl->tpl_vars['publicationFee']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"manager.payment.authorFees"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.payment.readerFees"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"manager.payment.readerFees"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.payment.readerFeesDescription"),$_smarty_tpl ) );?>

		<?php if ($_smarty_tpl->tpl_vars['purchaseIssueFee']->value == 0) {
$_smarty_tpl->_assignInScope('purchaseIssueFee', '');
}?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'name'=>"purchaseIssueFee",'id'=>"purchaseIssueFee",'label'=>"manager.payment.options.purchaseIssueFee",'value'=>$_smarty_tpl->tpl_vars['purchaseIssueFee']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']),$_smarty_tpl ) );?>

		<?php if ($_smarty_tpl->tpl_vars['purchaseArticleFee']->value == 0) {
$_smarty_tpl->_assignInScope('purchaseArticleFee', '');
}?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'name'=>"purchaseArticleFee",'id'=>"purchaseArticleFee",'label'=>"manager.payment.options.purchaseArticleFee",'value'=>$_smarty_tpl->tpl_vars['purchaseArticleFee']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"manager.payment.readerFees"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'name'=>"restrictOnlyPdf",'id'=>"restrictOnlyPdf",'checked'=>$_smarty_tpl->tpl_vars['restrictOnlyPdf']->value,'label'=>"manager.payment.options.onlypdf",'value'=>"1"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.payment.generalFees"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('title'=>"manager.payment.generalFees"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.payment.generalFeesDescription"),$_smarty_tpl ) );?>

		<?php if ($_smarty_tpl->tpl_vars['membershipFee']->value == 0) {
$_smarty_tpl->_assignInScope('membershipFee', '');
}?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'name'=>"membershipFee",'id'=>"membershipFee",'label'=>"manager.payment.options.membershipFee",'value'=>$_smarty_tpl->tpl_vars['membershipFee']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('title'=>"manager.payment.generalFees"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('hideCancel'=>true,'submitText'=>"common.save"),$_smarty_tpl ) );?>

	<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
</form>
<?php }
}
