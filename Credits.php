<!DOCTYPE html>
<html lang="en">

<head>
    <title>Leading Choice Gateways</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        nav {
            background: #4c2f5e;
            height: 80px;
            width: 100%;
        }
        
        label.logo {
            color: white;
            font-size: 20px;
            line-height: 75px;
            padding: 0 70px;
            font-weight: bold;
        }
        
        nav ul {
            float: right;
            margin-right: 20px;
        }
        
        nav ul li {
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
        }
        
        nav ul li a {
            color: white;
            font-size: 17px;
            padding: 7px 13px;
            border-radius: 3px;
            text-transform: uppercase;
        }
        
        a.active,
        a:hover {
            background: #1b9bff;
            transition: .5s;
        }
        
        .checkbtn {
            font-size: 30px;
            color: white;
            float: right;
            line-height: 80px;
            margin-right: 40px;
            cursor: pointer;
            display: none;
        }
        
        #check {
            display: none;
        }
        
        @media (max-width: 952px) {
            label.logo {
                font-size: 20px;
                padding-left: 50px;
            }
            nav ul li a {
                font-size: 16px;
            }
        }
        
        @media (max-width: 858px) {
            .checkbtn {
                display: block;
                font-size: 20px;
            }
            ul {
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #2c3e50;
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;
            }
            nav ul li {
                display: block;
                margin: 45px 0;
                line-height: 30px;
            }
            nav ul li a {
                font-size: 15px;
            }
            a:hover,
            a.active {
                background: none;
                color: #0082e6;
            }
            #check:checked~ul {
                left: 0;
            }
        }
        
        section {
            background-size: cover;
            height: calc(100vh - 80px);
        }
    </style>

    <style>
        body {
            margin: 0;
        }
        
        .foot {
            background-color: rgb(158, 133, 133);
            padding: 10px;
            text-align: center;
            height: 50px;
        }
        
        .column {
            background-color: rgb(180, 178, 178);
            width: auto;
            padding: 20px;
            height: 505px;
            font-family: cursive;
        }
        
        .column h2 {
            margin-top: 20px;
        }
        
        .column p {
            margin-top: 10px;
            padding: 20px;
        }
        
        .column li {
            margin-top: 20px;
            font-size: large;
        }
    </style>


</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
        <label class="logo">Leading Choice Gateways</label>
        <ul>
        <li><a class="active" href="index.php">Home</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="Credits.php">Credits</a></li>
            <li><a href="holidays.php">View Holidays</a></li>
            <li><a href="Wireframes.php">Wireframes</a></li>
        </ul>
    </nav>


    <div class="column">
        <h2>OverView</h2>
        <p>
            Used a range of HTML tags to creat a navigation bar and navigation icons. Created A Home Page that is the main page of LEADING CHOICE GATEWAYS. Then created an Admin page in this page Admin of the GATEWAYS can put Details of any new holiday. A viw Holiday
            Page is created for users and viseters of the website so that they can see wha type of facilities they are provided with. Credits Page shows The working done to creat the Website. And at last wire Frames shows the main view of Home Page of
            Website in Full screnn display and mini screen display. The Amin page is connected with the Database so that when admin puts details of new holiday it is added to the Database
        </p>
        <h2>Special Thanks To</h2>
        <li> <a href="https://www.youtube.com/">YouTube</a></li>
        <li>
            <a href="https://www.w3schools.com/">W3schools</a></li>
    </div>
    <div class="foot">
    <a>© All rights reserved. Leading Choice Gateways </a></p>
    </div>

</body>

</html>
