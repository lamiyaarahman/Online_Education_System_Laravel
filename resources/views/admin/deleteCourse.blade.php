<form action="{{route('deleteCourse')}}" method="post">
        @csrf
            <div class="container">
                <div class="row ">
                    
                    <div class="form-group">
                        <input type="file" name="image" value="{{$course->image}}" class="form-control">
                    </div>
                    <br>

                    <div class="form-group">
                        <input type="text" name="course_name" value="{{$course->name}}" Placeholder="Course Name"class="form-control">
                    </div>
                    <br>
                
                    <div class="form-group">
                        <input type="text" name="promo_code" value="{{$course->promo_code}}" placeholder="Promo Code" class="form-control">
                    </div>
                    <br>

                    <div class="form-group">
                        <input type="number" name="price" value="{{$course->price}}" Placeholder="Price"class="form-control">
                    </div>
                    <br>

                    <div class="form-group">
                        <input type="text" name="instructor_name" value="{{$course->instructor_name}}" Placeholder="Instructor Name"class="form-control">
                    </div>
                    <br>
                   

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Upload</button> 
                        
                   </div>
                </div>
            </div>
</form>