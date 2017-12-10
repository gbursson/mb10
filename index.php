<!doctype html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MB10 - Szkółka piłkarska</title>
  <link rel="stylesheet" href="css/00-imports.css"/>
  <link rel="stylesheet" href="css/01-reset.css"/>
  <link rel="stylesheet" href="css/pocketgrid.css"/>
  <link rel="stylesheet" href="css/forms.css"/>
  <link rel="stylesheet" href="css/utility.css"/>
  <link rel="stylesheet" href="css/typography.css"/>
  <link rel="stylesheet" href="css/gallery.css"/>
  <link rel="stylesheet" href="css/media-desktop.css"/>
  <link rel="stylesheet" href="css/media-mobile.css"/>
</head>

<body>

<?php

if ($_GET['mode'] == "art") {

    include("articles/_art-header.html");
    include("articles/_art-".$_GET['art-id'].".html");
    include("articles/_art-footer.html");
}

if ($_GET['mode'] == "gallery") {
    include('_gallery-header.html');
    include('_gallery.php');
    include('_gallery-footer.html');
}

else {
    include('_section-1-header.html');
    include('_section-2-articles.html');
    include('_section-3-school.html');
    include('_section-4-signup.html');
    include('_section-5-footer.html');
}



$_GET['mode'] = "";

?>



<!-- For IE6-8 Media Queries compatibility -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.min.js"></script>
</body>
</html>