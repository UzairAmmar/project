<?php
include("connection.php");
?>

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
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Leading Choices Gateways</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styling.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
        height: 60px;
        width: 100%;
    }
    
    label.logo {
        color: white;
        font-size: 30px;
        line-height: 60px;
        padding: 0 50px;
        font-weight: bold;
    }
    
    nav ul {
        float: right;
        margin-right: 20px;
    }
    
    nav ul li {
        display: inline-block;
        line-height: 75px;
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
            height: 100vh;
            background: #2c3e50;
            top: 80px;
            left: -100%;
            text-align: center;
            transition: all .5s;
        }
        nav ul li {
            display: block;
            margin: 50px 0;
            line-height: 30px;
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

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(odd){background-color: #f2f2f2}

th {
  background-color: #4c2f5e;
  color: white;
  font-size: small;
}
td{
    font-size: smaller;
}
</style>

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
  

    <table>
        <tr>
            <th>catID</th>
            <th>catDesc</th>
            <th>HolidayID</th>
            <th>HolidayTitle</th>
            <th>HolidayDescription</th>
            <th>HolidayDuration</th>
            <th>LocationID</th>
            <th>HolidayPrice</th>
            <th>LocationName</th>
            <th>Price</th>
        </tr>
    
<?php


// sql to create tables

/*
$sql = "DROP TABLE IF EXISTS `Admin`";

if ($conn->query($sql) === TRUE) {
    echo "Table Droped successfully";
  } else {
    echo "Error droping table: " . $conn->error;
  }
*/
$sql = "CREATE TABLE IF NOT EXISTS `Admin` 
( `Name` VARCHAR(50) NOT NULL , 
`price` VARCHAR(50) NOT NULL , 
`Duration` VARCHAR(50) NOT NULL , 
`Catagory` VARCHAR(50) NOT NULL , 
`Location` VARCHAR(50) NOT NULL , 
`Description` VARCHAR(500) NOT NULL ) 
 ENGINE = InnoDB";

if ($conn->query($sql) === TRUE) {
    //echo "Table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$sql = "DROP TABLE IF EXISTS `LCG_category`";

if ($conn->query($sql) === TRUE) {
   // echo "Table Droped successfully";
  } else {
    echo "Error droping table: " . $conn->error;
  }



$sql = "CREATE TABLE IF NOT EXISTS `LCG_category` (
  `catID` varchar(6) NOT NULL default '',
  `catDesc` varchar(30) default NULL,
  PRIMARY KEY  (`catID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
  //echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO `LCG_category` (`catID`, `catDesc`) VALUES
('c1', 'Luxury'),
('c2', 'Tour'),
('c3', 'Safari'),
('c4', 'Golf'),
('c5', 'Weddings'),
('c6', 'Walking'),
('c7', 'Opera')";


if ($conn->query($sql) === TRUE) {
   // echo "Data Inserted Successfully";
  } else {
    echo "Error: " . $conn->error;
  }

$sql = "DROP TABLE IF EXISTS `LCG_holidays`";
if ($conn->query($sql) === TRUE) {
   // echo "Table Droped successfully";
  } else {
    echo "Error droping table: " . $conn->error;
  }

$sql = "CREATE TABLE IF NOT EXISTS `LCG_holidays` (
  `holidayID` int(10) NOT NULL auto_increment,
  `holidayTitle` varchar(256) NOT NULL,
  `holidayDescription` varchar(256) default NULL,
  `holidayDuration` decimal(2) default NULL,
  `locationID` varchar(6) default NULL,
  `catID` varchar(6) default NULL,
  `holidayPrice` decimal(6,2) default NULL,
  PRIMARY KEY  (`holidayID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13;";
if ($conn->query($sql) === TRUE) {
   // echo "Table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  $sql = "INSERT INTO `LCG_holidays` (`holidayID`, `holidayTitle`, `holidayDescription`, `holidayDuration`, `locationID`, `catID`, `holidayPrice`) VALUES
  (1, 'Milaidhoo Island Maldives', 'This stunning small island sits in the remote Baa Atoll - the Maldive\'s only UNESCO World Biosphere Reserve that\'s inhabited by dolphins, manta rays and whale sharks, and known for its seriously swish but sensitively-designed resorts.', '7', 'l1', 'c1', '4356'),
  (2, 'Conrad Maldives Rangali Island', 'With luxurious villas and the chance to dine beneath the waves, this is a spectacular twin-island retreat. Conrad Maldives boasts the Maldives\' most iconic restaurant. Venture 16 feet below the ocean to dine at one of the world\'s most extraordinary venues.', '7', 'l2', 'c1', '2737'),
  (3, 'Baraza Resort & Spa', 'One of Zanzibar\'s premier boutique resorts, in an award-winning beach setting. Part of The Zanzibar Collection, Baraza is family-owned, and the authentic touches and personalised service add an extra something special.', '7', 'l3', 'c1', '2582'),
  (4, 'Colours of New England', 'Your adventures start and end in Boston, \'cradle of American liberty\', where sightseeing is made easy by the 2.5 mile long Freedom Trail, which leads you to 16 significant landmarks.', '11', 'l4', 'c2', '1999'),
  (5, 'Western Highlights', 'The highlights of San Francisco, LA, Las Vegas and San Diego (optional) take you on a delightfully well-trodden path; with their iconic sights and nearby national parks drawing in the West\'s best dining, shopping, and nightlife.', '12', 'l5', 'c2', '1765'),
  (6, 'Masai Explorer', 'This fantastic safari takes you to Kenya\'s premier wildlife reserves, from the stunning Rift Valley to the vast plains of the famous Masai Mara. Our only safari that travels north to Samburu and the famous Aberdares.', '10', 'l6', 'c3', '1929'),
  (7, 'A Taste of Kenya', 'An exciting lodge-based safari taking you from the foothills of Kilimanjaro to the dramatic Rift Valley lakes and the rolling plains of the world-famous Masai Mara Game Reserve.', '10', 'l6', 'c3', '1979'),
  (8, 'Dom Pedro Golf Offers', 'Dom Pedro Vilamoura Resort. playing at Vilamoura Pinhal,Vilamoura Millennium, Vilamoura Laguna and Vilamoura Old.', '5','l7', 'c4', '473'),
  (9, 'Top of the Rock Wedding - Deluxe', 'Wedding Welcome Pack. Pre wedding meeting and wedding assistance with wedding specialist. Outdoor scenic setting for up to 25 guests.', '5', 'l8', 'c5' ,'3491'),
  (10, 'Sorrento', 'Beautiful Sorrento is a magical place to marry, hugging the shores of the Neapolitan Riviera and staring at the imposing shape of Mount Vesuvius in the distance.', '7', 'l9', 'c5', '2268'),
  (11, 'A Coast of Many Colours', 'Walking holiday in the Algarve. This holiday takes you from the Algarve\'s honeyed, southern coast through its agricultural heartland and onwards to the wilder, western shores.', '7', 'l7', 'c6', '785'),
  (12, 'Verona Opera Festival', 'The atmospheric Roman amphitheatre in Verona provides a magnificent backdrop against which you can enjoy two wonderful operas. You will be sitting in numbered seats in the tiered section of the arena with good views of the stage.', '7', 'l10', 'c7', '1548');";
    if ($conn->query($sql) === TRUE) {
      //  echo "Data Inserted Successfully";
      } else {
        echo "Error: " . $conn->error;
      }


$sql = "DROP TABLE IF EXISTS `LCG_location`";
if ($conn->query($sql) === TRUE) {
   // echo "Table Droped successfully";
  } else {
    echo "Error droping table: " . $conn->error;
  }

$sql = "CREATE TABLE IF NOT EXISTS `LCG_location` (
  `locationID` varchar(6) NOT NULL default '',
  `locationName` varchar(40) default NULL,
  `country` varchar(40) default NULL,
  PRIMARY KEY (`locationID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
   // echo "Table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$sql = "INSERT INTO `LCG_location` (`locationID`, `locationName`, `country`) VALUES
('l1', 'Milaidhoo Island', 'Maldives'),
('l2', 'Rangali Island', 'Maldives'),
('l3', 'Zanzibar', 'Tanzania'),
('l4', 'Boston', 'USA'),
('l5', 'San Francisco', 'USA'),
('l6', 'Nairobi', 'Kenya'),
('l7', 'Algarve', 'Portugal'),
('l8', 'New York', 'USA'),
('l9', 'Sorrento', 'Italy'),
('l10', 'Verona', 'Italy')";

if ($conn->query($sql) === TRUE) {
   // echo "Data Inserted Successfully";
  } else {
    echo "Error: " . $conn->error;
  }
    ?>






   
    <?php
        $sql = "select C.catID , catDesc , holidayID , holidayTitle , holidayDescription , holidayDuration , H.locationID , holidayPrice, locationName , country from ((LCG_category C INNER JOIN LCG_holidays H ON C.catID = H.catID) INNER JOIN LCG_location ON H.locationID = LCG_location.locationID)";
        $result = $conn->query($sql);
    ?>

        <?php while($rows=$result-> fetch_assoc()) 
		{ 
		?> 
		<tr>
            <td><?php echo $rows['catID']; ?></td> 
            <td><?php echo $rows['catDesc']; ?></td> 
            <td><?php echo $rows['holidayID']; ?></td> 
		    <td><?php echo $rows['holidayTitle']; ?></td> 
            <td><?php echo $rows['holidayDescription']; ?></td> 
		    <td><?php echo $rows['holidayDuration']; ?></td> 
            <td><?php echo $rows['locationID']; ?></td> 
		    <td><?php echo $rows['holidayPrice']; ?></td> 
            <td><?php echo $rows['locationName']; ?></td> 
            <td><?php echo $rows['country']; ?></td> 
		    
		</tr> 
	<?php 
        }
         $conn-> close();
    ?> 
    </table>


</body>

</html>