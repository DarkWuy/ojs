{**
 * templates/frontend/pages/issueArchive.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display a list of recent issues.
 *
 * @uses $issues Array Collection of issues to display
 * @uses $prevPage int The previous page number
 * @uses $nextPage int The next page number
 * @uses $showingStart int The number of the first item on this page
 * @uses $showingEnd int The number of the last item on this page
 * @uses $total int Count of all published monographs
 *}
{capture assign="pageTitle"}
	{if $prevPage}
		{translate key="archive.archivesPageNumber" pageNumber=$prevPage+1}
	{else}
		{translate key="archive.archives"}
	{/if}
{/capture}
{include file="frontend/components/header.tpl" pageTitleTranslated=$pageTitle}

<div class="page page_issue_archive container">
    {include file="frontend/components/breadcrumbs.tpl" currentTitle=$pageTitle}

    {* No issues have been published *}
    {if empty($issues)}
        <p>{translate key="current.noCurrentIssueDesc"}</p>

    {* List issues *}
    {else}
	<article class="obj_article_details">
	<div class="d-md-flex">
		<div class="main_entry">
                <ul class="issues_archive">
                    {foreach from=$issues item="issue"}
                        <li>
                            {include file="frontend/objects/issue_summary.tpl"}
                        </li>
                    {/foreach}
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
							
		</div></div></div></div>
        {* Pagination *}
        {if $prevPage > 1}
            {capture assign=prevUrl}{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive" path=$prevPage}{/capture}
        {elseif $prevPage === 1}
            {capture assign=prevUrl}{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}{/capture}
        {/if}
        {if $nextPage}
            {capture assign=nextUrl}{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive" path=$nextPage}{/capture}
        {/if}
        {include
            file="frontend/components/pagination.tpl"
            prevUrl=$prevUrl
            nextUrl=$nextUrl
            showingStart=$showingStart
            showingEnd=$showingEnd
            total=$total
        }
    {/if}
    
</div>


{include file="frontend/components/footer.tpl"}
