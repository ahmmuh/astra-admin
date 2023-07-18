<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>En ny jobbansökan</title>
</head>
<body>
    <h3>En ny jobbansökan från {{$job['firstname']}}</h3>
    <p><strong>Förnamn:</strong>{{$job['firstname']}} <br>
        <strong>Efternamn:</strong> {{$job['lastname']}} <br>
        <strong>E-postadress:</strong> {{$job['email']}} <br>
        <strong>Adress:</strong> {{$job['adress']}} <br>
        <strong>Telefon:</strong> {{$job['telefon']}} <br>
        <strong>Cv:</strong> {{$job['cv']}} <br>
    </p>
</body>
</html>