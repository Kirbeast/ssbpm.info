<?php
$root = $_SERVER['DOCUMENT_ROOT']; // set root for include and require
require_once $root . '/functions.php'; // require functions.php for loading translations and what not
fallbackEn(); // print english if no language was already printed
$lang = getHrefLang(); // get the code to insert before href="" attributes
$lcode = getLcode(); // get raw language code for html lang=""
$here = 'about'; // for header.php
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

  <link rel="icon" type="image/png" href="/favicon.ico"/>

  <title data-t="title">Project M - ssbpm.info</title>
</head>
<body class="body container">

HTML;

include_once $root . '/modules/header/header.php'; // include header.php

echo <<<HTML

  <div class="m-5" id="pagecontent">
    <h5 data-t="projectm">Project M</h5><br/>
    <p data-t="1">"***Project M*** is a [gameplay modification](https://www.ssbwiki.com/Gameplay_modification) of [*Super Smash Bros. Brawl*](https://www.ssbwiki.com/Super_Smash_Bros._Brawl) designed to make the gameplay more closely resemble that of [*Super Smash Bros. Melee*](https://www.ssbwiki.com/Super_Smash_Bros._Melee), as well as [*Super Smash Bros.*](https://www.ssbwiki.com/Super_Smash_Bros.) to a lesser extent. *Project M's* primary change from *Brawl* is that the speed of gameplay has been generally increased and the character landing lag is shorter, alonside the restoration of *Melee* mechanics and elements, such as the addition of [Mewtwo](https://www.ssbwiki.com/Mewtwo_(PM)) and [Roy](https://www.ssbwiki.com/Roy_(PM)) after their absence in *Brawl*. *Project M's* development team was partly descended from the original developers for [*Brawl+*](https://www.ssbwiki.com/Brawl%2B), later known as the **PMDT** or **Project M Dev Team** (formerly the **PMBR** or **Project M Backroom**), having members from over ten countries. Development of the mod officially concluded on December 1st, 2015, with version 3.6 being the last official release of *Project M*.</p>
    <p data-t="2">*Project M* has been commonly featured at several [national](https://www.ssbwiki.com/National_tournament) [tournaments](https://www.ssbwiki.com/Tournament), such as the Zenith series, [The Big House series](https://www.ssbwiki.com/The_Big_House_(tournament_series)), and [Apex 2014](https://www.ssbwiki.com/Apex_2014), and it remains the most popular gameplay mod of *Brawl* in tournament settings. Starting in 2013, *Project M* saw a rapid rise in its popularity as more characters became playable and the mod became more familiar at Smash tournaments. By 2014, it began to develop its tournament scene, with the number entrants for Apex 2014's *PM* singles event notably surpassing the number of competitors for *Brawl*. Despite the end of *Project M's* official development, it still has been able to maintain its tournament presence seperate from *Brawl*, including the formation of its Backroom, the New PMBR, on July 21, 2016.</p>
    <p data-t="3">*Project M* only supports [NTSC](https://www.ssbwiki.com/NTSC) versions of *Brawl*, and no [PAL](https://www.ssbwiki.com/PAL) build was ever released. As a result, running *Project M* outside of NTSC regions requires homebrew as to allow the Wii to run an NTSC version of the game."</p>
    <p class="text-right" data-t="4"> \- [ssbwiki.com](https://www.ssbwiki.com/Project_M), accessed 23rd of August, 2018</p>
  </div>

HTML;
include_once $root. '/modules/footer/footer.php'; // include footer.php
?>