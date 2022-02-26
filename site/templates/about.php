<?php snippet('header') ?>

    <main class="noimg">
      <div class="adress">
        RosaRot<br>
        UZH Gebäude RAD, 3. Stock<br>
        Rämistrasse 62<br>
        CH-8001 Zürich
      </div>

      <div class="mail">
        <a href="mailto:rosarotinfo@gmail.com">rosarotinfo@gmail.com</a>
      </div>
      <div class="links">
        <a class="social" id="insta" href="https://www.instagram.com/rosa_rot_zeitschrift/">
          <?= asset('assets/icons/insta.svg')->read() ?>
        </a>
        <a class="social" id="fb" href="https://www.facebook.com/rosarotzeitschrift?fref=ts">
          <?= asset('assets/icons/fb.svg')->read() ?>
        </a>
      </div>
        <?= $page->text()->markdown()->kt() ?>

        <div class="sponsors">
          <?php foreach ($page->images() as $image): ?>
              <img src="<?= $image->url() ?>" alt="">
          <?php endforeach ?>

        </div>
    </main>

<?php snippet('footer') ?>
