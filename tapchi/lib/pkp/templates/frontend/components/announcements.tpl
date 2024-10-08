{**
 * templates/frontend/components/announcements.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display a list of announcements
 *
 * @uses $announcements array List of announcements
 *}
	<article class="obj_article_details">
	<div class="d-md-flex">
		<div class="main_entry">
<ul class="cmp_announcements">
	{foreach from=$announcements item=announcement}
		<li>
			{include file="frontend/objects/announcement_summary.tpl"}
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
							
		</div></div></div>