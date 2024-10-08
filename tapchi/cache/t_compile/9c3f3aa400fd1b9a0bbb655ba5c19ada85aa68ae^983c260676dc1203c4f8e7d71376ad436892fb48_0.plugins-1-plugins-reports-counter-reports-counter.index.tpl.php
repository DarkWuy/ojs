<?php
/* Smarty version 4.1.0, created on 2023-05-12 18:40:29
  from 'plugins-1-plugins-reports-counter-reports-counter:index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_645e6bfd9cb802_13370631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983c260676dc1203c4f8e7d71376ad436892fb48' => 
    array (
      0 => 'plugins-1-plugins-reports-counter-reports-counter:index.tpl',
      1 => 1675470231,
      2 => 'plugins-1-plugins-reports-counter-reports-counter',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645e6bfd9cb802_13370631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54966447645e6bfd9b12d2_21209933', "page");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_54966447645e6bfd9b12d2_21209933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_54966447645e6bfd9b12d2_21209933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.reports.counter"),$_smarty_tpl ) );?>

	</h1>

	<div class="app__contentPanel">
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.reports.counter.description"),$_smarty_tpl ) );?>
</p>
		<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.reports.counter.release"),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['release']->value;?>
</h2>
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available']->value, 'reportfile', false, 'report');
$_smarty_tpl->tpl_vars['reportfile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['report']->value => $_smarty_tpl->tpl_vars['reportfile']->value) {
$_smarty_tpl->tpl_vars['reportfile']->do_else = false;
?>
				<li>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>mb_strtolower("plugins.reports.counter.".((string)$_smarty_tpl->tpl_vars['report']->value).".title", 'UTF-8')),$_smarty_tpl ) );?>
: <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['years']->value, 'year');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>&nbsp;&nbsp;<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"reports",'path'=>"report",'pluginName'=>$_smarty_tpl->tpl_vars['pluginName']->value,'type'=>"fetch",'release'=>$_smarty_tpl->tpl_vars['release']->value,'report'=>$_smarty_tpl->tpl_vars['report']->value,'year'=>$_smarty_tpl->tpl_vars['year']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['year']->value ));?>
</a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>

		<?php if ($_smarty_tpl->tpl_vars['showLegacy']->value) {?>
		<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.reports.counter.olderReports"),$_smarty_tpl ) );?>
</h2>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.reports.counter.1a.introduction"),$_smarty_tpl ) );?>
</p>
		<ul>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.reports.counter.1a.title"),$_smarty_tpl ) );
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['years']->value, 'year');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>&nbsp;&nbsp;<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"reports",'path'=>"report",'pluginName'=>$_smarty_tpl->tpl_vars['pluginName']->value,'type'=>"report",'year'=>$_smarty_tpl->tpl_vars['year']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['year']->value ));?>
</a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></li>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.reports.counter.1a.xml"),$_smarty_tpl ) );?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['years']->value, 'year');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>&nbsp;&nbsp;<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"reports",'path'=>"report",'pluginName'=>$_smarty_tpl->tpl_vars['pluginName']->value,'type'=>"reportxml",'year'=>$_smarty_tpl->tpl_vars['year']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['year']->value ));?>
</a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></li>
		</ul>

		<?php if ($_smarty_tpl->tpl_vars['legacyYears']->value) {?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.reports.counter.legacyStats"),$_smarty_tpl ) );?>
</p>
			<ul>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.reports.counter.1a.title"),$_smarty_tpl ) );
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['legacyYears']->value, 'year');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>&nbsp;&nbsp;<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"reports",'path'=>"report",'pluginName'=>$_smarty_tpl->tpl_vars['pluginName']->value,'type'=>"report",'year'=>$_smarty_tpl->tpl_vars['year']->value,'useOldCounterStats'=>true),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['year']->value ));?>
</a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.reports.counter.1a.xml"),$_smarty_tpl ) );?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['legacyYears']->value, 'year');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>&nbsp;&nbsp;<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"reports",'path'=>"report",'pluginName'=>$_smarty_tpl->tpl_vars['pluginName']->value,'type'=>"reportxml",'year'=>$_smarty_tpl->tpl_vars['year']->value,'useOldCounterStats'=>true),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['year']->value ));?>
</a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></li>
			</ul>
		<?php }?>
		<?php }?>
	</div>
<?php
}
}
/* {/block "page"} */
}
