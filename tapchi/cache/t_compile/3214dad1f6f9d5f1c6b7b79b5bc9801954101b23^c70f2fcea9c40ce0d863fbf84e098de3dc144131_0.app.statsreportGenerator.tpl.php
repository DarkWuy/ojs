<?php
/* Smarty version 4.1.0, created on 2023-05-12 16:12:57
  from 'app:statsreportGenerator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_645e496909f946_43965924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c70f2fcea9c40ce0d863fbf84e098de3dc144131' => 
    array (
      0 => 'app:statsreportGenerator.tpl',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645e496909f946_43965924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161784322645e4969094813_52823864', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_161784322645e4969094813_52823864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_161784322645e4969094813_52823864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.statistics.reports.customReportGenerator"),$_smarty_tpl ) );?>

	</h1>

	<div class="app__contentPanel">
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'reportGeneratorUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"statistics.ReportGeneratorHandler",'op'=>"fetchReportGenerator",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"reportGeneratorContainer",'url'=>((string)$_smarty_tpl->tpl_vars['reportGeneratorUrl']->value)),$_smarty_tpl ) );?>

	</div>
<?php
}
}
/* {/block "page"} */
}
