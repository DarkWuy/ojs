<?php
/* Smarty version 4.1.0, created on 2023-05-12 16:12:57
  from 'app:controllersstatisticsform' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_645e4969887f22_49964729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eb7038842310928fa9edb0c5bd51e11da63ef16' => 
    array (
      0 => 'app:controllersstatisticsform',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/loadingContainer.tpl' => 1,
    'app:controllers/extrasOnDemand.tpl' => 1,
  ),
),false)) {
function content_645e4969887f22_49964729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojs\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#reportGeneratorForm').pkpHandler('$.pkp.controllers.statistics.ReportGeneratorFormHandler',
			{
				fetchFormUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>'fetchReportGenerator','escape'=>false),$_smarty_tpl ) ));?>
,
				metricTypeSelectSelector: '#metricType',
				reportTemplateSelectSelector: '#reportTemplate',
				aggregationOptionsSelector: "input[type='checkbox'], #aggregationColumns",
				columnsSelector: '#columns',
				timeFilterWrapperSelector: '#reportTimeFilterArea',
				currentMonthSelector: '#currentMonth',
				yesterdaySelector: '#yesterday',
				rangeByMonthSelector: '#rangeByMonth',
				rangeByDaySelector: '#rangeByDay',
				startDayElementSelector: "select[name='dateStartDay']",
				endDayElementSelector: "select[name='dateEndDay']",
				dateRangeWrapperSelector : '#dateRangeElementsWrapper',
				objectTypeSelectSelector: '#objectTypes',
				fileTypeSelectSelector: '#fileTypes',
				fileAssocTypes: {
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fileAssocTypes']->value, 'assocType', false, 'key');
$_smarty_tpl->tpl_vars['assocType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['assocType']->value) {
$_smarty_tpl->tpl_vars['assocType']->do_else = false;
?>
						<?php echo json_encode($_smarty_tpl->tpl_vars['key']->value);?>
: <?php echo json_encode($_smarty_tpl->tpl_vars['assocType']->value);?>
,
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				},
				fetchRegionsUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>'fetchRegions','escape'=>false),$_smarty_tpl ) ));?>
,
				regionSelectSelector: '#regions',
				countrySelectSelector: '#countries',
				optionalColumns: {
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['optionalColumns']->value, 'column', false, 'key');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,"javascript" ));?>
: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value,"javascript" ));?>
',
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				}
			}
		);
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="reportGeneratorForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"saveReportGenerator"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php if ($_smarty_tpl->tpl_vars['metricTypeOptions']->value) {?>
		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"columnsFormArea",'title'=>"defaultMetric.availableMetrics"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"columnsFormArea",'title'=>"defaultMetric.availableMetrics"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"metricType",'id'=>"metricType",'from'=>$_smarty_tpl->tpl_vars['metricTypeOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['metricType']->value,'translate'=>false),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"columnsFormArea",'title'=>"defaultMetric.availableMetrics"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"hidden",'name'=>"metricType",'id'=>"metricType",'value'=>$_smarty_tpl->tpl_vars['metricType']->value),$_smarty_tpl ) );?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['reportTemplateOptions']->value) {?>
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"reportTemplatesFormArea",'title'=>"manager.statistics.reports.defaultReportTemplates"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormArea(array('id'=>"reportTemplatesFormArea",'title'=>"manager.statistics.reports.defaultReportTemplates"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"reportTemplate",'id'=>"reportTemplate",'from'=>$_smarty_tpl->tpl_vars['reportTemplateOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['reportTemplate']->value,'translate'=>false),$_smarty_tpl ) );?>

				<?php $_smarty_tpl->_subTemplateRender("app:common/loadingContainer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormArea(array('id'=>"reportTemplatesFormArea",'title'=>"manager.statistics.reports.defaultReportTemplates"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"aggregationColumnsFormArea",'title'=>"manager.statistics.reports.aggregationColumns"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormArea(array('id'=>"aggregationColumnsFormArea",'title'=>"manager.statistics.reports.aggregationColumns"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"aggregationColumns",'description'=>"manager.statistics.reports.optionalColumns.description",'list'=>true));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('for'=>"aggregationColumns",'description'=>"manager.statistics.reports.optionalColumns.description",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkboxgroup",'name'=>"aggregationColumns",'id'=>"aggregationColumns",'from'=>$_smarty_tpl->tpl_vars['aggregationOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['selectedAggregationOptions']->value,'translate'=>false),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('for'=>"aggregationColumns",'description'=>"manager.statistics.reports.optionalColumns.description",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormArea(array('id'=>"aggregationColumnsFormArea",'title'=>"manager.statistics.reports.aggregationColumns"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['showMonthInputs']->value || $_smarty_tpl->tpl_vars['showDayInputs']->value) {?>
		<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"reportTimeFilterArea",'title'=>"manager.statistics.reports.filters.byTime"));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormArea(array('id'=>"reportTimeFilterArea",'title'=>"manager.statistics.reports.filters.byTime"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"currentMonth",'list'=>true));
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormSection(array('for'=>"currentMonth",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'name'=>"timeFilterOption",'value'=>(defined('TIME_FILTER_OPTION_YESTERDAY') ? constant('TIME_FILTER_OPTION_YESTERDAY') : null),'id'=>"yesterday",'checked'=>$_smarty_tpl->tpl_vars['yesterday']->value,'label'=>"manager.statistics.reports.yesterday"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'name'=>"timeFilterOption",'value'=>(defined('TIME_FILTER_OPTION_CURRENT_MONTH') ? constant('TIME_FILTER_OPTION_CURRENT_MONTH') : null),'id'=>"currentMonth",'checked'=>$_smarty_tpl->tpl_vars['currentMonth']->value,'label'=>"manager.statistics.reports.currentMonth"),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormSection(array('for'=>"currentMonth",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.statistics.reports.filters.byTime.dimensionSelector",'list'=>true));
$_block_repeat=true;
echo $_block_plugin9->smartyFBVFormSection(array('title'=>"manager.statistics.reports.filters.byTime.dimensionSelector",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'name'=>"timeFilterOption",'value'=>(defined('TIME_FILTER_OPTION_RANGE_DAY') ? constant('TIME_FILTER_OPTION_RANGE_DAY') : null),'id'=>"rangeByDay",'inline'=>true,'checked'=>$_smarty_tpl->tpl_vars['byDay']->value,'label'=>"common.day"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'name'=>"timeFilterOption",'value'=>(defined('TIME_FILTER_OPTION_RANGE_MONTH') ? constant('TIME_FILTER_OPTION_RANGE_MONTH') : null),'id'=>"rangeByMonth",'checked'=>$_smarty_tpl->tpl_vars['byMonth']->value,'label'=>"common.month"),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin9->smartyFBVFormSection(array('title'=>"manager.statistics.reports.filters.byTime.dimensionSelector",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<div id="dateRangeElementsWrapper">
				<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.from"));
$_block_repeat=true;
echo $_block_plugin10->smartyFBVFormSection(array('title'=>"common.from"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo smarty_function_html_select_date(array('prefix'=>"dateStart",'time'=>$_smarty_tpl->tpl_vars['dateStart']->value,'all_extra'=>"class=\"selectMenu\"",'start_year'=>"0",'end_year'=>"+0",'field_order'=>'YMD'),$_smarty_tpl);?>

				<?php $_block_repeat=false;
echo $_block_plugin10->smartyFBVFormSection(array('title'=>"common.from"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.until"));
$_block_repeat=true;
echo $_block_plugin11->smartyFBVFormSection(array('title'=>"common.until"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo smarty_function_html_select_date(array('prefix'=>"dateEnd",'time'=>$_smarty_tpl->tpl_vars['dateEnd']->value,'all_extra'=>"class=\"selectMenu\"",'start_year'=>"0",'end_year'=>"+0",'field_order'=>'YMD'),$_smarty_tpl);?>

				<?php $_block_repeat=false;
echo $_block_plugin11->smartyFBVFormSection(array('title'=>"common.until"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			</div>
		<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormArea(array('id'=>"reportTimeFilterArea",'title'=>"manager.statistics.reports.filters.byTime"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "advancedOptionsContent", null);?>
		<?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"columnsFormArea",'title'=>"manager.statistics.reports.columns"));
$_block_repeat=true;
echo $_block_plugin12->smartyFBVFormArea(array('id'=>"columnsFormArea",'title'=>"manager.statistics.reports.columns"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.statistics.reports.columns.description"),$_smarty_tpl ) );?>
</p>
			<?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"manager.statistics.reports.optionalColumns.description"));
$_block_repeat=true;
echo $_block_plugin13->smartyFBVFormSection(array('description'=>"manager.statistics.reports.optionalColumns.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"columns[]",'id'=>"columns",'from'=>$_smarty_tpl->tpl_vars['columnsOptions']->value,'multiple'=>"multiple",'selected'=>$_smarty_tpl->tpl_vars['columns']->value,'translate'=>false,'required'=>true),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin13->smartyFBVFormSection(array('description'=>"manager.statistics.reports.optionalColumns.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin12->smartyFBVFormArea(array('id'=>"columnsFormArea",'title'=>"manager.statistics.reports.columns"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"filterFormArea",'title'=>"manager.statistics.reports.filters"));
$_block_repeat=true;
echo $_block_plugin14->smartyFBVFormArea(array('id'=>"filterFormArea",'title'=>"manager.statistics.reports.filters"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.statistics.reports.filters.byObject"));
$_block_repeat=true;
echo $_block_plugin15->smartyFBVFormSection(array('label'=>"manager.statistics.reports.filters.byObject"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.statistics.reports.filters.byObject.description"),$_smarty_tpl ) );?>
</p>
				<?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"manager.statistics.reports.objectType",'for'=>"objectTypes"));
$_block_repeat=true;
echo $_block_plugin16->smartyFBVFormSection(array('description'=>"manager.statistics.reports.objectType",'for'=>"objectTypes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"objectTypes[]",'id'=>"objectTypes",'from'=>$_smarty_tpl->tpl_vars['objectTypesOptions']->value,'multiple'=>"multiple",'selected'=>$_smarty_tpl->tpl_vars['objectTypes']->value,'translate'=>false),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin16->smartyFBVFormSection(array('description'=>"manager.statistics.reports.objectType",'for'=>"objectTypes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php if ($_smarty_tpl->tpl_vars['fileTypesOptions']->value) {?>
					<?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"common.fileType",'for'=>"fileTypes"));
$_block_repeat=true;
echo $_block_plugin17->smartyFBVFormSection(array('description'=>"common.fileType",'for'=>"fileTypes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"fileTypes[]",'id'=>"fileTypes",'from'=>$_smarty_tpl->tpl_vars['fileTypesOptions']->value,'multiple'=>"multiple",'selected'=>$_smarty_tpl->tpl_vars['fileTypes']->value,'translate'=>false),$_smarty_tpl ) );?>

					<?php $_block_repeat=false;
echo $_block_plugin17->smartyFBVFormSection(array('description'=>"common.fileType",'for'=>"fileTypes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php }?>

				<?php $_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"manager.statistics.reports.objectId",'for'=>"objectIds"));
$_block_repeat=true;
echo $_block_plugin18->smartyFBVFormSection(array('description'=>"manager.statistics.reports.objectId",'for'=>"objectIds"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'name'=>"objectIds",'id'=>"objectIds",'value'=>$_smarty_tpl->tpl_vars['objectIds']->value,'label'=>"manager.statistics.reports.objectId.label"),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin18->smartyFBVFormSection(array('description'=>"manager.statistics.reports.objectId",'for'=>"objectIds"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_repeat=false;
echo $_block_plugin15->smartyFBVFormSection(array('label'=>"manager.statistics.reports.filters.byObject"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

			<?php if ($_smarty_tpl->tpl_vars['countriesOptions']->value) {?>
				<?php $_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.statistics.reports.filters.byLocation"));
$_block_repeat=true;
echo $_block_plugin19->smartyFBVFormSection(array('label'=>"manager.statistics.reports.filters.byLocation"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.statistics.reports.filters.byLocation.description"),$_smarty_tpl ) );?>
</p>
					<?php $_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"common.country",'for'=>"countries"));
$_block_repeat=true;
echo $_block_plugin20->smartyFBVFormSection(array('description'=>"common.country",'for'=>"countries"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"countries[]",'id'=>"countries",'from'=>$_smarty_tpl->tpl_vars['countriesOptions']->value,'multiple'=>"multiple",'selected'=>$_smarty_tpl->tpl_vars['countries']->value,'translate'=>false),$_smarty_tpl ) );?>

					<?php $_block_repeat=false;
echo $_block_plugin20->smartyFBVFormSection(array('description'=>"common.country",'for'=>"countries"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php if ($_smarty_tpl->tpl_vars['showRegionInput']->value) {?>
						<?php $_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"manager.statistics.region",'for'=>"regions"));
$_block_repeat=true;
echo $_block_plugin21->smartyFBVFormSection(array('description'=>"manager.statistics.region",'for'=>"regions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"regions[]",'id'=>"regions",'from'=>$_smarty_tpl->tpl_vars['regionsOptions']->value,'multiple'=>"multiple",'selected'=>$_smarty_tpl->tpl_vars['regions']->value,'translate'=>false),$_smarty_tpl ) );?>

						<?php $_block_repeat=false;
echo $_block_plugin21->smartyFBVFormSection(array('description'=>"manager.statistics.region",'for'=>"regions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['showCityInput']->value) {?>
						<?php $_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"manager.statistics.city",'for'=>"cityNames"));
$_block_repeat=true;
echo $_block_plugin22->smartyFBVFormSection(array('description'=>"manager.statistics.city",'for'=>"cityNames"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'name'=>"cityNames",'id'=>"cityNames",'value'=>$_smarty_tpl->tpl_vars['cityNames']->value,'label'=>"manager.statistics.reports.cities.label"),$_smarty_tpl ) );?>

						<?php $_block_repeat=false;
echo $_block_plugin22->smartyFBVFormSection(array('description'=>"manager.statistics.city",'for'=>"cityNames"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php }?>
				<?php $_block_repeat=false;
echo $_block_plugin19->smartyFBVFormSection(array('label'=>"manager.statistics.reports.filters.byLocation"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php }?>

		<?php $_block_repeat=false;
echo $_block_plugin14->smartyFBVFormArea(array('id'=>"filterFormArea",'title'=>"manager.statistics.reports.filters"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"orderByFormArea",'title'=>"manager.statistics.reports.orderBy"));
$_block_repeat=true;
echo $_block_plugin23->smartyFBVFormArea(array('id'=>"orderByFormArea",'title'=>"manager.statistics.reports.orderBy"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"manager.statistics.reports.optionalColumns.description"));
$_block_repeat=true;
echo $_block_plugin24->smartyFBVFormSection(array('description'=>"manager.statistics.reports.optionalColumns.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<div style="clear:both"></div>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderColumnsOptions']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
					<?php $_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin25, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin25->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"orderByColumn[]",'id'=>"orderByColumn-".((string)$_smarty_tpl->tpl_vars['key']->value),'from'=>$_smarty_tpl->tpl_vars['orderColumnsOptions']->value,'defaultValue'=>0,'defaultLabel'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "manager.statistics.reports.columns" )),'selected'=>$_smarty_tpl->tpl_vars['orderByColumn']->value,'translate'=>false),$_smarty_tpl ) );?>

					<?php $_block_repeat=false;
echo $_block_plugin25->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php $_block_plugin26 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin26, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin26->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"orderByDirection[]",'id'=>"orderByDirection-".((string)$_smarty_tpl->tpl_vars['key']->value),'from'=>$_smarty_tpl->tpl_vars['orderDirectionsOptions']->value,'defaultValue'=>0,'defaultLabel'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "manager.statistics.reports.orderDir" )),'selected'=>$_smarty_tpl->tpl_vars['orderByDirection']->value,'translate'=>false),$_smarty_tpl ) );?>

					<?php $_block_repeat=false;
echo $_block_plugin26->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<div style="clear:both"></div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php $_block_repeat=false;
echo $_block_plugin24->smartyFBVFormSection(array('description'=>"manager.statistics.reports.optionalColumns.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin23->smartyFBVFormArea(array('id'=>"orderByFormArea",'title'=>"manager.statistics.reports.orderBy"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

	<div id="advancedOptionsWrapper" class="left full">
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/extrasOnDemand.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"advancedOptionsExtras",'widgetWrapper'=>"#advancedOptionsWrapper",'moreDetailsText'=>"manager.statistics.reports.advancedOptions",'lessDetailsText'=>"manager.statistics.reports.advancedOptions.hide",'extraContent'=>$_smarty_tpl->tpl_vars['advancedOptionsContent']->value), 0, false);
?>
	</div>

	<?php $_block_plugin27 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin27, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"reportUrlFormArea",'title'=>"manager.statistics.reports.reportUrl"));
$_block_repeat=true;
echo $_block_plugin27->smartyFBVFormArea(array('id'=>"reportUrlFormArea",'title'=>"manager.statistics.reports.reportUrl"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin28->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'name'=>"reportUrl",'id'=>"reportUrl",'value'=>$_smarty_tpl->tpl_vars['reportUrl']->value,'label'=>"manager.statistics.reports.reportUrl.label"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin28->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin27->smartyFBVFormArea(array('id'=>"reportUrlFormArea",'title'=>"manager.statistics.reports.reportUrl"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"reportGeneratorFormSubmit",'submitText'=>"manager.statistics.reports.generateReport",'hideCancel'=>true),$_smarty_tpl ) );?>

</form>
<?php }
}
