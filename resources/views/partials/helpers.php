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


 ?>