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

<div style="text-align: center; margin: 10px 20%;">

    <?php
    $IMAGES_PER_ROW = 3;

    $imagesPath = "img/gallery/";
    $fi = new FilesystemIterator($imagesPath, FilesystemIterator::SKIP_DOTS);
    $imagesCount = iterator_count($fi);

    for ($i = 1; $i <= $imagesCount; $i++) {
        $imageFile = $imagesPath . $i . ".jpg";
// <!-- thumbnail image wrapped in a link -->
        echo("<a href=\"#{$i}\">");
        echo("<img src=\"$imageFile\" class='thumbnail'>");
        if (($i % $IMAGES_PER_ROW) == 0) {
            echo('</a><br>');
        }
        echo("</a>");
// <!-- lightbox container hidden with CSS -->
        echo("<a href='#_' class='lightbox' id=\"$i\">");
        echo("<img src=\"$imageFile\">");
        echo('</a>');
    }
    ?>

</div>
