<?php
// Autor: Anais Soriano <anaisclase13@gmail.com>
// El nombre por defecto es Anais Soriano
$nombre = isset($argv[1]) ? $argv[1] : "Anais Soriano";
@print "Hola {$nombre}\n";
?>