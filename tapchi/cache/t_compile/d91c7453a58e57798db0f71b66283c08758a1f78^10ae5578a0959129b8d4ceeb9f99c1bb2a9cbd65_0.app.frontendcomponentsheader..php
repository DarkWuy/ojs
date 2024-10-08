<?php
/* Smarty version 4.1.0, created on 2023-05-01 14:55:01
  from 'app:frontendcomponentsheader.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_644fb6a5a0a535_43185487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ae5578a0959129b8d4ceeb9f99c1bb2a9cbd65' => 
    array (
      0 => 'app:frontendcomponentsheader.',
      1 => 1682869291,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 1,
    'app:frontend/components/navigationMenu2.tpl' => 1,
    'app:frontend/components/navigationMenuMobile.tpl' => 1,
  ),
),false)) {
function content_644fb6a5a0a535_43185487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojs\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('showingLogo', true);
if (!$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value) {
$_smarty_tpl->_assignInScope('showingLogo', false);
}?>
<!DOCTYPE html>
<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
" xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
">
<?php if (!$_smarty_tpl->tpl_vars['pageTitleTranslated']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitleTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="pkp_page_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);?>
 pkp_op_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedOp']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);
if ($_smarty_tpl->tpl_vars['showingLogo']->value) {?> has_site_logo<?php }?>" dir="<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentLocaleLangDir']->value )) ?? null)===null||$tmp==='' ? "ltr" ?? null : $tmp);?>
">

<?php if ($_smarty_tpl->tpl_vars['requestedPage']->value !== 'login' && $_smarty_tpl->tpl_vars['requestedPage']->value !== 'user') {?>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center">
  		    <div class="container d-flex justify-content-between align-items-center">
    	<div class="logo">
    		<?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value) {?>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null)),$_smarty_tpl ) );?>
" class="navbar-brand _is_img">
					<img
						src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['uploadName'],"url" ));?>
"
						width="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['width'] ));?>
"
						height="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['height'] ));?>
"
						<?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] != '') {?>
							alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] ));?>
"
						<?php }?>
						class="img-fluid"
						style="max-width: 100px;"/>
				</a>
			<?php } else { ?>
				<!--a class="navbar-brand text-white" href="#">
					<strong>OJS App</strong>
				</a-->
			<?php }?>
		</div>

		<nav id="navbar" class="navbar navbar-dark flex-row shadow-0">
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "primaryMenu", null);?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"primary",'id'=>"_navigationPrimary",'ulClass'=>"_pkp_navigation_primary",'liClass'=>''),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

						<?php echo $_smarty_tpl->tpl_vars['primaryMenu']->value;?>

      	</nav><!-- .navbar -->

      	<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar d-flex flex-column shadow-0">
			<div class="container">
				<div class="navbar-collapse d-flex justify-content-end">
					<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/navigationMenu2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"user",'id'=>"_navigationUser",'ulClass'=>"_pkp_navigation_user flex-row justify-content-end",'liClass'=>"profile px-2 px-md-0"),$_smarty_tpl ) );?>

				</div>
			</div>
		</nav>
      	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/navigationMenuMobile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  </header><!-- End Header -->

  <?php if ($_smarty_tpl->tpl_vars['requestedPage']->value == 'index' || $_smarty_tpl->tpl_vars['requestedPage']->value == '') {?>
	  <!-- ======= Hero Section ======= -->
	  <section class="hero-section" id="hero">
	  
	    <div class="wave">

	      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
	            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
	          </g>
	        </g>
	      </svg>

	    </div>

	    <div class="container">
	      <div class="row align-items-center">
	        <div class="col-12 hero-text-image">
	          <div class="row">
	            <div class="col-lg-8 text-center text-lg-start">
				<h1 data-aos="fade-right" class="aos-init aos-animate" >
	              	TẠP CHÍ KHOA HỌC</h1>
				
	              <h1 data-aos="fade-right" style="font-size:30px">
	              	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value ));?>

	              </h1 >
	              <?php if ($_smarty_tpl->tpl_vars['activeTheme']->value->getOption('showDescriptionInJournalIndex')) {?>
	              	<div class="mb-5" data-aos="fade-right" data-aos-delay="100" >
					  
	              		<?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('description');?>

	              	</div>
	              <?php }?>
	              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
	              	<a
	              		class="btn btn-outline-white text-uppercase pt-4 pb-4"
	              		href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"about",'op'=>"submissions"),$_smarty_tpl ) );?>
"
	              		role="button">
	              		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.material.makeSubmission"),$_smarty_tpl ) );?>

	              	</a>
	              </p>
	            </div>
	            <div class="col-lg-4 iphone-wrap">

									<?php $_smarty_tpl->_assignInScope('thumb', $_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedSetting('journalThumbnail'));?>
									<?php if ($_smarty_tpl->tpl_vars['thumb']->value) {?>
										<img class="phone-2" data-aos="fade-right" src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thumb']->value['uploadName'],"url" ));?>
">
									<?php }?>
																
	              <!--img src="assets/img/phone_1.png" alt="Image" class="phone-1" data-aos="fade-right"-->
	              <!--img src="assets/img/phone_2.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200"-->
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>

	  </section><!-- End Hero -->
	<?php }?>



		<?php if ($_smarty_tpl->tpl_vars['isFullWidth']->value) {?>
		<?php $_smarty_tpl->_assignInScope('hasSidebar', 0);?>
	<?php }?>

		<main class="" role="main">
		<a id="pkp_content_main"></a>

		<?php if ($_smarty_tpl->tpl_vars['requestedPage']->value != 'index' && $_smarty_tpl->tpl_vars['requestedPage']->value != '') {?>
		
			<section class="hero-section inner-page">
			  <div class="wave">

			    <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			        <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
			          <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
			        </g>
			      </g>
			    </svg>

			  </div>

			  <div class="container">
			    <div class="row align-items-center">
			      <div class="col-12">
			        <div class="row justify-content-center">
			          <div class="col-md-10 text-center hero-text">
			            <h1 data-aos="fade-up" data-aos-delay=""><?php echo $_smarty_tpl->tpl_vars['pageTitleTranslated']->value;?>
</h1>
			            <p class="mb-5" data-aos="fade-up" data-aos-delay="100"></p>
			          </div>
			        </div>
			      </div>
			    </div>
			  </div>

			</section>
		<?php }
} else { ?>
	<main class="container-fluid" role="main">
		<a id="pkp_content_main"></a>
<?php }?>

<?php }
}
