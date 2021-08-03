<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
</head>
<body>

	<h1>Suspendisse laoreet magna vel diam lobortis imperdiet</h1>
     <img src="image.png">
     <nav>
     <ul>
     	<li>HOME</li>
     	<li>PRODUCTS</li>
     	<li>ABOUTUS</li>
     	<li>CONTACTUS</li>
     </ul>
     </nav>


     <div class="container1">
     	
     	<div class="count">
     		<h2>Ecommerce HTML Template</h2>
     		<p>Pixie HTML Template can be converted into your desired CMS<br> theme. Total 5 pages included. You can use this Bootstrap<br> v4.1.3 layout for any CMS.

Please tell your friends about Tooplate free template site.<br> Thank you. Photo credit goes to Pexels.com website.</p>

      <button>Order Now</button>
     		
     	</div>
     	
     </div>


<br>

<div class="container my-5">
	<h3 style="text-align: center;" >Contact us</h3>
	<div class="w-50 mx-auto mnp">
<form method="post" >
	 <div class="form-group align-item-center">
    <label for="name">name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="email" name="name">
  </div>
   <div class="form-group">
    <label for="email">email:</label>
    <input type="text" class="form-control" placeholder="Enter email" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pass">
  </div>
 <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</div>





<footer class="container-fluid">

	<div class="container my-5">
                 <h4 style="text-align: center;">Footer Sections</h4>
		<div class="row">
			<div class="col-md-4 my-5"><br>
              <i class="fa fa-facebook">facebook</i><br>
              <i class="fa fa-twitter">twitter</i><br>
              <i class="fa fa-whatsapp">whatsapp</i><br>
              <i class="fa fa-instagram">instagram</i><br>
              <i class="fa fa-github">github</i>
				
			</div>

			<div class="col-md-4 my-5">
              <p>Font Awesome is designed to be used with inline elements.<br> The <i> and <span> elements are widely used for icons.<br>

Also note that if you change the font-size or color of the icon's container,<br> the icon changes. Same things goes for shadow, and<br> anything else that gets inherited using CSS.

</p>
				
			</div>

			<div class="col-md-4 my-5">
              <p>Address:1-234/11,<br> mainroad Dilsuknagar.</p>
              <p>Phone:8894679856</p>

				
			</div>
		</div>
		
	</div>
	


</footer>

<div class="hyper my-5 mx-auto">
	<h5  class= "text-center">
	All Rights resered@ by Someone,</h5>
</div>
</body>
</html>



<?php

$Con= mysqli_connect('localhost','root','', 'box');

if(isset($_POST['submit'])){

$name = $_POST['name'];
$pass = $_POST['pass'];
$comment = $_POST['comment'];
$email = $_POST['email'];

$_insert="INSERT INTO sample(name, password, comment,email) VALUES ('$name','$pass','$comment','$email')";

$result= mysqli_query($Con,$_insert);
?>
<?php
if($result=== true){
  ?>
  <script type="text/javascript">
    alert("data inserted successfully");
  </script>
  <?php
}else{
  ?>
  <script type="text/javascript">
    alert("data inserted successfully");
  </script>
  <?php
}
}
  

?>
