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
<body>
	<div class="row">
		<div class="col-md-3 m-0">
			<?php
			    include 'sidebar.php';
			?>
		</div>
		<div class="col-md-9">
			   
			<div class="d-block">
			<table class="table">
		
			<div class="row">
			<?php
			if(!empty($_GET['did']))
			{
			$id=$_GET['did'];
			print_r($id);
			// die();
			$query="select * from composetable where id='$id'";
			$result=mysqli_query($connect,$query);
			
			// die();
			
			while($row=mysqli_fetch_assoc($result)){   

			?>
			    <tr style="border-bottom: 1px solid lightgrey;">

			    <td class="recipients" style="width: 200px; height: 30px;"><?php echo $row['recipients'] ?></td>
			    <td><?php echo $row['subject'] ?></td>
			 
			  </tr>
			<?php
			}
		}
			?>
			</div>
			
			</table>
			</div>        
		</div>
	</div>
      

	

</body>
</html>