<?php

$input = $argv[1];
$patternIncorrectdomain = '/(?<protocol>http[s]{0,1}):\/{0,1}(?<slashes>\\\\{0,})\/{0,}(?<domain>[^\\\\^\/]{0,})(?<moreslashes>\\\\{0,})\/{0,}(?<path>[^\\\\^\/]{0,})/m';


//checks if correct protocol is given
if (preg_match($patternIncorrectdomain, $input, $matches)) {
    $replacementUrl = "https://" . $matches["domain"] . "/" . $matches["path"];
    echo preg_replace($patternIncorrectdomain, $replacementUrl, $input);
} else {
    echo("nothing to replace");
}