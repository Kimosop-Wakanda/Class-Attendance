<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signup.css" />
    <link rel="stylesheet" href="signup.php">
    <title>Sign in & Sign up Form</title>
</head>

<body>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Registration Number" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="connecting.php" method="POST" class="sign-up-form">
                    <h2 class="title">Enroll</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Registration Number" name="regno" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="emailAddress" name="email" type="email" size="64" maxLength="64" required placeholder="xyz@gmail.com" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]
                        {1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" title="Please provide a valid email">

                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
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
                        </select>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="number" placeholder="ID Number" name="idno" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" required />
                    </div>
                    <input type="submit" class="btn" value="Sign up" name="submit" />
                    <p class="social-text">Or Enroll with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Not yet Enrolled ?</h3>
                    <p>
                        If you are a new student, you can enroll here. If logging in as a guest, use the school portal.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Already Enrolled ?</h3>
                    <p>
                        If you have are already enrolled, you can log in here.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="signup.js"></script>
</body>

</html>