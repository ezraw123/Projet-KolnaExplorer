 






<?php


// Create database connection
// include 'config.php'

$db = mysqli_connect("localhost", "root", "", "Kolnaexplorer");




// Initialize message variable

$msg = "";

// If upload button is clicked ...
if (isset($_POST['add'])) {



    $team_img = $_FILES['team_img']['name'];



    // $target = "images/".basename($team_img);



    // Get image name
    // Get text


    $team_firstName = mysqli_real_escape_string($db, $_POST['team_firstName']);
    $team_role = mysqli_real_escape_string($db, $_POST['team_role']);
    $team_resum = mysqli_real_escape_string($db, $_POST['team_resum']);
    $facebook_path  = mysqli_real_escape_string($db, $_POST['facebook_path']);
    $linkdin_path = mysqli_real_escape_string($db, $_POST['linkdin_path']);
    $twitter_path = mysqli_real_escape_string($db, $_POST['twitter_path']);



    $target = "images/".basename($team_img);

   

     $sql="INSERT INTO team(team_img, team_firstName, team_role,team_resum,facebook_path,linkdin_path,twitter_path)VALUE('$team_img','$team_firstName','$team_role','$team_resum','$facebook_path','$linkdin_path','$twitter_path') ";


    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['team_img']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
}


$result = mysqli_query($db, "SELECT * FROM team");




?>
    



































        




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     

     
    <link rel="stylesheet" href="css/Teampage.css">
</head>
<body>
    
<header>
		<div class="logo">team<span>page</span></div>
	</header>
	<div class="nav-btn">Menu</div>
	<div class="container">
		
		<div class="sidebar">
			<nav>
				<a href="#">Team<span>page</span></a>
				<ul>
					<li class="active"><a href="#">Dashboard</a></li>
					<li><a href="#">Followers</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Social</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>

		<div class="main-content">
			<!-- <h1></h1> -->
			
      <div class="">
				<div class="">
				
				</div>
				<div class=" container-fluid ">
                    <div class=" row  justify-content-center "></div>
                    <div class="col-md-10">
                        <h3 class="text-center text-dark"> bienvenue page team</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="text-center text-inf">Add Record</h3>
                            <form method="POST" action=" teampage.php" enctype="multipart/form-data">                            

                                <div class="form-group">
                                    <input type="text" name="team_firstName" class="form-control" placeholder="firstname"  require        >
                                </div>
                                <div class="form-group">
                                    <input type="text" name="team_role" class="form-control" placeholder="Enter role"  require        >
                                </div> 
                                <div class="form-group">
                                    <input type="text" name=" team_resum" class="form-control" placeholder="Enter resumer"  require        >

                                </div>
                                <div class="form-group">
                                    <input type="file" name="team_img" class="form-control" placeholder="Enter e-mail"  require        >
                                </div>   
                                <div class="form-group">
                                    <input type="text" name=" facebook_path  " class="form-control" placeholder=""  require        >
                                </div>  
                                <div class="form-group">
                                    <input type="text" name=" linkdin_path  " class="form-control" placeholder=""  require        >
                                </div>
                                </div> <div class="form-group">
                                    <input type="text" name="  twitter_path " class="form-control" placeholder=""  require       >
                                </div>
                                <div class="form-group">
                                <input type="submit" name=" add" class="form-control1 " placeholder=" Record"  require     >
                            </div>
                            </div>
                          
                            </form>
                        </div>
                        <!-- <div class="col-md-8">
                                <h2>Record presente in data base</h2>

                            <table>
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>team_img </th>
                                            <th>team_firstName</th>
                                            <th> team_role</th>
                                            <th>   	team_resum  </th>
                                            <th>facebook_path</th>
                                            <th> linkdin_path</th>
                                            <th>twitter_patth</th>    
                                            <th>action</th>     
 

                                            </tr>
                                        </thead><tbody>
                                        <tr>
                                            <td><img src="" alt="" width="25px"></td>
                                            <td>29</td>
                                            <td>khalid saaf</td>
                                            <td> web developper</td>
                                            <td> hello word</td>
                                            <td><img src="" alt="" width="25px"></td>
                                            <td><img src="" alt="" width="25px"></td>
                                            <td><img src="" alt="" width="25px"></td>
                                            <td> 
                                                <a href="#"  style="background-color: rgb(25, 202, 18);"> Detail</a>
                                                <a href="#"   style="background-color: rgb(214, 65, 28);" > Delete</a>
                                                <a href="#"  style="background-color: rgb(23, 42, 216);" > Edit</a>

                                            </td>






                                        </tr>
                                       
                                        </tbody>
                            </table>



                        </div> -->


                    </div>
                    
				</div>
			</div>
		</div>
	</div>





</body>
</html>