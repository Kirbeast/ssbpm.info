<?php
$root = $_SERVER['DOCUMENT_ROOT']; // set root for include and require
require_once $root . '/functions.php'; // require functions.php for loading translations and what not
fallbackEn(); // print english if no language was already printed
$lang = getHrefLang(); // get the code to insert before href="" attributes
$lcode = getLcode(); // get raw language code for html lang=""
$here = 'home'; // for header.php
echo <<<HTML

<!doctype html>
<html lang="$lcode">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="/modules/body.css">
  <link rel="stylesheet" href="/modules/header/header.css">
  <link rel="stylesheet" href="/modules/footer/footer.css">

  <title>ssbpm.info - Project M</title>
</head>
<body class="body container">

HTML;

include_once $root . '/modules/header/header.php'; // include header.php

echo <<<HTML

  <div class="container text-center" id="pagecontent">

    <div style="margin-top: 3rem; margin-bottom: 2rem;">
      <h3 data-t="welcome">Welcome to</h3>
      <img src="/assets/logosmall.png" class="img-fluid"/>
    </div>

    <p data-t="intro.1">This website was made for people interested in [Project M](/wiki/projectm), the premier Super Smash Bros. Brawl modification.</p>
    <p data-t="intro.2">To get started installing Project M, click here:</p>
    <div style="margin-top: 2rem;">
      <a data-t="intro.guidebutton" class="btn btn-primary btn-lg" href="$lang/guide/">PM Installation Guide</a>
    </div>

  </div>

HTML;
include_once $root. '/modules/footer/footer.php'; // include footer.php
?>