<html lang="en"> 

<head> 
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Ajax Database Fetch   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<a href="../index.php"> GO BACK </a>
<br> <br> 

<p style="text-align: center;"> <strong> UNCHECKED JOB APPLICATIONS </strong> </p>
<?php



$host="localhost";
        $user="root";
        $pwd="";
        $db="mssn-project2122";
    
        $conn = mysqli_connect($host,$user,$pwd,$db) or die("unable to connect");

	
			$query = "SELECT JobApplication.Date as datee, JobApplication.Applicant, Applicant.Name, Applicant.Lastname, Applicant.SSN, Applicant.Email FROM JobApplication JOIN Applicant ON JobApplication.Applicant = Applicant.SSN WHERE (JobApplication.Date, JobApplication.Applicant) NOT IN (SELECT Checked.JADate, Checked.JAApplicant FROM Checked)";

					$result2 = mysqli_query($conn, $query);
					?>

<div class="container" style="margin: auto">
                              
                              <div class="container">
                                <table class="table" style="margin: auto; border-top:none;" >
                                  <thead>
                                    <tr>
                                      <th scope="col"  style="border:none;">Date of Job Application</th>
                                      <th scope="col"  style="border:none;">Name of Applicant</th>
                                      <th scope="col"  style="border:none;">SSN</th>
                                      <th scope="col"  style="border:none;">Email</th>
                                      
                                     
                                      
                                    </tr>
                                  </thead>
                                
                                  <tbody> 

                

				<?php
				while ($row2 = mysqli_fetch_assoc($result2)) {

					echo " <tr>   
                    <td>" .$row2["datee"]. "</td> 
                    <td>" .$row2["Name"]." ".$row2["Lastname"]."</td> 
                    <td>" .$row2["SSN"]."</td> 
                    <td>" .$row2["Email"]."</td> 
                    <td> <a href='check.php?date=".$row2["datee"]."&applicant=".$row2["SSN"]."'> SIGN AS CHECKED </a> </td>
                    
        
                    
                    
                   
                </tr>";
                }
?>
</tbody>
                                </table>
                              </div>
                          </div>
                      </div>