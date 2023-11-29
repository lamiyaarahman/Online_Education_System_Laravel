<!DOCTYPE html>
<html lang="en">
<head>
    <title> Sign In</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
       </head>
<body>
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Courses</h4>
            
            @foreach($courses as $course)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href= "/detail/{{$course->id}}">
               
                <img src="{{asset('uploads/'.@$course->image)}}" />
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                    <h3>{{@$course->course_name}}</h3>
                    <h3>{{@$course->promo_code}}</h3>
                    <h3>{{@$course->price}}</h3>
                    </div>
             </div>
             <div class="col-sm-3">
             <a href="/removecart/{{$course->cart_id}}" class="btn btn-danger" >Remove to Cart</a>
             </div>
            </div>
            @endforeach
          </div>
          <a class="btn btn-success" href="registernow">Register Now</a> <br> <br>
          <a class="btn btn-warning"  href="/viewCourse">Go Back</a>
     </div>
</div>
</body>
</table>
