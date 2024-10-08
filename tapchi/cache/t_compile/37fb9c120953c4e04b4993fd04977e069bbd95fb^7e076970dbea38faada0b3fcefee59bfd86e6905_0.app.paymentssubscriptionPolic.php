<?php
/* Smarty version 4.1.0, created on 2023-04-25 17:11:12
  from 'app:paymentssubscriptionPolic' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6447ed903283b2_20700287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e076970dbea38faada0b3fcefee59bfd86e6905' => 
    array (
      0 => 'app:paymentssubscriptionPolic',
      1 => 1675470231,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_6447ed903283b2_20700287 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#subscriptionPolicies').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>
<form class="pkp_form" id="subscriptionPolicies" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"saveSubscriptionPolicies"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"subscriptionPolicyFormNotification"), 0, false);
?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.subscriptionPolicies.subscriptionContact"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.subscriptionContact"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.subscriptionPolicies.subscriptionContactDescription"),$_smarty_tpl ) );?>
</p>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'label'=>"user.name",'required'=>true,'id'=>"subscriptionName",'value'=>$_smarty_tpl->tpl_vars['subscriptionName']->value,'maxlength'=>"60",'inline'=>true,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"email",'label'=>"user.email",'id'=>"subscriptionEmail",'value'=>$_smarty_tpl->tpl_vars['subscriptionEmail']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'required'=>true),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"tel",'label'=>"user.phone",'name'=>"subscriptionPhone",'id'=>"subscriptionPhone",'value'=>$_smarty_tpl->tpl_vars['subscriptionPhone']->value,'maxlength'=>"24",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'id'=>"subscriptionMailingAddress",'value'=>$_smarty_tpl->tpl_vars['subscriptionMailingAddress']->value,'height'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['height']['SHORT'],'required'=>true,'label'=>"common.mailingAddress"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.subscriptionContact"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.subscriptionPolicies.subscriptionAdditionalInformation"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.subscriptionAdditionalInformation"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.subscriptionPolicies.subscriptionAdditionalInformationDescription"),$_smarty_tpl ) );?>
</p>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'id'=>"subscriptionAdditionalInformation",'value'=>$_smarty_tpl->tpl_vars['subscriptionAdditionalInformation']->value,'rich'=>true,'multilingual'=>true),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.subscriptionAdditionalInformation"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.subscriptionPolicies.expiry",'list'=>1));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.expiry",'list'=>1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.subscriptionPolicies.expiryDescription"),$_smarty_tpl ) );?>
</p>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"subscriptionExpiryPartial-0",'name'=>"subscriptionExpiryPartial",'value'=>0,'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['subscriptionExpiryPartial']->value,0 )),'label'=>"manager.subscriptionPolicies.expiryFull"),$_smarty_tpl ) );?>

		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.subscriptionPolicies.expiryFullDescription"),$_smarty_tpl ) );?>
</span>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"subscriptionExpiryPartial-1",'name'=>"subscriptionExpiryPartial",'value'=>1,'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['subscriptionExpiryPartial']->value,1 )),'label'=>"manager.subscriptionPolicies.expiryPartial"),$_smarty_tpl ) );?>

		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.subscriptionPolicies.expiryPartialDescription"),$_smarty_tpl ) );?>
</span>
	<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.expiry",'list'=>1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.subscriptionPolicies.expiryReminders"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.expiryReminders"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.subscriptionPolicies.expiryRemindersDescription"),$_smarty_tpl ) );?>
</p>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"numMonthsBeforeSubscriptionExpiryReminder",'name'=>"numMonthsBeforeSubscriptionExpiryReminder",'selected'=>$_smarty_tpl->tpl_vars['numMonthsBeforeSubscriptionExpiryReminder']->value,'from'=>$_smarty_tpl->tpl_vars['validNumMonthsBeforeExpiry']->value,'label'=>"manager.subscriptionPolicies.expiryReminderBeforeMonths",'disabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['scheduledTasksEnabled']->value,0 )),'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'translate'=>false,'inline'=>true),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"numWeeksBeforeSubscriptionExpiryReminder",'name'=>"numWeeksBeforeSubscriptionExpiryReminder",'selected'=>$_smarty_tpl->tpl_vars['numWeeksBeforeSubscriptionExpiryReminder']->value,'from'=>$_smarty_tpl->tpl_vars['validNumWeeksBeforeExpiry']->value,'label'=>"manager.subscriptionPolicies.expiryReminderBeforeWeeks",'disabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['scheduledTasksEnabled']->value,0 )),'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'translate'=>false,'inline'=>true),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"numMonthsAfterSubscriptionExpiryReminder",'name'=>"numMonthsAfterSubscriptionExpiryReminder",'selected'=>$_smarty_tpl->tpl_vars['numMonthsAfterSubscriptionExpiryReminder']->value,'from'=>$_smarty_tpl->tpl_vars['validNumMonthsAfterExpiry']->value,'label'=>"manager.subscriptionPolicies.expiryReminderAfterMonths",'disabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['scheduledTasksEnabled']->value,0 )),'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'translate'=>false,'inline'=>true),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"numWeeksAfterSubscriptionExpiryReminder",'name'=>"numWeeksAfterSubscriptionExpiryReminder",'selected'=>$_smarty_tpl->tpl_vars['numWeeksAfterSubscriptionExpiryReminder']->value,'from'=>$_smarty_tpl->tpl_vars['validNumWeeksAfterExpiry']->value,'label'=>"manager.subscriptionPolicies.expiryReminderAfterWeeks",'disabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['scheduledTasksEnabled']->value,0 )),'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'translate'=>false,'inline'=>true),$_smarty_tpl ) );?>


		<?php if (!$_smarty_tpl->tpl_vars['scheduledTasksEnabled']->value) {?>
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.subscriptionPolicies.expiryRemindersDisabled"),$_smarty_tpl ) );?>
</span>
		<?php }?>
	<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.expiryReminders"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.subscriptionPolicies.onlinePaymentNotifications",'list'=>true));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.onlinePaymentNotifications",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php if ($_smarty_tpl->tpl_vars['paymentsEnabled']->value) {?>
			<?php $_smarty_tpl->_assignInScope('paymentsEnabled', true);?>
		<?php }?>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.subscriptionPolicies.onlinePaymentNotificationsDescription"),$_smarty_tpl ) );?>
</p>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enableSubscriptionOnlinePaymentNotificationPurchaseIndividual",'name'=>"enableSubscriptionOnlinePaymentNotificationPurchaseIndividual",'value'=>1,'checked'=>$_smarty_tpl->tpl_vars['enableSubscriptionOnlinePaymentNotificationPurchaseIndividual']->value,'label'=>"manager.subscriptionPolicies.enableSubscriptionOnlinePaymentNotificationPurchaseIndividual",'disabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentsEnabled']->value,0 ))),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enableSubscriptionOnlinePaymentNotificationPurchaseInstitutional",'name'=>"enableSubscriptionOnlinePaymentNotificationPurchaseInstitutional",'value'=>1,'checked'=>$_smarty_tpl->tpl_vars['enableSubscriptionOnlinePaymentNotificationPurchaseInstitutional']->value,'label'=>"manager.subscriptionPolicies.enableSubscriptionOnlinePaymentNotificationPurchaseInstitutional",'disabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentsEnabled']->value,0 ))),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enableSubscriptionOnlinePaymentNotificationRenewIndividual",'name'=>"enableSubscriptionOnlinePaymentNotificationRenewIndividual",'value'=>1,'checked'=>$_smarty_tpl->tpl_vars['enableSubscriptionOnlinePaymentNotificationRenewIndividual']->value,'label'=>"manager.subscriptionPolicies.enableSubscriptionOnlinePaymentNotificationRenewIndividual",'disabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentsEnabled']->value,0 ))),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enableSubscriptionOnlinePaymentNotificationRenewInstitutional",'name'=>"enableSubscriptionOnlinePaymentNotificationRenewInstitutional",'value'=>1,'checked'=>$_smarty_tpl->tpl_vars['enableSubscriptionOnlinePaymentNotificationRenewInstitutional']->value,'label'=>"manager.subscriptionPolicies.enableSubscriptionOnlinePaymentNotificationRenewInstitutional",'disabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentsEnabled']->value,0 ))),$_smarty_tpl ) );?>


		<?php if (!$_smarty_tpl->tpl_vars['paymentsEnabled']->value) {?>
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.subscriptionPolicies.onlinePaymentDisabled"),$_smarty_tpl ) );?>
<span>
		<?php }?>
	<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.onlinePaymentNotifications",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.subscriptionPolicies.openAccessOptions",'list'=>true));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.openAccessOptions",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"enableOpenAccessNotification",'name'=>"enableOpenAccessNotification",'value'=>1,'checked'=>$_smarty_tpl->tpl_vars['enableOpenAccessNotification']->value,'label'=>"manager.subscriptionPolicies.openAccessNotificationDescription",'disabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['scheduledTasksEnabled']->value,0 ))),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('label'=>"manager.subscriptionPolicies.openAccessOptions",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('hideCancel'=>true,'submitText'=>"common.save"),$_smarty_tpl ) );?>


	<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
</form>
<?php }
}
