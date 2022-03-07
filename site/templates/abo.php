<?php snippet('header') ?>
    <main class="noimg">

        <?php if($success): ?>
        <div class="alert success">
            <p><?= $success ?></p>
        </div>
        <?php else: ?>
        <?php if (isset($alert['error'])): ?>
            <div><?= $alert['error'] ?></div>
        <?php endif ?>
        <form method="post" action="<?= $page->url() ?>">
            <div class="honeypot">
                <label for="website">Website <abbr title="required">*</abbr></label>
                <input type="url" id="website" name="website" tabindex="-1">
            </div>

            <div class="ckb">
            <input type="radio" name="type[]" id="op1" value="CH Abo" <?= isset($data['type']) && in_array('CH Abo', $data['type']) ? 'checked' : '' ?>>
            <label for="op1">Abo Schweiz 20 CHf</label><br>
            <input type="radio" name="type[]" id="op2" value="Gön*nerinnenabo"  <?= isset($data['type']) && in_array('Gön*nerinnenabo', $data['type']) ? 'checked' : '' ?>>
            <label for="op2">Gön*nerinnenabo 50 CHf</label><br>
            <input type="radio" name="type[]" id="op3" value="Supergönner*innen"  <?= isset($data['type']) && in_array('Supergönner*innen', $data['type']) ? 'checked' : '' ?>>
            <label for="op3">Supergönner*innen 100 CHf</label><br>
            <input type="radio" name="type[]" id="op4" value="Auslandsabo"  <?= isset($data['type']) && in_array('Auslandsabo', $data['type']) ? 'checked' : '' ?>>
            <label for="op4">Auslandsabo 25 €</label><br>
        </div>


<!-- adresse -->
<?php snippet('contact_info') ?>


<!-- gift checkbox -->
            <div class="gift">
              <input type="checkbox" id="gift_check" name="gift" value="Geschenkabo" onclick="check()">
              <label for="gift_check">Abo als Geschenk?</label>
            </div>

<!-- gift address -->
<div id="gift_address">
  <?php snippet('gift_info') ?>
</div>

<?php snippet('submit') ?>

        </form>
        <?php endif ?>
    </main>

<?php snippet('footer') ?>
