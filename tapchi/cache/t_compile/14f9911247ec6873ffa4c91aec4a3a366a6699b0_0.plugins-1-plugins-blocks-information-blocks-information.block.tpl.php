<?php
/* Smarty version 4.1.0, created on 2023-04-25 16:48:47
  from 'plugins-1-plugins-blocks-information-blocks-information:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6447e84f996687_65758185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14f9911247ec6873ffa4c91aec4a3a366a6699b0' => 
    array (
      0 => 'plugins-1-plugins-blocks-information-blocks-information:block.tpl',
      1 => 1681396410,
      2 => 'plugins-1-plugins-blocks-information-blocks-information',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6447e84f996687_65758185 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['forReaders']->value) || !empty($_smarty_tpl->tpl_vars['forAuthors']->value) || !empty($_smarty_tpl->tpl_vars['forLibrarians']->value)) {?>
	<!--li>
		<hr class="dropdown-divider" />
	</li-->
	<?php if (!empty($_smarty_tpl->tpl_vars['forReaders']->value)) {?>
		<li>
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"information",'op'=>"readers"),$_smarty_tpl ) );?>
" class="font-monospace">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.infoForReaders"),$_smarty_tpl ) );?>

			</a>
		</li>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['forAuthors']->value)) {?>
		<li>
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"information",'op'=>"authors"),$_smarty_tpl ) );?>
" class="font-monospace">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.infoForAuthors"),$_smarty_tpl ) );?>

			</a>
		</li>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['forLibrarians']->value)) {?>
		<li>
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"information",'op'=>"librarians"),$_smarty_tpl ) );?>
" class="font-monospace">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.infoForLibrarians"),$_smarty_tpl ) );?>

			</a>
		</li>
	<?php }?>
	<!--li>
		<hr class="dropdown-divider" />
	</li-->
<?php }
}
}
