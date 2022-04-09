<?php
	function getResearchFromPerson($personID)
	{
		global $wpdb;
		$query = 'SELECT r.research_url
							FROM person_has_research r
							WHERE r.person_id = "'.$personID.'"';
		$research = $wpdb->get_results($query);
		return $research;
	}
?>
