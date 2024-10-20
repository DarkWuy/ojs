<?php
/* Smarty version 4.1.0, created on 2024-10-20 16:20:46
  from 'app:frontendcomponentsnavigat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_671511be312124_65237198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1691b77e190980db1df5625a01cc71407940ba9a' => 
    array (
      0 => 'app:frontendcomponentsnavigat',
      1 => 1729434023,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671511be312124_65237198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tapchi1\\Newfolder\\tapchi\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('locales', $_smarty_tpl->tpl_vars['currentJournal']->value->getSupportedLocaleNames());?>

<ul class="navbar-nav mr-auto flex-row <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ulClass']->value ));?>
">
		<li class="nav-item <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['liClass']->value ));?>
">
		<div class="dropdown">
			<?php if (!$_smarty_tpl->tpl_vars['showIcons']->value) {?>
				<a href="#" class="nav-link" type="button" id="dropdownSidebar" data-mdb-toggle="dropdown" aria-expanded="false">
					<i class="fas fa-globe"></i>
				</a>
			<?php } else { ?>
				<a href="#" class="nav-link dropdown-toggle" type="button" id="dropdownSidebar" data-mdb-toggle="dropdown" aria-expanded="false">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.language"),$_smarty_tpl ) );?>

				</a>
			<?php }?>
			<ul class="dropdown-menu dropdown-menu-xxl-end dropdown-menu-light" aria-labelledby="dropdownSidebar">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locales']->value, 'localeName', false, 'localeKey');
$_smarty_tpl->tpl_vars['localeName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['localeKey']->value => $_smarty_tpl->tpl_vars['localeName']->value) {
$_smarty_tpl->tpl_vars['localeName']->do_else = false;
?>
					<li class="locale_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localeKey']->value ));
if ($_smarty_tpl->tpl_vars['localeKey']->value == $_smarty_tpl->tpl_vars['currentLocale']->value) {?> current<?php }?>" lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['localeKey']->value,"_","-");?>
">
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"user",'op'=>"setLocale",'path'=>$_smarty_tpl->tpl_vars['localeKey']->value,'source'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
" class="dropdown-item">
							<?php echo $_smarty_tpl->tpl_vars['localeName']->value;?>

						</a>
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</li>

		<li class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['liClass']->value ));?>
 nav-item">
		<?php if (!$_smarty_tpl->tpl_vars['showIcons']->value) {?>
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"search"),$_smarty_tpl ) );?>
" class="nav-link mx-1">
				<i class="fas fa-search"></i>
			</a>
		<?php } else { ?>
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"search"),$_smarty_tpl ) );?>
" class="nav-link">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.search"),$_smarty_tpl ) );?>

			</a>
		<?php }?>
	</li>
</ul><?php }
}
