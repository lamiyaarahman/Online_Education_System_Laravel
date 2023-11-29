<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
.checked {
  color: orange;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<h2 style="text-align:center">Offered Course</h2>

<div class="row">
    <div class="column">
      <div class="card">
            <img src={{ asset('uploads/java.png' )}} alt="" style="width:50%"> 
               <h1>Advance Java</h1>
               <p class="price">9000</p>
               <p>java32</p>
               <p><button>View Details</button></p>
               <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
       </div>
    </div>
    <div class="column">
      <div class="card">
           <img src={{ asset('uploads/laravel.png' )}} alt="" style="width:50%"> 
           <h1>Basic Laravel</h1>
           <p class="price">8000</p>
           <p>laravel 789</P>
           <p><button>View Details</button></p>
           <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
      </div>
    </div>

    <div class="column">
      <div class="card">
           <img src={{ asset('uploads/cSharp.png' )}} alt="" style="width:50%"> 
           <h1>Basic C Sharp</h1>
           <p class="price">10000</p>
           <p> C#609</P>
           <p><button>View Details</button></p>
           <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
      </div>
    </div>

    
    <div class="column">
      <div class="card">
           <img src={{ asset('uploads/js.png' )}} alt="" style="width:50%"> 
           <h1>Java Script</h1>
           <p class="price">7000</p>
           <p>js45</P>
           <p><button>View Details</button></p>
           <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
      </div>
    </div>

    
</div>




</body>
</html>
