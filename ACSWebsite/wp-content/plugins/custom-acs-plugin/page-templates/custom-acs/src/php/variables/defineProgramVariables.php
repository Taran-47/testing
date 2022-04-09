<?php
function defineProgramVariables($program)
{
  $programID = trim($program->program_id);
  $title = trim($program->title);
  $type = trim($program->type);
  $length = trim($program->length);
  $stream = trim($program->stream);
  $flowchartFile = (trim($program->flowchart_file));
  $programFile = (trim($program->program_file));
  $description = cleanResults(trim($program->description));
  $admissionRequirement = cleanResults(trim($program->admission_requirement));
  $graduationRequirement = cleanResults(trim($program->graduation_requirement));
  $residenceRequirement = cleanResults(trim($program->residence_requirement));
  $generalDegreeRequirement = cleanResults(trim($program->general_degree_requirement));
  $majorRequirement = cleanResults(trim($program->major_requirement));
  $args = [
    "programID" => $programID,
    "title" => $title,
    "type" => $type,
    "length" => $length,
    "stream" => $stream,
    "flowchartFile" => $flowchartFile,
    "programFile" => $programFile,
    "description" => $description,
    "admissionRequirement" => $admissionRequirement,
    "graduationRequirement" => $graduationRequirement,
    "residenceRequirement" => $residenceRequirement,
    "generalDegreeRequirement" => $generalDegreeRequirement,
    "majorRequirement" => $majorRequirement,
  ];
  return $args;
}
 ?>
