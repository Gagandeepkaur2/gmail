 <?php
    
   $connect=mysqli_connect("localhost","root","","gmail") or die("Connection Failed");
   if(!empty($_POST['save']))
   {
    $tomail=$_POST['to'];
    $subject=$_POST['sub'];
    $message=$_POST['mes'];
    
    
    $query="insert into composetable(recipients,subject,message) values('$tomail','$subject','$message')";
    if(mysqli_query($connect,$query))
    {
        // echo "Record Inserted";
    }
    else
    {
        echo "Record Not Inserted";
    }
   }
   else
   {
    // echo "Not Inserted";
   }
   // $header="From:kaurgagandeep7009@gmail.com";
   // if(!empty($_POST['save']))
   // {
   //  if(mail($tomail, $subject, $message, $header))
   // {
   //  echo "Mail has been sent";
   // }
   // else
   // {
   //  echo "Email sending failed";
   // }
   // }
?> 
<!DOCTYPE html>

<html>
<head>
	<title>Sidebar</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>          

   <!-- Sidebar -->
   <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 90vh;">
    
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <button type="button" class="btn btn-info btn-lg" style="width: 200px; height: 45px;" data-toggle="modal" data-target="#myModal">Compose</button>

        <!-- Modal -->
         <div id="myModal" class="modal fade" role="dialog">
           <div class="modal-dialog">  <!-- modal-dialog-centered -->

             <!-- Modal content-->
             <div class="modal-content" style="width: 550px; height: 550px;">
               <div class="modal-header" style="height: 20px">
                 <h5 class="modal-title">My Message</h5>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                
                   <div class="composeform1">
                   <form method="post" action="" class="composeform"/>
                  
                   <input type="text" name="to" class="to" placeholder="Recipients"/><br/><br/>
                   <hr style="margin-top: 0;">
                   <input type="text" name="sub" class="subject" placeholder="Subject"/><br/><br/>
                   <input type="text" name="mes" class="textar" /><br/><br/>
                   <input type="submit" name="save" value="Send">
        
                   </form>
                </div>
               </div>
            
             </div>

           </div>
         </div>

     
      </li>
      <li>
        <a href="inbox.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Inbox
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Sent
        </a>
      </li>
     <!--  <li>
        <a href="#" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Customers
        </a>
      </li> -->
    </ul> 


  </div>
    

</body>
</html>