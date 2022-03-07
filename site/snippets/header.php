<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <?= css('assets/css/reset.css') ?>
    <?= css('assets/css/index.css') ?>
    <?= css('@auto') ?>
    <?= css('assets/css/mobile.css') ?>
    <?= js('assets/js/script.js') ?>
    <link rel="icon" href="assets/icons/favicon.ico" sizes="any">
    <link rel="icon" href="assets/icons/f8.svg" type="image/svg+xml">
  </head>
  <body>

    <header class="header">
      <div class="container" id="container">
        <div class="inner_container" id="inner_container">
          <div class="tiny_title" id="tiny_title">
            <?= $page->tiny_title() ?>
          </div>

            <a href="javascript:void(0);" class="mobile_nav" onclick="myFunction()">MENU</a>

        </div>


        <nav  class="topnav" id="myTopnav">
          <ul >
            <!-- <li><a href="<?= $site->url() ?>">Home</a></li> -->
            <?php foreach ($site->children()->listed() as $item): ?>
              <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
            <?php endforeach ?>
            <li><a href="https://www.e-periodica.ch/digbib/volumes?UID=ros-002" target="blank">Archiv</a></li>
          </ul>

        </nav>
      </div>

    </header>


<!-- border circle -->
    <div id="cir" class="draggable" onclick="clickChange()">

    </div>
