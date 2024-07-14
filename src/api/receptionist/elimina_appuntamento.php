<?php
include_once("../../includes/connection.php");
include_once("../../includes/database.php");

// Gestisce l'eliminazione di un appuntamento
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = "DELETE p FROM prestazione p
                JOIN fattura f ON p.idPrestazione = f.idPrestazione
                WHERE p.idPrestazione = ? 
                AND f.dataPagamento IS NULL ";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    if($con->affected_rows > 0){
        echo 'OK';
    }else{
        echo 'PROBLEM';
    }

    // Controllo se l'appuntamento è già stato pagato
    /*$query = "SELECT numeroFattura FROM fattura WHERE idPrestazione = ? AND dataPagamento IS NOT NULL";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0) {
        echo 'PROBLEM';
    } else {

        // Se l'appuntamento non è stato pagato può effettuare la cancellazione
        $medici_responsabili = get_responsabili_intervento($con, $id);
        $operatori_assistenti = get_assistenti_intervento($con, $id);

        foreach($medici_responsabili as $medico) {
            elimina_responsabile($con, $id, $medico);
        }

        foreach($operatori_assistenti as $operatore) {
            elimina_assistente($con, $id, $operatore);
        }

        $query = "DELETE FROM prestazione
                WHERE idPrestazione = ?
                ";  
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);  

        echo 'OK';
    }*/
        
    
        

    
   
}