<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style3.css">
<title>Registration System Panel</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Register Panel</header>
            <form action="" method="POST">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <br>

            <div class="form-group">
            <!-- Radio buttons for gender selection -->
            <lable>Sex.</label>
                    <lable for="Gender">Female</lable>
             <input type="radio" id="Female" name="Sex" value="Female" placeholder="#" required>

             <lable for="Gender">Male</lable>
             <input type="radio" id="Male" name="Sex" value="Male" placeholder="#" required>
             
             <lable for="Gender">Other</lable>
             <input type="radio" id="other" name="Sex" value="other" placeholder="#" required>
                </lable>
            </div><br>



                <div class="field input">
                    <label for="amount">Amount</label>
                    <input type="number" name="amount" id="amount" autocomplete="off" required min="2000" max="#">
                </div>
               
                <div class="all">
                <div class="field input" required>
                    <label for="Accademic Completion">Accademic Start Year</label>
                    
                <!--    <input type="number" name="Start year" id="Start year" autocomplete="off" required Start year !="Last year"> -->
                <select name="Start_year" required class="select">
                        <option></option>
                    <option disabled>Select Your First Academic Year</option>
                    <option value=2012>2012</option>
                    <option value=2013>2013</option>
                    <option value=2014>2014</option>
                    <option value=2015>2015</option>
                    <option value=2016>2016</option>
                    <option value=2017>2017</option>
                    <option value=2018>2018</option>
                    <option value=2019>2019</option>
                    <option value=2020>2020</option>
                    <option value=2021>2021</option>
                    <option value=2022>2022</option>
                    <option value=2023>2023</option>
                    <option value=2024>2024</option>
                </select></label>
    </div>
    

    <div class="field input" required>
                    <label for="Last yeart">Academic Last year</label>
                  <!--  <input type="number" name="Last yea" id="Last year" autocomplete="off" required Last year !="Start year"> -->
                   <select name="Last_year" required class="select">
                        <option></option>
                    <option disabled>Select Your Last Academic Year</option>
                    <option value=2015>2015</option>
                    <option value=2016>2016</option>
                    <option value=2017>2017</option>
                    <option value=2018>2018</option>
                    <option value=2019>2019</option>
                    <option value=2020>2020</option>
                    <option value=2021>2021</option>
                    <option value=2022>2022</option>
                    <option value=2023>2023</option>
                    <option value=2024>2024</option>
                    <option value=2025>2025</option>
                    <option value=2026>2026</option>
                    <option value=2027>2027</option>
                </select></label>
            </div>
    
            </div>  
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" autocomplete="off" required>
                </div>


                <div class="field">
                    <input type="submit"class="btn"  name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="index.php">Login Now</a>
                </div>
                 
            </form>
       </div>
    </div>
</body>
</html>