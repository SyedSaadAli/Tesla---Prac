<?php
$connection = mysqli_connect('localhost','root','','tesla');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body{
            margin:0;
            padding:0;
            background-color: black;
            color:white;
            font-family: 'Montserrat', sans-serif;
        }
        #sidebar{
            width:15%;
            height:100vh;
background-color:#181818 ;
border-radius: 10px;
display: inline-block;


        }
        ul{
position: relative;

        }
        li{
            list-style-type: none;
            padding:20px;
            font-weight:700;
            font-size: 18px;
            transition: 1s;
            cursor: pointer;
        }
        li:hover{
            color:#CE0612;
        }
        svg{
            padding:15px;
            position: relative;
            top:18px
        }
        #logo2{
position: relative;
top:10px;
left:50px
        }
        #rest{
            display: inline-block;
            width:82%;
        }
        table{
            border:2px solid #9EA0A9;
            border-collapse: collapse;
            width:40%;
            margin: 0 auto;
        }
        th,td{
            padding:20px;
            border:2px solid #9EA0A9;
            border-collapse: collapse;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="all">
    <div id="sidebar">
        <ul>
            <li id="logo2"><img id="logo" width="80px" class="phone" src="/realTeslaLogo.png" alt=""></li>
            <li> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9EA0A9" class="bi bi-bag-fill" viewBox="0 0 16 16">
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
              </svg>Car Orders</li>
            <li> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9EA0A9" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
              </svg> Add Cars </li>

        </ul>
    </div>

    <div id="rest">
<table>
    <tr>
        <th>Id #</th>
        <th> Name </th>
        <th> Model</th>
        <th>Color</th>
        <th>Payment</th>
        <th>EDIT</th>
    </tr>
<?php
$query = "SELECT * FROM book_now";
$query_run = mysqli_query($connection,$query);

if(mysqli_num_rows($query_run) > 0){
    while(($row = mysqli_fetch_assoc($query_run))){


?>
    <tr>
        <td><?php echo $row['Book_ID']; ?></td>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Model']; ?></td>
        <td><?php echo $row['Color']; ?></td>
        <td><?php echo $row['Payment_Type']; ?></td>
      
        <form action="update_car_orders.php" method="post">

        <input type="hidden" name="book_id" value=<?php echo $row['Book_ID']; ?> >
        <input type="hidden" name="name" value=<?php echo $row['Name']; ?> >
        <input type="hidden" name="model" value=<?php echo $row['Model']; ?> >
        <input type="hidden" name="color" value=<?php echo $row['Color']; ?> >
        <input type="hidden" name="payment" value=<?php echo $row['Payment_Type']; ?> ></button>
        <td><button type="submit" name="upd_btn" >Update</button></td>
    </form>
    </tr>
   <?php
       }
    }
   ?>
</table>
    </div>

    </div>
</body>
</html>

<?php 



?>