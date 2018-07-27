<?php

?>
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

<!--    toast lib cdn-->
    <script src="https://unpkg.com/native-toast@1.3.0/dist/native-toast.js"></script>


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
	var city = document.getElementById("city").value;
	var btype ;
	for(var i=1 ;i<9;i++)
	{
		if(document.getElementById("t"+i).className == "f2 btn btn-danger vivify fadeIn" )
		{
			btype = document.getElementById("t"+i).innerHTML;
		}
	}
	var len = btype.length;
	btype = btype.substring(4,len-5);
	var name = document.getElementById("name").value;
	var gender = document.getElementById("gender").value;
	var num = document.getElementById("num").value;
	
	alert(city+"\n"+btype+"\n"+name+"\n"+gender+"\n"+num);
	
	$.post("savedata.php",
    {
        name: name,
        bloodtype: btype,
		phonenumber: num,
		gender: gender,
		city: city
    },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
		document.getElementById("res").innerHTML=data;
    });
	
	
}
</script>
</head>
<body >
<div class="container text-center">
<div class="text-center">
<img class="mt-4 mb-4 vivify pullUp" onclick="this.class='vivify fadeIn';" src="bbloodnew.png" width="500px">
</div>

	<div>
	<input id="name" class="f d-inline vivify fadeIn form-control w-25 text-center bg-dark text-light mx-auto" > 
<h5 class="f text-left vivify fadeIn d-inline mr-4 ml-3">الاسم</h5>	

</div>

<div>
  
		
		<h4 class="d-inline" ><select id="gender" name="gender" class="d-inline vivify fadeIn f custom-select-sm form-control w-25 text-center bg-dark text-light mx-auto m-1">
    <option value="male" selected >ذكر</option>
    <option value="female">أنثى</option>
  </select></h4>
  
  <h5 class="d-inline vivify fadeIn f text-left vivify fadeIn f ml-4  mr-4">النوع</h5> 
  </div>

		<div>
	
     <h4 class="d-inline f"><select id="city" name="cars" class="d-inline custom-select-sm form-control w-25 text-center bg-dark text-light mx-auto m-1">
	 </br>
    <option selected class="text-center">اختر المدينة</option>
    <option value="الخرطوم">الخرطوم</option>
    <option value="بورتسودان">بورتسودان</option>
    <option value="الفاشر">الفاشر</option>
	<option value="دنقلا">دنقلا</option>
	<option value="الجزيرة">الجزيرة</option>
	<option value="عطبرة">عطبرة</option>
	<option value="سنار">سنار</option>
	<option value="القضارف">القضارف</option>
  </select>
  </h4>
  <h5 class="d-inline f mr-4 ml-2">المدينة</h5>
  </div>
	

  	  
<div class="mt-1">

<input id="num" type="number" maxLength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="f d-inline vivify fadeIn form-control w-25 text-center bg-dark text-light mx-auto" >
<h5 class="d-inline f text-left vivify fadeIn ml-2">رقم الهاتف</h5> 
</div>
		
		
		
				<h5 class="f text-center vivify fadeIn">فصيلة الدم</h5> 
		<span id="t1" class="f2 btn btn-dark vivify fadeIn" onclick="x();this.className='f2 btn btn-danger vivify fadeIn';"><h5>O+</h5></span>	  
<span id="t2"class="f2 btn btn-dark vivify fadeIn" onclick="x();this.className='f2 btn btn-danger vivify fadeIn';"><h5>O-</h5></span>	  
<span id="t3"class="f2 btn btn-dark vivify fadeIn" onclick="x();this.className='f2 btn btn-danger vivify fadeIn';"><h5>B+</h5></span>	  
<span id="t4"class="f2 btn btn-dark vivify fadeIn" onclick="x();this.className='f2 btn btn-danger vivify fadeIn';"><h5>B-</h5></span>
<span id="t5"class="f2 btn btn-dark vivify fadeIn" onclick="x();this.className='f2 btn btn-danger vivify fadeIn';"><h5>A+</h5></span>	  
<span id="t6"class="f2 btn btn-dark vivify fadeIn" onclick="x();this.className='f2 btn btn-danger vivify fadeIn';"><h5>A-</h5></span>	  
<span id="t7"class="f2 btn btn-dark vivify fadeIn" onclick="x();this.className='f2 btn btn-danger vivify fadeIn';"><h5>AB+</h5></span>	  
<span id="t8"class="f2 btn btn-dark vivify fadeIn" onclick="x();this.className='f2 btn btn-danger vivify fadeIn';"><h5>AB-</h5></span>
		
  </div>
  <div class="text-center f">
	  <button type="button" onclick="y();" class="vivify fadeIn text-center f btn btn-success mt-2">
      <h4>حفظ البيانات</h4>                           
    </button>
	</div>
	<div id="res" class="mt-3 f">
	</div>
</body>
</html>