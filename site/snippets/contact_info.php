<div class="two">
  <div class="field left">
    <label for="firstname">
        Vorname <abbr title="required">*</abbr>
    </label>
    <input type="text" id="firstname" name="firstname" value="<?= esc($data['firstname'] ?? '', 'attr') ?>" required>
    <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
  </div>
  <div class="field">
    <label for="name">
        Name <abbr title="required">*</abbr>
    </label>
    <input type="text" id="name" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required>
    <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
  </div>
</div>

<div class="two">
  <div class="field left">
      <label for="street">
          Strasse <abbr title="required">*</abbr>
      </label>
      <input type="text" id="street" name="street" value="<?= esc($data['street'] ?? '', 'attr') ?>" required>
      <?= isset($alert['street']) ? '<span class="alert error">' . esc($alert['street']) . '</span>' : '' ?>
  </div>
  <div class="field nr">
      <label for="nr">
          Hausnummer <abbr title="required">*</abbr>
      </label>
      <input type="text" id="nr" name="nr" value="<?= esc($data['nr'] ?? '', 'attr') ?>" required>
      <?= isset($alert['nr']) ? '<span class="alert error">' . esc($alert['nr']) . '</span>' : '' ?>
  </div>
</div>

<div class="two">
  <div class="field left plz">
      <label for="plz">
          Postleitzahl <abbr title="required">*</abbr>
      </label>
      <input type="text" id="plz" name="plz" maxlength="4" value="<?= esc($data['plz'] ?? '', 'attr') ?>" required>
      <?= isset($alert['plz']) ? '<span class="alert error">' . esc($alert['plz']) . '</span>' : '' ?>
  </div>
  <div class="field">
      <label for="city">
          Stadt <abbr title="required">*</abbr>
      </label>
      <input type="text" id="city" name="city" value="<?= esc($data['city'] ?? '', 'attr') ?>" required>
      <?= isset($alert['city']) ? '<span class="alert error">' . esc($alert['city']) . '</span>' : '' ?>
  </div>
</div>

<!-- email -->
            <div class="field">
                <label for="email">
                    Email <abbr title="required">*</abbr>
                </label>
                <input type="email" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
                <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
            </div>
