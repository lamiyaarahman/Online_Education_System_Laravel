<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
       </head>
<body>
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$course['image']}}" alt="">
       </div>
       <div class="col-sm-6">
          
       
       <td><img src="{{asset('uploads/'.@$course->image)}}" /></td>
       <h2>{{$course['course_name']}}</h2>
       <h3>Price : {{$course['price']}}</h3>
       <h4>About Course : {{$course['description']}}</h4>
       <h4>Promo Code :{{@$course->promo_code}}</h4>
       <h4>Instructor Name : {{@$course->instructor_name}}</h4>
      
       <br><br>
       <form action="/add_to_cart" method="post">
           @csrf
           <input type="hidden" name="course_id" value={{@$course->id}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       <button class="btn btn-success">Register Now</button>
       <br><br>
       <a class="btn btn-warning" href="/viewCourse">Go Back</a>
    </div>
   </div>
</div>
</body>
</table>
