<?php include 'meta.php'?>
  <link rel="stylesheet" href="css/style_surveillant.css">
    <section id="page_content" class="mg-auto bxs">
        <?php include 'header.php'?>
        <section class="connect_flags">
          <div class="connect-flag mg-center">
            <p>SESSION SURVEILLANT </p>
          </div>
        </section>
        <section class="form-sec mg-auto">
          <div class="end_in">
            <p>INSCRIRE UN ENSEIGNANT </p>
          </div>
          <form class="form_to_sign-in" action="index.html" method="post">
            <input type="text" name="nom_prenom" placeholder="Entrer le Nom et Prenom">
            <div class="flex">
              <input type="text" name="id_sign" placeholder="Entrer un ID ou Generer">
              <button type="button" name="button" class="">GENERER</button>
            </div>
            <div class="flex">
              <input type="password" name="password_sign" placeholder="Entrer un Mot de passe ou Generer">
              <button type="button" name="button" class="">GENERER</button>
            </div>
            <input type="submit" name="save_sign" value="ENREGISTRER" class="midnightblue">
          </form>
        </section>
      <?php include 'footer.php'?>
    </section>
</body>
</html>
