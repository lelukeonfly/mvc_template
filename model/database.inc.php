<?php
    function getDatabase()
    {
        $host = "localhost";
        $user = "root";
        $pwd = "";
        $schema = "adressverwaltung";

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

    function speichere($eintrag)
    {
        $db = getDatabase();
        extract($eintrag);
        if (empty($id)) {
            $query = "INSERT INTO adressen(vorname,nachname,email,tel) VALUES ('$vorname','$nachname','$email','$tel')";
        }else {
            $query = "UPDATE adressen SET vorname='$vorname',nachname='$nachname',email='$email',tel='$tel' WHERE id=$id";
        }
        $db->query($query);
    }

    function loeschen($id)
    {
        $db = getDatabase();
        $query = "DELETE FROM adressen WHERE id=$id";
        $db->query($query);
    }
    
    function hole_eintrag($id)
    {
        $db = getDatabase();
        $query = "SELECT * FROM adressen WHERE id=$id";
        $result = $db->query($query);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
?>