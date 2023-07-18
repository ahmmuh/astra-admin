<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <div class="row">
            <div class="col" style="border: #222; ">
                <h4>Nytt kundmeddelande</h4>
                    
                <p><strong>Förnamn:</strong>{{$data['firstname']}} <br>
                    <strong>Efternamn:</strong> {{$data['lastname']}} <br>
                    <strong>E-postadress:</strong> {{$data['email']}} <br>
                    <strong>Telefon:</strong> {{$data['telefon']}} <br>
                </p>
                 <p> <strong>Meddelande: </strong>  {{$data['message']}}</p>
            </div>
        </div>
    </div>
    
</body>
</html>
