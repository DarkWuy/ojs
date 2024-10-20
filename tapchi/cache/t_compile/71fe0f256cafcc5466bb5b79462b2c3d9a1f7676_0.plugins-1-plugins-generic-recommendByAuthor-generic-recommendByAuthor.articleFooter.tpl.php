<?php
/* Smarty version 4.1.0, created on 2024-10-20 17:17:14
  from 'plugins-1-plugins-generic-recommendByAuthor-generic-recommendByAuthor:articleFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_67151efabcee29_04339449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71fe0f256cafcc5466bb5b79462b2c3d9a1f7676' => 
    array (
      0 => 'plugins-1-plugins-generic-recommendByAuthor-generic-recommendByAuthor:articleFooter.tpl',
      1 => 1729437430,
      2 => 'plugins-1-plugins-generic-recommendByAuthor-generic-recommendByAuthor',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67151efabcee29_04339449 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="articlesBySameAuthorList">
	<?php if ($_smarty_tpl->tpl_vars['noMetricSelected']->value) {?>
		<h3 style="color: #0066cc;"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.recommendByAuthor.heading"),$_smarty_tpl ) );?>
</strong></h3>
		<p style="color: #666666;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.recommendByAuthor.noMetric"),$_smarty_tpl ) );?>
</p>
	<?php } else { ?>
		<?php if (!$_smarty_tpl->tpl_vars['articlesBySameAuthor']->value->wasEmpty()) {?>
			<h3 style="color: #0066cc;"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.recommendByAuthor.heading"),$_smarty_tpl ) );?>
</strong></h3>

			<ul>
				<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'articlesBySameAuthor','item'=>'articleBySameAuthor'));
$_block_repeat=true;
echo $_block_plugin1->smartyIterate(array('from'=>'articlesBySameAuthor','item'=>'articleBySameAuthor'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_smarty_tpl->_assignInScope('submission', $_smarty_tpl->tpl_vars['articleBySameAuthor']->value['publishedSubmission']);?>
					<?php $_smarty_tpl->_assignInScope('article', $_smarty_tpl->tpl_vars['articleBySameAuthor']->value['article']);?>
					<?php $_smarty_tpl->_assignInScope('issue', $_smarty_tpl->tpl_vars['articleBySameAuthor']->value['issue']);?>
					<?php $_smarty_tpl->_assignInScope('journal', $_smarty_tpl->tpl_vars['articleBySameAuthor']->value['journal']);?>
					<li>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>
,
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['submission']->value->getBestId()),$_smarty_tpl ) );?>
">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

						</a>,
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['journal']->value->getLocalizedName() ));?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ));?>

						</a>
					</li>
				<?php $_block_repeat=false;
echo $_block_plugin1->smartyIterate(array('from'=>'articlesBySameAuthor','item'=>'articleBySameAuthor'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			</ul>
			<div id="articlesBySameAuthorPages">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_links'][0], array( array('anchor'=>"articlesBySameAuthor",'iterator'=>$_smarty_tpl->tpl_vars['articlesBySameAuthor']->value,'name'=>"articlesBySameAuthor"),$_smarty_tpl ) );?>

			</div>
		<?php }?>
	<?php }?>
</div>
<?php }
}
