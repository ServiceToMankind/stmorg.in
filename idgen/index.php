<?php
header('content-type:image/jpeg');
$font='Lovelo-Black.ttf';
$bebas='BebasNeue-Regular.ttf';
$trocchi='Trocchi-Regular.ttf';
$image=imagecreatefromjpeg('template.jpg');
$color=imagecolorallocate($image,255,255,255);
$black=imagecolorallocate($image,0,0,0);
//name
$name="Jyoshna";
//image size
$width= imagesx($image);
$height=imagesy($image);
//text size
$text_size = imagettfbbox(30,0,$font,$name);
$text_width= max([$text_size[2], $text_size[2]]) - min([$text_size[0], $text_size[6]]);
$text_height= max([$text_size[5],$text_size[7]]) - min([$text_size[1], $text_size[3]]);

//centre the text
$centerX = CEIL(($width - $text_width) / 2);
$centerY = CEIL(($height - $text_height) / 2);
$centerX = $centerX<0 ? 0 : $centerX ;
$centerY = $centerY<0 ? 0 : $centerY ;

//designation
$designation="Web Designer";
$text_size2 = imagettfbbox(40,0,$bebas,$designation);
$text_width2= max([$text_size2[2], $text_size2[2]]) - min([$text_size2[0], $text_size2[6]]);
$text_height2= max([$text_size2[5],$text_size2[7]]) - min([$text_size2[1], $text_size2[3]]);
$centerX2 = CEIL(($width - $text_width2) / 2);
$centerY2 = CEIL(($height - $text_height2) / 2);
$centerX2 = $centerX2<0 ? 0 : $centerX2 ;
$centerY2 = $centerY2<0 ? 0 : $centerY2 ;

//id no.
$idno="1234567890";
$text_size3 = imagettfbbox(35,0,$trocchi,$idno);
$text_width3= max([$text_size3[2], $text_size3[2]]) - min([$text_size3[0], $text_size3[6]]);
$text_height3= max([$text_size3[5],$text_size3[7]]) - min([$text_size3[1], $text_size3[3]]);
$centerX3= CEIL(($width - $text_width3) / 2);
$centerY3 = CEIL(($height - $text_height3) / 2);
$centerX3 = $centerX3<0 ? 0 : $centerX3 ;
$centerY3 = $centerY3<0 ? 0 : $centerY3 ;
//write
imagettftext($image,30,0,$centerX,898,$color,$font,$name);
imagettftext($image,40,0,$centerX2,1030,$color,$bebas,$designation);
imagettftext($image,35,0,$centerX3,1100,$black,$trocchi,$idno);
imagejpeg($image);
imagedestroy($image);