<?php
$partie1="Le meilleur";
$partie2="c'est Roger Federer";
function fusionvariable($partie1, $partie2){
  return $partie1 . $partie2;
}
echo fusionvariable("$partie1" . "$partie2");
 ?>
