<?php
// El nom per defecte es Anais Soriano
$nombre = isset($argv[1]) ? $argv[1] : "Anais Soriano";
@print "Hola {$nombre}\n";
?>