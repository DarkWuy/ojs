<?php
/* Smarty version 4.1.0, created on 2023-06-22 03:18:36
  from 'plugins-1-plugins-generic-usageStats-generic-usageStats:usageStatsSiteSettingsFor' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6493a16cdd65a0_39748663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce877e1e8f2318a6f2f773516371af1af01d4d5e' => 
    array (
      0 => 'plugins-1-plugins-generic-usageStats-generic-usageStats:usageStatsSiteSettingsFor',
      1 => 1675470470,
      2 => 'plugins-1-plugins-generic-usageStats-generic-usageStats',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_6493a16cdd65a0_39748663 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#usageStatsSettingsForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="usageStatsSettingsForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'op'=>"manage",'category'=>"generic",'plugin'=>$_smarty_tpl->tpl_vars['pluginName']->value,'verb'=>"save"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>


	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"usageStatsSettingsFormNotification"), 0, false);
?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"usageStatsLogging",'title'=>"plugins.generic.usageStats.settings.logging"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"usageStatsLogging",'title'=>"plugins.generic.usageStats.settings.logging"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"createLogFiles",'list'=>true,'description'=>"plugins.generic.usageStats.settings.createLogFiles.description"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('for'=>"createLogFiles",'list'=>true,'description'=>"plugins.generic.usageStats.settings.createLogFiles.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"createLogFiles",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['createLogFiles']->value,'label'=>"plugins.generic.usageStats.settings.createLogFiles"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('for'=>"createLogFiles",'list'=>true,'description'=>"plugins.generic.usageStats.settings.createLogFiles.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"plugins.generic.usageStats.settings.logParseRegex",'description'=>"plugins.generic.usageStats.settings.logParseRegex.description"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"plugins.generic.usageStats.settings.logParseRegex",'description'=>"plugins.generic.usageStats.settings.logParseRegex.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"accessLogFileParseRegex",'value'=>$_smarty_tpl->tpl_vars['accessLogFileParseRegex']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"plugins.generic.usageStats.settings.logParseRegex",'description'=>"plugins.generic.usageStats.settings.logParseRegex.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"usageStatsLogging",'title'=>"plugins.generic.usageStats.settings.logging"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"usageStatsArchives",'title'=>"plugins.generic.usageStats.settings.archives"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormArea(array('id'=>"usageStatsArchives",'title'=>"plugins.generic.usageStats.settings.archives"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"compressArchives",'list'=>true,'description'=>"plugins.generic.usageStats.settings.compressArchives.description"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('for'=>"compressArchives",'list'=>true,'description'=>"plugins.generic.usageStats.settings.compressArchives.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"compressArchives",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['compressArchives']->value,'label'=>"plugins.generic.usageStats.settings.compressArchives"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('for'=>"compressArchives",'list'=>true,'description'=>"plugins.generic.usageStats.settings.compressArchives.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormArea(array('id'=>"usageStatsArchives",'title'=>"plugins.generic.usageStats.settings.archives"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"usageStatsDataPrivacy",'title'=>"plugins.generic.usageStats.settings.dataPrivacyOption"));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormArea(array('id'=>"usageStatsDataPrivacy",'title'=>"plugins.generic.usageStats.settings.dataPrivacyOption"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"saltFilepath",'title'=>"plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath",'description'=>"plugins.generic.usageStats.settings.dataPrivacyOption.requirements"));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormSection(array('for'=>"saltFilepath",'title'=>"plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath",'description'=>"plugins.generic.usageStats.settings.dataPrivacyOption.requirements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"saltFilepath",'value'=>$_smarty_tpl->tpl_vars['saltFilepath']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormSection(array('for'=>"saltFilepath",'title'=>"plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath",'description'=>"plugins.generic.usageStats.settings.dataPrivacyOption.requirements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"dataPrivacyOption",'list'=>true,'description'=>"plugins.generic.usageStats.settings.dataPrivacyOption.description"));
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormSection(array('for'=>"dataPrivacyOption",'list'=>true,'description'=>"plugins.generic.usageStats.settings.dataPrivacyOption.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"dataPrivacyOption",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['dataPrivacyOption']->value,'label'=>"plugins.generic.usageStats.settings.dataPrivacyCheckbox",'disabled'=>$_smarty_tpl->tpl_vars['disabled']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormSection(array('for'=>"dataPrivacyOption",'list'=>true,'description'=>"plugins.generic.usageStats.settings.dataPrivacyOption.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormArea(array('id'=>"usageStatsDataPrivacy",'title'=>"plugins.generic.usageStats.settings.dataPrivacyOption"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"usageStatsOptionalColumns",'title'=>"plugins.generic.usageStats.settings.optionalColumns"));
$_block_repeat=true;
echo $_block_plugin9->smartyFBVFormArea(array('id'=>"usageStatsOptionalColumns",'title'=>"plugins.generic.usageStats.settings.optionalColumns"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"optionalColumns",'list'=>true,'description'=>"plugins.generic.usageStats.settings.optionalColumns.description"));
$_block_repeat=true;
echo $_block_plugin10->smartyFBVFormSection(array('for'=>"optionalColumns",'list'=>true,'description'=>"plugins.generic.usageStats.settings.optionalColumns.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkboxgroup",'id'=>"optionalColumns",'from'=>$_smarty_tpl->tpl_vars['optionalColumnsOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['selectedOptionalColumns']->value,'translate'=>false),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin10->smartyFBVFormSection(array('for'=>"optionalColumns",'list'=>true,'description'=>"plugins.generic.usageStats.settings.optionalColumns.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin9->smartyFBVFormArea(array('id'=>"usageStatsOptionalColumns",'title'=>"plugins.generic.usageStats.settings.optionalColumns"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"usageStatsDisplayOptions",'title'=>"plugins.generic.usageStats.settings.statsDisplayOptions"));
$_block_repeat=true;
echo $_block_plugin11->smartyFBVFormArea(array('id'=>"usageStatsDisplayOptions",'title'=>"plugins.generic.usageStats.settings.statsDisplayOptions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<p>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.usageStats.settings.statsDisplayOptions.siteWide.".((string)$_smarty_tpl->tpl_vars['applicationName']->value)),$_smarty_tpl ) );?>

		</p>
		<?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"displayStatistics",'list'=>true));
$_block_repeat=true;
echo $_block_plugin12->smartyFBVFormSection(array('for'=>"displayStatistics",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"displayStatistics",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['displayStatistics']->value,'label'=>"plugins.generic.usageStats.settings.statsDisplayOptions.display"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin12->smartyFBVFormSection(array('for'=>"displayStatistics",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"chartType",'description'=>"plugins.generic.usageStats.settings.statsDisplayOptions.chartType"));
$_block_repeat=true;
echo $_block_plugin13->smartyFBVFormSection(array('for'=>"chartType",'description'=>"plugins.generic.usageStats.settings.statsDisplayOptions.chartType"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"chartType",'from'=>$_smarty_tpl->tpl_vars['chartTypes']->value,'selected'=>$_smarty_tpl->tpl_vars['chartType']->value,'translate'=>false,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin13->smartyFBVFormSection(array('for'=>"chartType",'description'=>"plugins.generic.usageStats.settings.statsDisplayOptions.chartType"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"datasetMaxCount",'description'=>"plugins.generic.usageStats.settings.statsDisplayOptions.datasetMaxCount"));
$_block_repeat=true;
echo $_block_plugin14->smartyFBVFormSection(array('for'=>"datasetMaxCount",'description'=>"plugins.generic.usageStats.settings.statsDisplayOptions.datasetMaxCount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"datasetMaxCount",'value'=>$_smarty_tpl->tpl_vars['datasetMaxCount']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin14->smartyFBVFormSection(array('for'=>"datasetMaxCount",'description'=>"plugins.generic.usageStats.settings.statsDisplayOptions.datasetMaxCount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin11->smartyFBVFormArea(array('id'=>"usageStatsDisplayOptions",'title'=>"plugins.generic.usageStats.settings.statsDisplayOptions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"usageStatsSettingsFormSubmit",'submitText'=>"common.save",'hideCancel'=>true),$_smarty_tpl ) );?>

</form>
<?php }
}
