<?php
$imagesCount = 6;
$imagesPath = "img/gallery/";
$imagesPerRow = 3;
?>

<div class="b-g gallery-header">
    <div class="block">
        <div class="b-g" style="margin: 10px 20% 0 20%;">
            <div class="block f-l w-80" style="font-size: 1.2em; font-weight: 600;">GALERIA ZDJĘĆ</div>
            <div class="block f-r w-20">
                <div class="b-g" style="text-align: right;">
                    <div class="block"><img style="height: 2em;" src="img/photo.svg"></div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php

echo('<div style="text-align: center; margin: 10px 20%;">');

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