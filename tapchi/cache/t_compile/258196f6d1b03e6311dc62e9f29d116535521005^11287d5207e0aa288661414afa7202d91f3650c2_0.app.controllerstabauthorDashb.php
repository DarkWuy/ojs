<?php
/* Smarty version 4.1.0, created on 2023-04-27 06:45:45
  from 'app:controllerstabauthorDashb' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6449fdf9b1b240_25248981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11287d5207e0aa288661414afa7202d91f3650c2' => 
    array (
      0 => 'app:controllerstabauthorDashb',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6449fdf9b1b240_25248981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'submissionFilesGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.files.submission.AuthorSubmissionDetailsFilesGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"submissionFilesGridDiv",'url'=>$_smarty_tpl->tpl_vars['submissionFilesGridUrl']->value),$_smarty_tpl ) );?>


<div id="documentsContent">
	<!-- Display queries grid -->
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'queriesGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.queries.QueriesGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>(defined('WORKFLOW_STAGE_ID_SUBMISSION') ? constant('WORKFLOW_STAGE_ID_SUBMISSION') : null),'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"queriesGrid",'url'=>$_smarty_tpl->tpl_vars['queriesGridUrl']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
