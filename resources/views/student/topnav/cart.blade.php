
<table class="table">
    <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Image</th>
            <th scope="col">Promo Code</th>
            <th scope="col">Price</th>
           </tr>
    </thead>
           
                <tr>
                    <td>{{@$course->course_id}}</td>
                    <td><img src="{{asset('uploads/'.$course->image)}}" /></td>
                    <td>{{@$course->promo_code}}</td>
                    <td>{{@$course->price}}</td>
                    
                </tr>
            

           
</table>
</form>
    