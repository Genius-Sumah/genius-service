<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/declara.css">
    <title>Déclaration de mariage</title>
  
</head>
<body>

 <form action="insert_declara.php" method="post">
     <div class="title"><B><u>DECLARATION DE MARIAGE</u></B></div><br><br>
        <div class="form-row">
            <div class="form-group">
                <label for="nom_epoux">Nom de l'époux</label>
                <input type="text" name="nom_epoux" id="nom_epoux" required placeholder="entrer nom complet de l'époux">
            </div>
            <div class="form-group">
                <label for="lieu_nais_epoux">Lieu de naissance de l'époux</label>
                <input type="text" name="lieu_nais_epoux" id="lieu_nais_epoux" required placeholder="entrer lieu naissance">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="date_nais_epoux">Date de naissance de l'époux</label>
                <input type="date" name="lieu_nais_epoux" id="lieu_nais_epoux" required placeholder="entrer lieu naissance">
            </div>

            <div class="form-group">
                <label for="nom_epouse">Nom de l'épouse</label>
                <input type="text" name="nom_epouse" id="nom_epouse" required placeholder="entrer nom complet de l'épouse">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="lieu_nais_epouse">Lieu de naissance de l'épouse</label>
                <input type="text" name="lieu_nais_epouse" id="lieu_nais_epouse" required placeholder="entrer lieu naissance">
            </div>
            <div class="form-group">
                <label for="date_nais_epouse">Date de naissance de l'épouse</label>
                <input type="date" name="lieu_nais_epoux" id="lieu_nais_epoux" required placeholder="entrer lieu naissance">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="lieu_mariage">Lieu de mariage</label>
                <input type="text" name="lieu_nais_epoux" id="lieu_nais_epoux" required placeholder="entrer lieu naissance">
            </div>
            <div class="form-group">
                <label for="date_mariage">Date de mariage</label>
                <input type="date" name="lieu_nais_epoux" id="lieu_nais_epoux" required placeholder="entrer lieu naissance">
            </div>
        </div>
        
        <button type="submit">Soumettre</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>