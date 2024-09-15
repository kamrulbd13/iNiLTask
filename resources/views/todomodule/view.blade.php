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
    <header></header>
    <main>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <div class="card-title">
                                <h1>To Do Details</h1>
                            </div>
                        </div>
                        <div class="card-body">
                                <a href="{{route('index')}}" class="btn btn-primary w-25">All</a>
                                <a href="{{route('create')}}" class="btn btn-primary w-25">Add New</a>
                            <hr>
                            <table class="table ">
                                <thead class="text-left" >
                                 <tr>
                                    <th scope="col">Title</th>
                                    <td>:</td>
                                    <td>{{$item->title ?? ''}}</td>
                                  </tr>
                                  <tr>
                                    <th scope="col">Description</th>
                                    <td>:</td>
                                    <td>{{$item->description ?? ''}}</td>
                                  </tr>
                                  <tr>
                                    <th scope="col">Status</th>
                                    <td>:</td>
                                    <td>{{$item->status==1 ? 'Completed':'Pending'}}</td>
                                  </tr>
                                </thead>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>