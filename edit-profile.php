<?php session_start();
include_once('config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
//Code for Updation 
if(isset($_POST['update']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact = $_POST['contact'];
	$praddr=$_POST['praddr'];
	$peaddr=$_POST['peaddr'];
	$email=$_POST['email'];
    $password=$_POST['password'];
	$gender=$_POST['gender'];
	$nationality=$_POST['nationality'];
$userid=$_SESSION['id'];
    $msg=mysqli_query($con,"update userspanel set fname='$fname',lname='$lname',contactno='$contact',email='$email',praddr='$praddr',peaddr='$peaddr',password='$password',gender='$gender',nationality='nationality' where id='$userid'");

if($msg)
{
    echo "<script>alert('Profile updated successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
}
}


    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Profile | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      <?php include_once('navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
<?php 
$userid=$_SESSION['id'];
$query=mysqli_query($con,"select * from userspanel where id='$userid'");
while($result=mysqli_fetch_array($query))
{?>
                        <h1 class="mt-4"><?php echo $result['fname'];?>'s Profile</h1>
                        <div class="card mb-4">
                     <form method="post">
                            <div class="card-body">
                                <table class="table table-bordered">
                                   <tr>
                                       <th>First Name</th>
                                       <td><input class="form-control" id="fname" name="fname" type="text" value="<?php echo $result['fname'];?>" required /></td>
                                   </tr>
                                   <tr>
                                       <th>Last Name</th>
                                       <td><input class="form-control" id="lname" name="lname" type="text" value="<?php echo $result['lname'];?>"  required /></td>
                                   </tr>
                                   <tr>
                                       <th>Contact No.</th>
                                       <td colspan="3"><input class="form-control" id="contact" name="contact" type="text" value="<?php echo $result['contactno']; ?>" pattern="[0-9]{10}" title="10 numeric characters only" maxlength="10" required /></td>
                                   </tr>
                                   <tr>
                                       <th>Email</th>
                                       <td><input class="form-control" id="email" name="email" type="email" placeholder="phpgurukulteam@gmail.com" required /><?php echo $result['email'];?></td>
                                   </tr>
								   <tr>
                                       <th>Present address</th>
                                       <td><input class="form-control" id="praddr" name="praddr" type="praddr" value="<?php echo $result['praddr'];?>"  required /></td>
                                   </tr>
								   <tr>
                                       <th>Permanent address</th>
                                       <td><input class="form-control" id="peaddr" name="peaddr" type="peaddr" value="<?php echo $result['peaddr'];?>"  required /></td>
                                   </tr>
								   <tr>
                                       <th>Gender</th>
                                       <td><input class="form-control" id="gender" name="gender" type="gender" value="<?php echo $result['gender'];?>"  required /></td>
                                   </tr>
								   <tr>
                                       <th>Nationality</th>
                                       <td><input class="form-control" id="nationality" name="nationality" type="text" value="<?php echo $result['nationality'];?>"  required /></td>
                                   </tr>
								   <tr>
                                       <th>Password</th>
                                       <td><input class="form-control" id="password" name="password" type="password" placeholder="Create a password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" value="<?php echo $result['password'];?>"  required /></td>
                                   </tr>
                                   <tr>
                                       <th>Reg. Date</th>
                                       <td colspan="3"><?php echo $result['posting_date'];?></td>
                                   </tr>
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>

                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>
<?php } ?>

                    </div>
                </main>
          <?php include('footer.php');?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
