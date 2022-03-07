<div class="two">
  <div class="field left">
    <label for="nfname">
        Vorname <abbr title="required">*</abbr>
    </label>
    <input type="text" id="nfname" name="nfname" value="<?= esc($data['nfname'] ?? '', 'attr') ?>" required>
    <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
  </div>
  <div class="field">
    <label for="nname">
        Name <abbr title="required">*</abbr>
    </label>
    <input type="text" id="nname" name="nname" value="<?= esc($data['nname'] ?? '', 'attr') ?>" required>
    <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
  </div>
</div>

<div class="two">
  <div class="field left">
      <label for="nstreet">
          Strasse <abbr title="required">*</abbr>
      </label>
      <input type="text" id="nstreet" name="nstreet" value="<?= esc($data['nstreet'] ?? '', 'attr') ?>" required>
      <?= isset($alert['nstreet']) ? '<span class="alert error">' . esc($alert['nstreet']) . '</span>' : '' ?>
  </div>
  <div class="field nr">
      <label for="nnr">
          Hausnummer <abbr title="required">*</abbr>
      </label>
      <input type="text" id="nr" name="nnr" value="<?= esc($data['nnr'] ?? '', 'attr') ?>" required>
      <?= isset($alert['nnr']) ? '<span class="alert error">' . esc($alert['nnr']) . '</span>' : '' ?>
  </div>
</div>

<div class="two">
  <div class="field left plz">
      <label for="nplz">
          Postleitzahl <abbr title="required">*</abbr>
      </label>
      <input type="text" id="nplz" name="nplz" maxlength="4" value="<?= esc($data['nplz'] ?? '', 'attr') ?>" required>
      <?= isset($alert['nplz']) ? '<span class="alert error">' . esc($alert['nplz']) . '</span>' : '' ?>
  </div>
  <div class="field">
      <label for="ncity">
          Stadt <abbr title="required">*</abbr>
      </label>
      <input type="text" id="ncity" name="ncity" value="<?= esc($data['ncity'] ?? '', 'attr') ?>" required>
      <?= isset($alert['ncity']) ? '<span class="alert error">' . esc($alert['ncity']) . '</span>' : '' ?>
  </div>
</div>
