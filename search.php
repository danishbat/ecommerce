<?php  include("functions/function.php");           ?>


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
		  <form  method="POST" action="search.php"  >  
		   <input type=text placeholder="Search product Here" style="height:25;"  name="search" >
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
                    <span> item: -price:  </span>
                    </div>   <!-- end content  -->
                    </div>      <!-- end sub left container --> 
       
       <div id="products">
       
     
       <?php
       if(isset($_POST['sub']))  
       {
       
       $search=$_POST['search'];
       
        $dan="select * from products where keyword like '%$search%'";
           $pro=mysqli_query($db,$dan);
           
           while($fetch=mysqli_fetch_array($pro))
           {
           
           $pid=$fetch['product_id'];
           $pcat=$fetch['category'];
           $pbrand=$fetch['brand'];
           $ptitle=$fetch['product_title'];
           $pimage=$fetch['product_img1'];
           $price=$fetch['product_prize'];
           $pdesc=$fetch['product_desc']; 
           
       
       echo" <div id=single_products>
        <h3> $ptitle </h3>
        <img src='admin area/product images/$pimage' width=180 height=180 >
        <p> <b>Price:$price </b></p> 
        <a href=index.php?cart=$pid> <button> Add to cart </button> </a> 
        <a href=details.php?proid=$pid  > Details </a> 
       </div> ";
       }
       
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