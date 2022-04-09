<?php
include_once personPageBuilder;
$args["content"] = personPageBuilder();
echo render_php(person_html, $args);
 ?>
