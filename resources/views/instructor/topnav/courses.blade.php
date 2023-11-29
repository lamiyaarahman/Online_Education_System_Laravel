<!DOCTYPE html>
<html lang="en">
<head>
<title>Upload Course</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<style>
  input[type=text], input[type=password],input[type=number],input[type=file] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
    </style>
    </head>
<body>
<form action="{{route('upload.file')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="container">
                <div class="row ">
                    
            <div class="col-md-4 col-md-offset-4">
              <h3 align="center">Upload Course</h3>

                    <div class="form-group">
                        <input type="number" name="instructor_id" Placeholder="Instructor ID"class="form-control">
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <br>

                    <div class="form-group">
                        <input type="text" name="course_name" Placeholder="Course Name"class="form-control">
                    </div>
                    <br>
                
                    <div class="form-group">
                        <input type="text" name="promo_code" placeholder="Promo Code" class="form-control">
                    </div>
                    <br>

                    <div class="form-group">
                        <input type="number" name="price" Placeholder="Price"class="form-control">
                    </div>
                    <br>

                    <div class="form-group">
                        <input type="text" name="instructor_name" Placeholder="Instructor Name"class="form-control">
                    </div>
                    <br>

                    <div class="form-group">
                        <textarea  id= "description" name="description" Placeholder="Description"class="form-control"> </textarea>
                    </div>
                   

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Upload</button> 
                        
                   </div>
                   
                </div>
            </div>
            
</form>
</body>
</html>