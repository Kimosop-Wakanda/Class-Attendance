<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$regno = $stdname = $course= $password = $confirm_password = "";
$regno_err =$stdname_err = $course_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate regno
    if(empty(trim($_POST["regno"]))){
        $regno_err ="<p style='color:red'>Please enter a regno.</p>";
    } elseif(!preg_match('/^[A-Z]{2}[\d]{3}[-][\d]{6}[-][\d]{2}+$/', trim($_POST["regno"]))){
        $regno_err = "<p style='color:red'>Please use the correct format eg (CT201-100095-19).</p>";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM attendance WHERE regno = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_regno);
            
            // Set parameters
            $param_regno = trim($_POST["regno"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $regno_err = "<p style='color:red'>This regno is already taken.</p>";
                } else{
                    $regno = trim($_POST["regno"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
// Validate stdname
    if(empty(trim($_POST["stdname"]))){
        $stdname_err = "<p style='color:red'>Please enter your name.</p>";
    } elseif(!preg_match('/^[a-zA-Z]+$/', trim($_POST["stdname"]))){
        $stdname_err = "<p style='color:red'>stdname can only contain letters</p>";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM attendance WHERE stdname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_stdname);
            
            // Set parameters
            $param_stdname = trim($_POST["stdname"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 5){
                    $stdname_err = "<p style='color:red'>This stdname is already taken.</p>";
                } else{
                    $stdname = trim($_POST["stdname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }



    // Validate course
    if(empty(trim($_POST["course"]))){
        $course_err = "<p style='color:red'>Please select a course.</p>";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM attendance WHERE course = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_course);
            
            // Set parameters
            $param_course = trim($_POST["course"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1000){
                    $course_err = "<p style='color:red'>This course is already taken.</p>";
                } else{
                    $course = trim($_POST["course"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "<p style='color:red'>Please enter a password.</p>";     
    } elseif(strlen(trim($_POST["password"])) < 8){
        $password_err = "<p style='color:red'>Password must have atleast 6 characters.</p>";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "<p style='color:red'>Please confirm password.</p>";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "<p style='color:red'>Password did not match.</p>";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($regno_err) && empty($stdname_err) && empty($course_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO attendance (regno, stdname, course, password) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_regno, $param_stdname, $param_course, $param_password);
            
            // Set parameters
            $param_regno = $regno;
            $param_stdname = $stdname;
            $param_course = $course;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="register.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
               
                <input type="text" name="regno" placeholder= "Enter Registration number"class="input-group <?php echo (!empty($regno_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $regno; ?>">
                <span class="invalid-feedback"><?php echo $regno_err; ?></span>
            </div>
            <div class="input-group">
               
                <input type="text" name="stdname" placeholder= "Enter Student name"  class="input-group <?php echo (!empty($stdname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $stdname; ?>">
                <span class="invalid-feedback"><?php echo $stdname; ?></span>
            </div>

            <div class="input-group">
                <label>Select Course</label>
                <select name="course">
                            <option value="0" selected disabled>Course</option>
                            <option value="BCS">BCS</option>
                            <option value="BIT">BIT</option>
                            <option value="BBIT">BBIT</option>
                            <option value="BMS">BMS</option>
                            <option value="BSC">BSC</option>
                            <option value="BMS">BMS</option>
                            <option value="BDS">BDS</option>
                            <option value="BCFF">BCFF</option>
                            <option value="BMC">BMC</option>
                            <option value="BED">BED</option>
                        </select> <class="input-group <?php echo (!empty($course_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $course; ?>">
                <span class="invalid-feedback"><?php echo $course_err; ?></span>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder= "Enter Password"class="input-group <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="input-group">
                <input type="password" name="confirm_password" placeholder= "Confirm password" class="input-group <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="input-group">
                <input type="submit" class="btn" value="Submit">
            </div>
            <div class="input-group">
                <input type="reset" class="btn"" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>
