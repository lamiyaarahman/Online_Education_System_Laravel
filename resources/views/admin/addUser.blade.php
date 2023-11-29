<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title> Add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" >
            <h4>Add User</h4>
                <form action="{{route('addUser')}}" method="post">

                    @csrf
                <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
                <span class="text-danger">
                       @error('name')
                          {{$message}}
                      @enderror
                </span>
            </div>
       
       
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
                <span class="text-danger">
                    @error('email')
                         {{$message}}
                    @enderror
                </span>
            </div>
       
       
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="text-danger">
                  @error('password')
                      {{$message}}
                  @enderror
                </span>
            </div>

            <div class="form-group">
                <strong>Confirm Password</strong>
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                <span class="text-danger">
                  @error('password')
                      {{$message}}
                  @enderror
                </span>
            </div>

            <div class="form-group">
                 <strong>Profession</strong>
                 <input type="radio" name="profession" value="student">Student
                 <input type="radio" name="profession" value="teacher">Teacher
                 <span class="text-danger">
                    @error('profession')
                        {{$message}}
                    @enderror
                    </span>
                </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" value="add" class="btn btn-primary">Add</button>

        </div>
</form>
    
</body>
</html>
