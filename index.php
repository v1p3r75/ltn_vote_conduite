<?php include 'meta.php'?>
    <section id="page_content" class="mg-auto bxs">
        <?php include 'header.php'?>
        <section class="connect_flags">
          <div class="connect-flag mg-center">
            <p>CONNECTEZ-VOUS </p>
          </div>
        </section>
        <section class="form-sec mg-auto">
          <form class="form-index" action="index.php" method="post">
            <select class="category-user" name="users">
              <option value="default">Selectionner votre categorie </option>
              <option value="surveillant">Surveillant</option>
              <option value="enseignant">Enseignant</option>
            </select>
            <input type="text" name="id" placeholder="Entrer votre ID">
            <input type="password" name="password" placeholder="Entrer votre mot de passe">
            <input type="submit" name="send_index" value="SE CONNECTER">
          </form>
        </section>
      <?php include 'footer.php'?>
    </section>
</body>
</html>
