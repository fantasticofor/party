<?php
    include "config.php";
    
    $data = json_decode(file_get_contents("php://input"));

    $request = $data->request;

    if($request == 'create_madre') {
        $nome = $data->nome;
        $cognome = $data->cognome;
        $cognome_acquisito = $data->cognome_acquisito;
        $codice_fiscale = $data->codice_fiscale;
        $sdo = $data->sdo;
        //i:integer
        //d:double
        //s:string
        //b:blob
        $stmt->bind_param('i', $nome);
        $stmt->execute();
    }

    // Fetch records
    if($request == 1){
        $query = 'SELECT * FROM madre WHERE nome LIKE "'.$data->nome.'%" AND cognome LIKE "'.$data->cognome.'%"';
        //$result = $mysqli->query($query);
        //$rows = $result->fetch_all(MYSQLI_ASSOC);

        $selectMadre = mysqli_query($con, $query);
        $response = array();
        while($row = mysqli_fetch_assoc($selectMadre)){
            $response[] = $row;
        }
        echo json_encode($response);
        exit;
    }

    // Add madre
    if($request == 2){
        #$id = $data->id;
        $nome = $data->nome;
        $cognome = $data->cognome;
        $cognome_acquisito = $data->cognome_acquisito;
        $codice_fiscale = $data->codice_fiscale;
        $sdo = $data->sdo;
        #$data_nascita = $data->data_nascita;
        #$comune_nascita = $data->comune_nascita;
        #$cittadinanza = $data->cittadinanza;

        #TODO: this condition has to be improved!
        $userData = mysqli_query($con,"SELECT * FROM madre WHERE id=1000000000000");
        $sql_insert_madre = "INSERT INTO madre(nome, cognome, cognome_acquisito, codice_fiscale, sdo) VALUES ('".$nome."','".$cognome."','".$cognome_acquisito."','".$codice_fiscale."','.$sdo.')";
        
        if(mysqli_num_rows($userData) == 0){
            mysqli_query($con,$sql_insert_madre);
            $madre_id = mysqli_insert_id($con);
            
            echo "OK";
        } else{
            echo "Madre esistente.";
        }

        exit;
    }

    // Add madre and create parto
    if($request == 3){
        #$id = $data->id;
        $nome = $data->nome;
        $cognome = $data->cognome;
        $cognome_acquisito = $data->cognome_acquisito;
        $codice_fiscale = $data->codice_fiscale;
        $sdo = $data->sdo;
        #$data_nascita = $data->data_nascita;
        #$comune_nascita = $data->comune_nascita;
        #$cittadinanza = $data->cittadinanza;

        #TODO: this condition has to be improved!
        $userData = mysqli_query($con,"SELECT * FROM madre WHERE id=1000000000000");
        $sql_insert_madre = "INSERT INTO madre(nome, cognome, cognome_acquisito, codice_fiscale, sdo) VALUES ('".$nome."','".$cognome."','".$cognome_acquisito."','".$codice_fiscale."','.$sdo.')";
        
        if(mysqli_num_rows($userData) == 0){
            mysqli_query($con,$sql_insert_madre);
            $madre_id = mysqli_insert_id($con);

            $sql_insert_parto = "INSERT INTO parto (id, id_madre) VALUES (NULL, $madre_id)";
            mysqli_query($con,$sql_insert_parto);
            $parto_id = mysqli_insert_id($con);

            $arr = array('idm' => $madre_id, 'idp' => $parto_id);
            echo json_encode($arr);
        } else{
            echo "Madre esistente.";
        }

        exit;
    }

    // Delete record
    if($request == 4){
        $id = $data->id;

        mysqli_query($con,"DELETE FROM users WHERE id=".$id);

        echo "Delete successfully";
        exit;
    }

    //populate form from params
    if($request == 5){
        $idm = $data->idm;
        if ($idm > 0) {
            $selectedMadre = mysqli_query($con,"SELECT * FROM madre WHERE id=".$idm."");
            $response = array();
            while($row = mysqli_fetch_assoc($selectedMadre)){
                $response[] = $row;
            }
            echo json_encode($response);
            exit;
        }
        else {
            echo "mha!!!";
            exit;
        }
    }

    // Add madre and create parto
    if($request == 6){
        $id = $data->id;
        #TODO: this condition has to be improved!
        $userData = mysqli_query($con,"SELECT * FROM madre WHERE id=".$id."");
        
        if(mysqli_num_rows($userData) == 1){
            $sql_insert_parto = "INSERT INTO parto (id, id_madre) VALUES (NULL, $id)";
            mysqli_query($con,$sql_insert_parto);
            $parto_id = mysqli_insert_id($con);
            $arr = array('idm' => $id, 'idp' => $parto_id);
            echo json_encode($arr);
        } else{
            echo "Si è verificato un errore.";
            exit;
        }

        exit;
    }
?>