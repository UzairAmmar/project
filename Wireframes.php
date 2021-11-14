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
    
    .header {
        background-color: rgb(180, 178, 178);
        padding: 20px;
        text-align: center;
        height: 120px;
    }
    
    .n {
        overflow: hidden;
        background-color: rgb(0, 0, 0);
        height: 70px;
    }
    
    .n a {
        float: right;
        display: block;
        color: #fdfdfd;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    .n a:hover {
        background-color: #ddd;
        color: rgb(255, 2, 2);
    }
    
    .foot {
        background-color: rgb(158, 133, 133);
        padding: 10px;
        text-align: center;
        height: 30px;
    }
    
    .column {
        background-color: rgb(180, 178, 178);
        width: auto;
        padding: 15px;
        height: 337px;
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

    <div class="header">
        <h1>Header</h1>
    </div>

    <div class="n">
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
    </div>

    <div class="column">
        <h2>Column</h2>
        <p>Whatever your advantage, we can incorporate it into your vacation, making it the sole center, or essentially one component of a more drawn out trip – it's up to you. We've part a portion of our expert subjects into classifications beneath, or
            you can peruse all expert occasions. On the other hand, contact our movement experts for additional thoughts and data.</p>
    </div>
    <div class="foot">
        <p>Footer</p>
    </div>

</body>

</html>
