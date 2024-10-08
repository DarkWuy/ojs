<?php
/* Smarty version 4.1.0, created on 2023-06-24 07:54:23
  from 'app:controllersgridusersrevie' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6496850f0b27b0_05973748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4151d2f23abb290c030b4b0724cc83609055203' => 
    array (
      0 => 'app:controllersgridusersrevie',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotificationContent.tpl' => 1,
  ),
),false)) {
function content_6496850f0b27b0_05973748 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_notification" id="noFilesWarning" style="display: none;">
	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotificationContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>'noFilesWarningContent','notificationStyleClass'=>'notifyWarning','notificationTitle'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "editor.submission.noReviewerFilesSelected" )),'notificationContents'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "editor.submission.noReviewerFilesSelected.details" ))), 0, false);
?>
</div>
<?php }
}
