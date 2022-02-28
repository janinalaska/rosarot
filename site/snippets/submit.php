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
<input class="submit" type="submit" name="submit" value="Abschicken">
