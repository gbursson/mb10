<?php
$imagesCount = 6;
$imagesPath = "img/gallery/";
$imagesPerRow = 3;
?>

<div class="block-group" style="background: url('img/art-title-bg.jpg') repeat; color: #FFFFFF; margin-bottom: 5%; padding: 20px;">
    <div class="block">
        <div class="block-group" style="margin: 10px 20% 0 20%;">
            <div class="block f-l w-80" style="font-size: 2em; font-weight: 600;">GALERIA ZDJĘĆ</div>
            <div class="block f-r w-20">
                <div class="block-group" style="text-align: center;">
                    <div class="block w-45" style="margin-left: -30px;"><img style="height: 4em;" src="img/photo.svg"></div>

                </div>
            </div>
        </div>
    </div>

</div>

<?php

echo('<div style="text-align justify; margin: 10px 20%;">');

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