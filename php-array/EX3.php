<?php
$web_development = array(
    'frontend' => array(), 
	'backend' => array(),
);
print_r($web_development);
$web_development["frontend"][] = "xhtml";
print_r($web_development);
$web_development["backend"][] = "ruby on rails";
print_r($web_development);
$web_development["frontend"][] = "css";
print_r($web_development);
$web_development["frontend"][] = "flash";
print_r($web_development);
$web_development["frontend"][] = "javascript";
print_r($web_development);
$index = array_search("xhtml", $web_development["frontend"]);
$web_development["frontend"][$index] = "html";
print_r($web_development);
$index = array_search("flash", $web_development["frontend"]);
array_splice($web_development["frontend"], $index, 1);
print_r($web_development);
?>