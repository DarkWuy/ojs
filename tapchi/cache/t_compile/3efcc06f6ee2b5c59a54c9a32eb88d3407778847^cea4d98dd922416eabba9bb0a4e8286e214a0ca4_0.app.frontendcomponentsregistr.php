<?php
/* Smarty version 4.1.0, created on 2023-04-27 06:36:10
  from 'app:frontendcomponentsregistr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6449fbba4df059_76645509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cea4d98dd922416eabba9bb0a4e8286e214a0ca4' => 
    array (
      0 => 'app:frontendcomponentsregistr',
      1 => 1681396410,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6449fbba4df059_76645509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojs\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<fieldset class="mt-1">
		<div class="fields collapse show" id="user_profile_collapse">
		<div class="given_name mb-4 align-items-center">
			<label for="givenName" class="form-check-label label text-sm-end text-start">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.givenName"),$_smarty_tpl ) );?>

				<span class="required" aria-hidden="true">
					<!--i class="fas fa-link fa-sm"></i-->
				</span>
				<span class="pkp_screen_reader">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="">
				<input type="text" name="givenName" autocomplete="given-name" id="givenName" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['givenName']->value ));?>
" maxlength="255" required aria-required="true" class="form-control">
			</div>
		</div>
		<div class="family_name mb-4 align-items-center">
			<label for="familyName" class="form-check-label label">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.familyName"),$_smarty_tpl ) );?>

			</label>
			<div class="">
				<input type="text" name="familyName" autocomplete="family-name" id="familyName" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['familyName']->value ));?>
" maxlength="255" class="form-control">
			</div>
		</div>
		<div class="affiliation mb-4 align-items-center">
			<label for="affiliation" class="form-check-label label">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.affiliation"),$_smarty_tpl ) );?>

				<span class="required" aria-hidden="true">
					<!--i class="fas fa-link fa-sm"></i-->
				</span>
				<span class="pkp_screen_reader">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="">
				<input type="text" name="affiliation" id="affiliation" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['affiliation']->value ));?>
" required aria-required="true" class="form-control">
			</div>
		</div>
		<div class="country mb-4 align-items-center">
			<label for="country" class="form-check-label label">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.country"),$_smarty_tpl ) );?>

				<span class="required" aria-hidden="true">
					<!--i class="fas fa-link fa-sm"></i-->
				</span>
				<span class="pkp_screen_reader">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="">
				<select name="country" id="country" required aria-required="true" class="form-control">
					<option></option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['countries']->value,'selected'=>$_smarty_tpl->tpl_vars['country']->value),$_smarty_tpl);?>

				</select>
			</div>
		</div>
	</div>
</fieldset>

<fieldset class="">
		<div class="fields collapse show" id="user_login_collapse">
		<div class="email mb-4 align-items-center">
			<label for="email" class="form-check-label label text-sm-end text-start">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.email"),$_smarty_tpl ) );?>

				<span class="required" aria-hidden="true">
					<!--i class="fas fa-link fa-sm"></i-->
				</span>
				<span class="pkp_screen_reader">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="">
				<input type="email" name="email" id="email" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email']->value ));?>
" maxlength="90" required aria-required="true" autocomplete="email" class="form-control">
				<small class="form-helper"></small>
			</div>
		</div>
		<div class="username mb-4 align-items-center">
			<label for="username" class="form-check-label label text-sm-end text-start">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.username"),$_smarty_tpl ) );?>

				<span class="required" aria-hidden="true">
					<!--i class="fas fa-link fa-sm"></i-->
				</span>
				<span class="pkp_screen_reader">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="">
				<input type="text" name="username" id="username" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['username']->value ));?>
" maxlength="32" required aria-required="true" autocomplete="username" class="form-control">
				<small class="form-helper">
					<i class="fas fa-info-circle"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.register.usernameRestriction"),$_smarty_tpl ) );?>

				</small>
			</div>
		</div>
		<div class="password mb-4 align-items-center">
			<label for="password" class="form-check-label label text-sm-end text-start">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.password"),$_smarty_tpl ) );?>

				<span class="required" aria-hidden="true">
					<!--i class="fas fa-link fa-sm"></i-->
				</span>
				<span class="pkp_screen_reader">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="">
				<input type="password" name="password" id="password" password="true" maxlength="32" required aria-required="true" class="form-control">
				<small class="form-helper">
					<i class="fas fa-info-circle"></i>
					<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.register.form.passwordLengthRestriction"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
echo str_replace('{$length}',$_smarty_tpl->tpl_vars['minPasswordLength']->value,$_prefixVariable1);?>

				</small>
			</div>
		</div>
		<div class="password mb-4 align-items-center">
			<label for="password2" class="form-check-label label text-sm-end text-start">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.repeatPassword"),$_smarty_tpl ) );?>

				<span class="required" aria-hidden="true">
					<!--i class="fas fa-link fa-sm"></i-->
				</span>
				<span class="pkp_screen_reader">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.required"),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="">
				<input type="password" name="password2" id="password2" password="true" maxlength="32" required aria-required="true" class="form-control">
			</div>
		</div>
	</div>
</fieldset>
<?php }
}
