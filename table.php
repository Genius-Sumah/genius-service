<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs</title>
    <link rel="stylesheet" href="style  .css">
</head>
<body>
    <div class="panel">
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'Profil')">
                <i class="fa fa-user"></i> Profil Utilisateur
            </button>
            <button class="tablinks" onclick="openTab(event, 'CreerUtilisateur')">
                Créer un Nouvel Utilisateur
            </button>
        </div>
        
        <div id="Profil" class="tabcontent">
            <h2>Profil Utilisateur</h2>
            <p>Informations de l'utilisateur ici.</p>
        </div>
        
        <div id="CreerUtilisateur" class="tabcontent">
            <h2>Créer un Nouvel Utilisateur</h2>
            <!-- Inclure le formulaire ici -->
        </div>
    </div>
    
    <div class="container">
        <h1>Liste des Utilisateurs</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom de l'utilisateur</th>
                    <th>Prénom de l'utilisateur</th>
                    <th>E-mail</th>
                    <th>Mot de passe</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Date de création</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                            <?php
            // Exemple de données
            $data = [
                [
                    'num_recu' => '001',
                    'nom' => 'Dupont',
                    'postnom' => 'Jean',
                    'prenom' => 'Paul',
                    'genre' => 'M',
                    'classe' => 'Terminale',
                    'option' => 'Scientifique',
                    'montant' => '50000',
                    'date' => '2024-07-14',
                    'mois' => 'Juillet',
                    'motif' => 'Frais de scolarité'
                ],
                // Ajouter d'autres enregistrements ici
            ];

            foreach ($data as $row) {
                echo "<tr>";
                foreach ($row as $cell) {
                    echo "<td>$cell</td>";
                }
                echo "</tr>";
            }
            ?>

            </tbody>
        </table>
    </div>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>


</body>
</html>

