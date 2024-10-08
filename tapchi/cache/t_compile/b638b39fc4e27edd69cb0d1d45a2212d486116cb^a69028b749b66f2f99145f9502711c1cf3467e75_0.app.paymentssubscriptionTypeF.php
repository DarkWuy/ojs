<?php
/* Smarty version 4.1.0, created on 2023-05-12 18:34:48
  from 'app:paymentssubscriptionTypeF' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_645e6aa86fba11_68849776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a69028b749b66f2f99145f9502711c1cf3467e75' => 
    array (
      0 => 'app:paymentssubscriptionTypeF',
      1 => 1675470231,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_645e6aa86fba11_68849776 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#subscriptionTypeForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
		$('#individual, #institutional').on('change', function() {
			if ($('#institutional').prop('checked')) {
				$('#membership').prop('checked', false).prop('disabled', true);
			} else {
				$('#membership').prop('disabled', false);
			}
		});
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="subscriptionTypeForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"updateSubscriptionType"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php if ($_smarty_tpl->tpl_vars['typeId']->value) {?>
		<input type="hidden" name="typeId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['typeId']->value ));?>
" />
	<?php }?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"subscriptionTypeNotification"), 0, false);
?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.subscriptionTypes.form.typeName"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"manager.subscriptionTypes.form.typeName"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'required'=>true,'name'=>"name",'id'=>"typeName",'value'=>$_smarty_tpl->tpl_vars['name']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'multilingual'=>true),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"manager.subscriptionTypes.form.typeName"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.subscriptionTypes.form.description"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('label'=>"manager.subscriptionTypes.form.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'name'=>"description",'id'=>"description",'value'=>$_smarty_tpl->tpl_vars['description']->value,'rich'=>true,'multilingual'=>true),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('label'=>"manager.subscriptionTypes.form.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.subscriptionTypes.form.cost"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"manager.subscriptionTypes.form.cost"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'required'=>true,'name'=>"currency",'id'=>"currency",'selected'=>$_smarty_tpl->tpl_vars['currency']->value,'from'=>$_smarty_tpl->tpl_vars['validCurrencies']->value,'label'=>"manager.subscriptionTypes.form.currency",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'inline'=>true,'translate'=>false),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'required'=>true,'name'=>"cost",'id'=>"cost",'value'=>$_smarty_tpl->tpl_vars['cost']->value,'label'=>"manager.subscriptionTypes.form.cost",'description'=>"manager.subscriptionTypes.form.costInstructions",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'inline'=>true),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"manager.subscriptionTypes.form.cost"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.subscriptionTypes.form.format"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.subscriptionTypes.form.format"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'required'=>true,'name'=>"format",'id'=>"format",'selected'=>$_smarty_tpl->tpl_vars['format']->value,'from'=>$_smarty_tpl->tpl_vars['validFormats']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'translate'=>false,'inline'=>true),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.subscriptionTypes.form.format"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.subscriptionTypes.form.duration"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('label'=>"manager.subscriptionTypes.form.duration"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'name'=>"duration",'id'=>"duration",'value'=>$_smarty_tpl->tpl_vars['duration']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'label'=>"manager.subscriptionTypes.form.durationInstructions",'inline'=>true),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('label'=>"manager.subscriptionTypes.form.duration"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.subscriptionTypes.form.subscriptions",'list'=>true));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('title'=>"manager.subscriptionTypes.form.subscriptions",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'name'=>"institutional",'id'=>"individual",'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['institutional']->value,"0" )),'label'=>"manager.subscriptionTypes.form.individual",'value'=>"0",'disabled'=>$_smarty_tpl->tpl_vars['typeId']->value),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'name'=>"institutional",'id'=>"institutional",'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['institutional']->value,"1" )),'label'=>"manager.subscriptionTypes.form.institutional",'value'=>"1",'disabled'=>$_smarty_tpl->tpl_vars['typeId']->value),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('title'=>"manager.subscriptionTypes.form.subscriptions",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.subscriptionTypes.form.options",'list'=>true));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormSection(array('title'=>"manager.subscriptionTypes.form.options",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'name'=>"membership",'id'=>"membership",'checked'=>$_smarty_tpl->tpl_vars['membership']->value,'value'=>"1",'label'=>"manager.subscriptionTypes.form.membership"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'name'=>"disable_public_display",'id'=>"disable_public_display",'checked'=>$_smarty_tpl->tpl_vars['disable_public_display']->value,'value'=>"1",'label'=>"manager.subscriptionTypes.form.public"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormSection(array('title'=>"manager.subscriptionTypes.form.options",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"mastheadFormSubmit",'submitText'=>"common.save",'hideCancel'=>true),$_smarty_tpl ) );?>

</form>
<?php }
}
