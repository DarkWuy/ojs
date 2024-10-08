<?php
/* Smarty version 4.1.0, created on 2023-04-30 17:13:09
  from 'app:frontendcomponentsnavigat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_644e85857ee417_69774537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fefaa077fc48a1d5d4ed61022fa881bddab3649b' => 
    array (
      0 => 'app:frontendcomponentsnavigat',
      1 => 1681396410,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/navigationMenu2.tpl' => 1,
  ),
),false)) {
function content_644e85857ee417_69774537 (Smarty_Internal_Template $_smarty_tpl) {
?><button
    type="button"
    class="navbar-toggler text-white d-lg-none"
    data-mdb-toggle="modal"
    data-mdb-target="#exampleModal">
	<i class="fas fa-bars"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
				<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
	      		<div>
		      		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "primaryMenu", null);?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"primary",'id'=>"_navigationPrimary",'ulClass'=>"_pkp_navigation_primary d-block",'liClass'=>"text-dark"),$_smarty_tpl ) );?>

					<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

										<?php echo $_smarty_tpl->tpl_vars['primaryMenu']->value;?>

				</div>

				<hr/>

				<div>
					<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/navigationMenu2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ulClass'=>"d-block",'liClass'=>"mx-0",'showIcons'=>true), 0, false);
?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"user",'id'=>"_navigationUser",'ulClass'=>"_pkp_navigation_user d-block",'liClass'=>"profile text-dark"),$_smarty_tpl ) );?>

				</div>
			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
</div><?php }
}
