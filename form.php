
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../img/favicon_crop.svg">
</head>
<body>
<main class="formulaire">
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
                <button class="active" class="candidation" class="tablinks" onclick="openPart(event, 'candidation')">Candidature</button>
                <button class="motivation" class="tablinks" onclick="openPart(event, 'motivation')">Motivation</button>
                <button class="lien" class="tablinks" onclick="openPart(event, 'lien')">Lien</button>
            </div>
        </div>

        <div class="candidature tabcontent" id="candidation">
          <form method="post" action="">
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
            <div class="year">
              <p>Rejoindre en année:</p>
              <div>
                <label for="html">Bachelor Premiere Année</label>
                <input type="radio" id="html" name="fav_language"   value="HTML">
              </div>
              <div>
                <label for="css">Bachelor Troisième Année</label>
                <input type="radio" id="css" name="fav_language" value="CSS">
              </div>
              <div>
                <label for="javascript">Master Premiere Année</label>
                <input type="radio" id="javascript" name="fav_language" value="JavaScript">
              </div>
            </div>
          </form>
          <div class="btn_form">
            <button id="back">Retour</button>
            <button type="submit" class="tablinks" onclick="openPart(event, 'motivation')">Suivant</button>
          </div>
        </div>

        <div class="candidature2 tabcontent" id="motivation">
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
            <div class="btn_form">
              <button class="tablinks" onclick="openPart(event, 'candidation')">Retour</button>
              <button type="submit" class="tablinks" onclick="openPart(event, 'lien')">Suivant</button>
          </div>

        </div>

        <div class="candidature3 tabcontent" id="lien">
          <form action="post">
            <div>
              <label for="lien" >Lien file vert</label>
              <input id="lien" type="text">
              <p>Pour finaliser votre candidature, rendez-vous sur le site FileVert. Glissez la photocopie de votre dernier diplôme (ou de vos relevés de notes), celle de votre carte d'identité et votre document de motivation. Cliquez sur "Déposez ici vos fichiers", de préférence dans un dossier compressé nommé à votre nom. Cliquez sur "Envoyer".</p>
            </div>
          </form>
          <div class="btn_form">
            <button class="tablinks" onclick="openPart(event, 'motivation')">Retour</button>
            <button type="submit" id="sendit" >Envoyer votre Candidature</button>
          </div>
        </div>
    </div>
    <div class="illus">
      <img src="img/illu_2.png" alt="">
    </div>

<script>
    function openPart(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    //auclic sur le bouton avec l'id sendit on redirige vers la page reception_candidature.php
    document.querySelector("#sendit").addEventListener("click", function(){
        window.location.href = "reception_candidature.php";
    });
    document.querySelector("#back").addEventListener("click", function(){
        window.location.href = "index.php";
    });
</script>
