<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table{
            color: whitesmoke;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width:100%;
       background:black;

        border-radius:4px;
    
        }
        th:hover{
            color:cyan;
            background:white;
            transition: 2s ease-in-out;
        }
        th{
            font-style: oblique;
            font-weight: bolder;
            font-family: Times;
            color:white;
            background:black;
            border-radius:40px;
            text-transform: uppercase;
            height:30px;
        }
        td{
            font-weight: bold;
            font-family: cursive;
        }

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<table border="2">
<tr>
    <!-- <td>id</td> -->
<th>firstname</th>
<th>lastname</th>
<th>gender</th>
<th>email</th>
<th>phone number</th>
<th>Address</th>
</tr>
    <?php
$host = 'localhost';
$username ='root';
$password = 'lamboert1201921654';
$database = 'work';
$conn = mysqli_connect($host,$username,$password,$database);
// if(!$conn){
//     echo "connection failed";
// }
// else{
//     echo "successful connected";
// }
    ?>
    <?php
    $sql = "SELECT * FROM work1";
    // $id = 1;
    $query = mysqli_query($conn,$sql);
    while($one = mysqli_fetch_array($query)){
        ?>
        <tr>
            <!-- <td><?php echo $id;?></td> -->
            <td><?php echo $one['firstname'];?></td>
            <td><?php echo $one['lastname'];?></td>
            <td><?php echo $one['gender'];?></td>
            <td><?php echo $one['email'];?></td>
            <td><?php echo $one['numberr'];?></td>
            <td><?php echo $one['addresss'];?></td>
        </tr>
        <?php
// $id++;
    }
    ?>
    </table>
    <a href="form.php">Sign up</a>
</body>
</html>