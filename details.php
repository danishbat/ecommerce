<?php  include("functions/function.php");?>


<html>
<head>
<title>Coolnation</title>
<link rel="stylesheet" href="styles/style.css" media="all">

</head>
<body>

<div class=main_wrapper> <!-- Main container start-->

         <div class=header_wrapper>   <!-- header start --> 
		  <a href="index.php"><img src="images/logo.png" width=310 height=100 alt="logo"  style="float:left;"></a>
		   <img src="images/baner.jpg" width=700 height=100  alt="baner" style="float:right; position:relative; bottom:100;">  
		  
		 </div>  <!-- header ends -->
         
		 <div class="navbar"> <!-- Navigation start -->
		 <ul id="menu">
		 <li> <a href="index.php"  > Home </a>         </li>
		 <li> <a href="allproduct.php" > All Produts </a>  </li>
		 <li> <a href="myaccount.php" > My Account </a>   </li>
		 <li> <a href="signup.php" > Sign Up </a>      </li>
		 <li> <a href="shopping.php" > Shopping Cart</a> </li>
		 <li> <a href="contactus.php" > Contact Us </a>   </li>
		 </ul>
		 
		 
		  <div id="form" >
		  <form  method="POST" action="search.php" enctype="multipart/form-data"  >  
		   <input type=text placeholder="Search product Here" style="height:25; " name="search">
		  <input type=submit value="search" name="sub">
		  </form>
		  </div>
		 </div> <!-- Navigation end -->
         
		 
		 <div class="content_wrapper">  <!-- content start -->  
		 
		 <div id=right_content  >  
                   <div id="head">   <!-- sub left container -->  
                   
                   <div id="content">  <!-- content  -->
                    
                    <b> Welcome guest!   </b>
                    <b style="color:yellow;" > Shopping cart    </b>
                    <span> item:<?php item();  ?> -price:  </span>
                    </div>   <!-- end content  -->
                    </div>      <!-- end sub left container --> 
       
       <div id="products">
       
     
       <?php  
       
          
          $proid=$_GET['proid'];
           $dan="select * from products where product_id=$proid";
           $pro=mysqli_query($db,$dan);
           
           while($fetch=mysqli_fetch_array($pro))
           {
           
           $pid=$fetch['product_id'];
           $pcat=$fetch['category'];
           $pbrand=$fetch['brand'];
           $ptitle=$fetch['product_title'];
           $pimage1=$fetch['product_img1'];
           $pimage2=$fetch['product_img2'];
           $pimage3=$fetch['product_img3'];
           $price=$fetch['product_prize'];
           $pdesc=$fetch['product_desc']; 
           
       
       echo" <div id=single_products>
        <h3> $ptitle </h3>
        <img src='admin area/product images/$pimage1' width=180 height=180 >
        <img src='admin area/product images/$pimage2' width=230 height=230 >
        <img src='admin area/product images/$pimage3' width=250 height=250 >
         <p><h3> $pdesc </h3> </p>
        <p> <b>Price:$price </b></p> 
        <a href=index.php?cart=$pid > <button> Add to cart </button> </a> 
       
       </div> ";
       }
     ?>
        </div> 
        
        
       
        
       
 
		 </div>
		 <div id=left_content  >  
		 
		 <div id="left"> Categories </div>
		      <ul id="cats">
		      <?php  getcat(); ?>
			 
			  </ul>
		 
		 <div id="left"> Brand </div>
		 
		 <ul id="cats">
		  <?php getbrand();  ?>
		 
			  
                  </ul>
		 
		 
		 
		 </div>
		 
		 </div> <!-- content end -->
        

		<div class="footer">  <!-- footer start -->
		 
		  
		 </div> <!-- footer end -->





</div> <!-- Main container end-->










</body>

</html>