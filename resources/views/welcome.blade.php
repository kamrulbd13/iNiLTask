<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
</head>
<body>
    <header>
        <div class="container-fluid bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                              <a class="navbar-brand" href="#"><b>Assignment</b></a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="{{route('index')}}">ToDo Mudule</a>
                                  </li>
                             
                                </ul>
                                <form class="d-flex" role="search">
                                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                  <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                              </div>
                            </div>
                          </nav>
                    </div>
                </div>
               </div>
        </div>
    </header>


    <script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
</body>
</html>