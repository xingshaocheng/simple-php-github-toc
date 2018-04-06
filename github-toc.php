<?php

if(count($argv) < 2){
	exit("Please input github file url, eg 'php github-toc.php https://github.com/xingshaocheng/architect-awesome/blob/master/README.md'.\n");
}

$url = $argv[1]; 

$target_url = str_replace("github.com","raw.githubusercontent.com",$url);
$target_url = str_replace("/blob/","/",$target_url);
$content = file_get_contents($target_url);

$lines = explode("\n",$content);

foreach($lines as $line){
	$line = trim($line);

	if(strpos($line, "#") === false){
		continue;
	}

	$level = substr_count($line,"#");

	$title = substr($line,$level);
	$title = trim($title);
	$title = str_replace('*','\*',$title);

	$each_url = $url."#".urlencode($title);

	echo str_repeat("\t",($level - 1)),"* ","[${title}](${each_url})\n";

}

