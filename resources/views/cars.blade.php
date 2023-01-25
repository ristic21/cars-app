<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/style.css') }}">
    <title>Cars</title>
    
</head>
<body>
    @include("./components/header") 
    <div class="album py-5 bg-light">
        <div class="container">
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


          @foreach ($cars as $car)
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{$car->image_url}}" />
              <div class="card-body">
                <p class="card-text">{{$car->name}}.</p>
                <p class="card-text">{{$car->description}}.</p>
                <p class="card-text">${{$car->price}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="cars/{{$car->id}}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          @endforeach
     

          </div>
        </div>
      </div>


       @include("./components/footer")

   
</body>
</html>