<?php
    /* Collego il file FUNCTION con questo file */
    require __DIR__.'/function.php';
    /* Controllo che il valore di PASSWORD sia diverso da VUOTO e che non sia NULL */

    /* Controllo se la chiave 'password' esiste nell'array $_GET */
    if(isset($_GET['password'])){
        /* Prendo il valore della lunghezza inserito dall'utente */
        $result = randomPassword();
    }

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- link Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- titolo scheda browser -->
        <title>Password Generator PHP</title>
    </head>

    <body>
        <div class="container bg-black p-2">
            <div>
                <h1 class="text-primary text-center m-3">Password Generator</h1>
            </div>
            <div class="row m-4">
                <div class="col-12 border rounded-2 bg-white m-2 p-3">
                    <div class="col-12">
                        <form action="index.php" method="GET">
                            <!-- Inserimento Dati Utente -->
                            <div class="form-group m-3">
                                <label for="psw">Lunghezza password: </label>
                                <!-- Faccio inserire all'utente la lunghezza in numero della password da generare-->
                                <input type="text" name="password" id="password" class="w-25 m-1" placeholder="Inserire il numero di caratteri">
                            </div>
                             <!-- Visualizzazione dati -->
                            <div class="form-group m-3">
                                <label for="pswgen" class="mt-2">Password Generata: </label>
                                <!-- Invoco la funzione per far visualizzare la password generata -->
                                <?php if(isset($_GET['password']) && $_GET['password'] > 1 && $_GET['password'] <= 32) { ?>
                                    <h4><?php echo $result ?></h4>
                                <?php } else if (isset($_GET['password']) && $_GET['password'] !== ''){ ?>
                                    <div class="alert alert-danger"><h6>"Attenzione! Lunghezza minima 1 e massima 32 caratteri."</h6></div>
                                <?php } ?>
                            </div>
                            <!-- Bottoni per gestione dati -->
                            <div class="form-group m-3">
                                <button type="submit" class="btn btn-sm btn-success mt-2">Genera</button>
                                <button class="btn btn-sm btn-danger mt-2">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>