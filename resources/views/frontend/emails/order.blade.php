<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ny beställning</title>
</head>
<body>
    <h3>En ny Beställning från {{$order['firstname']}}</h3>
    <p><strong>Förnamn:</strong>{{$order['firstname']}} <br>
        <strong>Efternamn:</strong> {{$order['lastname']}} <br>
        <strong>E-postadress:</strong> {{$order['email']}} <br>
        <strong>Telefon:</strong> {{$order['telefon']}} <br>
        <strong>Adress:</strong> {{$order['adress']}} <br>
        <strong>Adress:</strong> {{$order['sqr']}} <br>
        <strong>Service:</strong> {{$order['service']}} <br>
        <strong>Startdatum:</strong> {{$order['startDate']}} <br>
        <strong>Slutdatum:</strong> {{$order['endDate']}} <br>
        <strong>Beskrivning:</strong> {{$order['beskrivning']}} <br>
    </p>
</body>
</html>