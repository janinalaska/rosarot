<?php snippet('header') ?>
    <main class="main">

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
  <p>Teile uns doch bitte zuerst Deine bisherige Adresse mit:</p>
</div>
<!-- adresse -->
<?php snippet('contact_info') ?>


<div class="info">
  <p>Und jetzt Deine neue Adresse:</p>
</div>
<?php snippet('new_info') ?>



<!-- kommentarfeld -->
<div class="field">
    <label for="comment">
        Bemerkung
    </label>
    <textarea id="comment" name="comment">
        <?= esc($data['comment'] ?? '') ?>
    </textarea>
</div>


<!-- submit button -->
            <input type="submit" name="submit" value="Abschicken">

        </form>
        <?php endif ?>
    </main>

<?php snippet('footer') ?>
