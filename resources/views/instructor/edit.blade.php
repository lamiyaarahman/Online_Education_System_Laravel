<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" >
            <h4>Edit </h4>
                <form action="{{route('editInstructor')}}" method="post">

                    @csrf
                <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Name">
                <span class="text-danger">
                       @error('name')
                          {{$message}}
                      @enderror
                </span>
            </div>
       
       
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" value="{{$user->email}}"placeholder="Email">
                <span class="text-danger">
                    @error('email')
                         {{$message}}
                    @enderror
                </span>
            </div>
            <input type="hidden" name="id" class="form-control" value="{{$user->id}}">
       
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
                <button type="submit" value="update" class="btn btn-primary">Update</button>

        </div>

       </form>
    
</body>
</html>
