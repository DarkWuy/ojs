{**
 * templates/frontend/components/footer.tpl
 *
 * Copyright (c) 2021 Madi Nuralin
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Common site frontend footer.
 *
 * @uses $isFullWidth bool Should this page be displayed without sidebars? This
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 *}
		<div class="html-preloader bg-light">
			<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>

	</main><!-- _pkp_structure_main -->

{* Sidebars *}
{if $requestedPage !== 'login' && $requestedPage !== 'user'}
  {if empty($isFullWidth)}
  	{capture assign="sidebarCode"}{call_hook name="Templates::Common::Sidebar"}{/capture}
  	{if $sidebarCode}
      <div class="mt-5 pt-4" data-aos="fade-up" data-aos-delay="200">
    		<ul class="_pkp_structure_sidebar list-unstyled container" role="complementary" aria-label="{translate|escape key="common.navigation.sidebar"}">
    			{$sidebarCode}
    		</ul><!-- pkp_sidebar.left -->
      </div>$smarty->assign('pageFooter', $pageFooter);
  	{/if}
  {/if}
{/if}

<footer class="footer" role="contentinfo" style="padding: 10px 0;">
    <div class="container">
        <div class="footer-header mb-2" style="margin-bottom: 10px;">
            <h2 class="text-left text-white font-weight-bold" style="font-size: 2.5rem;">
                {translate key="footer.journal_title"}
            </h2>
            <h3 class="text-left text-white font-weight-bold" style="font-size: 1.2rem;">
                {translate key="footer.university_name"}
            </h3>
        </div>
        <hr>
  <div class="row" style="display: flex; justify-content: space-between; align-items: center;">
    <div class="col-md-6 footer-left">
        <p class="text-white" style="margin: 5px 0;">{translate key="footer.management_agency"}</p>
        <p class="text-white" style="margin: 5px 0;">{translate key="footer.license_number"}</p>
        <p class="text-white" style="margin: 5px 0;">{translate key="footer.licensing_agency"}</p>
        <p class="text-white" style="margin: 5px 0;">{translate key="footer.editor_in_chief"}</p>
    </div>
    <div class="col-md-6 footer-right" style="text-align:left; ">
        <p class="text-white" style="margin: 5px 0; margin-left: 100px;">{translate key="footer.address"}</p>
        <p class="text-white" style="margin: 5px 0; margin-left: 100px;">{translate key="footer.tel"}</p>
        <p class="text-white" style="margin: 5px 0; margin-left: 100px;">{translate key="footer.website"}</p>
        <p class="text-white" style="margin: 5px 0; margin-left: 100px;">{translate key="footer.email"}</p>
    </div>
</div>

        </div>
        <hr class="mt-2">
       <div class="footer-bottom text-center mt-2">
    <p class="text-white">{translate key="footer.copyright"}</p>
</div>

    </div>
</footer>



{load_script context="frontend"}

{call_hook name="Templates::Common::Footer::PageFooter"}

</body>
</html>
