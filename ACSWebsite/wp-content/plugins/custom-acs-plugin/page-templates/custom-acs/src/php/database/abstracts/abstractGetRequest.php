<?php
function abstractGetRequest($select, $from, $filter = '', $sort = '') {
  $query = "SELECT ".$select." "
            ."FROM ".$from." "
            ."WHERE hidden IS NULL ";
  if (!empty($filter))
  {
    $query = $query."AND ".$filter." ";
  }
  if (!empty($sort))
  {
    $query = $query."ORDER BY ".$sort;
  }
  return $query;
}

 ?>
