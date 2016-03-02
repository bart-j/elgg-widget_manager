<?php
/**
 * Elgg bookmarks widget
 *
 * @package Bookmarks
 */

$max = (int) $vars['entity']->num_display;

$page_owner = elgg_get_page_owner_entity();

$options = array(
	'type' => 'object',
	'subtype' => 'bookmarks',
	'container_guid' => $vars['entity']->owner_guid,
	'limit' => $max,
	'full_view' => FALSE,
	'pagination' => FALSE,
);
$content = elgg_list_entities($options);

echo $content;

if ($content) {
	if ($page_owner instanceof ElggGroup) {
		$url = "bookmarks/group/" . $page_owner->guid . "/all";
	} else {
		$url = "bookmarks/owner/" . elgg_get_page_owner_entity()->username;
	}

	$more_link = elgg_view('output/url', array(
		'href' => $url,
		'text' => elgg_echo('bookmarks:more'),
		'is_trusted' => true,
	));
	echo "<span class=\"elgg-widget-more\">$more_link</span>";
} else {
	echo elgg_echo('bookmarks:none');
}