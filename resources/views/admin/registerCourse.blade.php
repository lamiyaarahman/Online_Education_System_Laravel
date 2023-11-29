<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
<table border="1">
    
    <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Instructor ID</th>
            <th scope="col">Image</th>
            <th scope="col">Course Name</th>
            <th scope="col">Promo Code</th>
            <th scope="col">Price</th>
            <th scope="col">Instructor Name</th>
            </tr>
  </thead>
            
              
                @foreach($courses as $course) 
               
                <tr>
               
                    <td>{{@$course->id}}</td>
                    <td>{{@$course->instructor_id}}</td>
                    <td><img src="{{asset('uploads/'.@$course->image)}}" /></td>
                    <td>{{@$course->course_name}}</td>
                    <td>{{@$course->promo_code}}</td>
                    <td>{{@$course->price}}</td>
                    <td>{{@$course->instructor_name}}</td>

                    <td><a  class="glyphicon glyphicon-ok" href="/addCourse/{{$course->id}}">YES</a></td>
                    <td><a  class="glyphicon glyphicon-remove" href="/deleteCourse/{{$course->id}}">NO</a></td>
                </tr>
</a>
                @endforeach
        
</div>    
</table>
</body>
</html>



 