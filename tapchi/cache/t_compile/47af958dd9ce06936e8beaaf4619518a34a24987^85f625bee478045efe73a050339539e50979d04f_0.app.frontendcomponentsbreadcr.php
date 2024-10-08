<?php
/* Smarty version 4.1.0, created on 2023-05-04 04:15:56
  from 'app:frontendcomponentsbreadcr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6453155c3ee4b4_04257012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85f625bee478045efe73a050339539e50979d04f' => 
    array (
      0 => 'app:frontendcomponentsbreadcr',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6453155c3ee4b4_04257012 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="cmp_breadcrumbs cmp_breadcrumbs_catalog" role="navigation" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.breadcrumbLabel"),$_smarty_tpl ) );?>
">
	<ol>
		<li>
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null)),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.homepageNavigationLabel"),$_smarty_tpl ) );?>

			</a>
			<span class="separator"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.breadcrumbSeparator"),$_smarty_tpl ) );?>
</span>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['parent']->value) {?>
			<li>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>$_smarty_tpl->tpl_vars['type']->value,'path'=>$_smarty_tpl->tpl_vars['parent']->value->getPath()),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['parent']->value->getLocalizedTitle() ));?>

				</a>
				<span class="separator"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.breadcrumbSeparator"),$_smarty_tpl ) );?>
</span>
			</li>
		<?php }?>
		<li class="current" aria-current="page">
			<span aria-current="page">
				<?php if ($_smarty_tpl->tpl_vars['currentTitleKey']->value) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['currentTitleKey']->value),$_smarty_tpl ) );?>

				<?php } else { ?>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTitle']->value ));?>

				<?php }?>
			</span>
		</li>
	</ol>
</nav>
<?php }
}
