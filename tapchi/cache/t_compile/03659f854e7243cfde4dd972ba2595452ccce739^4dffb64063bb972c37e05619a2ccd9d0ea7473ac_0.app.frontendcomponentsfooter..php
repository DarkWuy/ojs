<?php
/* Smarty version 4.1.0, created on 2024-10-20 16:20:55
  from 'app:frontendcomponentsfooter.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_671511c744f7a6_98485012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.',
      1 => 1729434023,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671511c744f7a6_98485012 (Smarty_Internal_Template $_smarty_tpl) {
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
      </div>$smarty->assign('pageFooter', $pageFooter);
  	<?php }?>
  <?php }
}?>

<footer class="footer" role="contentinfo" style="padding: 10px 0;">
    <div class="container">
        <div class="footer-header mb-2" style="margin-bottom: 10px;">
            <h2 class="text-left text-white font-weight-bold" style="font-size: 2.5rem;">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"footer.journal_title"),$_smarty_tpl ) );?>

            </h2>
            <h3 class="text-left text-white font-weight-bold" style="font-size: 1.2rem;">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"footer.university_name"),$_smarty_tpl ) );?>

            </h3>
        </div>
        <hr>
  <div class="row" style="display: flex; justify-content: space-between; align-items: center;">
    <div class="col-md-6 footer-left">
        <p class="text-white" style="margin: 5px 0;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"footer.management_agency"),$_smarty_tpl ) );?>
</p>
        <p class="text-white" style="margin: 5px 0;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"footer.license_number"),$_smarty_tpl ) );?>
</p>
        <p class="text-white" style="margin: 5px 0;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"footer.licensing_agency"),$_smarty_tpl ) );?>
</p>
        <p class="text-white" style="margin: 5px 0;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"footer.editor_in_chief"),$_smarty_tpl ) );?>
</p>
    </div>
    <div class="col-md-6 footer-right" style="text-align:left; ">
        <p class="text-white" style="margin: 5px 0; margin-left: 100px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"footer.address"),$_smarty_tpl ) );?>
</p>
        <p class="text-white" style="margin: 5px 0; margin-left: 100px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"footer.tel"),$_smarty_tpl ) );?>
</p>
        <p class="text-white" style="margin: 5px 0; margin-left: 100px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"footer.website"),$_smarty_tpl ) );?>
</p>
        <p class="text-white" style="margin: 5px 0; margin-left: 100px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"footer.email"),$_smarty_tpl ) );?>
</p>
    </div>
</div>

        </div>
        <hr class="mt-2">
       <div class="footer-bottom text-center mt-2">
    <p class="text-white"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"footer.copyright"),$_smarty_tpl ) );?>
</p>
</div>

    </div>
</footer>



<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>


</body>
</html>
<?php }
}
