<?php snippet('header') ?>
    <main class="main">
        <h1><?= $page->title()->html() ?></h1>

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
            <input type="radio" name="type[]" id="op2" value="Gön*nerinnneabo"  <?= isset($data['type']) && in_array('Gön*nerinnenabo', $data['type']) ? 'checked' : '' ?>>
            <label for="op2">Gön*nerinnneabo 25 CHf</label><br>
            <input type="radio" name="type[]" id="op3" value="Supergönner*innen"  <?= isset($data['type']) && in_array('Supergönner*innen', $data['type']) ? 'checked' : '' ?>>
            <label for="op3">Supergönner*innen 50 CHf</label><br>
            <input type="radio" name="type[]" id="op4" value="Auslandsabo"  <?= isset($data['type']) && in_array('Auslandsabo', $data['type']) ? 'checked' : '' ?>>
            <label for="op4">Auslandsabo 25 €</label><br>
        </div>

            <div class="field">
                <label for="name">
                    Name <abbr title="required">*</abbr>
                </label>
                <input type="text" id="name" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required>
                <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
            </div>
            <div class="field">
                <label for="firstname">
                    Vorname <abbr title="required">*</abbr>
                </label>
                <input type="text" id="firstname" name="firstname" value="<?= esc($data['firstname'] ?? '', 'attr') ?>" required>
                <?= isset($alert['firstname']) ? '<span class="alert error">' . esc($alert['firstname']) . '</span>' : '' ?>
            </div>
            <div class="field">
                <label for="email">
                    Email <abbr title="required">*</abbr>
                </label>
                <input type="email" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
                <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
            </div>
            <div class="field">
                <label for="text">
                    Text <abbr title="required">*</abbr>
                </label>
                <textarea id="text" name="text" required>
                    <?= esc($data['text'] ?? '') ?>
                </textarea>
                <?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>
            </div>



            <input type="submit" name="submit" value="Submit">

        </form>
        <?php endif ?>
    </main>

<?php snippet('footer') ?>
