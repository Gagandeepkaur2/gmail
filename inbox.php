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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<style>
.Inboxtable tr,td{
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
			   <div class="w-100" style="height: 40px;">
			     	 <nav class="navbar navbar-expand-lg ">
			       		 <div class="container-md">
		       			 <div style="float: left;">
		       			 	<span class="material-symbols-outlined">check_box_outline_blank</span>
		       			 	<span class="material-symbols-outlined">arrow_drop_down</span>
		       			 	<span class="material-symbols-outlined">refresh</span>
		       			 	<span class="material-symbols-outlined">more_vert</span>
		       			 </div>
		       			 <div style="float: right;">
		       			 <span class="material-symbols-outlined">arrow_back_ios</span>
		       			 <span class="material-symbols-outlined">arrow_forward_ios</span>
		       			 <span class="material-symbols-outlined">keyboard</span>
		       			 <span class="material-symbols-outlined">arrow_drop_down</span>
		       			 </div>
		        		</div>
			         </nav>
		 		</div>
			<table class="table Inboxtable" >
			<thead>
				<tr>
					<th scope="col">Primary</th>
					<th scope="col">Promotions</th>
					<th scope="col">Social</th>
				</tr>
			</thead>
			<tbody>
			<?php
			// session_start();
			$query="select * from composetable";
			$result=mysqli_query($connect,$query);
			while($row=mysqli_fetch_assoc($result))
			{
			  ?>
			  	<tr>
			  	<!--onclick="window.location.href='maildetail.php';"-->		  		
				    <td class="recipients" style="width: 200px;">
				    		<a href="maildetail.php?did=<?php echo $row['id'] ?>" class="w-100 btn"><?php echo $row['recipients'] ?></a>	
				    	</td>
				    <td><?php echo $row['subject'] ?>-<?php echo $row['message'] ?></td>
					 
			 	 </tr>
			 	 
			  <?php
			}
			?>
			</tbody>
			</table>
		       
		</div>
	</div>
      

	

</body>
</html>