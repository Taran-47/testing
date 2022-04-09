<?php
	include_once 'cleanResults.php';
	$personID = trim($person->person_id);
	$prefix = cleanResults($person->prefix);
	$firstName = trim($person->first_name);
	$middleName = cleanResults($person->middle_name);
	$lastName = trim($person->last_name);
	$fullName = $firstName.' '.($middleName != constant("DEFAULT") ? $middleName.' ' : '').$lastName;
	$suffix = cleanResults($person->suffix);
	$degree = cleanResults($person->degree);
	$fullTitle = ($prefix != constant("DEFAULT") ? $prefix.' ' : '')
							.$fullName
							.($suffix != constant("DEFAULT") ? ' '.$suffix : '')
							.($degree != constant("DEFAULT") ? ', '.$degree : '');
	$role = cleanResults($person->role);
	//$biography = substrwords(cleanResults($person->biography), 100);
	$biography = cleanResults($person->biography);
	$office = cleanResults($person->office_number);
	$phone = cleanResults($person->phone_number);
	$email = cleanResults($person->email);
	$website = cleanResults($person->website_url);
	clearstatcache();
	//echo "./wp-content/uploads/".$personID.".jpg";
	$profileURL = (file_exists("./wp-content/uploads/".$personID.".jpg") ? "../wp-content/uploads/".$personID.".jpg" : constant("DEFAULT_PROFILE"));
?>
