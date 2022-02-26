<?php snippet('header') ?>

    <main class="home">

<?php if($page->postType() == 'Beiträge'): ?>
  <div class="wrapper">
    <div class="text_left">
      <?php foreach ($page->children()->listed()->filterBy('template', 'text_beitrag') as $content): ?>
        <div class="excerpt">
          <h3 class="m_title"><?= $content->title()?></h3>
          <?php if($content->info()->isNotEmpty()) : ?>
<p><?= $content->info()->text() ?></p>
<a href="<?= $content->url() ?>" class="readmore">Weiterlesen</a>
<?php else : ?>
<p><?=$content->text()->markdown()->excerpt(850, true, '...');?></p>
<a href="<?= $content->url() ?>" class="readmore">Weiterlesen</a>
<?php endif; ?>



        </div>
      <?php endforeach ?>
    </div>

    <div class="image_right">
      <!-- <?php $img = $page->children()->listed()->filterBy('template', 'bild_beitrag') ?> -->
      <?php foreach ($page->children()->listed()->filterBy('template', 'bild_beitrag') as $img_content): ?>

      <a href="<?= $img_content->url() ?>" class="img_link">
      <img src="<?= $img_content->images()->first()->url()  ?>" alt="">
      </a>
      <figcaption><?= $img_content->tiny_title() ?></figcaption>
      <?php endforeach ?>
    </div>
  </div>

<?php else: ?>
  <div class="wrapper vernissage">
    <div class="text_left">
      <h1 id="saveTD"><?= $page->saveD()->upper() ?></h1>
      <div class="info">
        <?= $page->info()->text()->markdown() ?>
      </div>
    </div>

    <div class="image_right">
      <?php $img = $page->cover()->toFile();?>

      <a href="<?= $img->url() ?>">
      <img src="<?= $img->url()  ?>" alt="">
      </a>
      <figcaption><?= $page->caption() ?></figcaption>

    </div>


  </div>


<?php endif ?>






    </main>

<?php snippet('footer_ohne') ?>



<!-- <div class="image_right">
 <a href="#">
  <?php $img = $page->cover()->toFile(); ?>
 <img src="<?= $img->url() ?>" alt="">
 <figcaption>bildunterschrift</figcaption>
 </a>
</div> -->






<!-- <?php foreach ($page->children()->listed()->filterBy('template', 'bild_beitrag')->images() as $image): ?>
    <a href="<?= $image->url() ?>"></a>
    <img src="<?= $image->url() ?>" alt="">
<?php endforeach ?> -->
