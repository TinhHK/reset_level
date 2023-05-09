<?php

$firstDecryptText = 'aWeku ,pd not\'l teo htrea dny  sameku f erze ena deg tedtsorey dnip woreelssenss';
$secondDecryptText = 'oFuc snow ah t uac nodi nroed rfop erecedcne';
function cusDecrypt($text) {
    $array = str_split($text);
    foreach ($array as $key => $val) {
        if ($key % 2 == 0 && isset($array[$key + 1])) {
            $tempt = $array[$key];
            $array[$key] = $array[$key + 1];
            $array[$key+1] = $tempt;
        }
    }
    return implode($array);
}