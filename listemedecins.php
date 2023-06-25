<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hopital</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Liste des medecins de l'hopital</h1>
    <table>
        <tr>
            <th>Numero</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>specialite</th>
            <th>service</th>
            <th>Modif</th>
            <th>Supp

            </th>
        </tr>

        <?php
        //Connexion à mysql et choix bdd
        $id = mysqli_connect("127.0.0.1", "root", "", "hopital");
        //Execution de la requete et récupération dans $resultat
        $resultat = mysqli_query($id, "select * from medecins order by nom");
        //Récupuration d'une ligne du resultat et positionnement du curseur en dessous
        while ($ligne = mysqli_fetch_assoc($resultat)) {
            echo "<tr>
              <td>" . $ligne["numed"] . "</td>
              <td>" . $ligne["nom"] . "</td>
              <td>" . $ligne["prenom"] . "</td>
              <td>" . $ligne["specialite"] . "</td>
              <td>" . $ligne["service"] . "</td>
              <td><a href='modif.php?numed=" . $ligne["numed"] . "'><img src='images/modif.png' width='25'></a></td>
              <td><a href='sup.php?numed=" . $ligne["numed"] . "'><img src='images/sup.png' width='25'></a></td>
         </tr>";
        }

        ?>
    </table>
    Il y a <?php echo mysqli_num_rows($resultat); ?> medecin(s)
</body>

</html>