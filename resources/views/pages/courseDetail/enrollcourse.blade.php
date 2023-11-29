<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
       </head>
<body>
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Enroll Course</h4>

            @foreach($registers as $course)

            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$course->id}}">
                <img src="{{asset('uploads/'.@$course->image)}}" />
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>Name : {{$course->course_name}}</h2>
                      <h5>Delivery Status : {{$course->status}}</h5>
                      <h5>Payment Status : {{$course->payment_status}}</h5>
                      <h5>Payment Method : {{$course->payment_method}}</h5>

                    </div>
             </div>
            
            </div>
            @endforeach
          </div>

     </div>
</div>
<a class="btn btn-warning" href="/viewCourse">Go Back</a>
</body>
</html>