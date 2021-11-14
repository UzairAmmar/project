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
    .aboutus {
    width: 600px;
    color: rgb(194, 122, 15);
    padding: 5px;
    position: absolute;
    height: 100px;
    top: 30%;
    left: 40%;
    transform: translate(-50%, -50%);
}
footer {
    text-align: center;
    padding: 10px;
    color: rgb(0, 0, 0);
    background-color: rgb(158, 133, 133);
}
        section {
            background: url(bg1.jpg) no-repeat;
            background-size: cover;
            height: calc(100vh - 80px);
        }
    </style>

    <script>
        $(document).ready(function() {
            $('#icon').click(function() {
                $('ul').toggleClass('show');
            });
        });
    </script>
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

    <div class="aboutus">
        <h1>About US</h1>
        <p>The Leading Choice Gateways wants to plan your holidays for you and provide you the best comforts of life.</p>
    </div>
    <section></section>
    <footer>
        <a>© All rights reserved. Leading Choice Gateways </a></p>
    </footer>

</body>

</html>
