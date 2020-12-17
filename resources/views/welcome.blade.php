
<!DOCTYPE html>
<html>
<head>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>
<style>
.container{text-align: center;}
h2{font-weight: bold;}
img{border: solid 1pt lightgray;
margin-top: 10px;
box-shadow: 2px 2px 5px lightgray;
}
.navbar{text-align: center;
width: 100%;

border: solid 2pt lightgray;

}
.navbar ul{display: flex;
justify-content: center;
list-style: none;
text-align: center;
font-size: 1.2em;
font-weight: bold;
padding: 1em;
}


.navbar ul li{margin-right: 100px;}

.footer{position: relative;
bottom: 0px;
width: 100%;
text-align: center;
border: solid 2pt lightgray;
padding: 1em;
}

.row-inner button{

border: none;
padding: 10px;
margin-bottom: 20px;


}

.row-inner a button {
font-weight: bold;
text-decoration: none;

}


    </style>
<div class="container">

<div class="row">
<img src="http://localhost/laravel/example/resources/views/images/assistance-990332_1920.jpg" width="50%">

<h2>CARBON FOOTPRINT</h2>

</div>
<nav class="navbar navbar-expand-lg">
<ul>

<li>HOME</li>
<li>ABOUT</li>
<li>SERVICES</li>
<li>CONTACT</li>
</ul>



</nav>
<div class="row">
<div class="row-inner" style="display: block;">

<h3 style="font-weight: bold;">CALCULATE YOUR CARBON FOOTPRINT</h3>
<div>
<a href="{{ url('carbontaxi') }}" target="_blank"><button>CLICK HERE TO KNOW YOUR CF FOR TAXIS</button></a>
</div>
<div>
<a href="{{ url('carbondiesel') }}" target="_blank"><button>CLICK HERE TO KNOW YOUR CF FOR DEISEL CARS</button></a>
</div>
<div>
<a href="{{ url('carbonpetrol') }}" target="_blank"><button>CLICK HERE TO KNOW YOUR CF FOR PETROL CARS</button></a>
</div>
<div>
<a href="{{ url('carboneconomy') }}" target="_blank"><button>CLICK HERE TO KNOW YOUR CF FOR ECONOMY FLIGHTS</button></a>
</div>
<div>
<a href="{{ url('carbonbusiness') }}" target="_blank"><button>CLICK HERE TO KNOW YOUR CF FOR BUSINESS FLIGHTS</button></a>
</div>
<div>
<a href="{{ url('carbonmotor') }}" target="_blank"><button>CLICK HERE TO KNOW YOUR CF FOR MOTORBIKES</button></a>
</div>
<div>
<a href="{{ url('carbonbus') }}" target="_blank"><button>CLICK HERE TO KNOW YOUR CF FOR BUSES</button></a>
</div>

</div>



</div>
<div class="footer">

<p>© COPYRIGHT 2020</p>

</div>
</div>



</body>


</html>
