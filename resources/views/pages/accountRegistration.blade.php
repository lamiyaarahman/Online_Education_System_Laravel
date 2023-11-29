<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" >
            <h4>BrainStorming</h4><br>
           
            
                <form action="{{route('account-register')}}" method="post">
                     @csrf

                <div class="form-group">
                <strong>Your Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Name"><br>
                <span class="text-danger">
                       @error('name')
                          {{$message}}
                      @enderror
                </span>
            </div>
            
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" placeholder="you@example.com"><br>
                <span class="text-danger">
                    @error('email')
                         {{$message}}
                    @enderror
                </span>
            </div>
            
            <div class="form-group">
                <strong>Mobile Number</strong>
                <input type="tel" name="phone" class="form-control" placeholder="Mobile Number"><br>
                <span class="text-danger">
                  @error('phone')
                      {{$message}}
                  @enderror
                </span>
            </div>
             
            <div class="form-group">
                <strong>University/College/School</strong>
                <input type="text" name="educational_background" class="form-control" placeholder="e.g.AIUB"><br>
                <span class="text-danger">
                  @error('educational_background')
                      {{$message}}
                  @enderror
                </span>
            </div>


            <div class="form-group">
                <strong>Currently</strong><br>
                <input type="checkbox" id="" name="currently" value=""><label for="currently">Studying</label>
                <input type="checkbox" id="" name="currently" value=""><label for="currently">Working</label>
                <input type="checkbox" id="" name="currently" value=""><label for="currently">Looking for Job</label>
                <span class="text-danger">
                  @error('currently')
                      {{$message}}
                  @enderror
                </span>
            </div>


            <div class="form-group">
                <strong>Department</strong>
                <input type="text" name="department" class="form-control" placeholder="e.g. Department of Computer Science"><br>
                <span class="text-danger">
                  @error('department')
                      {{$message}}
                  @enderror
                </span>
            </div>

            <div class="form-group">
                <strong>Linkedin Profile Link</strong>
                <input type="text" name="linkedin" class="form-control" placeholder="Linkedin Profile Link.."><br>
                <span class="text-danger">
                  @error('linkedin')
                      {{$message}}
                  @enderror
                </span>
            </div>

            

          

            
                
            <div class="col-xs-12 col-sm-12 col-md-12 text-center"><BR>
                <button type="submit" class="btn btn-primary">Apply</button>
            </div>

           
        
        </form>
    </body>
</html>
