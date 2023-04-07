<?php
$inputs = [];
while ($input = trim((string) fgets(STDIN))) {
    $inputs[] = explode(' ', $input);
}

var_dump($inputs);