<?php snippet('header') ?>
    <main class="main">
        <h3><?= $page->title()->html() ?></h3>

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


            <div class="field">
              <label for="issue">Bitte teile uns Nummer und Titel der Ausgabe mit, die Du gerne nachbestellen möchtest.</label>
              <input type="text" name="issue" value="">
            </div>


<!-- adresse -->
<?php snippet('contact_info') ?>

<?php snippet('submit') ?>

        </form>
        <?php endif ?>
    </main>

<?php snippet('footer') ?>
