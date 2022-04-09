<?php
function contactsBuilder($args)
{
  $contacts = [
    "phoneLink" => ["contactType" => "phone", "contactLink" => $args["phone"]],
    "emailLink" => ["contactType" => "email", "contactLink" => $args["email"]],
    "websiteLink" => ["contactType" => "link", "contactLink" => $args["website"]],
  ];
  foreach ($contacts as $contact => $contactInfo)
  {
    $args[$contact] = formatContactInfo($contactInfo["contactLink"], $contactInfo["contactType"]);
  }
  return $args;
}
 ?>
