<?php
/* Smarty version 4.1.0, created on 2023-04-27 06:39:59
  from 'app:frontendpagesuserRegister' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6449fc9fe12ae3_27942344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3127183f2c0cb1674f3daa6e4b1a3ea472dd8c13' => 
    array (
      0 => 'app:frontendpagesuserRegister',
      1 => 1681396410,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6449fc9fe12ae3_27942344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row d-flex justify-content-center align-items-center">
	<div class="col-lg-7 col-md-12 bg-white overflow-auto">
		<div class="page page_register_complete">
			<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>$_smarty_tpl->tpl_vars['pageTitle']->value), 0, false);
?>

			<div class="d-flex justify-content-center mb-3">
				<?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="navbar-brand is_img">
						<img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['uploadName'],"url" ));?>
" width="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['width'] ));?>
" height="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['height'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] != '') {?>alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] ));?>
"<?php }?> class="img-fluid" style="max-width: 180px;"/>
					</a>
				<?php }?>
			</div>

			<h1 class="text-center">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );?>

			</h1>
			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.registrationComplete.instructions"),$_smarty_tpl ) );?>

			</p>

			<div class="row">
				<?php if (array_intersect(array(ROLE_ID_MANAGER,ROLE_ID_SUB_EDITOR,ROLE_ID_ASSISTANT,ROLE_ID_REVIEWER),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
				<div class="col-lg-6 col-md-6 col-sm-6 col-12 item-mb">
					<div class="view_submissions bg-body text-center text-uppercase text-truncate shadow pt-5 pb-5 mb-4 rounded-5">
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submissions"),$_smarty_tpl ) );?>
">
							<i class="fas fa-link fa-3x"></i><br/><br/>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.registrationComplete.manageSubmissions"),$_smarty_tpl ) );?>

						</a>
					</div>
				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['currentContext']->value) {?>
				<div class="col-lg-6 col-md-6 col-sm-6 col-12 item-mb">
					<div class="new_submission bg-body text-center text-uppercase text-truncate shadow pt-5 pb-5 mb-4 rounded-5">
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submission",'op'=>"wizard"),$_smarty_tpl ) );?>
">
							<i class="fas fa-pen-nib fa-3x"></i><br/><br/>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.registrationComplete.newSubmission"),$_smarty_tpl ) );?>

						</a>
					</div>
				</div>
				<?php }?>
				<div class="col-lg-6 col-md-6 col-sm-6 col-12 item-mb">
					<div class="edit_profile bg-body text-center text-uppercase text-truncate shadow pt-5 pb-5 mb-4 rounded-5">
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"user",'op'=>"profile"),$_smarty_tpl ) );?>
">
							<i class="fas fa-user-circle fa-3x"></i><br/><br/>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.editMyProfile"),$_smarty_tpl ) );?>

						</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-12 item-mb">
					<div class="browse bg-body text-center text-uppercase text-truncate shadow pt-5 pb-5 mb-4 rounded-5">
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index"),$_smarty_tpl ) );?>
">
							<i class="fas fa-book fa-3x"></i><br/><br/>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.registrationComplete.continueBrowsing"),$_smarty_tpl ) );?>

						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
