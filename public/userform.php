<?php
session_start ();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/master.min.css">
  <link rel="icon" type="image/png" href="assets/images/icons/favicon.png" />
  <title>Formulaire de renseignements</title>
</head>

<body>
  <section class="userform">
    <section class="stars" id="scene"></section>
    <header class="sign_header">
      <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="sign_header_logo">
      <h1 class="sign_header_title"><a href="index.html">INFINITY</a></h1>
    </header>
    <?php
    if (isset($_SESSION['usr']) && isset($_SESSION['pwd']))
    {
      ?>
      <section class="userform_container">
      <h1 class="userform_title">Fiche de renseignements</h1>
      <div class="userform_container_first">
        <form class="userform_form" action="index.html" method="post">
          <label class="userform_form_label">Votre nom :</label>
          <input class="userform_form_input" type="text" name="name" placeholder="Nom prénom" required></input><br>
          <label class="userform_form_label">Votre âge :</label>
          <input class="userform_form_input" type="number" name="âge" placeholder="Age" required></input><br>
          <label class="userform_form_label">Votre nationalité : </label>
          <input class="userform_form_input" type="text" name="nationalité" placeholder="Nationalité" required></input><br>
          <label class="userform_form_label">Votre taille :</label>
          <input class="userform_form_input" type="number" name="taille" placeholder="Taille (en cm)" required></input><br>
          <label class="userform_form_label">Votre poids :</label>
          <input class="userform_form_input" type="number" name="poids" placeholder="Poids (en kg)" required></input><br>
          <label class="userform_form_label">Allergies :</label>
          <input class="userform_form_input" type="text" name="allergie" placeholder="Allergies"></input><br>
          <label class="userform_form_label">Régime alimentaire </label>
          <input class="userform_form_input" type="text" name="régime alimentaire" placeholder="Régime alimentaire"></input><br>
          <input type="text" class="userform_form_next" name="suivant" placeholder="suivant"><a href=""></a></input>
        </form>
      </div>
      <div class="userform_container_second">
        <form class="userform_form" action="index.html" method="post">
          <label class="userform_form_label">Maladie, infirmité :</label>
          <input class="userform_form_input" type="text" name="infirmity" placeholder="Infirmité"></input><br>
          <label class="userform_form_label">Traitement de fond:</label>
          <input class="userform_form_input" type="text" name="medication" placeholder="Traitement de fond"></input><br>
          <label class="userform_form_label">Problèmes respiratoires :</label>
          <input class="userform_form_input" type="text" name="respiratory" placeholder="Problèmes respiratoires"></input><br>
          <label class="userform_form_label">Maladie mentale :</label>
          <input class="userform_form_input" type="text" name="mental" placeholder="Maladie mentale"></input><br>
          <label class="userform_form_label">Maladie cardiaque :</label>
          <input class="userform_form_input" type="text" name="cardiac" placeholder="Maladie cardiaque"></input><br>
          <label class="userform_form_label">Vos phobies :</label>
          <input class="userform_form_input" type="text" name="fear" placeholder="phobies"></input><br>
          <label class="userform_form_label">Votre consommation d'alcool :</label>
          <select class="userform_form_select" name="alcohol" value="alcool" required>
          <option class="userform_form_option" value="never">Never</option>
          <option value="2times">2 fois par semaine</option>
          <option value="2times">4 fois par semain</option>
          <option value="everyday">Quotidiennement </option>
          <option value="2times">TOUT LE TEMPS (perfusion)</option>
        </select><br>
          <label class="userform_form_label">Votre consommation de substances :</label>
          <select class="userform_form_select" name="drug" value="drogues" required>
          <option value="never">Jamais</option>
          <option value="hard">Drogues dures</option>
          <option value="weed">Que de la WEED</option>
          <option value="toxico">Toxicoman</option>
          <option value="junky">Junky</option>
        </select><br>
          <input type="text" class="userform_form_next" name="suivant" placeholder="suivant"><a href=""></a></input>
        </form>
      </div>
      <div class="userform_container_third">
        <form class="userform_form" action="index.html" method="post">
          <label class="userform_form_label">Famille :</label>
          <input class="userform_form_input" type="text" name="family" placeholder="Membres" required></input><br>
          <label class="userform_form_label">Grossesse (si oui, le terme) :</label>
          <input class="userform_form_input" type="text" name="pregnant" placeholder="mois de grossesse"></input><br>
          <label class="userform_form_label">Votre profession :</label>
          <input class="userform_form_input" type="text" name="professional" placeholder="Profession" required></input><br>
          <label class="userform_form_label">Votre téléphone :</label>
          <input class="userform_form_input" type="phone" name="phone" placeholder="0X XX XX XX XX" required></input><br>
          <label class="userform_form_label">Votre mail :</label>
          <input class="userform_form_input" type="mail" name="mail" placeholder="mail@mail.com" required></input><br>
          <label class="userform_form_label">Votre adresse :</label>
          <input class="userform_form_input" type="text" name="address" placeholder="n° rue, ville, pays" required></input><br><br><br>
          <input class="userform_form_submit" type="submit" name="submit" value="Soumettre">
        </form>
      </div>
    </section>
    <?php
    }
    else
    {
      ?>
      <div class="userform_error_title">
      <p>Veuillez d'abord vous connecter.</p>
      <a class="userform_error_link" href="sign.php">Se connecter</a>
      </div>
      <?php
    }
?>
  </section>

  <section class="fmenu">
    <nav class="fmenu_nav">
      <a href="index.html" class="fmenu_nav_icon"></a>
      <a href="" class="fmenu_nav_icon"></a>
      <a href="" class="fmenu_nav_icon"></a>
      <a href="" class="fmenu_nav_icon"></a>
      <a href="" class="fmenu_nav_icon"></a>
    </nav>
  </section>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <script src="js/app.min.js" charset="UTF-8"></script>
</body>

</html>
