<?php
 session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>V Stand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <style>
        .navbar-inverse {
            background-color: #003049;
            border-color: #003049;
        }


        .navbar {
            border-radius: 0px;
        }

        .navbar-inverse .navbar-nav>li>a {
            color: #fff;
        }

        .navbar-inverse .navbar-brand {
            color: #fff;
        }

        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:focus,
        .navbar-inverse .navbar-nav>.active>a:hover {
            color: #fff;
            background-color: #d62828;
        }

        .material-icons {
            font-size: 100px;
            border-radius: 50%;
            border-spacing: 3px 10px;
            border: 3px solid #fc9d03;




        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="user_home.php">V Stand</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">


                    <li><a href="user_carpenter.html">Carpenter</a></li>
                    <li><a href="user_plumber.html">Plumber</a></li>
                    <li><a href="user_electrician.html">Electrician</a></li>
                    <li><a href="user_maid.html">Maid/Cook</a></li>


                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="" style="background-image: url(Images/bglogin.jpg);height: 100%;width: 100%;  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;">



            <div claass="container">
                <div class="row">
                    <div class="col-xs-4">


                    </div>
                    <div class="col-xs-4">
                        <?php

                       
                        $un = $_SESSION["un"];

                        //echo $_SESSION["un"];

                        include 'config.php';


                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM user WHERE uname= '$un' ";
                        $result = $conn->query($sql);

                        if ($result) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo  "
                            <form>

                            <div class='form-group'>
                            <label >Firstname</label>
                            <input type='text'  class='form-control' value='" . $row['fname'] . "'/>
                            </div>

                            <div class='form-group'>
                            <label >Lastname</label>
                            <input type='text'  class='form-control' value='" . $row['lname'] . "'/>
                            </div>


                            
                            <div class='form-group'>
                            <label >Phone</label>
                            <input type='text'  class='form-control' value='" . $row['phone'] . "'/>
                            </div>

                            
                            <div class='form-group'>
                            <label >Username</label>
                            <input type='text'  class='form-control' value='" . $row['uname'] . "'/>
                            </div>

 
                            <div class='form-group'>
                            <label >password</label>
                            <input type='text'  class='form-control' value='" . $row['pass'] . "'/>
                            </div>
 
                            <div class='form-group'>
                            <label >Address</label>
                            <input type='text'  class='form-control' value='" . $row['address'] . "'/>
                            </div>
 
                            <div class='form-group'>
                            <label >Locality</label>
                            <input type='text'  class='form-control' value='" . $row['locality'] . "'/>
                            </div>
 
                            <div class='form-group'>
                            <label >City</label>
                            <input type='text'  class='form-control' value='" . $row['city'] . "'/>
                            </div>
 
                            <div class='form-group'>
                            <label >State</label>
                            <input type='text'  class='form-control' value='" . $row['state'] . "'/>
                            </div>
 
                            <div class='form-group'>
                            <label >Pincode</label>
                            <input type='text'  class='form-control' value='" . $row['pin'] . "'/>
                            </div>

                            <button type='submit' name='submit' class='btn btn-primary form-control'><b>Edit
                            </b></button>
                            </form>
                            ";
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>





                    </div>
                    <div class="col-xs-4">


                    </div>
                </div>
            </div>





        </div>



    </div>

</body>

</html>