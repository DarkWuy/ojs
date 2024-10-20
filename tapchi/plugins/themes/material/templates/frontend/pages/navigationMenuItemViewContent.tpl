{**
 * frontend/pages/navigationMenuItemViewContent.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Display NavigationMenuItem content
 *}
{include file="frontend/components/header.tpl" pageTitleTranslated=$title}

<div class="page container">
	{include file="frontend/components/breadcrumbs.tpl" currentTitle=$title}

	<style>
		.page-content {
			font-size: calc(1em + 2px);
		}
	</style>

	<div class="page-content">
		{$content}
	</div>
</div>

{include file="frontend/components/footer.tpl"}
