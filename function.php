<?php  
    /*Funzione per generare una password casuale */
    function randomPassword() {
        if(isset($_GET['password'])){
            /* Prendo il valore della lunghezza inserito dall'utente */
            $passLength = $_GET['password'];
            /* Dichiaro i  */
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@!$%&?';
            /* Dichiaro $PASS come array */
            $pass = array();
            /* Imposto la lunghezza -1 */
            $alphaLength = strlen($alphabet) - 1;
            /* Ciclo FOR per generare casualmente ogni singolo carattere */
            for ($i = 0; $i < $passLength; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            /* Converto l'array in una stringa */
            return implode($pass); 
        }
    }
?>