<?php
header("Content-Type: image/png");
$image = imagecreatetruecolor(1920,1080);
$background_color = imagecolorallocate($image, 0, 0, 0);
$text_color = imagecolorallocate($image, 233, 14, 91);
imagestring($image, 5, 60, 120, "neguizaia", $text_color);
imagepng($image);
imagedestroy($image);

?>

