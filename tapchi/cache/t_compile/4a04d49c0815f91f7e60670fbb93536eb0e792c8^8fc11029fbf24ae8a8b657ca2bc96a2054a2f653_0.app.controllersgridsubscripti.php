<?php
/* Smarty version 4.1.0, created on 2023-04-25 17:11:08
  from 'app:controllersgridsubscripti' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6447ed8cdc89d6_91521253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fc11029fbf24ae8a8b657ca2bc96a2054a2f653' => 
    array (
      0 => 'app:controllersgridsubscripti',
      1 => 1675470231,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6447ed8cdc89d6_91521253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('formId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "filterForm-",$_smarty_tpl->tpl_vars['grid']->value->getId() )));
echo '<script'; ?>
 type="text/javascript">
	// Attach the form handler to the form.
	$('#<?php echo $_smarty_tpl->tpl_vars['formId']->value;?>
').pkpHandler('$.pkp.controllers.form.ClientFormHandler',
		{
			trackFormChanges: false
		}
	);
<?php echo '</script'; ?>
>
<form class="pkp_form filter" id="<?php echo $_smarty_tpl->tpl_vars['formId']->value;?>
" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"fetchGrid"),$_smarty_tpl ) );?>
" method="post">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"subscriptionsSearchFormArea"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"subscriptionsSearchFormArea"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.search",'for'=>"search"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"common.search",'for'=>"search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"searchField",'from'=>$_smarty_tpl->tpl_vars['filterData']->value['fieldOptions'],'selected'=>$_smarty_tpl->tpl_vars['filterSelectionData']->value['searchField'],'inline'=>true,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"searchMatch",'from'=>$_smarty_tpl->tpl_vars['filterData']->value['matchOptions'],'selected'=>$_smarty_tpl->tpl_vars['filterSelectionData']->value['searchMatch'],'inline'=>true,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"search",'name'=>"search",'id'=>"search",'value'=>$_smarty_tpl->tpl_vars['filterSelectionData']->value['search'],'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'inline'=>"true"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"common.search",'for'=>"search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('hideCancel'=>true,'submitText'=>"common.search"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"subscriptionsSearchFormArea"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</form>
<?php }
}
