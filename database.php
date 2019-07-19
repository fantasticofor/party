<?php 
    try {
        $hostname = "localhost";
        $dbname = "corso";
        $user = "nome_utente";
        $pass = "password";
        $charset = 'utf8mb4';
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        //Database connection handle
        $dsn = "mysql:host=$hostname;dbname=$dbname;charset=$charset";
        $dbh = new PDO ($dsn, $user, $pass, $options);

        echo "Connessione al DB avvenuta con successo da ".$user;

        //Connessione persistente:
        // $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $pass, array(
        //     PDO::ATTR_PERSISTENT => true
        // ));

    } catch (PDOException $e) {
        echo "Errore di connessione al Database: %s\n" . $e->getMessage();
        die();
    }

    function createUser ($username, $password) {

        $sql = 'SELECT nome, cognome, FROM utenti WHERE email like "%:username%"';

        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $db_hash = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (password_verify($password, $db_hash))
        {
            echo "valid!";
        } else {
            echo "invalid";
        }
        
    }

    function authenticateUser ($username, $password) {

        $sql = 'SELECT nome, cognome, FROM utenti WHERE email like "%:username%"';

        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $db_hash = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (password_verify($password, $db_hash))
        {
            echo "valid!";
        } else {
            echo "invalid";
        }

    }

    function insertMadre() {

        $sql = "INSERT INTO madre(id, nome, cognome, cognome_acquisito, codice_fiscale, sdo, data_nascita, comune_nascita, comune_residenza, citta_residenza, cittadinanza, status_madre, istruzione, professione, peso, altezza, bmi, origine) VALUES ($id, $nome, $cognome, $cognome_acquisito, $codice_fiscale, $sdo, $data_nascita, $comune_nascita, $comune_residenza, $citta_residenza, $cittadinanza, $status_madre, $istruzione, $professione, $peso, $altezza, $bmi, $origine)";

        $stmt->bindValue(':id', $nome, PDO::PARAM_STR);
        $stmt->bindValue(':nome', "%$nome%", PDO::PARAM_STR);
        $stmt->bindValue(':nome', "%$nome%", PDO::PARAM_STR);
        $stmt->bindValue(':nome', "%$nome%", PDO::PARAM_STR);
        $stmt->bindValue(':nome', "%$nome%", PDO::PARAM_STR);
        $stmt->bindValue(':nome', "%$nome%", PDO::PARAM_STR);
        $stmt->bindValue(':nome', "%$nome%", PDO::PARAM_STR);
    };

    function getMadreLike($nome, $cognome) {

        $sql = 'SELECT * FROM Madre WHERE nome like "%:nome%" and cognome like "%:email%"';

        $stmt = $dbh->prepare($sql);
        //$w = $x ?? $y;
        $stmt->bindValue(':nome', "%$nome%", PDO::PARAM_STR);
        $stmt->bindValue(':cognome', "%$cognome%", PDO::PARAM_STR);

        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print json_encode($rows);        
    }

    //  PDO::FETCHPARAM: PARAM_BOOL; PARAM_NULL; PARAM_INT; PARAM_STR; PARAM_STMT; FETCH_ASSOC;
    // Get last affected row; for insert statement must be called before the commit();
    // $lastId = $dbh->lastInsertId();

    $sql = "INSERT INTO utenti(nome, cognome, email) VALUES(':nome',':cognome',':email',':anno')";

    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->execute();


    


    // Close the connection
    $dbh = null;

?>