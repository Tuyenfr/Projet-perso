<?php
require_once "./templates/header-autres.php";
?>

<main class="main-contact">
<div class="pad-top flex">

<div>

<p class="form-title">Formulaire de contact</p>

  <form action="message.php" method="POST">
    <label class="form-label" for="Prénom">Prénom <input type="text" name="Prénom" size="30" required></label>
    <br>
    <label class="form-label"  for="Nom">Nom <input type="text" name="Nom" size="30"></label>
    <br>
    <label class="form-label" for="Email">Email <input type="email" name="Email" size="30"></label>
    <br>
    <label class="form-label" for="Sujet">Sujet <input type="text" name="Sujet" size="30"></label>
    <br>
    <br>
    <textarea id="Message" name="Message" rows="10" cols="40" placeholder="Saisissez votre message" required></textarea>
    <br>
    <input type="submit" value="Valider">
  </form>
</div>
</div>

</main>

<div class="lien-CV"></div>
<?php
require_once "./templates/footer.php";
?>