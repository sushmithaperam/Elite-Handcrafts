<?php
/**
 * Plugin Name: admin refresh
 * plugin url: www.google.com
 *description:this is super plugin
 *version:1.0
 license: GPLV! or later
 */
 
 add_action("admin_menu", "addmenu");
 function addmenu()
 {
 	add_menu_page("example options", "example options", 4, "example options", "exampleMenu");
}	

function exampleMenu()
{
	echo "<h1>how are going Admin!!!</h1>";
	echo '<a href="http://www.addictinggames.com/sports-games/index.jsp"><h1>refresh yourself???</h1></a>';
}
