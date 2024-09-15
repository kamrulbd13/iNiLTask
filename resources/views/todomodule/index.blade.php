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
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <h1>To Do List</h1>
                            </div>
                        </div>
                        
                        <div class="card-body">
                          
                                <a href="{{route('create')}}" class="btn btn-primary w-25">Add New</a>
                            <hr>
                            <table class="table">
                                <thead class="text-center" >

                                  <tr>
                                    <th scope="col">S/L</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody class="text-center">
                                    @php
                                    $i=1;    
                                   @endphp 
                                 @foreach ($todos as $todo)
                               
                                  <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$todo->title ?? ''}}</td>
                                    <td>{{$todo->description ?? ''}}</td>
                                    <td>{{$todo->status==1 ? "Completed" : 'Pending'}}</td>
                                  
                                    <td>
                                        <a href="{{route('view',$todo->id)}}" class="btn btn-info">View</a>
                                        <a href="{{route('edit', $todo->id)}}" class="btn btn-primary">Edit</a>
                                        
                                        <form action="{{route('delete', $todo->id)}}" method="POST" style="display: inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger " >Delete</button>
                                        </form>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
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