<?php


//Limiting characters
function str_limit($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}

function remove_spaces($word) {
  return str_replace(" ", "_", $word);
}

function trim_spaces($word) {
  return str_replace(" ", "", $word);
}

function clean($string) {
  $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

  return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}


 ?>