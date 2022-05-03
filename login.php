<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.html");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$regno = $password = "";
$regno_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if regno is empty
    if(empty(trim($_POST["regno"]))){
        $regno_err = "<p style='color:red'>Please enter regno.</p>";
    } else{
        $regno = trim($_POST["regno"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "<p style='color:red'>Please enter your password.</p>";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($regno_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, regno, password FROM attendance WHERE regno = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_regno);
            
            // Set parameters
            $param_regno = $regno;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if regno exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $regno, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["regno"] = $regno;                            
                            
                            // Redirect user to welcome page
                            header("location: index.html");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "<p style='color:red'>Invalid regno or password.</p>";
                        }
                    }
                } else{
                    // regno doesn't exist, display a generic error message
                    $login_err = "<p style='color:red'>Invalid regno or password.</p>";
                }
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

	<link rel="stylesheet" type="text/css" href="login.css">
    <title>Login Form - Pure Coding</title>
</head>
<body>
    <div class="container">

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <label></label>
                <input type="text" name="regno" placeholder="Registration Number "class="input-group <?php echo (!empty($regno_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $regno; ?>">
                <span class="invalid-feedback"><?php echo $regno_err; ?></span>
            </div>    
            <div class="input-group">
                <label></label>
                <input type="password" name="password" placeholder="Password"class="input-goup <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="input-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>
