<?php
/* Smarty version 4.1.0, created on 2023-05-01 15:07:09
  from 'app:frontendcomponentsfooter.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_644fb97d79b152_94224893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.',
      1 => 1682922665,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644fb97d79b152_94224893 (Smarty_Internal_Template $_smarty_tpl) {
?>		<div class="html-preloader bg-light">
			<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>

	</main><!-- _pkp_structure_main -->

<?php if ($_smarty_tpl->tpl_vars['requestedPage']->value !== 'login' && $_smarty_tpl->tpl_vars['requestedPage']->value !== 'user') {?>
  <?php if (empty($_smarty_tpl->tpl_vars['isFullWidth']->value)) {?>
  	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sidebarCode", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  	<?php if ($_smarty_tpl->tpl_vars['sidebarCode']->value) {?>
      <div class="mt-5 pt-4" data-aos="fade-up" data-aos-delay="200">
    		<ul class="_pkp_structure_sidebar list-unstyled container" role="complementary" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));?>
">
    			<?php echo $_smarty_tpl->tpl_vars['sidebarCode']->value;?>

    		</ul><!-- pkp_sidebar.left -->
      </div>
  	<?php }?>
  <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['requestedPage']->value !== 'login' && $_smarty_tpl->tpl_vars['requestedPage']->value !== 'user') {?>
	<!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <?php if ($_smarty_tpl->tpl_vars['pageFooter']->value) {?>
      	<?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>

      <?php }?>

    </div>
  </footer>
<?php }?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>


</body>
</html>
<?php }
}
