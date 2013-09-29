<?php
/**
 * Perform all of your bootstrap operations here in this file.
 * That includes loading Routers and other resources (database connections, etc.).
 */

if(trim(php_uname("n")) === "JAMES-NOTEBOOK") {
	if(!defined("DEV")) {
		define("DEV", true);
	}
	require("boot-dev.php");
} else {
	if(!defined("DEV")) {
		define("DEV", false);
	}
	require("boot-prod.php");
}
?>
