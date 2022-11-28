<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <body>
    <h1>Cars</h1>
    @foreach($cars as $cars => $car)
        <ul>    
        {{-- <li>{{$car->id}}</li>
        <li>{{$car->created_at}}</li>
        <li>{{$car->updated_at}}</li> --}}
        <li>{{$car->title}}</li>
        <li>{{$car->producer}}</li>                 
        {{-- <li>{{$car->number_of_doors}}</li>                  --}}
        </ul>
    @endforeach
</body>
</body>
</html>