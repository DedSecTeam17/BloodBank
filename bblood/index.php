<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=cocon-next-arabic" />
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

<link href="vivify.min.css" rel="stylesheet" type="text/css"/>

<style>
.f{
	font-family: 'cocon-next-arabic';

}
.f2{
font-family: 'Quicksand', sans-serif;
}
body {

}
</style>
<script>
function x()
{
	document.getElementById("t1").className = "f2 btn btn-dark vivify fadeIn";
	document.getElementById("t2").className = "f2 btn btn-dark vivify fadeIn";
	document.getElementById("t3").className = "f2 btn btn-dark vivify fadeIn";
	document.getElementById("t4").className = "f2 btn btn-dark vivify fadeIn";
	document.getElementById("t5").className = "f2 btn btn-dark vivify fadeIn";
	document.getElementById("t6").className = "f2 btn btn-dark vivify fadeIn";
	document.getElementById("t7").className = "f2 btn btn-dark vivify fadeIn";
	document.getElementById("t8").className = "f2 btn btn-dark vivify fadeIn";
}
function y()
{
	var go = 0;
	var city = document.getElementById("city").value;
	var btype ;
	var found = false ;
	for(var i=1 ;i<9;i++)
	{
		if(document.getElementById("t"+i).className == "f2 btn btn-danger vivify jumpInLeft" )
		{
			btype = document.getElementById("t"+i).innerHTML;
			found=true;
		}
	}
	if(!found)
	{
		document.getElementById("msg1").className ="f text-center text-danger mb-0 d-block";
		go=0;
	}
	else{go++;}
	if(city == "none")
	{
		document.getElementById("msg2").className ="f text-center text-danger mb-0 d-block";
		go=0;
	}
	else{go++;}
	if(go>1){
	var len = btype.length;
	btype = btype.substring(4,len-5);
	//alert(city+"\n"+btype);

	$.post("searchdata.php",
    {
        bloodtype: btype,
		city: city
    },
    function(data, status){
		hideloading();
        //alert("Data: " + data + "\nStatus: " + status);
		document.getElementById("res").innerHTML=data;
    });
	}
}
function hide()
{
	document.getElementById("msg1").className ="f text-center text-danger mb-0 d-none";
}


function citychange()
{
	if(document.getElementById("city").value != "none")
	{
		document.getElementById("msg2").className ="f text-center text-danger mb-0 d-none";
	}
}
function showloading()
{
	document.getElementById("loading").className ="text-center d-block";
}
function hideloading()
{
	document.getElementById("loading").className ="text-center d-none";
}
function anim()
{
	document.getElementById("img").className ="vivify infinite pullUp mt-3 mb-3";
	setTimeout(function(){ document.getElementById("img").className ="vivify pullUp mt-3 mb-3"; }, 700);
}
function anime2(x)
{
	x.className="f2 btn btn-danger vivify infinite jumpInLeft";
	setTimeout(function(){ x.className ="f2 btn btn-danger vivify jumpInLeft"; }, 700);
}
</script>
</head>
<body >
<div class="container">
<div class="text-center">
<img id="img" class="vivify delay-500 pullUp mt-3 mb-3" onclick="anim();" src="bblood2.png" width="200px">
</div>
<div class="text-center vivify fadeIn delay-600">
      <h3 class="f text-center p-2 vivify fadeIn delay-600">اختر فصيلة الدم </h3>
<span id="t1" class="f2 btn btn-dark vivify fadeIn" onclick="x();anime2(this);hide();"><h3>O+</h3></span>
<span id="t2"class="f2 btn btn-dark vivify fadeIn" onclick="x();anime2(this);hide();"><h3>O-</h3></span>
<span id="t3"class="f2 btn btn-dark vivify fadeIn" onclick="x();anime2(this);hide();"><h3>B+</h3></span>
<span id="t4"class="f2 btn btn-dark vivify fadeIn" onclick="x();anime2(this);hide();"><h3>B-</h3></span>
<span id="t5"class="f2 btn btn-dark vivify fadeIn" onclick="x();anime2(this);hide();"><h3>A+</h3></span>
<span id="t6"class="f2 btn btn-dark vivify fadeIn" onclick="x();anime2(this);hide();"><h3>A-</h3></span>
<span id="t7"class="f2 btn btn-dark vivify fadeIn" onclick="x();anime2(this);hide();"><h3>AB+</h3></span>
<span id="t8"class="f2 btn btn-dark vivify fadeIn" onclick="x();anime2(this);hide();"><h3>AB-</h3></span>
  </div>
  <p id="msg1" class="f text-center text-danger mb-0 d-none"><b>يجب عليك اختيار فصيلة الدم</b></p>
  <div width="300px" class="vivify fadeIn delay-600 f text-center p-2 mt-0 mb-0 ml-4 mr-4 ">
  <h3 class="rtl text-center mx-auto m-0 vivify fadeIn delay-600">
   <select onchange="citychange();" id="city" name="cars" class=" fadeIn delay-600 m-0 custom-select-sm form-control w-50 text-center bg-dark text-light mx-auto">
    <option value="none" selected class="text-center">اختر المدينة</option>
    <option value="الخرطوم">الخرطوم</option>
    <option value="بورتسودان">بورتسودان</option>
    <option value="الفاشر">الفاشر</option>
	<option value="دنقلا">دنقلا</option>
	<option value="الجزيرة">الجزيرة</option>
	<option value="عطبرة">عطبرة</option>
	<option value="سنار">سنار</option>
	<option value="القضارف">القضارف</option>
  </select>
  </h3>
  </div>
  <p id="msg2" class="f text-center text-danger mt-0 mb-2 d-none"><b>يجب عليك اختيار مدينة</b></p>
  <div class="text-center f">
  <button onclick="showloading(); y();" type="button" class="vivify fadeIn delay-700 text-center f btn btn-success" >
      <h4>ابحث عن متبرع</h4>
    </button>
	  <button type="button" onclick="window.location = 'new.php';" class="vivify fadeIn delay-700 text-center f btn btn-danger">
      <h4>سجل ك متبرع</h4>                           
    </button>
	</div>
	
	<div id="loading" class="text-center d-none">
	<img src="30.gif">
	</div>
	<div id="res">
	</div>
  
</div>
</body>
</html>