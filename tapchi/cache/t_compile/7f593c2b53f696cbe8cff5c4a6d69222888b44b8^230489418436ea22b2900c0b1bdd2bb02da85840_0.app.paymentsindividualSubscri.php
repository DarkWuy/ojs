<?php
/* Smarty version 4.1.0, created on 2023-05-12 15:56:08
  from 'app:paymentsindividualSubscri' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_645e45781e2ea2_16650852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '230489418436ea22b2900c0b1bdd2bb02da85840' => 
    array (
      0 => 'app:paymentsindividualSubscri',
      1 => 1675470231,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_645e45781e2ea2_16650852 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#individualSubscriptionForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>
<form class="pkp_form" method="post" id="individualSubscriptionForm" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"updateSubscription"),$_smarty_tpl ) );?>
">
	<?php if ($_smarty_tpl->tpl_vars['subscriptionId']->value) {?>
		<input type="hidden" name="subscriptionId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subscriptionId']->value ));?>
" />
	<?php }?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>


	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"individualSubscriptionNotification"), 0, false);
?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'subscriberSelectGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.users.subscriberSelect.SubscriberSelectGridHandler",'op'=>"fetchGrid",'escape'=>false,'userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>'subscriberSelectGridContainer','url'=>$_smarty_tpl->tpl_vars['subscriberSelectGridUrl']->value),$_smarty_tpl ) );?>


	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"individualSubscriptionFormArea"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"individualSubscriptionFormArea"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.subscriptions.form.typeId"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"manager.subscriptions.form.typeId"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'required'=>true,'name'=>"typeId",'id'=>"typeId",'selected'=>$_smarty_tpl->tpl_vars['typeId']->value,'from'=>$_smarty_tpl->tpl_vars['subscriptionTypes']->value,'label'=>"manager.subscriptions.form.typeId",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'inline'=>true,'translate'=>false),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'required'=>true,'name'=>"status",'id'=>"status",'selected'=>$_smarty_tpl->tpl_vars['status']->value,'from'=>$_smarty_tpl->tpl_vars['validStatus']->value,'label'=>"manager.subscriptions.form.status",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'inline'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"manager.subscriptions.form.typeId"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.date"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"common.date"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'name'=>"dateStart",'id'=>"dateStart",'value'=>$_smarty_tpl->tpl_vars['dateStart']->value,'label'=>"manager.subscriptions.form.dateStart",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'inline'=>true,'class'=>"datepicker"),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'name'=>"dateEnd",'id'=>"dateEnd",'value'=>$_smarty_tpl->tpl_vars['dateEnd']->value,'label'=>"manager.subscriptions.form.dateEnd",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'inline'=>true,'class'=>"datepicker"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"common.date"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'label'=>"manager.subscriptions.form.membership",'name'=>"membership",'id'=>"membership",'value'=>$_smarty_tpl->tpl_vars['membership']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'inline'=>true),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'label'=>"manager.subscriptions.form.referenceNumber",'name'=>"referenceNumber",'id'=>"referenceNumber",'value'=>$_smarty_tpl->tpl_vars['referenceNumber']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'inline'=>true),$_smarty_tpl ) );?>


		<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.subscriptions.form.notes"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.subscriptions.form.notes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'name'=>"notes",'id'=>"notes",'value'=>$_smarty_tpl->tpl_vars['notes']->value,'rich'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.subscriptions.form.notes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"individualSubscriptionFormArea"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"individualSubscriptionFormSubmit",'submitText'=>"common.save",'hideCancel'=>true),$_smarty_tpl ) );?>

</form>
<?php }
}
