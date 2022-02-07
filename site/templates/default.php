<?php snippet('header') ?>

    <main class="main" id="body">

      <h1><?= $page->title() ?></h1>
      <div class="image">
        <?php if($image = $page->image()): ?>
        <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
      </div>


    </main>

<?php snippet('footer') ?>
