<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "Leading_choice_gateways";


$conn = mysqli_connect($server_name,$user_name,$password,$db_name);

if ($conn)
{
    //echo "connection Done!";
}
else
{
    echo "Connection Failed!".mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Leading Choice Gateways</title>
</head>

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
        height: 73px;
        width: 100%;
    }
    
    label.logo {
        color: white;
        font-size: 20px;
        line-height: 75px;
        padding: 0 50px;
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
            padding-left: 30px;
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
            height: 65vh;
            background: #2c3e50;
            top: 80px;
            left: -100%;
            text-align: center;
            transition: all .5s;
        }
        nav ul li {
            display: block;
            margin: 40px 0;
            line-height: 20px;
        }
        nav ul li a {
            font-size: 20px;
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
</style>

<style type="text/css">
    .form-style-5 {
        max-width: 800px;
        padding: 10px 15px;
        background: #f4f7f8;
        margin: 10px auto;
        padding: 13px;
        border-radius: 8px;
        font-family: Georgia, "Times New Roman", Times, serif;
    }
    
    .form-style-5 fieldset {
        border: none;
    }
    
    .form-style-5 legend {
        font-size: 1.4em;
        margin-bottom: 8px;
    }
    
    .form-style-5 label {
        display: block;
        margin-bottom: 8px;
    }
    
    .form-style-5 input[type="text"],
    .form-style-5 input[type="date"],
    .form-style-5 input[type="datetime"],
    .form-style-5 input[type="integers"],
    .form-style-5 input[type="number"],
    .form-style-5 input[type="search"],
    .form-style-5 input[type="time"],
    .form-style-5 input[type="url"],
    .form-style-5 textarea,
    .form-style-5 select {
        font-family: Georgia, "Times New Roman", Times, serif;
        background: rgba(255, 255, 255, .1);
        border: none;
        border-radius: 4px;
        font-size: 15px;
        margin: 0;
        outline: 0;
        padding: 6px;
        width: 100%;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        background-color: #e8eeef;
        color: #8a97a0;
        -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        margin-bottom: 20px;
    }
    
    .form-style-5 input[type="text"]:focus,
    .form-style-5 input[type="date"]:focus,
    .form-style-5 input[type="datetime"]:focus,
    .form-style-5 input[type="integers"]:focus,
    .form-style-5 input[type="number"]:focus,
    .form-style-5 input[type="search"]:focus,
    .form-style-5 input[type="time"]:focus,
    .form-style-5 input[type="url"]:focus,
    .form-style-5 textarea:focus,
    .form-style-5 select:focus {
        background: #d2d9dd;
    }
    
    .form-style-5 textarea {
        line-height: 8px;
    }
    
    .form-style-5 select {
        -webkit-appearance: menulist-button;
        height: 30px;
    }
    
    .form-style-5 .number {
        background: #1abc9c;
        color: #fff;
        height: 30px;
        width: 30px;
        display: inline-block;
        font-size: 0.8em;
        margin-right: 4px;
        line-height: 30px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
        border-radius: 15px 15px 15px 0px;
    }
    
    .form-style-5 input[type="submit"],
    .form-style-5 input[type="button"] {
        position: relative;
        display: block;
        border-radius: 20px;
        padding: 19px 39px 18px 39px;
        color: #FFF;
        margin: 0 auto;
        background: #1abc9c;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        width: 50%;
        border: 1px solid #16a085;
        border-width: 1px 1px 3px;
        margin-bottom: 8px;
        line-height: 8px;
    }
    
    .form-style-5 input[type="submit"]:hover,
    .form-style-5 input[type="button"]:hover {
        background: #109177;
    }
</style>
<script>
    $(document).ready(function() {
        $('#icon').click(function() {
            $('ul').toggleClass('show');
        });
    });
</script>

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
    <div class="form-style-5">
        <form action = ""  method = "POST">
            <fieldset>
                <legend><span class="number">1</span> Holiday Info</legend>
                <input type="text" name="field1" placeholder="Holiday Name">
                <input type="integers" name="field2" placeholder="Holiday Price">
                <textarea name="field3" placeholder=" Holiday Duration"></textarea>
                <label for="catagory">Holiday Catagory:</label>
                <select id="catagory" name="field4">
        <optgroup label="Holiday-catagory">
          <option value="Golf">Golf</option>
          <option value="Luxury">Luxury</option>
          <option value="Opera">Opera</option>
          <option value="Safari">Safari</option>
          <option value="Tour">Tour</option>
          <option value="Walkings">Walkings</option>
          <option value="Weddings">Weddings</option>
        </optgroup>
        </select>
            </fieldset>

            <fieldset>
                <label for="city">Locations:</label>
                <select id="job" name="field5">
    <optgroup label="Locations:">
        <option value="Algarve">Algarve</option>
        <option value="Boston">Boston</option>
        <option value="Milaidhoo Island">Milaidhoo Island</option>
        <option value="Nairobi">Nairobi</option>
        <option value="New York">New York</option>
        <option value="Rangali Island">Rangali Island</option>
        <option value="San Francisco">San Francisco</option>
        <option value="Sorrento">Sorrento</option>
        <option value="Verona">Verona</option>
        <option value="Zanzibar">Zanzibar</option>
      </optgroup>
    </select>
            </fieldset>

            <fieldset>
                <legend><span class="number">2</span> Holiday Description</legend>
                <textarea name="field6" placeholder="Description"></textarea>
            </fieldset>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>

</html>

<?php
if(isset($_POST['submit']))
{
	$hn = $_POST['field1'];
	$hp = $_POST['field2'];
	$hd = $_POST['field3'];
	$hc = $_POST['field4'];
	$hl = $_POST['field5'];
	$des = $_POST['field6'];

	if($hn!="" && $hp!="" && $hd!="" && $hc!="" && $hl!="" && $des!="")
	{

		$query = "insert into Admin values('$hn', '$hp', '$hd', '$hc', '$hl', '$des')";
		$data = mysqli_query($conn,$query);

		if($data)
		{
			//echo "Data inserted into Database...";

		}
	}	
	
	else
	{
		echo "Can't insert Data...". mysqli_error($conn);
	}
	
}




?>









