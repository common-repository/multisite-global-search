<?php
/*
 * Copy this file to "config_local.php" and change the contents as desired. 
 * We recommend that you keep a backup copy of your "config_local.php".
 *
 * Note that changes made here affect use of this plugin for all blogs on
 * your multisite installation.
 *
 * See descriptions below each setting.
 */

$SearchBoxTitle='Global Search';
/* This is the instruction that shows above the global search box.
 */
$SearchWidtgetTagLine='Search across all blogs:';
/* The tag line that shows up under the title for the widget */
$SearchBoxSize=20;
/* Size of the search box. */

$SearchPageTitle='MultiSite Search Results'; 
/* The title for the page containing the [multisite_global_search] shortcode.
 *    If you ensure that all pages containing that shortcode are named this, then
 *    the search results will not include those pages, even if someone searches
 *    for words in the title, e.g., "Search". */

$SetDefaultToSearchPages=FALSE;
/* Setting this to TRUE will set all blogs to search pages as well as posts
 * by default.
 */
$SetDefaultToHideOptions=FALSE;
/* Setting this to TRUE will set search boxes on all blogs to hide the search
 * options by default.
 */
$SetDefaultToHorizontal=FALSE;
/* Setting this to TRUE will set the default alignment for the search boxes to
 * horizontal across all blogs.
 */

$SetDefaultToExcerpt=FALSE;
/* Setting this to TRUE makes showing only the excerpt in search results be the
 * default setting for your entire installation.  
 * 
 * If you set this to TRUE, please see also:
 *     $ExcerptLength
 *     $UseSimpleReadMoreForExcerpts
 *     $RemoveFormattingFromExcerpts
 *     $DoNotShowPostMetadata
 */
$ExcerptLength=55;
/* If you have chosen to show only an excerpt in the search results, limit the
 *    excerpt to this number of words. */
$UseSimpleReadMoreForExcerpts=FALSE;
/* Setting this to TRUE will replace the "... (Read more)" with a simple "..." that
 * does not include a hyperlink.  When using short values for $ExcerptLength, the
 * extra link to the post (in addition to the post title) might be distracting and
 * confusing for your readers.  In that case, setting this to TRUE is recommended.
 */
$DoNotShowPostMetadata=FALSE;
/* Setting this to TRUE will suppress printing of the following post metadata:
 *     comments link
 *     date and time
 *     author info
 *
 * Leaving this data out can clean up the look of an excerpt-only results page,
 * particularly if the number of words in the excerpt is small.
 */

$RemoveFormattingFromExcerpts=TRUE;
$RemoveFormattingFromFullContent=FALSE;
/* Setting these to TRUE will strip formatting from the search results for,
 * respectively, result pages that show only the excerpt and for those that show 
 * the full content.
 *
 * A TRUE setting is especially recommended for blogs that show only the excerpt 
 * in the search results.  Since only the excerpt is shown, for example, HTML tags 
 * that were opened might not be closed, and the formatting further down the 
 * results page will be unpredictable. 
 *
 * Setting this value to TRUE for full content might also be safer, but the 
 * formatting is less likely to be a problem for results showing full content.
 */

?>
