<?php
include_once peoplePageBuilder;
$args["content"] = peoplePageBuilder();
echo render_php(people_html, $args);
 ?>
