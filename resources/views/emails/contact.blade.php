<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <h1>Emency</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Vous avez reçu un nouveau message de {{ $data['name'] }}</h4>
            <p class="font-weight-bold">email : {{ $data['email'] }}</p>
            <p>
                {{ $data['message'] }}
            </p>
        </div>
    </div>
</body>
</html>