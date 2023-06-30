<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    
    <form action="./server.php" method="POST" >
        <h3>Scrivi delle parole all'interno della text-area</h3>
        <textarea name="paragraph" id="" cols="50" rows="4">

        </textarea>

        <h4>Scrivi la parola che vuoi censurare</h4>
        <input type="text" method="POST" name ="wordToCensor">

        <button>
            Invia il form
        </button>
    </form>


</body>
</html>


<!-- 

Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi. Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi tutte le occorrenze della parola da censurare -->