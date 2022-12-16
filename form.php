
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../img/favicon_crop.svg">
    <style>/* Style the buttons that are used to open the tab content */
        .cta button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .cta button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .cta button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

    </style>
    <title>Document</title>
</head>
<body>
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
                <button class="active" class="candidation" class="tablinks" onclick="openCity(event, 'London')">Candidature</button>
                <button class="motivation" class="tablinks" onclick="openCity(event, 'Paris')">Motivation</button>
                <button class="lien" class="tablinks" onclick="openCity(event, 'Tokyo')">Lien</button>
            </div>
        </div>

        <div class="candidature tabcontent" id="London">
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
              <br>
                  <p>Rejoindre en année:</p>
                    <input type="radio" id="html" name="fav_language" value="HTML">
                    <label for="html">Bachelor Premiere Année</label><br>
                    <input type="radio" id="css" name="fav_language" value="CSS">
                    <label for="css">Bachelor Troisième Année</label><br>
                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                    <label for="javascript">Master Premiere Année</label>
          </form>
          <button type="submit" class="tablinks" onclick="openCity(event, 'Paris')">Suivant</button>
        </div>

        <div class="candidature2 tabcontent" id="Paris">
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

            <button type="submit" class="tablinks" onclick="openCity(event, 'Tokyo')">Suivant</button>

        </div>

        <div class="candidature3 tabcontent" id="Tokyo">
          <form action="post">
            <div>
              <label for="lien" >Lien file vert</label>
              <input id="lien" type="text">
              <p>Pour finaliser votre candidature, rendez-vous sur le site FileVert. Glissez la photocopie de votre dernier diplôme (ou de vos relevés de notes), celle de votre carte d'identité et votre document de motivation. Cliquez sur "Déposer ici vos fichiers", de préférence dans un dossier compressé nommé à votre nom. Cliquez sur "Envoyer".</p>
            </div>
          </form>
          <button id="sendit" type="submit">Envoyer votre candidature</button>
        </div>
    </div>

<script>
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    //auclic sur le bouton avec l'id sendit on redirige vers la page reception_candidature.php
    document.querySelector("#sendit").addEventListener("click", function(){
        window.location.href = "reception_candidature.php";
    });
</script>
