<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/form_fiche_rens.css">
     <link rel="stylesheet" href="js.js">
    <title>Fiche de renseignement pour l'enregistrement de mariage</title>
    <header>

</head>
<body>
    <form action="insert_rens.php" method="post" enctype="multipart/form-data">
            <div class="title"><u>FICHE DE RENSEIGNEMENT POUR ENREGISTREMENT DE MARIAGE</u></div><br>
    <div id="form1" class="form-section">
        <p><B>Identité de l'époux</B></p><br>
        <!-- Informations sur l'époux -->
        <div class="container">
        <div class="form-row">
            <div class="form-group">
                <label for="nom_epoux">Nom de l'époux:</label>
                <input type="text" name="nom_epoux" id="nom_epoux" required>
            </div>
            <div class="form-group">
                <label for="postnom_epoux">Post-nom de l'époux:</label>
                <input type="text" name="postnom_epoux" id="postnom_epoux" required>
            </div>
            <div class="form-group">
                <label for="prenom_epoux">Prénom de l'époux :</label>
                <input type="text" name="prenom_epoux" id="prenom_epoux" required>
            </div>
            <div class="form-group">
                <label for="lieu_nais_epoux">Lieu de naissance de l'époux:</label>
                <input type="text" name="lieu_nais_epoux" id="lieu_nais_epoux" required>
            </div>
             <div class="form-group">
                <label for="date_nais_epoux">Date de naissance de l'époux:</label>
                <input type="date" name="date_nais_epoux" id="date_nais_epoux" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="fils_de_epoux">Nom du Père de l'époux:</label>
                <input type="text" name="fils_de_epoux" id="fils_de_epoux" required>
            </div>
            <div class="form-group">
                <label for="et_de_epoux">Nom Mère de l'époux:</label>
                <input type="text" name="et_de_epoux" id="et_de_epoux" required>
            </div>
            <div class="form-group">
                <label for="chef_secteur_epoux">Chefferie/Secteur de l'époux:</label>
                <input type="text" name="chef_secteur_epoux" id="chef_secteur_epoux" required>
            </div>
            <div class="form-group">
                <label for="territoire_epoux">Territoire de l'époux:</label>
                <input type="text" name="territoire_epoux" id="territoire_epoux" required>
            </div>
            <div class="form-group">
                <label for="province_epoux">Province de l'époux:</label>
                <input type="text" name="province_epoux" id="province_epoux" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="etat_civil_epoux">Etat civil de l'époux:</label>
                <input type="text" name="etat_civil_epoux" id="etat_civil_epoux" required><br>
            </div>
            <div class="form-group">
                <label for="profession_epoux">Profession de l'époux:</label>
                <input type="text" name="profession_epoux" id="profession_epoux" required><br>
            </div>
            <div class="form-group">
                <label for="adress_epoux">Adresse de l'époux:</label>
                <input type="text" name="adress_epoux" id="adress_epoux" required><br>
            </div>
            <div class="form-group">
                <label for="telephone_epoux">Téléphone de l'époux:</label>
                <input type="tel" name="telephone_epoux" id="telephone_epoux" pattern="[0-9]{10}" required placeholder="+243900001234">
            </div>
        </div>
    </div>
    <br>
             <!-- Informations sur l'épouse -->
                <p><B>Identité de l'épouse</B></p><br>
    <div class="container">
        <div class="form-row">
            <div class="form-group">
                <label for="nom_epouse">Nom de l'épouse:</label>
                <input type="text" name="nom_epouse" id="nom_epouse" required>
            </div>
            <div class="form-group">
                <label for="postnom_epouse">Post-nom de l'épouse:</label>
                <input type="text" name="postnom_epouse" id="postnom_epouse" required>
            </div>
            <div class="form-group">
                <label for="prenom_epouse">Prénom de l'épouse :</label>
                <input type="text" name="prenom_epouse" id="prenom_epouse" required>
            </div>
            <div class="form-group">
                <label for="lieu_nais_epouse">Lieu de naissance de l'épouse:</label>
                <input type="text" name="lieu_nais_epouse" id="lieu_nais_epouse" required>
            </div>
             <div class="form-group">
                <label for="date_nais_epouse">Date de naissance de l'épouse:</label>
                <input type="date" name="date_nais_epouse" id="date_nais_epouse" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="fils_de_epouse">Nom du Père de l'épouse:</label>
                <input type="text" name="fils_de_epouse" id="fils_de_epouse" required>
            </div>
            <div class="form-group">
                <label for="et_de_epouse">Nom Mère de l'épouse:</label>
                <input type="text" name="et_de_epouse" id="et_de_epouse" required>
            </div>
            <div class="form-group">
                <label for="chef_secteur_epouse">Chefferie/Secteur de l'épouse:</label>
                <input type="text" name="chef_secteur_epouse" id="chef_secteur_epouse" required>
            </div>
            <div class="form-group">
                <label for="territoire_epouse">Territoire de l'épouse:</label>
                <input type="text" name="territoire_epouse" id="territoire_epouse" required>
            </div>
            <div class="form-group">
                <label for="province_epouse">Province de l'épouse:</label>
                <input type="text" name="province_epouse" id="province_epouse" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="etat_civil_epouse">Etat civil de l'épouse:</label>
                <input type="text" name="etat_civil_epouse" id="etat_civil_epouse" required><br>
            </div>
            <div class="form-group">
                <label for="profession_epouse">Profession de l'époux:</label>
                <input type="text" name="profession_epouse" id="profession_epouse" required><br>
            </div>
            <div class="form-group">
                <label for="adress_epouse">Adresse de l'épouse:</label>
                <input type="text" name="adress_epouse" id="adress_epouse" required><br>
            </div>
            <div class="form-group">
                <label for="telephone_epouse">Téléphone de l'épouse:</label>
                <input type="tel" name="telephone_epouse" id="telephone_epouse" pattern="[0-9]{10}" required placeholder="+243900001234"><br>
            </div>
        </div>
    </div>
    <br>

    <!-- Informations sur mariage -->
                <p><B>Informations sur le mariage</B></p><br>
    <div class="container">
        <div class="form-row">
            <div class="form-group">
                <label for="date_prevue_mariage">Date prévue pour le mariage:</label>
                <input type="date" name="date_prevue_mariage" id="date_prevue_mariage" required>
            </div>
            <div class="form-group">
                <label for="regime_matrimonial">Regime matrimonial:</label>
                 <select id="regime_matrimonial" name="regime_matrimonial">
                      <option value="separation_biens">La séparations de biens</option>
                      <option value="communaute_biens_reduite_acquets">La communauté des biens réduite aux acquêts</option>
                      <option value="communaute_universelle_biens">La communauté universelle des biens</option>
                 </select> 
            </div>
           <div class="form-group">
                <label for="categorie_ceremonie">Cérémonie:</label>
                 <select id="categorie_ceremonie" name="categorie_ceremonie">
                      <option value="AVEC">AVEC</option>
                      <option value="SANS">SANS</option>
                 </select> 
            </div>
            <div class="form-group">
                <label for="dot_verse_espece">Dot en espèce:</label>
                <input type="number" name="dot_verse_espece" id="dot_verse_espece" step="0.01" min="0" required placeholder="0.00">
            </div>
             <div class="form-group">
                <label for="dot_verse_nature">Dot en nature:</label>
                <input type="textarea" name="dot_verse_nature" id="dot_verse_nature" required>
            </div>
        </div>
    </div>
    <button type="button" onclick="showNextForm('form2')">Suivant</button>
</div>
    <br>

        <div id="form2" class="form-section" style="display: none;">

        <!-- Informations sur parents -->
                <p><B>Identité sur les Parents </B></p><br>
                 <p class="Parents">1. Parents Epoux</p><br>
                 <!-- Informations des parents epoux -->
    <div class="container">
        <div class="form-row">
            <div class="form-group">
                <label for="nom_pere_epoux">Nom du Père :</label>
                <input type="text" name="nom_pere_epoux" id="nom_pere_epoux" required>
            </div>
            <div class="form-group">
                <label for="postnom_pere_epoux">Post-nom du Père :</label>
                <input type="text" name="postnom_pere_epoux" id="postnom_pere_epoux" required>
            </div>
            <div class="form-group">
                <label for="lieu_nais_pere_epoux">Lieu de naissance du Père :</label>
                <input type="text" name="lieu_nais_pere_epoux" id="lieu_nais_pere_epoux" required>
            </div>
             <div class="form-group">
                <label for="date_nais_pere_epoux">Date de naissance du Père:</label>
                <input type="date" name="date_nais_pere_epoux" id="date_nais_pere_epoux" required>
            </div>
            <div class="form-group">
                <label for="profession_pere_epoux">Profession du Père :</label>
                <input type="text" name="profession_pere_epoux" id="profession_pere_epoux" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="etat_civil_pere_epoux">Etat civil du Père:</label>
                <input type="text" name="etat_civil_pere_epoux" id="etat_civil_pere_epoux" required>
            </div>
            <div class="form-group">
                <label for="adress_pere_epoux">Adresse du Père:</label>
                <input type="text" name="adress_pere_epoux" id="adress_pere_epoux" required>
            </div>
            <div class="form-group">
                <label for="nom_mere_epoux">Nom de la Mère :</label>
                <input type="text" name="nom_mere_epoux" id="nom_mere_epoux" required>
            </div>
            <div class="form-group">
                <label for="postnom_mere_epoux">Post-nom de la Mère :</label>
                <input type="text" name="postnom_mere_epoux" id="postnom_mere_epoux" required>
            </div>
            <div class="form-group">
                <label for="lieu_nais_mere_epoux">Lieu de naissance de la Mère :</label>
                <input type="text" name="lieu_nais_mere_epoux" id="lieu_nais_mere_epoux" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="date_nais_mere_epoux">Date de naissance de la Mère:</label>
                <input type="date" name="date_nais_mere_epoux" id="date_nais_mere_epoux" required>
            </div>
            <div class="form-group">
                <label for="profession_mere_epoux">Profession de la Mère :</label>
                <input type="text" name="profession_mere_epoux" id="profession_mere_epoux" required>
            </div>
            <div class="form-group">
                <label for="etat_civil_mere_epoux">Etat civil de la Mère:</label>
                <input type="text" name="etat_civil_mere_epoux" id="etat_civil_mere_epoux" required>
            </div>
            <div class="form-group">
                <label for="adress_mere_epoux">Adresse de la Mère:</label>
                <input type="text" name="adress_mere_epoux" id="adress_mere_epoux" required>
            </div>
        </div>
    </div>
        <br>

         <!-- Informations des parents epouse -->
        <p class="Parents">2. Parents Epouse</p><br>
    <div class="container">
        <div class="form-row">
            <div class="form-group">
                <label for="nom_pere_epouse">Nom du Père :</label>
                <input type="text" name="nom_pere_epouse" id="nom_pere_epouse" required>
            </div>
            <div class="form-group">
                <label for="postnom_pere_epouse">Post-nom du Père :</label>
                <input type="text" name="postnom_pere_epouse" id="postnom_pere_epouse" required>
            </div>
            <div class="form-group">
                <label for="lieu_nais_pere_epouse">Lieu de naissance du Père :</label>
                <input type="text" name="lieu_nais_pere_epouse" id="lieu_nais_pere_epouse" required>
            </div>
             <div class="form-group">
                <label for="date_nais_pere_epouse">Date de naissance du Père:</label>
                <input type="date" name="date_nais_pere_epouse" id="date_nais_pere_epouse" required>
            </div>
            <div class="form-group">
                <label for="profession_pere_epouse">Profession du Père :</label>
                <input type="text" name="profession_pere_epouse" id="profession_pere_epouse" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="etat_civil_pere_epouse">Etat civil du Père:</label>
                <input type="text" name="etat_civil_pere_epouse" id="etat_civil_pere_epouse" required>
            </div>
            <div class="form-group">
                <label for="adress_pere_epouse">Adresse du Père:</label>
                <input type="text" name="adress_pere_epouse" id="adress_pere_epouse" required>
            </div>
            <div class="form-group">
                <label for="nom_mere_epouse">Nom de la Mère :</label>
                <input type="text" name="nom_mere_epouse" id="nom_mere_epouse" required>
            </div>
            <div class="form-group">
                <label for="postnom_mere_epouse">Post-nom de la Mère :</label>
                <input type="text" name="postnom_mere_epouse" id="postnom_mere_epouse" required>
            </div>
            <div class="form-group">
                <label for="lieu_nais_mere_epouse">Lieu de naissance de la Mère :</label>
                <input type="text" name="lieu_nais_mere_epouse" id="lieu_nais_mere_epouse" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="date_nais_mere_epouse">Date de naissance de la Mère:</label>
                <input type="date" name="date_nais_mere_epouse" id="date_nais_mere_epouse" required>
            </div>
            <div class="form-group">
                <label for="profession_mere_epouse">Profession de la Mère :</label>
                <input type="text" name="profession_mere_epouse" id="profession_mere_epouse" required>
            </div>
            <div class="form-group">
                <label for="etat_civil_mere_epouse">Etat civil de la Mère:</label>
                <input type="text" name="etat_civil_mere_epouse" id="etat_civil_mere_epouse" required>
            </div>
            <div class="form-group">
                <label for="adress_mere_epoux">Adresse de la Mère:</label>
                <input type="text" name="adress_mere_epouse" id="adress_mere_epouse" required>
            </div>
        </div>
    </div>
    <button type="button" onclick="showPreviousForm('form1')">Retour</button>
    <button type="button" onclick="showNextForm('form3')">Suivant</button>
</div>
    <br>

     <div id="form3" class="form-section" style="display: none;">

         <!-- Informations des parents epouse -->
         <p><B>Information sur les Témoins </B></p><br>
        <p class="Parents">1. Information sur Parrain</p><br>
    <div class="container">
        <div class="form-row">
            <div class="form-group">
                <label for="nom_parrain">Nom du Parrain:</label>
                <input type="text" name="nom_parrain" id="nom_parrain" required>
            </div>
            <div class="form-group">
                <label for="postnom_parrain">Post-nom du Parrain :</label>
                <input type="text" name="postnom_parrain" id="postnom_parrain" required>
            </div>
            <div class="form-group">
                <label for="lieu_nais_parrain">Lieu de naissance du Parrain :</label>
                <input type="text" name="lieu_nais_parrain" id="lieu_nais_parrain" required>
            </div>
             <div class="form-group">
                <label for="date_nais_parrain">Date de naissance du Parrain:</label>
                <input type="date" name="date_nais_parrain" id="date_nais_parrain" required>
            </div>
            <div class="form-group">
                <label for="age_parrain">Age du Parrain :</label>
                <input type="number" name="age_parrain" id="age_parrain" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="profession_parrain">Profession du Parrain:</label>
                <input type="text" name="profession_parrain" id="profession_parrain" required>
            </div>
            <div class="form-group">
                <label for="territoire_parrain">Territoire du Parrain:</label>
                <input type="text" name="territoire_parrain" id="territoire_parrain" required>
            </div>
            <div class="form-group">
                <label for="etat_civil_parrain">Etat civil du Parrain :</label>
                <input type="text" name="etat_civil_parrain" id="etat_civil_parrain" required>
            </div>
            <div class="form-group">
                <label for="adress_parrain">Adresse du Parrain :</label>
                <input type="text" name="adress_parrain" id="adress_parrain" required>
            </div>
            <div class="form-group">
                <label for="telephone_parrain">Téléphone du Parrain :</label>
                <input type="text" name="telephone_parrain" id="telephone_parrain" pattern="[0-9]{10}" required placeholder="+243900001234">
            </div>
        </div>
    </div>
        <br>
        <p class="Parents">2. Information sur Marraine</p><br>
    <div class="container">
        <div class="form-row">
            <div class="form-group">
                <label for="nom_marraine">Nom de Marrain:</label>
                <input type="text" name="nom_marraine" id="nom_marraine" required>
            </div>
            <div class="form-group">
                <label for="postnom_marraine">Post-nom de Marraine :</label>
                <input type="text" name="postnom_marraine" id="postnom_marraine" required>
            </div>
            <div class="form-group">
                <label for="lieu_nais_marraine">Lieu de naissance de Marraine :</label>
                <input type="text" name="lieu_nais_marraine" id="lieu_nais_marraine" required>
            </div>
             <div class="form-group">
                <label for="date_nais_marraine">Date de naissance de Marraine:</label>
                <input type="date" name="date_nais_marraine" id="date_nais_marraine" required>
            </div>
            <div class="form-group">
                <label for="age_marraine">Age de Marraine :</label>
                <input type="number" name="age_marraine" id="age_marraine" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="profession_marraine">Profession de marraine:</label>
                <input type="text" name="profession_marraine" id="profession_marraine" required>
            </div>
            <div class="form-group">
                <label for="territoire_marraine">Territoire de Marraine:</label>
                <input type="text" name="territoire_marraine" id="territoire_marraine" required>
            </div>
            <div class="form-group">
                <label for="etat_civil_marraine">Etat civil de Marraine :</label>
                <input type="text" name="etat_civil_marraine" id="etat_civil_marraine" required>
            </div>
            <div class="form-group">
                <label for="adress_marraine">Adresse de Marraine :</label>
                <input type="text" name="adress_marraine" id="adress_marraine" required>
            </div>
            <div class="form-group">
                <label for="telephone_marraine">Téléphone de Marraine :</label>
                <input type="tel" name="telephone_marraine" id="telephone_marraine" pattern="[0-9]{10}" required placeholder="+243900001234">
            </div>
        </div>
    </div>    
    <button type="button" onclick="showPreviousForm('form2')">Retour</button>
    <button type="button" onclick="showNextForm('form4')">Suivant</button>
</div>

<div id="form4" class="form-section" style="display: none;">

         <!-- Informations des parents epouse -->
         <p><B>Information sur le Témoin ayant participé à la remise de la dot </B></p><br>
        <p class="Parents">1. Information du côté époux</p><br>
    <div class="container">
        <div class="form-row">
            <div class="form-group">
                <label for="nom_temoin_epoux">Nom du Témoin:</label>
                <input type="text" name="nom_temoin_epoux" id="nom_temoin_epoux" required>
            </div>
            <div class="form-group">
                <label for="postnom_temoin_epoux">Post-nom du Témoin :</label>
                <input type="text" name="postnom_temoin_epoux" id="postnom_temoin_epoux" required>
            </div>
            <div class="form-group">
                <label for="lieu_nais_temoin_epoux">Lieu de naissance du Témoin :</label>
                <input type="text" name="lieu_nais_temoin_epoux" id="lieu_nais_temoin_epoux" required>
            </div>
             <div class="form-group">
                <label for="date_nais_temoin_epoux">Date de naissance du Témoin:</label>
                <input type="date" name="date_nais_temoin_epoux" id="date_nais_temoin_epoux" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="profession_temoin_epoux">Profession du Témoin:</label>
                <input type="text" name="profession_temoin_epoux" id="profession_temoin_epoux" required>
            </div>
            <div class="form-group">
                <label for="etat_civil_temoin_epoux">Etat civil du Témoin :</label>
                <input type="text" name="etat_civil_temoin_epoux" id="etat_civil_temoin_epoux" required>
            </div>
            <div class="form-group">
                <label for="adress_temoin_epoux">Adresse du Témoin :</label>
                <input type="text" name="adress_temoin_epoux" id="adress_temoin_epoux" required>
            </div>
        </div>
    </div>
    <br>

        <p class="Parents">2. Information du côté épouse</p><br>
    <div class="container">
        <div class="form-row">
            <div class="form-group">
                <label for="nom_temoin_epouse">Nom du Témoin:</label>
                <input type="text" name="nom_temoin_epouse" id="nom_temoin_epouse" required>
            </div>
            <div class="form-group">
                <label for="postnom_temoin_epouse">Post-nom du Témoin :</label>
                <input type="text" name="postnom_temoin_epouse" id="postnom_temoin_epouse" required>
            </div>
            <div class="form-group">
                <label for="lieu_nais_temoin_epouse">Lieu de naissance du Témoin :</label>
                <input type="text" name="lieu_nais_temoin_epouse" id="lieu_nais_temoin_epouse" required>
            </div>
             <div class="form-group">
                <label for="date_nais_temoin_epouse">Date de naissance du Témoin:</label>
                <input type="date" name="date_nais_temoin_epouse" id="date_nais_temoin_epouse" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="profession_temoin_epouse">Profession du Témoin:</label>
                <input type="text" name="profession_temoin_epouse" id="profession_temoin_epouse" required>
            </div>
            <div class="form-group">
                <label for="etat_civil_temoin_epouse">Etat civil du Témoin :</label>
                <input type="text" name="etat_civil_temoin_epouse" id="etat_civil_temoin_epouse" required>
            </div>
            <div class="form-group">
                <label for="adress_temoin_epouse">Adresse du Témoin :</label>
                <input type="text" name="adress_temoin_epouse" id="adress_temoin_epouse" required>
            </div>
        </div>
    </div>
    <button type="button" onclick="showPreviousForm('form3')">Retour</button>
    <button type="submit">Soumettre</button>
</div>
        
          

    </form>
    </div>
<script>
        function showNextForm(formId) {
            document.querySelectorAll('.form-section').forEach(form => form.style.display = 'none');
            document.getElementById(formId).style.display = 'block';
        }

        function showPreviousForm(formId) {
            document.querySelectorAll('.form-section').forEach(form => form.style.display = 'none');
            document.getElementById(formId).style.display = 'block';
        }
        document.addEventListener("form-section", function() {
    const steps = Array.from(document.querySelectorAll(".form-section"));
    const nextBtns = document.querySelectorAll(".next");
    const prevBtns = document.querySelectorAll(".prev");
    let currentStep = 0;

    nextBtns.forEach(button => {
        button.addEventListener("click", () => {
            if (validateStep(currentStep)) {
                steps[currentStep].classList.remove("active");
                currentStep++;
                steps[currentStep].classList.add("active");
            }
        });
    });

    prevBtns.forEach(button => {
        button.addEventListener("click", () => {
            steps[currentStep].classList.remove("active");
            currentStep--;
            steps[currentStep].classList.add("active");
        });
    });

    function validateStep(step) {
        const inputs = steps[step].querySelectorAll("input");
        for (let input of inputs) {
            if (!input.checkValidity()) {
                input.reportValidity();
                return false;
            }
        }
        return true;
    }
});

    </script>
</body>
</html>

