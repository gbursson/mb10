<?php
$imagesCount = 6;
$imagesPath = "img/gallery/";
$imagesPerRow = 3;

echo('<div style="text-align: center; margin: %2 10%;">');

for($i=1;$i<=$imagesCount;$i++) {

    $imageFull = $imagesPath . $i . ".jpg";
    $imageThumbnail = $imagesPath . "thumb_" . $i . ".jpg";

// <!-- thumbnail image wrapped in a link -->
    echo("<a href=\"#{$i}\">");
    echo("<img src=\"$imageThumbnail\" class=\"thumbnail\">");
    if (($i % $imagesPerRow) == 0) {
        echo("</a><br>");
    }
    echo("</a>");

// <!-- lightbox container hidden with CSS -->
    echo("<a href=\"#_\" class=\"lightbox\" id=\"$i\">");
    echo("<img src=\"$imageFull\">");
    echo("</a>");

}


echo('</div>');

?>