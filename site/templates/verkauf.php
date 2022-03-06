<?php snippet('header') ?>

<main class="withimg">


  <div class="wrapper verkauf">
    <div class="text_left">
      <div class="zurich">
        <h6>Zurich</h6>
        <div class="shop first">
          <h3><a href="https://paranoiacity.ch/" target="_blank">Paranoia City</a></h3>
          Ankerstrasse 12<br>
          8004 Zürich
        </div>
        <div class="shop">
          <h3><a href="https://www.volkshausbuch.ch/de/" target="_blank">Buchhandlung im Volkshaus</a></h3>
          Stauffacherstrasse 60<br>
          8004 Zürich
        </div>
        <div class="shop">
          <h3><a href="https://www.buchah.ch/" target="_blank">Buchhandlung am Hottingerplatz</a></h3>
          Hottingerstrasse 44<br>
          8032 Zürich
        </div>
      </div>

      <div class="bern">
        <h6>Bern</h6>
        <div class="shop first">
          <h3><a href="https://www.klamauk.be/" target="_blank">Klamauk Buchhandlung</a></h3>
          Postgasse 38<br>
          3011 Bern
        </div>
        <div class="shop">
          <h3><a href="https://www.queerbooks.ch/" target="_blank">Queerbooks</a></h3>
          Herrengasse 30<br>
          3011 Bern
        </div>
      </div>

      <div class="basel">
        <h6>Basel</h6>
        <div class="shop first">
          <h3><a href="https://www.buchhandlung-labyrinth.ch/" target="_blank">Buchhandlung Labyrinth</a></h3>
          Nadelberg 17<br>
          4051 Basel
        </div>
      </div>
    </div>

    <div class="image_right verkauf">
      <?php foreach ($page->images() as $image): ?>
        <a href="<?= $image->url() ?>" class="img_link">
          <?= $image ?>
        </a>
        <figcaption><?= $image->caption() ?></figcaption>
      <?php endforeach ?>
    </div>
  </div>
</main>


<?php snippet('footer_ohne') ?>
