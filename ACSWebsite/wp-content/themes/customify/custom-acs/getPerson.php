<?php
	function getPerson($personID)
	{
		global $wpdb;
		$query = 'SELECT p.person_id, p.group, p.prefix,
							p.first_name, p.middle_name, p.last_name,
							p.suffix, p.degree, p.role,
							p.biography, p.office_number, p.phone_number,
							p.email, p.website_url
							FROM person p
							WHERE active = 1 AND person_id = "'.$personID.'"';
		$person = $wpdb->get_row($query);
		return $person;
	}
?>
