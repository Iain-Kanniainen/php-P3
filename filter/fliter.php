<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>klanten</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="selectPlace">
        <input type="submit" name="execSelection" value="Selecteer">
    </form>
 
    <?php
 
        require_once('dbconnect.php');
        if (isset($_POST["execSelection"]))
        {
            $selector = "%" . $_POST["selectPlace"] . "%";
        }
        else
        {
            $selector = "%%";
        }
 
        // Alle kroegen lezen die aan het criterium voldoen (ook als er geen criterium is)
        $readClient = $dbconn->prepare("SELECT GivenName AS 'Voornaam', 
                                            Surname AS 'Achternaam', 
                                            StreetAddress AS 'Adres', 
                                            ZipCode AS 'Postcode',
                                            City AS 'Woonplaats' 
                                        FROM `client`
                                        WHERE City LIKE :selector");
        $readClient->bindValue("selector", $selector);
        $readClient->execute();
 
        $resultClients = $readClient->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <!-- Op dit punt heb ik alle bar gegevens ingelezen die voldoen aan het criterium
        Nu eerst de heading van de tabel opbouwen -->
    <table>
        <thead>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Adres</th>
            <th>Postcode</th>
            <th>Woonplaats</th>
        </thead>
        <tbody>
 
    <?php
        foreach ($resultClients as $clientData)
        {
            echo "<tr>";
            echo "<td>" . $clientData["Voornaam"] . "</td>";
            echo "<td>" . $clientData["Achternaam"] . "</td>";
            echo "<td>" . $clientData["Adres"] . "</td>";
            echo "<td>" . $clientData["Postcode"] . "</td>";
            echo "<td>" . $clientData["Woonplaats"] . "</td>";
            echo "</tr>";
        }
 
 
    ?>
    </tbody>
    </table>    
 
   
</body>
</html>