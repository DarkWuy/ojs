<?php
/* Smarty version 4.1.0, created on 2023-04-27 06:21:52
  from 'app:controllerstabworkflowsta' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6449f86092afd8_76046616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2809c06c8ddb23547415d73ac5d7fe0d8115ef40' => 
    array (
      0 => 'app:controllerstabworkflowsta',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6449f86092afd8_76046616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'stageParticipantGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.users.stageParticipant.StageParticipantGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "stageParticipantGridContainer-",$_smarty_tpl->tpl_vars['reviewRoundId']->value )),'url'=>$_smarty_tpl->tpl_vars['stageParticipantGridUrl']->value,'class'=>"pkp_participants_grid"),$_smarty_tpl ) );?>

<?php }
}
