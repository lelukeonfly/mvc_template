<?php
    function getDatabase()
    {
        $host = "localhost";
        $user = "root";
        $pwd = "";
        $schema = "modelviewcontroller";

        try {
            $db = new PDO('mysql:host='.$host.';dbname='.$schema.';port=3306',$user,$pwd);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $db;
    }

    function getAdressen()
    {
        $db = getDatabase();
        $query = "SELECT * FROM adressen";
        $result = $db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
