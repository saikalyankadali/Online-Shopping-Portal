<?php
session_start();
if($_SESSION["an"]==null)
echo "<script> window.location='adminlogin.html'</script>";
?>
<HTML>
  <HEAD>
    <meta charset="utf-8">
    <TITLE>online jewellery</TITLE>
    <style>
         body
        {
	background-color:dimgrey;
	background-size:cover;
	margin:0px;
                 padding:0px;
         }
         #container
        {
	 position:absolute;
	 top:29%;
	 left:-1%;
         }
         #container ul
         {
                list-style:none;
          }
         #container ul li
         {
               background-color:dimgrey;
               width:260px;
               border:1px solid white;
               height:50px;
               line-height:50px;
               text-align:center;
               float:left;
               color:white;
               font-size:18px;
               position:relative;   
           }
          #container a
          {
                text-decoration:none;
                color:white;
           }
          #container ul li:hover
           {
                background-color:black;
           }
           #container ul ul
          {
                   display:none;
	  margin-left:-40px;
           }
           #container ul li:hover > ul
           {
                    display:block;
            }
           #container ul ul ul
           {
                     margin-left:180px;
                     top:0px;
                     position:absolute;
            }
            .aa
            {
              
               background-color:white;
               height:140;
               width:70%;
               border-radius:10px;
               text-align:center;
               color:skyblue;
               padding:5px;
               position:absolute;
               top:10;
               left:28%;
               border:2px outset blue;
               font-size:55px;
               font-family:Perpetua Titling MT;
            }
            .title
            {
              
               background-color:skyblue;
               height:180;
               width:100%;
               border-radius:0px;
               text-align:center;
              color:white;
               padding:5px;
               position:absolute;
                z-index:-1;
                border:2px outset blue;
            }
            iframe
           {
	 position:absolute;
	top:40%;
	left:0%;
	 height:58%;
	width:100%;
	overflow:auto;
	background-color:white;
                z-index:-1;
           }
</style>
  </HEAD>
  <BODY background=1234.jpg">
         <div class="aa">ONLINE &nbsp;&nbsp;&nbsp;JEWELLERY &nbsp;&nbsp;&nbsp;SHOPPING</div>
      <div class="title" ></div>
           <div id="container" onmouseover="zf()" onmouseout="yf()">
                    <ul>
                         <li><a href="after-adminlogin.html" target="a">HOME</a></li>
                         <li><a href="viewreg.php" target="a">VIEW ACCOUNTS</a></li>
                         <li><a href="viewfeed.php" target="a">VIEW FEEDBACKS</a></li>
                         <li><a href="viewbuy.php" target="a">VIEW BUYED ITEMS</a></li>
                          <li><a href="logout.php">LOGOUT</a></li>
                      </ul>
                   </div>
          <div class="content">
              <iframe  name=a src="after-adminlogin.html" id="a"></iframe>
        </div>
		<script>
	function zf()
	{
			document.getElementById('a').style.zIndex=-1;
	}
	function yf()
	{
			document.getElementById('a').style.zIndex=10;
	}

</script>


        </BODY>
    </HTML>