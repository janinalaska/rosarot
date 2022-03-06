<?php snippet('header') ?>

    <main class="noimg">

      <div class="links">
        <a class="social" id="insta" href="https://www.instagram.com/rosa_rot_zeitschrift/" target="_blank">
          <?= asset('assets/icons/insta.svg')->read() ?>
        </a>
        <a class="social" id="fb" href="https://www.facebook.com/rosarotzeitschrift?fref=ts" target="_blank">
          <?= asset('assets/icons/fb.svg')->read() ?>
        </a>
        <a class="social" id="tele" href="https://t.me/rosa_rot_zeitschrift" target="_blank">
          <?= asset('assets/icons/tele.svg')->read() ?>
        </a>
      </div>


      <div class="address">
        RosaRot<br>
        UZH Gebäude RAD, 3. Stock<br>
        Rämistrasse 62<br>
        CH-8001 Zürich
      </div>

      <div class="mail">
        <a href="mailto:rosarotinfo@gmail.com">rosarotinfo@gmail.com</a>
      </div>




        <?= $page->text()->kt() ?>


    </main>

<?php snippet('footer') ?>
