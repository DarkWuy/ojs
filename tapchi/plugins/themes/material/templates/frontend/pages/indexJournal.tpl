{**
 * templates/frontend/pages/indexJournal.tpl
 *
 * Copyright (c) 2021 Madi Nuralin
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the index page for a journal
 *
 * @uses $currentJournal Journal This journal
 * @uses $journalDescription string Journal description from HTML text editor
 * @uses $homepageImage object Image to be displayed on the homepage
 * @uses $additionalHomeContent string Arbitrary input from HTML text editor
 * @uses $announcements array List of announcements
 * @uses $numAnnouncementsHomepage int Number of announcements to display on the
 *       homepage
 * @uses $issue Issue Current issue
 *}
 {include file="frontend/components/header.tpl" pageTitleTranslated=$currentJournal->getLocalizedName()}

<div class="page_index_journal container">

    {* Announcements và các phần khác không cần thay đổi *}

    {* Latest issue *}
    {if $issue}
        <section class="current_issue pt-5" data-aos="fade-up" data-aos-delay="200">
           <div class="current_issue_container rounded p-1 d-flex align-items-center" style="max-width: 910px; max-height: 40px;background-color: #ecf0f1; border: none;">
    <a id="homepageIssue" class="homepageIssue " href="javascript:void(0)" onclick="toggleHeading()">
        {translate key="journal.currentIssue"}
    </a>
    <span class="mx-2">/</span>
    <div class="current_issue_title">
        {$issue->getIssueIdentification()|strip_unsafe_html}
    </div>
</div>
            {include file="frontend/objects/issue_toc.tpl" heading="h3" class="heading" htmlAttributes='hidden="true"'} <!-- Sửa hidden -->
            <a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}" class="read_more">
                {translate key="journal.viewAllIssues"}
            </a>
        </section>
    {/if}
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}

{* JavaScript để ẩn/hiển phần tử *}
<script>
function toggleHeading() {
    var heading = document.querySelector('[class="heading"]');  // Sử dụng querySelector với class
    if (heading.hasAttribute('hidden')) {
        heading.removeAttribute('hidden');
    } else {
        heading.setAttribute('hidden', 'true');
    }
}
</script>
