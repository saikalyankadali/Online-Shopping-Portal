
<HTML>
  <HEAD>
    <meta charset="utf-8">
    <TITLE></TITLE>
<style>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

.header{
	position : fixed;
	top : 0px;
	background-color : #C0C0C0;
	height : 120px;
	width : 100%;
	text-align : 15px;
	z-index:1;
}
	#containerss{
		margin-top:20px;

		}
         #containerss ul
         {
                list-style:none;

          }
         #containerss ul li
         {
               background:transparent;
               width:200px;
               border:0px solid white;
               height:40px;
               line-height:40px;
               text-align:center;
               float:left;
               color:white;
               font-size:13px;
               position:relative;   
		
           }
          #containerss a
          {
                text-decoration:none;
                color:white;
           }
          #containerss ul li:hover
           {
                border-bottom:5px solid red; 
				background-color:black;
           }
           #containerss ul ul
          {
                   display:none;
				   margin-left:-40px;
           }
           #containerss ul li:hover > ul
           {
                    display:block;
            }
           #containerss ul ul ul
           {
                     margin-left:180px;
                     top:0px;
                     position:absolute;
            }

			iframe
			{
			position:absolute;
			top:100%;
			left:-25%;
			height:500%;
			width:140%;
			overflow:auto;
			background-color:#F0F0F0;
			z-index:-1;
			
               
			}

</style>
</HEAD>
 <BODY>
 <div class="header" style="	position : fixed;
	top : 0px;
	background-color : #C0C0C0;
	height : 120px;
	width : 100%;
	text-align : 15px;
	z-index:1;">
  	<div class="title" style="margin-top: 20px;margin-left: 20px;"><font face="Viner Hand ITC" size="5px" color="orange">Fun</font><font face="Russo One" color="blue" size="5px">Cart</font><font face="Russo One" color="black" size="15px">.com</font></div>
		</div>
		<div class="container" style="position:fixed; top:5px;left:200px;z-index:2">
			<input class="form-control" id="myInput" type="text" placeholder="Search.." style="height : 35px;width : 600px;border : 1px solid red;border-radius : 5px;float : center;margin-top : 15px;margin-left : 60px;">
			
			<div id="containerss" onmouseover="zf()" onmouseout="yf()">
				<ul>
					<li><a href="part3.html" target="a">Your FunCart.in</a></li>
					<li><a href="viewreg.php" target="a">CUSTOMER ACCOUNTS</a></li>
					<li><a href="viewfeed.php" target="a">CUSTOMER FEEDBACKS</a> </li>
					<li><a href="viewbuy.php" target="a">CUSTOMER BOUGHT ITEMS</a></li>
					<li><a href="Logout" target="a">LOGOUT</a></li>
				</ul>
			</div>
			<div class="content">
				<iframe  name=a src="part3.html" id="B"></iframe>
			</div>
		</div>

	<script>
		function zf()
		{
			document.getElementById('B').style.zIndex=-1;
		}
		function yf()
		{
			document.getElementById('B').style.zIndex=10;
		}
	</script>

	<script>
		$(document).ready(function(){
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myDIV *").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>
	</BODY>
</HTML>
