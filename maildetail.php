<?php
    include 'header.php';
    $connect=mysqli_connect("localhost","root","","gmail") or die("Connection Failed");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inbox</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">                           
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	.mailtable tr td{
		box-shadow: none;
	}
</style>
<body>
	<div class="row">
		<div class="col-md-3 m-0">
			<?php
			    include 'sidebar.php';
			?>
		</div>
		<div class="col-md-9">

			<nav class="navbar navbar-expand-lg ">
			       		 <div class="container-md">
		       			 <div style="float: left;">
		       			 	<a href="inbox.php" class="text-dark bg-white"><span class="material-symbols-outlined">arrow_back</span></a>
		       			 	<span class="material-symbols-outlined">archive</span>
		       			 	<span class="material-symbols-outlined">report</span>
		       			 </div>
		       			 <div style="float: right;">
		       			 <span class="material-symbols-outlined">arrow_back_ios</span>
		       			 <span class="material-symbols-outlined">arrow_forward_ios</span>
		       			 <span class="material-symbols-outlined">keyboard</span>
		       			 <span class="material-symbols-outlined">arrow_drop_down</span>
		       			 </div>
		        		</div>
			         </nav>
			   
			
			
		
		<table class="mailtable">
		
			<div class="row">
			<?php
			if(!empty($_GET['did']))
			{
			$id=$_GET['did'];
			// print_r($id);
			// die();
			$query="select * from composetable where id='$id'";
			$result=mysqli_query($connect,$query);
			
			// die();
			
			while($row=mysqli_fetch_assoc($result)){   

			?>
				<tr style="box-shadow: none;">  
					<td><h4><?php echo $row['subject'] ?></h4></td>
				</tr>
			    <tr style="box-shadow: none;">

			   	 <td class="recipient"s style="width: 200px; height: 30px; "><h6><?php echo $row['recipients'] ?></h6></td>
			  	</tr>

			  <tr style="box-shadow: none;">
			  	<td>
			  		<?php echo $row['message'] ?>
			  	</td>
			  </tr>
			<?php
			}
		}
			?>
			</div>
			
			</table>
			
		
		      
		</div>
	</div>
      

	

</body>
</html>