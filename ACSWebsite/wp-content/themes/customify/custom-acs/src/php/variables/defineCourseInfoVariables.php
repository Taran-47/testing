<?php
function defineCourseInfoVariables($info)
{
  $infoType = strtolower(trim($info->info_type));
  $description = trim($info->description);
  $infoLabel = ucwords(strtolower($infoType), "- ");
  $args = [
    "infoType" => $infoType,
    "description" => $description,
    "infoLabel" => $infoLabel,
  ];
  return $args;
}
 ?>
