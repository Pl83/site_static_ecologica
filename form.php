<link rel="stylesheet" href="style.css">
<main>
<div class="form">
  <div class="haut">
    <img src="img/logo.svg" alt="logo">
    <div class="txt">
      <h2>MON DOSSIER DE CANDIDATURE</h2>
      <div class="p">
        <p>Vous pouvez suivre et modifier a tout moment votre dossier</p>
        <p>Les champs marqués d’un astérisque sont obligatoires. </p>
      </div>
    </div>
    <div class="cta">
      <button class="active">Candidature</button>
      <button>Motivation</button>
      <button>Lien</button>
    </div>
  </div>

  <!--  <div class="candidature">
    <form action="post">
      <div>
        <label for="civilité" >Civilité*</label>
        <input id="civilité" type="text">
      </div>
      <div>
        <label for="nom" >Nom*</label>
        <input id="nom" type="text" required>
      </div>
      <div>
        <label for="prenom" >Prénom*</label>
        <input id="prenom" type="text" required>
      </div>
      <div>
        <label for="date" >Date de naissance*</label>
        <input id="date" type="date" required>
      </div>
      <div>
        <label for="nationalité" >Nationalité*</label>
        <input id="nationalité" type="text" required>
      </div>
      <div>
        <label for="adresse" >Adresse électronique*</label>
        <input id="adresse" type="text" required>
      </div>
      <div>
        <label for="password" >Mot de passe*</label>
        <input id="password" type="text" required>
      </div>
      <div>
        <label for="phone" >Téléphone portable*</label>
        <input type="tel" id="phone"
       pattern="[0-9]{2}-[0-9]{2}-[0-9]{2} [0-9]{2}-[0-9]{2}-[0-9]{2}"
       required>
      </div>
      <div>
        <label for="etude" >Etude en cours*</label>
        <input id="etude" type="text" required>
      </div>
    </form>
    <button type="submit">Suivant</button>
  </div> -->

  <div class="candidature2">
    <form action="post">
      <div>
        <label for="association" >Si j'étais une association, je serais :</label>
        <input id="association" type="text">
      </div>

      <div>
        <label for="oeuvre" >Si j’étais une oeuvre (toutes les formes d’art sont valables), je serais : </label>
        <input id="oeuvre" type="text">
      </div>

      <div>
        <label for="auteur" >Si j’étais un.e auteur.rice, je serais :</label>
        <input id="auteur" type="text">
      </div>

      <div>
          <label for="personnalite" >Si j’étais une personnalité engagée, je serais :</label>
          <input id="personnalite" type="text">
        </div>
    </form>

    <button type="submit">Suivant</button>

  </div>

  <!-- <div class="candidature3">
    <form action="post">
      <div>
        <label for="lien" >Lien file vert</label>
        <input id="lien" type="text">
        <p>Pour finaliser votre candidature, rendez-vous sur le site FileVert. Glissez la photocopie de votre dernier diplôme (ou de vos relevés de notes), celle de votre carte d'identité et votre document de motivation. Cliquez sur "Déposer ici vos fichiers", de préférence dans un dossier compressé nommé à votre nom. Cliquez sur "Envoyer".</p>
      </div>
    </form>
    <button type="submit">Envoyer votre candidature</button>
  </div> -->
</div>




<?php require_once "template/footer.php"?>