<?php

function renderNav(PageArray $items) {

	if(!$items->count()) return;

	echo "<div class='top-bar-right'>";

	echo "<ul class='menu top-bar-right-menu'>";

	// cycle through all the items
	foreach($items as $item) {

		// render markup for each navigation item as an <li>
		if($item->id == wire('page')->id) {
			// if current item is the same as the page being viewed, add a "current" class to it
			echo "<li class='current'>";
		} else {
			// otherwise just a regular list item
			echo "<li>";
		}

		// markup for the link
		echo "<a href='$item->url' class='top-bar-right-menu__itemlink'>$item->title</a>";

		// close the list item
		echo "</li>";
	}

	echo "</ul>";

	echo "</div>";
}

function renderNavMobile(PageArray $items) {

	if(!$items->count()) return;

	echo "<ul class='vertical-menu'>";

	// cycle through all the items
	foreach($items as $item) {

		echo "<li>";
		
		// markup for the link
		echo "<a href='$item->url'>$item->title</a>";

		// close the list item
		echo "</li>";
	}

	echo "</ul>";

}