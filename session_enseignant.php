<?php include 'meta.php'?>
  <link rel="stylesheet" href="css/style_enseignant.css">
    <section id="page_content" class="mg-auto bxs absolute">
        <?php include 'header.php'?>
        <section class="connect_flags">
          <div class="connect-flag mg-center">
            <p>SESSION ENSEIGNANT </p>
          </div>
        </section>
        <section class="form-sec mg-auto">
          <div class="end_in">
            <p>Terminer de voter en 3 etapes </p>
          </div>
          <div class="onglet_vote flex justify-sb">
            <div class="onglet onglet1 dopacity" onclick="load_ct(0)" >
              <p>SELECTIONNER VOS CLASSE</p>
            </div>
            <div class="onglet onglet2" onclick="load_ct(1)">
              <p>NOTER LES CONDUITES</p>
            </div>
            <div class="onglet onglet3" onclick="load_ct(2)">
              <p>ENVOYER AU SURVEILLANT</p>
            </div>
          </div>
          <section class="contenu-form dnone dblockI">
            <form class="form-index" action="index.php" method="post">
              <div class="select relative mg-auto half-w">
                <div class="select-niv "> SELECTIONNER</div>
              </div>
              <input type="submit" name="send" value="SUIVANT ">
            </form>
          </section>
          <section class="sendto contenu-form dnone">
            <div class="">
              <form class="select_note_if" action="index.html" method="post">
              <div class="select relative mg-auto half-w">
                <div class="select-niv-2 ">NOTER</div>
              </div>
                <input type="submit" name="next_note_entry" value="SUIVANT" class="midnightblue">
              </form>
            </div>
          </section>
          <section class="contenu-form dnone">
            <form class="send_to_princ select_note_if" action="index.html" method="post">
              <textarea name="envoyer_au_surveillant" rows="5" cols="80" placeholder="Laisser un commentaire au Surveillant"></textarea>
              <input type="submit" name="next_note_entry" value="TERMINER" class="midnightblue">
            </form>
          </section>
        </section>
      <?php include 'footer.php'?>
    </section>
    <?php include 'pop_up.php'?>
</body>
</html>
