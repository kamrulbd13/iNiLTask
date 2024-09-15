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
    <div class="container p-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title text-center">
                            <h4>Update To Do Item</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update',$item->id)}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                  <label for="title" class="form-label">Title</label>
                                  <input type="text" name="title" class="form-control" value="{{$item->title}}" id="title" >
                                </div> 
                                <div class="mb-3">
                                  <label for="description" class="form-label">Description</label>
                                  <textarea type="text" name="description" class="form-control" id="description" >{{$item->description}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" name="status" aria-label="Default select example">
                                      <option selected>Open this select menu</option>
                                      <option value="0" @selected($item->status === 0 )>Pending</option>
                                      <option value="1" @selected($item->status === 1 )>Completed</option>
                                    </select>
                                  </div>
                        </div>
                        <div class="p-2">
                            <a href="{{route('index')}}" class="btn btn-danger">Cancle</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</main>

</body>
</html>