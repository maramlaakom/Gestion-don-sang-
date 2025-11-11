<?php require_once(__DIR__ . '/header.php'); ?>
<h1>Contactez nous</h1>
<form>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Votre message</label>
        <textarea class="form-control" id="message" name="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
<?php require_once(__DIR__ . '/footer.php'); ?>
