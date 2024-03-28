<?php
session_start();
if(!isset($_SESSION['login'])) {
    header('LOCATION:login/login.php'); die();
} else {
}
if(isset($_POST['but_logout'])){



    session_destroy();
    header('Location: index.php');
}
 ?>
<!DOCTYPE html>
<html class="loading">
<head>
	<meta name="author" content="Doctor">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">    
    <title>VMR Checker</title>
	<link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
	<link rel="shortcut icon" type="image/x-icon" href="Exceed-Logo.ico"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </head>
  <body class="vertical-layout" style="background-color:#141414;" data-color="bg-gradient-x-purple-blue">
  <style> 
		h5,h4{
			color:white;
		}
		.text-center{
			background-color:#0e0e0e;
			border:1px solid #525252;
			border-radius:5px;
		}
		textarea{
			color:white;
			resize: none;
		}

		.text-center::placeholder{
			color:grey;
		}
		.text-center:focus{
			background-color:#0e1d2c;
		}

		textarea::-webkit-scrollbar {
  			width: 5px;
 			background-color: #663495; 
		}

		textarea::-webkit-scrollbar-thumb {
 			border-radius: 10px;
  			background-color: #663495; 
		}
		.lista_reprovadass{
			color:#747474;
		}
		.card-body{
			background-color: #0e0e0e; 
			border-radius:5px;
		}
		.text-center{
			border:none;
		}
		.badge-success,.btn-success{
			background-color: #0073e6;
			color:black	;
			border:none;
		}
		.btn-success:hover{
			background-color: #c9b63c;
			border:none;
			color:black;
			shadow:hidden;
		}
		.aprovadas{
			background-color: #35a7ff;
			color:black	;
		}
		.badge-danger{
			background-color: #ff5964;
			color:black	;
		}
		.html body .content .content-wrapper{
			background-color:#112132;
		}

		.btn-bg-gradient {
  			background-image: linear-gradient(to right, #0449ff 0%, #376eff  51%, #0449ff  100%);
   			 margin: 5px;
			 width:49%;
    		padding: 12px 40px;
    		text-align: center;
    		text-transform: uppercase;
    		transition: 0.5s;
    		background-size: 200% auto;
    		color: white;            
    		box-shadow: 0 0 20px #eee;
    		border-radius: 5px;
    		display: block;
			-webkit-box-shadow: 0 0 0 0 #514a9d;
  		}

  		.btn-bg-gradient:hover {
   			background-position: right center; /* change the direction of the change here */
    		color: #fff;
    		text-decoration: none;
  		}

		  .btn-bg-gradient-x {
			background-image: linear-gradient(to right, #ee0924 0%, #cc0606 51%, #ee0924  100%);
            margin: 5px;
            padding: 12px 45px;
			
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 5px;
            display: block;
			-webkit-box-shadow: 0 0 0 0 #514a9d;
  		}

  		.btn-bg-gradient-x:hover {
			background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
  		}

		  .statusbar{
			height:365px;
			padding-top:50px;
		  }
		  .hr-statusbar{
			border:none;
			height:1px;
			background-color:#3c5c7c;
		  }
		  .colored-toast.swal2-icon-success {
  background-color: #a5dc86 !important;
          }
          
          .footer-C {
			color:white;
			text-align: center;
			font-family: 'Bebas Neue', cursive;
			font-size: 17px;
			letter-spacing: 1px;
		  }
		  
		  option { 
    /* Whatever color  you want */
    background-color: #112132;
	color: white;
	}
	#myButton {
		background-color: #29292a;
		color: #fff;
		border: none;
		padding: 7px 26px;
		border-radius: 5px;
		cursor: pointer;
		font-family: revert;
		font-size: 16px;
		margin-block-end: 10px;
		margin-block-start: -41px;
		float: right;
		}
		
		#myButton:hover {
			background-color: #1a1814;
		}
	</style>
 <div class="app-content content" style="display:block;">
      <div class="content-wrapper" style="background-color:#141414;">
  <div class="content-body" >
  	<div class="mt-2"></div>
	<div class="row" style="max-width: 700px; margin: auto;">    
		<div class="col-md-8">
			<div class="card" style="background-color:transparent;">
				<div class="card-body text-center">
					<h4 class="mb-2"><strong><a href="https://t.me/Tamperdev">VJ VMR</a></strong></h4>
                    <a  
					style="width:140px;"
					></a>
					</h4>
					<textarea rows="8" class="form-control text-center form-checker mb-2" placeholder="XXXXXXXXXXXXXXXX|XX|XXXX|XXX" style="color:#ffffff94"></textarea>					
					          <select name="gate" id="gate" class="form-control" style="margin-bottom: 5px;"
							  <option </option>
                 <option style="background:rgba(165, 154, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/usd1ccn.php">CCN $1 USD</option>
				 <option style="background:rgba(165, 154, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/usd10ccn.php">CCN $10 USD</option>
				 <option style="background:rgba(165, 154, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/eur1ccn.php">CCN €1 EUR</option>
				 <option style="background:rgba(165, 154, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/eur10ccn.php">CCN €10 EUR</option>
                 <option style="background:rgba(165, 154, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/usd1cvv.php">CVV $1 USD</option>
</select>
	<br>										
					<button class="btn btn-play  btn-bg-gradient text-white" style="width: 45%; float: left; "><i class="fa fa-play" style="margin-right: 3px;"></i>START</button>
					<button class="btn btn-stop  btn-bg-gradient-x text-white" style="width: 45%; float: right;" disabled><i class="fa fa-stop" style="margin-right: 3px;"></i>STOP</button>
					<span class="badge badge-dark" id="datetime">01/02/2022</span> •  <span class="badge badge-dark" id="timenow">12:00:00 AM</span>


				</div>
			</div>
		</div>
		
<div class="col-md-4">
  <div class="card mb-2" style="background-color:transparent;">
  	<div class="card-body statusbar" >   
<h5 >CHARGED<span class="badge badge-success float-right charge">0</span></h5><hr class="hr-statusbar">
<h5>LIVE CVV<span class="badge badge-success float-right cvvs">0</span></h5><hr class="hr-statusbar">
<h5>LIVE CCN<span class="badge badge-success float-right aprovadas">0</span></h5><hr class="hr-statusbar">
<h5>DEAD<span class="badge badge-danger float-right reprovadas">0</span></h5><hr class="hr-statusbar">
<h5>TOTAL<span class="badge badge-primary float-right carregadas">0</span></h5><hr class="hr-statusbar">
<h5>LIMIT<span class="badge badge-primary float-right">20000</span></h5><hr class="hr-statusbar">
      
                                    <label class="form-control-label" style="margin-left: 10px; margin-bottom: 20px" for="inputcvv"></label>
                  </div> 
                </div>
              </div>
			  
            		<div class="col-xl-12">
			<div class="card" style="background-color:transparent;">
				<div class="card-body" >
					<div class="float-right">
						<button type="show" class="btn btn-primary btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy1"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-check-circle text-success"></i> CHARGED</h4>					
			<div id='lista_charge'></div>
				</div>				
			</div>
		</div>
		<div class="col-xl-12">
			<div class="card" style="background-color:transparent;">
				<div class="card-body" >
					<div class="float-right">
						<button type="show" class="btn btn-primary btn-sm show-lives"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> LIVE CVV</h4>					
			<div id='lista_cvvs'></div>
				</div>				
			</div>
		</div>
		<div class="col-xl-12">
			<div class="card" style="background-color:transparent;">
				<div class="card-body" >
					<div class="float-right">
						<button type="show" class="btn btn-primary btn-sm show-lives"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> LIVE CCN</h4>					
			<div id='lista_aprovadas'></div>
				</div>				
			</div>
		</div>
		<div class="col-xl-12">
			<div class="card" style="background-color:transparent;">
				<div class="card-body" >
					<div class="float-right">
						<button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
					<button class="btn btn-danger btn-sm btn-trash"><i class="fa fa-trash"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-times text-danger"></i> DEAD</h4>		
						<div style='display: none;' id='lista_reprovadas' class="lista_reprovadass"><br></div>
				</div>				
			</div>
		</div>
</section>
        </div>
      </div>
    </div>

 <noscript>
 <p>Browser doesn't support JS Version</p>
<span style="font-family:sans-serif;color:black;font-size:25px;">Here some cool browsers to be updated</span>
<pre style="font-family:sans-serif;color:black;font-size:30px;">
	<a href="https://www.google.com/chrome" target="b_lank">Chrome</a> | <a href="https://www.mozilla.org/" target="b_lank">FireFox</a> | <a href="https://www.opera.com/" target="b_lank">Opera</a> | <a href="https://brave.com/" target="b_lank">Brave</a>
</pre>
 </noscript>

    <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>

<script>

$(document).ready(function(){

Swal.fire({ title: "Warning!", text: "Join our Telegram t.me/Tamperdev", icon: "warning", confirmButtonText: "OK", buttonsStyling: false, confirmButtonClass: 'btn btn-primary'});
  
$('.show-charge').click(function(){
var type = $('.show-charge').attr('type');
$('#lista_charge').slideToggle();
if(type == 'show'){
$('.show-charge').html('<i class="fa fa-eye"></i>');
$('.show-charge').attr('type', 'hidden');
}else{
$('.show-charge').html('<i class="fa fa-eye-slash"></i>');
$('.show-charge').attr('type', 'show');
}});

$('.show-live').click(function(){
var type = $('.show-live').attr('type');
$('#lista_cvvs').slideToggle();
if(type == 'show'){
$('.show-live').html('<i class="fa fa-eye"></i>');
$('.show-live').attr('type', 'hidden');
}else{
$('.show-live').html('<i class="fa fa-eye-slash"></i>');
$('.show-live').attr('type', 'show');
}});

$('.show-lives').click(function(){
var type = $('.show-lives').attr('type');
$('#lista_aprovadas').slideToggle();
if(type == 'show'){
$('.show-lives').html('<i class="fa fa-eye"></i>');
$('.show-lives').attr('type', 'hidden');
}else{
$('.show-lives').html('<i class="fa fa-eye-slash"></i>');
$('.show-lives').attr('type', 'show');
}});

$('.show-dies').click(function(){
var type = $('.show-dies').attr('type');
$('#lista_reprovadas').slideToggle();
if(type == 'show'){
$('.show-dies').html('<i class="fa fa-eye"></i>');
$('.show-dies').attr('type', 'hidden');
}else{
$('.show-dies').html('<i class="fa fa-eye-slash"></i>');
$('.show-dies').attr('type', 'show');
}});

$('.btn-trash').click(function(){
	Swal.fire({title: 'REMOVED DEAD', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
$('#lista_reprovadas').text('');
});

$('.btn-copy1').click(function(){
	Swal.fire({title: 'COPIED CHARGED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var lista_charge = document.getElementById('lista_charge').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_charge;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});

$('.btn-copy2').click(function(){
	Swal.fire({title: 'COPIED CVV', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var lista_live = document.getElementById('lista_cvvs').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_live;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});

$('.btn-copy').click(function(){
	Swal.fire({title: 'COPIED CCN', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var lista_lives = document.getElementById('lista_aprovadas').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_lives;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.btn-play').click(function(){
var tgid = $("#tgid").val();
var e = document.getElementById("gate");
var gate = e.options[e.selectedIndex].value;
var lista = $('.form-checker').val().trim();
var array = lista.split('\n');
var charge = 0, live = 0, lives = 0, dies = 0, testadas = 0, txt = '';

if(!lista){
	Swal.fire({title: 'You did not provide any cards', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}

Swal.fire({title: 'Your cards are being Checked', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});

var line = array.filter(function(value){
if(value.trim() !== ""){
	txt += value.trim() + '\n';
	return value.trim();
}
});

/*
var line = array.filter(function(value){
return(value.trim() !== "");
});
*/

var total = line.length;


/*
line.forEach(function(value){
txt += value + '\n';
});
*/

$('.form-checker').val(txt.trim());
// ảo ma hả, đừng lấy code chứ !!
if(total > 20000){
  Swal.fire({title: 'Use less than 20000 cards', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

$('.carregadas').text(total);
$('.btn-play').attr('disabled', true);
$('.btn-stop').attr('disabled', false);

line.forEach(function(data){
var callBack = $.ajax({
	url: gate + '?lista=' + data + '&tgid=' + tgid,
	success: function(retorno){
		if(retorno.indexOf("CHARGED") >= 0){
		    Swal.fire({title: '+1 Charged Card', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('#lista_charge').append(retorno);
			removelinha();
			charge = charge +1;
			}
			else if(retorno.indexOf("CVV") >= 0){
	    	 Swal.fire({title: '+1 LIVE CVV', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('#lista_cvvs').append(retorno);
			removelinha();
			live = live +1;
		    }
			else if(retorno.indexOf("CCN") >= 0){
			 Swal.fire({title: '+1 LIVE CCN', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('#lista_aprovadas').append(retorno);
			removelinha();
			lives = lives +1;
		    }else{
			$('#lista_reprovadas').append(retorno);
			removelinha();
			dies = dies +1;
		}
		testadas = charge + live + lives + dies;
	    $('.charge').text(charge);
	    $('.cvvs').text(live);
		$('.aprovadas').text(lives);
		$('.reprovadas').text(dies);
		$('.testadas').text(testadas);
		
		if(testadas == total){
			Swal.fire({title: 'ALL CARDS HAS BEEN CHECKED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('.btn-play').attr('disabled', false);
			$('.btn-stop').attr('disabled', true);
		}
        }
      });
      $('.btn-stop').click(function(){
      Swal.fire({title: 'PAUSED', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('.btn-play').attr('disabled', false);
      $('.btn-stop').attr('disabled', true);      
      	callBack.abort();
      	return false;
      });
    });
  });
});

function removelinha() {
var lines = $('.form-checker').val().split('\n');
lines.splice(0, 1);
$('.form-checker').val(lines.join("\n"));
}

var myVar=setInterval(function(){myTimer()},1000);
function myTimer() {
	var dt = new Date();
	document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
    var d = new Date();
    document.getElementById("timenow").innerHTML = d.toLocaleTimeString();
}
  
	
</script>

  </body>
</html>
