<?php
/* Smarty version 4.1.0, created on 2023-05-04 04:15:56
  from 'app:frontendpagescatalogCateg' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6453155c3283d3_63769181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d0ca16a7c78afd59d26eb1b852e00f92f50a8d9' => 
    array (
      0 => 'app:frontendpagescatalogCateg',
      1 => 1675470231,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs_catalog.tpl' => 1,
    'app:frontend/objects/article_summary.tpl' => 1,
    'app:frontend/components/pagination.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6453155c3283d3_63769181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['category']->value->getLocalizedTitle()), 0, false);
?>

<div class="page page_catalog_category">

		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs_catalog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"category",'parent'=>$_smarty_tpl->tpl_vars['parentCategory']->value,'currentTitle'=>$_smarty_tpl->tpl_vars['category']->value->getLocalizedTitle()), 0, false);
?>
	<h1>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getLocalizedTitle() ));?>

	</h1>

		<div class="article_count">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.browseTitles",'numTitles'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl ) );?>

	</div>

		<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['category']->value->getImage());?>
	<?php $_smarty_tpl->_assignInScope('description', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getLocalizedDescription() )));?>
	<div class="about_section<?php if ($_smarty_tpl->tpl_vars['image']->value) {?> has_image<?php }
if ($_smarty_tpl->tpl_vars['description']->value) {?> has_description<?php }?>">
		<?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
			<div class="cover" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"catalog",'op'=>"fullSize",'type'=>"category",'id'=>$_smarty_tpl->tpl_vars['category']->value->getId()),$_smarty_tpl ) );?>
">
				<img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"catalog",'op'=>"thumbnail",'type'=>"category",'id'=>$_smarty_tpl->tpl_vars['category']->value->getId()),$_smarty_tpl ) );?>
" alt="null" />
			</div>
		<?php }?>
		<div class="description">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['description']->value ));?>

		</div>
	</div>

	<?php if (count($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
	<nav class="subcategories" role="navigation">
		<h2>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.category.subcategories"),$_smarty_tpl ) );?>

		</h2>
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
				<li>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"category",'path'=>$_smarty_tpl->tpl_vars['subcategory']->value->getPath()),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value->getLocalizedTitle() ));?>

					</a>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</nav>
	<?php }?>

	<h2 class="title">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.category.heading"),$_smarty_tpl ) );?>

	</h2>

		<?php if (empty($_smarty_tpl->tpl_vars['publishedSubmissions']->value)) {?>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.category.noItems"),$_smarty_tpl ) );?>
</p>
	<?php } else { ?>
		<ul class="cmp_article_list articles">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publishedSubmissions']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
				<li>
					<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/article_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['article']->value,'hideGalleys'=>true,'heading'=>"h3"), 0, true);
?>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>

				<?php if ($_smarty_tpl->tpl_vars['prevPage']->value > 1) {?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'prevUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"catalog",'op'=>"category",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getPath(),$_smarty_tpl->tpl_vars['prevPage']->value ))),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['prevPage']->value === 1) {?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'prevUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"catalog",'op'=>"category",'path'=>$_smarty_tpl->tpl_vars['category']->value->getPath()),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['nextPage']->value) {?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'nextUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"catalog",'op'=>"category",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getPath(),$_smarty_tpl->tpl_vars['nextPage']->value ))),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php }?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prevUrl'=>$_smarty_tpl->tpl_vars['prevUrl']->value,'nextUrl'=>$_smarty_tpl->tpl_vars['nextUrl']->value,'showingStart'=>$_smarty_tpl->tpl_vars['showingStart']->value,'showingEnd'=>$_smarty_tpl->tpl_vars['showingEnd']->value,'total'=>$_smarty_tpl->tpl_vars['total']->value), 0, false);
?>
	<?php }?>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
