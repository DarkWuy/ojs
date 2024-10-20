<?php
/* Smarty version 4.1.0, created on 2024-10-20 15:01:14
  from 'app:frontendcomponentsannounc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6714ff1a20db77_31870848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9462510335e36fd0c92bd371372fb9c9173699b4' => 
    array (
      0 => 'app:frontendcomponentsannounc',
      1 => 1729429009,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/announcement_summary.tpl' => 1,
  ),
),false)) {
function content_6714ff1a20db77_31870848 (Smarty_Internal_Template $_smarty_tpl) {
?>	<article class="obj_article_details">
	<div class="d-md-flex">
		<div class="main_entry">
<ul class="cmp_announcements">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
?>
		<li>
			<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/announcement_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div>
<div class="entry_details"> 	
						<div class="item published">
						 	<a href="https://scholar.google.com">
							<img src="https://scholar.google.com/intl/vi/scholar/images/1x/scholar_logo_64dp.png" style="width: 75%">
							</a>
							<hr class="my-4" />
							<a href="https://www.crossref.org">
							<img src="https://assets.crossref.org/logo/crossref-logo-200.svg" style="width: 75%">
							</a>
							<hr class="my-4" />
							<a href="https://kiemtratailieu.vn">
							<img src="https://kiemtratailieu.vn/wp-content/uploads/2021/11/logo-full-2-2.png" style="width: 75%">
							</a>
							</div>
							
		</div></div></div><?php }
}
