<?php

$leftedge = Array(
  Array(Array(255, 255, 255, 127), Array(255, 255, 255, 127), Array(255, 255, 255, 127), Array(255, 255, 255, 127)),
  Array(Array(0, 215, 0, 127), Array(0, 211, 0, 71), Array(0, 213, 0, 24), Array(0, 212, 0, 24)),
  Array(Array(0, 200, 0, 113), Array(0, 208, 0, 0), Array(0, 207, 0, 0), Array(0, 207, 0, 0)),
  Array(Array(0, 187, 0, 104), Array(0, 196, 0, 0), Array(0, 195, 0, 0), Array(0, 196, 0, 0)),
  Array(Array(0, 172, 0, 103), Array(0, 184, 0, 0), Array(0, 183, 0, 0), Array(0, 183, 0, 0)),
  Array(Array(0, 178, 0, 103), Array(0, 190, 0, 0), Array(0, 190, 0, 0), Array(0, 190, 0, 0)),
  Array(Array(0, 178, 0, 103), Array(0, 190, 0, 0), Array(0, 190, 0, 0), Array(0, 190, 0, 0)),
  Array(Array(0, 168, 0, 110), Array(0, 190, 0, 0), Array(0, 190, 0, 0), Array(0, 190, 0, 0)),
  Array(Array(0, 0, 0, 126), Array(0, 169, 0, 63), Array(0, 179, 0, 19), Array(0, 175, 0, 17)),
  Array(Array(0, 0, 0, 127), Array(0, 0, 0, 121), Array(0, 0, 0, 108), Array(0, 0, 0, 99)),
  Array(Array(0, 0, 0, 127), Array(0, 0, 0, 126), Array(0, 0, 0, 122), Array(0, 0, 0, 119)),
);

$greenbar = Array(
  Array(Array(255, 255, 255, 127)),
  Array(Array(0, 211, 0, 23)),
  Array(Array(0, 208, 0, 0)),
  Array(Array(0, 195, 0, 0)),
  Array(Array(0, 183, 0, 0)),
  Array(Array(0, 190, 0, 0)),
  Array(Array(0, 190, 0, 0)),
  Array(Array(0, 190, 0, 0)),
  Array(Array(0, 174, 0, 16)),
  Array(Array(0, 0, 0, 97)),
  Array(Array(0, 0, 0, 118)),
);

$redbar = Array(
  Array(Array(255, 255, 255, 127)),
  Array(Array(240, 44, 48, 23)),
  Array(Array(244, 43, 47, 0)),
  Array(Array(240, 39, 42, 0)),
  Array(Array(237, 35, 38, 0)),
  Array(Array(239, 37, 41, 0)),
  Array(Array(239, 37, 40, 0)),
  Array(Array(239, 37, 40, 0)),
  Array(Array(219, 34, 37, 16)),
  Array(Array(0, 0, 0, 97)),
  Array(Array(0, 0, 0, 118)),
);

$rightedge = Array(
  Array(Array(255, 255, 255, 127), Array(255, 255, 255, 127)),
  Array(Array(216, 40, 43, 81), Array(0, 0, 0, 123)),
  Array(Array(239, 42, 45, 7), Array(0, 0, 0, 110)),
  Array(Array(240, 39, 42, 0), Array(0, 0, 0, 98)),
  Array(Array(238, 35, 39, 0), Array(0, 0, 0, 92)),
  Array(Array(239, 37, 40, 0), Array(0, 0, 0, 92)),
  Array(Array(239, 37, 41, 0), Array(0, 0, 0, 92)),
  Array(Array(232, 36, 40, 5), Array(0, 0, 0, 92)),
  Array(Array(139, 21, 23, 57), Array(0, 0, 0, 97)),
  Array(Array(0, 0, 0, 100), Array(0, 0, 0, 110)),
  Array(Array(0, 0, 0, 119), Array(0, 0, 0, 123)),
);

$v = (int)$_GET['v'];
$v = $v>100?100:$v<0?0:$v;
drawbar($v);

function drawbar($percent) {
  global $leftedge, $greenbar, $redbar, $rightedge;
  $perc = round(46*($percent/100));
  header("Content-type: image/png");
  $im = imagecreatetruecolor(52, 11);
  $transparent = imagecolorallocatealpha($im, 0, 0, 0, 127);
  imagefill($im, 0, 0, $transparent);
  imagesavealpha($im,true);
  imagealphablending($im, true);
  drawpixelmap($leftedge, $im, 0, 0);
  for ($x=4;$x<4+$perc;$x++)
    drawpixelmap($greenbar, $im, $x, 0);
  for ($x=4+$perc;$x<50;$x++)
    drawpixelmap($redbar, $im, $x, 0);
  drawpixelmap($rightedge, $im,50, 0);
  imagepng($im);
  imagedestroy($im);
}

function drawpixelmap (&$ar, &$im,  $x1=0, $y1=0) {
  for($y = 0; $y < count($ar); $y++) {
    for($x = 0; $x < count($ar[$y]); $x++) {
      $p = $ar[$y][$x];
      $color = imagecolorallocatealpha($im, $p[0], $p[1], $p[2], $p[3]);
      imagesetpixel($im, $x+$x1, $y+$y1, $color);
    }
  }
}
?>