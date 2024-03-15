<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form - PHP</title>
</head>

<body>
    <div class="container p-5">

        <form action="" class="d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex flex-column align-items-center mb-5">
                <label for="">Inserisci una frase</label>

                <textarea id="user-text" name="user-text" rows="4" cols="50">
                </textarea>
            </div>

            <div class="mb-5 d-flex flex-column align-items-center">
                <label for="">Inserisci una parola</label>
                <input id="user-word" name="user-word" type="text" placeholder="inserisci una parola" class="px-2 text-center">
            </div>
            <input type="submit" class="btn btn-dark">

        </form>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>