<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title> INFINITE </title>
 	<link rel = "stylesheet" type = "text/css"  href = "src/styles/styles.css">
 	<style type="text/css">
		@import url('https://stackpath.bootstapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		*{
			padding: 0;
			margin: 0
			color: #454545;
		}
		h1{
			width: 3%;
			position: relative;
			top: 60px;
			left: 90px;
			cursor: pointer;
		}
		h1:before{
			content: attr(data-count);
			position: absolute;
			color: white;
			right: 16px;
			font-size: 15px;
			text-align: center;
			top: -12px;
			width: 20px;
			height: 20px;
			background: red;
			border-radius: 50%;
			opacity: 0;
		}
		h1.zero:before{
			opacity: 1;
		}
		section{
			width: 67%;
			height: 260px;
			display: flex;
			justify-content: space-around;
			margin: 100px auto;
		}
		section div{
			width: 22%;
			height: 93%;
			background: #f5f5f5;
			padding: 1%;
			position: relative;
		}
		img{
			width: 225px;
			height: 139.5px;
		}
		p{
			margin: 5px;
		}
		h6{
			width: 50px;
			padding: 5px;
			margin: 10px;
			font-size: 15px;
		}
		button{
			padding: 6px;
			background: red;
			border: none;
			outline: none;
			font-weight: bold;
			color: #fafafa;
			cursor: pointer;
		}
		section div span{
			position: absolute;
			top: 14px;
			left: 13px
			width: 300px;
			height: 186px;
			display: none;
		}
		section div span img{
			width: 100%;
			height: 100%
		}
		section div:nth-child(1)>span.active{
			animation: first 0.5s ease-in;
			z-index: 2;
			display: block;
		}
		section div:nth-child(2)>span.active{
			animation: second 0.5s ease-in;
			z-index: 2;
			display: block;
		}
		section div:nth-child(3)>span.active{
			animation: third 0.5s ease-in;
			z-index: 2;
			display: block;
		}
		section div:nth-child(4)>span.active{
			animation: four 0.5s ease-in;
			z-index: 2;
			display: block;
		}
		@keyframes first{
			to{
				width: 30px;
				height: 20px;
				left: 1290px;
				top: -70px;
			}
		}
		@keyframes second{
			to{
				width: 30px;
				height: 20px;
				left: 948px;
				top: -70px;
			}
		}
		@keyframes third{
			to{
				width: 30px;
				height: 20px;
				left: 606px;
				top: -70px;
			}
		}
		@keyframes four{
			to{
				width: 30px;
				height: 20px;
				left: 165px;
				top: -70px;
			}
		}
		.select{
			width: 60%;
			height: 580px;
			background: #222;
			padding: 5%;
			position: absolute;
			top: -1000px;
			left: 20%;
			transition: 0.5s;
			overflow-y: auto;;
			margin: auto;;
		}
		.select.display{
			top: 10px;
		}
		.select div{
			width: 100%
			height: 200px;
			display: flex;
			padding: 5px;
			border: 1px solid white;
			position: relative;
			margin: 5px auto;
		}
		.select div img{
			width: 300px;
			height: 100%
		}
		.select div p{
			padding: 35px;
			color: white;
		}
		.select div h6,
		.select div button{
			position: absolute;
			left: 45%;
			top: 50%;
			color: white;
		}
		.select div button{
			left: 60%;
			top: 55%;
		}
		.select div span{
			display: none;
		}
	</style>
</head>



<body>
	<img src = "src/images/logo.png" class = "logo" height= "100" width= "120" alt = "Image Not Found" align = "left">
	<img src = "src/images/profile.png" class = "profile" height= "100" width= "100" alt = "Image Not Found" align = "right">

<br>
<ul class = "menu"> 
 <li class = "menu"> <b> <a href = "https://courseweb.sliit.lk/"> Home </a> </b> </li>
 <li class = "menu"> <b> <a href = "https://courseweb.sliit.lk/"> Events </a> </b> </li>
 <li class = "menu"> <b> <a href = "https://courseweb.sliit.lk/"> images </a> </b> </li>
 <li class = "menu"> <b> <a href = "https://courseweb.sliit.lk/"> Contact Us </a> </b> </li>
  <li class = "menu"> <b> <a href = "cart.php"> Cart </a> </b> </li>    
 <li class = "menu"> <b> <a href = "https://courseweb.sliit.lk/"> Search </a> </b> </li>
 <li class = "menu"> <b> <a href = "index1.php"> Login </a> </b> </li>
 <li class = "menu"> <b> <a href = "signup.php"> Signup </a> </b> </li>
  <li class = "menu"> <b> <a href = "aboutus.php"> About Us </a> </b> </li> 
</ul> 

<br>
<br>
 <hr id = "hr"> </hr>

<div class = "sidebar">
 <ul>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Collection </a> </b> </li> 
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Blog </a> </b> </li>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Links </a> </b> </li>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Settings </a> </b> </li>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Support </a> </b> </li>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Feedback </a> </b> </li>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Rate Us </a> </b> </li>
 <li> <b> <a href = "https://courseweb.sliit.lk/"> Sign Out </a> </b> </li>
 </ul>
    </div>
</div>
</center>

<h1><i class="fa fa-shopping-cart"></i></h1>
	<section>
		<div>
			<img src="src/images/1.jpg">
			<h3>Weddings</h3>
			<span></span>
			<button>Add-cart</button>
		</div>
		<div>
			<img src="src/images/2.jpg">
			<h3>Birthday</h3>
			<span></span>
			<button>Add-cart</button>
		</div>
		<div>
			<img src="src/images/3.jpg">
			<h3>Batch Party</h3>
			<span></span>
			<button>Add-cart</button>
		</div>
		<div>
			<img src="src/images/4.jpg">
			<h3>parade</h3>
			<span></span>
			<button>Add-cart</button>
		</div>
	</section>
	<div class="select">
		
	</div>


<div class="sid"></div>

<footer>
<hr id = "hr"> </hr>
<br>
</footer>

</body>
</html>

<script type="text/javascript">
	var noti = document.querySelector('h1');
	var select = document.querySelector('.select');
	var button = document.getElementsByTagName('button');
	for(but of button)
	{
		but.addEventListener('click', (e)=>{
			var add = Number(noti.getAttribute('data-count')|| 0);
			noti.setAttribute('data-count', add + 1);
			noti.classList.add('zero');


			//copy and paste element//
			var parent = e.target.parentNode;
			var clone = parent.cloneNode(true);
			select.appendChild(clone);
			clone.lastElementChild.innerText = "Buy-now";
			if (clone) {
				noti.onclick =()=>{
					select.classList.toggle('display');
				}
			}

			// image animation to cart ///
			var image = e.target.parentNode.querySelector('img');
			var span = e.target.parentNode.querySelector('span');
			var s_image = image.cloneNode(false);
			span.appendChild(s_image);
			span.classList.add('active');
			setTimeout((=>{
					span.removeChild(s_image);
					span.classList.remove('active');
			}, 500);
		})
	} 
</script>