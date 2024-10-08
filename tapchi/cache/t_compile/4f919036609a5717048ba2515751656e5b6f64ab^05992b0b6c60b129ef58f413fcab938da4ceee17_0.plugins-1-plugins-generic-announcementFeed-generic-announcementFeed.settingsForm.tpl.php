<?php
/* Smarty version 4.1.0, created on 2023-06-01 04:08:53
  from 'plugins-1-plugins-generic-announcementFeed-generic-announcementFeed:settingsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6477fdb56d9ed5_76727827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05992b0b6c60b129ef58f413fcab938da4ceee17' => 
    array (
      0 => 'plugins-1-plugins-generic-announcementFeed-generic-announcementFeed:settingsForm.tpl',
      1 => 1675470231,
      2 => 'plugins-1-plugins-generic-announcementFeed-generic-announcementFeed',
    ),
  ),
  'includes' => 
  array (
    'app:common/formErrors.tpl' => 1,
  ),
),false)) {
function content_6477fdb56d9ed5_76727827 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#announcementFeedSettingsForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="announcementFeedSettingsForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'op'=>"manage",'category'=>"generic",'plugin'=>$_smarty_tpl->tpl_vars['pluginName']->value,'verb'=>"settings",'save'=>true),$_smarty_tpl ) );?>
">
	<div id="announcementFeedSettings">
		<div id="description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.announcementfeed.description"),$_smarty_tpl ) );?>
</div>

		<div class="separator">&nbsp;</div>

		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.announcementfeed.settings"),$_smarty_tpl ) );?>
</h3>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

		<?php $_smarty_tpl->_subTemplateRender("app:common/formErrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"webFeedSettingsFormArea"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"webFeedSettingsFormArea"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"displayPage-all",'name'=>"displayPage",'value'=>"all",'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPage']->value,"all" )),'label'=>"plugins.generic.announcementfeed.settings.all"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"displayPage-homepage",'name'=>"displayPage",'value'=>"homepage",'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPage']->value,"homepage" )),'label'=>"plugins.generic.announcementfeed.settings.homepage"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"displayPage-announcement",'name'=>"displayPage",'value'=>"announcement",'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPage']->value,"announcement" )),'label'=>"plugins.generic.announcementfeed.settings.announcement"),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

			<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.announcementfeed.settings.recentAnnouncements1"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"recentItems",'value'=>$_smarty_tpl->tpl_vars['recentItems']->value,'label'=>"plugins.generic.announcementfeed.settings.recentAnnouncements2",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"webFeedSettingsFormArea"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array(),$_smarty_tpl ) );?>


		<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
	</div>
</form>
<?php }
}
