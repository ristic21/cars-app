<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>{{$part->name}}</title>
</head>
<body>
    @include("./components/header")

    <div>
        <h3>{{$part->name}} for {{$part->car_name}}</h3>
        <h4>Color: {{$part->color}}</h4>
        <img src="{{$part->image}}" alt="" style="width: 450px">
        <p>Description: ${{$part->description}}</p>
    </div>
  
    @include("./components/footer")

</body>
</html>