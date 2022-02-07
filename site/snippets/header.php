<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $site->title() ?></title>
    <?= css('assets/css/reset.css') ?>
    <?= css('assets/css/index.css') ?>
    <?= css('@auto') ?>
    <?= js('assets/js/script.js') ?>
  </head>
  <body>

    <header class="header">
      <div class="container">
        <div class="tiny_title">
          <?= $page->tiny_title() ?>
        </div>

        <nav class="menu">
          <ul>
            <li><a href="https://www.e-periodica.ch/digbib/volumes?UID=ros-002" target="blank"><?= page('archiv')->title() ?></a></li>
            <?php foreach ($site->children()->listed()->not('archiv') as $item): ?>
              <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
            <?php endforeach ?>
          </ul>
        </nav>
      </div>

    </header>


<!-- border circle -->
    <div id="cir" class="draggable" onclick="clickChange()">

    </div>
