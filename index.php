<?php
$larry="lazaros";
//exec("C:\Users\Lazaros Psarokostas\Desktop\amsomeapp\amsomeapp\bin\Debug\amsomeapp.exe $larry", $output);

echo exec('amsomeapp.exe '.$larry.'',$out);
//unset($larry,$out);
/*
$myfile = fopen("output.txt", "w") or die("Unable to open file!");
$txt = json_encode($out);
$txt =  trim($txt,'[]"');
fwrite($myfile, $txt);
fclose($myfile);
*/
//print_r($out);
//print_r(array_values($out));
?>