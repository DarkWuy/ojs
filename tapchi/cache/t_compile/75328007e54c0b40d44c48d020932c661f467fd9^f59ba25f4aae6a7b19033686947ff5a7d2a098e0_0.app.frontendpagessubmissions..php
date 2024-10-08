<?php
/* Smarty version 4.1.0, created on 2023-04-27 05:49:24
  from 'app:frontendpagessubmissions.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6449f0c4c7ecc3_08649441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f59ba25f4aae6a7b19033686947ff5a7d2a098e0' => 
    array (
      0 => 'app:frontendpagessubmissions.',
      1 => 1681396410,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/editLink.tpl' => 4,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6449f0c4c7ecc3_08649441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"about.submissions"), 0, false);
?>

<div class="page page_submissions container">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"about.submissions"), 0, false);
?>
	

	<hr class="my-4">

	<div class="note note-warning">
		<?php if (count($_smarty_tpl->tpl_vars['sections']->value) == 0 || $_smarty_tpl->tpl_vars['currentContext']->value->getData('disableSubmissions')) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"author.submit.notAccepting"),$_smarty_tpl ) );?>

		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value) {?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "newSubmission", null);?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submission",'op'=>"wizard"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.newSubmission"),$_smarty_tpl ) );?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "viewSubmissions", null);?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submissions"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.viewSubmissions"),$_smarty_tpl ) );?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.submissionActions",'newSubmission'=>$_smarty_tpl->tpl_vars['newSubmission']->value,'viewSubmissions'=>$_smarty_tpl->tpl_vars['viewSubmissions']->value),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "login", null);?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"login"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.login"),$_smarty_tpl ) );?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "register", null);?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"user",'op'=>"register"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.register"),$_smarty_tpl ) );?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.registrationRequired",'login'=>$_smarty_tpl->tpl_vars['login']->value,'register'=>$_smarty_tpl->tpl_vars['register']->value),$_smarty_tpl ) );?>

			<?php }?>
		<?php }?>
	</div>
	
	<hr class="my-4">

	<?php if ($_smarty_tpl->tpl_vars['submissionChecklist']->value) {?>
		<div class="">
			<h4>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.submissionPreparationChecklist"),$_smarty_tpl ) );?>

				<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"workflow",'anchor'=>"submission/submissionChecklist",'sectionTitleKey'=>"about.submissionPreparationChecklist"), 0, false);
?>
			</h4>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.submissionPreparationChecklist.description"),$_smarty_tpl ) );?>

			<ul class="">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submissionChecklist']->value, 'checklistItem');
$_smarty_tpl->tpl_vars['checklistItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['checklistItem']->value) {
$_smarty_tpl->tpl_vars['checklistItem']->do_else = false;
?>
					<li class="">
						<?php echo nl2br($_smarty_tpl->tpl_vars['checklistItem']->value['content']);?>

					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('authorGuidelines')) {?>
	<hr class="my-4">
	<div class="author_guidelines" id="authorGuidelines">
		<h4>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.authorGuidelines"),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"workflow",'anchor'=>"submission/authorGuidelines",'sectionTitleKey'=>"about.authorGuidelines"), 0, true);
?>
		</h4>
		<?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('authorGuidelines');?>

	</div>
	<?php }?>

	<hr class="my-4">

	<h4>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"section.sections"),$_smarty_tpl ) );?>

	</h4>
	<ol>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['section']->value->getLocalizedPolicy()) {?>
			<li class="section_policy">
				<h6 style="text-transform: capitalize !important;"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle() ));?>
</h6>
				<?php echo $_smarty_tpl->tpl_vars['section']->value->getLocalizedPolicy();?>

				<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value) {?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sectionSubmissionUrl", null);?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submission",'op'=>"wizard",'sectionId'=>$_smarty_tpl->tpl_vars['section']->value->getId()),$_smarty_tpl ) );?>

					<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<p>
												<a href="<?php echo $_smarty_tpl->tpl_vars['sectionSubmissionUrl']->value;?>
" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.material.makeSubmission"),$_smarty_tpl ) );?>
</a>
					</p>
				<?php }?>
			</li>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol>

	<?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('copyrightNotice')) {?>
		<hr class="my-4">
		<div class="copyright_notice">
			<h4>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.copyrightNotice"),$_smarty_tpl ) );?>

				<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"workflow",'anchor'=>"submission/authorGuidelines",'sectionTitleKey'=>"about.copyrightNotice"), 0, true);
?>
			</h4>
			<?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('copyrightNotice');?>

		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('privacyStatement')) {?>
	<hr class="my-4">
	<div class="privacy_statement" id="privacyStatement">
		<h4>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.privacyStatement"),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"website",'anchor'=>"setup/privacy",'sectionTitleKey'=>"about.privacyStatement"), 0, true);
?>
		</h4>
		<?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('privacyStatement');?>

	</div>
	<?php }?>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
