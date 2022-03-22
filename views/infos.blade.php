<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
</head>
<body class="marbre">
    <main class="mt-5 pt-5">
        <div class="container d-flex justify-content-center">
            @extends('template')
            @section('contenu')
            <form class="d-flex flex-column p-5 my-5 bg-secondary" action="{{ url('users') }}" method="POST">
                @csrf
                <input class="form-control my-3" placeholder="Titre" type="text" name="" id="">
                <input class="form-control my-3" placeholder="Auteur" type="text" name="" id="">
                <input class="form-control my-3" placeholder="Description" type="text" name="" id="">
                <input class="form-control my-3" placeholder="Prix" type="text" name="" id="">
                <input class="form-control my-3" placeholder="Image" type="file" name="" id="">
                <input class="btn btn-warning" type="submit" value="Envoyer">
            </form>
            @endsection
        </div>
    </main>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>