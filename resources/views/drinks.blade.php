<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Drinks</title>
</head>
<body>
    <div class="containter p-4">
        <div class="row">
            <div class="col-8">
                <div class="row row-cols-2">
                    @foreach($cocktails as $cocktail)
                    <div class="col">
                        <div class="card" style="width: 18rem; margin:auto">
                            <img src="{{$cocktail['strDrinkThumb']}}" class="card-img-top" alt="...">
                            <div class="card-header">
                                <h4 class="card-text">{{$cocktail['strDrink']}}</h4>
                            </div>
                            <div class="card-body">
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>