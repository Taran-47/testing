<?php
define("ERROR_HANDLING", SRC_PHP.'error-handling/');
include(LINKS.'errors.php');
include(LINKS.'error-pages.php');
define("errorHandler", ERROR_HANDLING.'errorHandler.php');
define("errorParser", ERROR_HANDLING.'errorParser.php');
 ?>
