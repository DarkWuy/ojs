<?php
/* Smarty version 4.1.0, created on 2023-06-23 18:24:43
  from 'app:frontendobjectsissuetoc.t' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6495c74b332e46_64567233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26de9c47ced54328a8eb56e39bb4d4079aa049c6' => 
    array (
      0 => 'app:frontendobjectsissuetoc.t',
      1 => 1687537454,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/notification.tpl' => 1,
    'app:frontend/objects/galley_link.tpl' => 1,
    'app:frontend/objects/article_summary.tpl' => 1,
  ),
),false)) {
function content_6495c74b332e46_64567233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojs\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (!$_smarty_tpl->tpl_vars['heading']->value) {?>
	<?php $_smarty_tpl->_assignInScope('heading', "h2");
}
$_smarty_tpl->_assignInScope('articleHeading', "h3");
if ($_smarty_tpl->tpl_vars['heading']->value == "h3") {?>
	<?php $_smarty_tpl->_assignInScope('articleHeading', "h4");
} elseif ($_smarty_tpl->tpl_vars['heading']->value == "h4") {?>
	<?php $_smarty_tpl->_assignInScope('articleHeading', "h5");
} elseif ($_smarty_tpl->tpl_vars['heading']->value == "h5") {?>
	<?php $_smarty_tpl->_assignInScope('articleHeading', "h6");
}
$_smarty_tpl->_assignInScope('horizontalRule', "<hr/>");?>
<div class="obj_issue_toc">

		<?php if (!$_smarty_tpl->tpl_vars['issue']->value->getPublished()) {?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'messageKey'=>"editor.issues.preview"), 0, false);
?>
	<?php }?>

		<div class="heading">

				<?php $_smarty_tpl->_assignInScope('issueCover', $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl());?>
		<?php if ($_smarty_tpl->tpl_vars['issueCover']->value) {?>
			<a class="cover" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"view",'page'=>"issue",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "defaultAltText", null);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.viewIssueIdentification",'identification'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ))),$_smarty_tpl ) );?>

				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<img class="img-fluid"
					src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueCover']->value ));?>
"
					alt="<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() )) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['defaultAltText']->value ?? null : $tmp);?>
">
			</a>
		<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['issue']->value->hasDescription()) {?>
			<div class="description text-muted">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedDescription() ));?>

			</div>
		<?php }?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = false;
?>
			<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['issue']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
			<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
				<?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) )));?>
				<div class="pub_id <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() ));?>
">
					<span class="type text-muted">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdDisplayType() ));?>
:
					</span>
					<span class="id">
						<?php if ($_smarty_tpl->tpl_vars['doiUrl']->value) {?>
							<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['doiUrl']->value ));?>
">
								<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>

							</a>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['pubId']->value;?>

						<?php }?>
					</span>
				</div>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				<?php if ($_smarty_tpl->tpl_vars['issue']->value->getDatePublished()) {?>
			<div class="published">
				<span class="label text-muted">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submissions.published"),$_smarty_tpl ) );?>
:
				</span>
				<span class="value base">
					<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['issue']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>

				</span>
			</div>
		<?php }?>
	</div>
		<?php if ($_smarty_tpl->tpl_vars['issueGalleys']->value) {?>
		<div class="galleys">
			<ul class="galleys_links">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issueGalleys']->value, 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
					<li>
						<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['issue']->value,'labelledBy'=>"issueTocGalleyLabel",'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getData('purchaseIssueFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getData('currency')), 0, true);
?>
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	<?php }?>
	<article class="obj_article_details">
	<div class="d-md-flex">
		<div class="main_entry">
		<div class="sections accordion accordion-flush mt-2" id="section_accordion">
	<?php $_smarty_tpl->_assignInScope('sectionCounter', 0);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publishedSubmissions']->value, 'section', false, NULL, 'sections', array (
));
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
		<div class="section accordion-item">
		<?php $_smarty_tpl->_assignInScope('sectionCounter', $_smarty_tpl->tpl_vars['sectionCounter']->value+1);?>
		<?php if ($_smarty_tpl->tpl_vars['section']->value['articles']) {?>
			<?php if ($_smarty_tpl->tpl_vars['section']->value['title']) {?>
				<h2 class="accordion-header" id="accordion-header-<?php echo $_smarty_tpl->tpl_vars['sectionCounter']->value;?>
">
					<button class="accordion-button collapsed px-0 text-start" type="button" data-mdb-toggle="collapse" data-mdb-target="#accordion-collapse-<?php echo $_smarty_tpl->tpl_vars['sectionCounter']->value;?>
" aria-expanded="false" aria-controls="accordion-collapse-<?php echo $_smarty_tpl->tpl_vars['sectionCounter']->value;?>
">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value['title'] ));?>

					</button>
				</h2>
			<?php }?>
			<div id="accordion-collapse-<?php echo $_smarty_tpl->tpl_vars['sectionCounter']->value;?>
" class="accordion-collapse collapse show" aria-labelledby="accordion-header-<?php echo $_smarty_tpl->tpl_vars['sectionCounter']->value;?>
">
				<ul class="cmp_article_list articles accordion-body px-0">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value['articles'], 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
						<li>
						
							<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/article_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('heading'=>$_smarty_tpl->tpl_vars['articleHeading']->value), 0, true);
?>
						</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					
				</ul>
			</div>
		<?php }?>
		</div>
		
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	
	</div><!-- .sections -->
	
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
							
		</div></div></div>
<?php }
}
