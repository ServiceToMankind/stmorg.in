<?php
require('connection.php');
header('content-type:image/jpeg');
include('bar.php');


$res= mysqli_query($con,'SELECT `users`.`id`,`users`.`ccode`,`users`.`name`,`designation`.`designation` FROM `USERS`,`valunteers`, `designation` WHERE `users`.`id`=`valunteers`.`vid` and `valunteers`.`designation`=`designation`.`id` ');
while($row=mysqli_fetch_assoc($res)){
    $sid=$row['id'];
    $stmid=$row['ccode'].$row['id'];
    $uname=$row['name'];
    $udesignation=$row['designation'];
   

$font='Lovelo-Black.ttf';
$bebas='BebasNeue-Regular.ttf';
$trocchi='Mulish-Regular.ttf';
$image=imagecreatefromjpeg('template.jpg');
$dpimage=imagecreatefromjpeg("dps/".$stmid.".jpg");
$idno="$stmid";
$name="$uname";
$designation="$udesignation";
//$gbarimage=imagecreatefrompng($barimage);
$color=imagecolorallocate($image,255,255,255);
$black=imagecolorallocate($image,0,0,0);
//name
//image size
$width= imagesx($image);
$height=imagesy($image);
//dp size
$dpwidth= imagesx($dpimage);
$dpheight=imagesy($dpimage);
//text size
$text_size = imagettfbbox(33,0,$font,$name);
$text_width= max([$text_size[2], $text_size[2]]) - min([$text_size[0], $text_size[6]]);
$text_height= max([$text_size[5],$text_size[7]]) - min([$text_size[1], $text_size[3]]);

//centre the text
$centerX = CEIL(($width - $text_width) / 2);
$centerY = CEIL(($height - $text_height) / 2);
$centerX = $centerX<0 ? 0 : $centerX ;
$centerY = $centerY<0 ? 0 : $centerY ;

//designation

$text_size2 = imagettfbbox(40,0,$bebas,$designation);
$text_width2= max([$text_size2[2], $text_size2[2]]) - min([$text_size2[0], $text_size2[6]]);
$text_height2= max([$text_size2[5],$text_size2[7]]) - min([$text_size2[1], $text_size2[3]]);
$centerX2 = CEIL(($width - $text_width2) / 2);
$centerY2 = CEIL(($height - $text_height2) / 2);
$centerX2 = $centerX2<0 ? 0 : $centerX2 ;
$centerY2 = $centerY2<0 ? 0 : $centerY2 ;

//id no.

$text_size3 = imagettfbbox(30,0,$trocchi,$idno);
$text_width3= max([$text_size3[2], $text_size3[2]]) - min([$text_size3[0], $text_size3[6]]);
$text_height3= max([$text_size3[5],$text_size3[7]]) - min([$text_size3[1], $text_size3[3]]);
$centerX3= CEIL(($width - $text_width3) / 2);
$centerY3 = CEIL(($height - $text_height3) / 2);
$centerX3 = $centerX3<0 ? 0 : $centerX3 ;
$centerY3 = $centerY3<0 ? 0 : $centerY3 ;
//write
imagettftext($image,33,0,$centerX,898,$color,$font,$name);
imagettftext($image,40,0,$centerX2,1030,$color,$bebas,$designation);
imagettftext($image,30,0,$centerX3,1110,$black,$trocchi,$idno);

//add image
$dppimage= imagescale($dpimage,368,508);
imagecopymerge($image,$dppimage,265,285,0,0,368,508,100);

//barcode
$filepath= "temp/temp".$idno.".png";
barcode( $filepath, $idno,60, $orientation, $code_type, $print, $sizefactor );
$gbarimage=imagecreatefrompng("temp/temp".$idno.".png");
$gbarimage= imagescale($gbarimage,325,60);
imagecopymerge($image,$gbarimage,293,1145,0,0,325,60,100);
$idfilepath="idcards/".$idno.".jpg";
imagejpeg($image,$idfilepath);
imagedestroy($image);
}
echo "done, enjoy";