<?php
	function cleanResults($input) {
		$output = (trim($input != '')) ? trim($input) : constant("DEFAULT");
		return $output;
	}
?>
