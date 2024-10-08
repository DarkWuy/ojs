<?php
/* Smarty version 4.1.0, created on 2023-06-22 03:24:37
  from 'plugins-1-plugins-generic-googleAnalytics-generic-googleAnalytics:settingsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6493a2d5899006_79290459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e209ca02352f154f20ea20f8ebf14c321d5f911' => 
    array (
      0 => 'plugins-1-plugins-generic-googleAnalytics-generic-googleAnalytics:settingsForm.tpl',
      1 => 1675470470,
      2 => 'plugins-1-plugins-generic-googleAnalytics-generic-googleAnalytics',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_6493a2d5899006_79290459 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#gaSettingsForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="gaSettingsForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'op'=>"manage",'category'=>"generic",'plugin'=>$_smarty_tpl->tpl_vars['pluginName']->value,'verb'=>"settings",'save'=>true),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"gaSettingsFormNotification"), 0, false);
?>

	<div id="description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.googleAnalytics.manager.settings.description"),$_smarty_tpl ) );?>
</div>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"webFeedSettingsFormArea"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"webFeedSettingsFormArea"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"googleAnalyticsSiteId",'value'=>$_smarty_tpl->tpl_vars['googleAnalyticsSiteId']->value,'label'=>"plugins.generic.googleAnalytics.manager.settings.googleAnalyticsSiteId"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"webFeedSettingsFormArea"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array(),$_smarty_tpl ) );?>


	<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
</form>
<?php }
}
