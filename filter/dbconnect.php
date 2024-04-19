<?php

    try {

        $dbconn = new PDO("mysql:host=localhost; dbname=swmg", "root","");

    }

    catch(PDOException $e) {

        die("HET LOOPT FOUT: " . $e->getMessage());

    }

?>
