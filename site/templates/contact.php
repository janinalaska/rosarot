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

<div class="info">
  <p>Teile uns doch bitte zuerst deine bisherigen Kontaktdaten mit:</p>
</div>
<!-- adresse -->
<?php snippet('contact_info') ?>


<div class="info new">
  <p>Und jetzt deine neuen Kontaktdaten:</p>
</div>

<?php snippet('new_info') ?>

<?php snippet('submit') ?>

        </form>
        <?php endif ?>
    </main>

<?php snippet('footer') ?>
