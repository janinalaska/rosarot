<div class="info">
  <p>Kontaktdaten der beschenkten Person:</p>
</div>

  <div class="two">
    <div class="field left">
      <label for="gfirstname">
          Vorname
      </label>
      <input type="text" id="gfirstname" name="gfirstname" value="<?= esc($data['gfirstname'] ?? '', 'attr') ?>" >
    </div>
    <div class="field">
      <label for="gname">
          Name
      </label>
      <input type="text" id="gname" name="gname" value="<?= esc($data['gname'] ?? '', 'attr') ?>" >
    </div>
  </div>

  <div class="two">
    <div class="field left">
        <label for="gstreet">
            Strasse
        </label>
        <input type="text" id="gstreet" name="gstreet" value="<?= esc($data['gstreet'] ?? '', 'attr') ?>" >
    </div>
    <div class="field nr">
        <label for="gnr">
            Hausnummer
        </label>
        <input type="text" id="gnr" name="gnr" value="<?= esc($data['gnr'] ?? '', 'attr') ?>" >
    </div>
  </div>

  <div class="two">
    <div class="field left plz">
        <label for="gplz">
            Postleitzahl
        </label>
        <input type="text" id="gplz" name="gplz" maxlength="4" value="<?= esc($data['gplz'] ?? '', 'attr') ?>" >
    </div>
    <div class="field">
        <label for="gcity">
            Stadt
        </label>
        <input type="text" id="gcity" name="gcity" value="<?= esc($data['gcity'] ?? '', 'attr') ?>" >
    </div>
  </div>
