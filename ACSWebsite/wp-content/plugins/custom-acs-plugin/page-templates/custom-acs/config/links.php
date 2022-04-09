<?php
define('PATH', dirname(__DIR__, 1).'/');+
define('SITE', 'https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'/');
define('LINKS', PATH.'config/links/');
include LINKS.'database.php';
include LINKS.'abstracts.php';
include LINKS.'public.php';
include LINKS.'src.php';
include LINKS.'builders.php';
include LINKS.'pages.php';
include LINKS.'css.php';

 ?>
