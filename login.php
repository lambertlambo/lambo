<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .tres:after{
      content: '';
      animation-name: title;
animation-duration: 4s;
animation-iteration-count: infinite;
    }
    @keyframes title {
      0%{
        content:"Login";
        color:blue;
      }
      50%{
        content: "OR";
        color:aqua;
      }
      75%{
        color:burlywood;
        content:"Create Account";
      }
      100%{
        color:burlywood;
        content:"OR";
      }
    }
    .login-box{
      border: 2px solid black;
      border-top-color: aqua;
      border-left-color:blue;
      border-right-color: ;
      border-bottom-color: rgb(44, 146, 86);
      width: 300px;
      margin-left: 400px;
      margin-top: 40px;
      padding-left:50px;
      
    }
    input{
      line-height:1.5;
      margin-top:9px;
      font-family:cursive;
      font-weight:bolder;
      font-style:italic;
    }
    input:active{
      color:white;
      background:black;
    }
    button{
      margin-top:5px;
      margin-left:160px;
      color:whitesmoke;
      background: black;
      border-radius: 3px;
      width:90px;
      height:40px;
      margin-bottom:4px;
    }
  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontlab Login</title>
</head>
<body>
  <div class="login-box">
    <h2 class="tres"></h2>
    <form method='POST'>
      <div class="user-box">  <label for="">Firstname:</label>
        <input type="text" name="firstname" id="">
      
      </div>
      <div class="user-box">
        <label for="">Lastname:</label>
        <input type="text" name="lastname" id="">
      </div>
      <button type="submit" name="submit">
      login
      </button>
      <button type="submit" name="">
     <a href="form.php">signup</a>
      </button>
      </form>
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
if (isset($_POST['submit'])){

$username=$_POST['firstname'];
$password=$_POST['lastname'];

$sql="SELECT * FROM work1 WHERE firstname='$username' AND lastname='$password'";
$qeury=mysqli_query($conn,$sql);
$run=mysqli_fetch_array($qeury);

if($run==true){
      echo "<script>
    alert('login successful');
   window.location.href='hello.php';
   </script>";
}
else{

    echo "<script>
    alert('incorrect details');
    window.location.href='login.php';
    </script>";
}

}
?>
</body>
</html>