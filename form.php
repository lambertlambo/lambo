<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>account creation</title>
    <style> 
        header{
text-decoration: underline;
margin-left: 70px;
color: blueviolet;
font-family:  cursive;
        }
        #all{
border: 4px solid blue;
width: 400px;
height: 390px;
margin-left: 400px;
border-top-color: blue;
border-left-color: green;
border-left-color: aqua;
border-right-color: purple;
border-width: 10px;
border-radius: 3px;
        }
        button{
            margin-left: 40px;
            margin-top: 40px; 
            width: 90px;
            height: 30px;
            color: blue;
            background-color: darkcyan;
            border-radius: 20px;
            }
            button:hover{
                color:white;
                width: 100px;
                background-color: black;
                border-radius: 30px;
                transition: 3s ease-out;
                animation-name: button;
                animation-duration: 5s;
                animation-iteration-count: 3;
                animation-delay: 2s;
            }
            @keyframes button {
           0%{
            color: teal;
            transition: 1s ease-in;
            background-color: blue;
           }   100%{
    color:coral;
    background-color: rebeccapurple;
           }  
            }
            label{
                color:blue;
                padding-left: 30px;
                font-style: oblique;
                font-weight: bolder;
            }
            input{
line-height: 1.2em;
margin-top: 2px;
            }
            input[type=email]{
                margin-left: 29px;
            }
            input[type=checkbox]{
                margin-left: 29px;
            }
           .lastname input[type=text] {
            margin-left: 3px;
            margin-top: 6px;
            }
            input[type=number]{
                width: 140px;
            }
            ::placeholder{
                color: yellow;
                font-weight: bolder;
                background-image: url("327448986_1884360448571738_9214305668478806223_n.jpg") ;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }
            #all{
                animation-name:body;
                animation-duration:5s;
                animation-iteration-count: infinite;
            }
            @keyframes body {
                0%{
border-top-color: blue;
border-left-color: green;
border-bottom-color: aqua;
border-right-color: purple;
 background-color: black;
                }
                20%{
                    background: url("Screenshot\ 2023-02-03\ 181418.jpg");
border-top-color: green;
border-left-color: blue ;
border-bottom-color:purple ;
border-right-color: aqua;
 }
50%{
 background:  url("WA-IMG-20220826-5cb2eeba.jpg");
 border-top-color: pink;
border-left-color: blue;
border-bottom-color: aqua;
border-right-color: purple;
                    }
                75%{
 background: url("Screenshot\ 2023-02-22\ 100809.jpg");
 background-repeat: no-repeat;
 border-top-color: purple;
border-left-color: indigo;
border-left-color: green;
border-right-color: fuchsia;
border-top-color: blue;
border-left-color: green;
border-left-color: aqua;
border-right-color: purple;
                }
                90%{
                    background:aqua; 
                }
            }
        u{
            text-decoration: none;
            color: red;
        }
            </style>
</head>
<body>
<form action="" method="POST"> 
    <div id="all">
        <header>
        <div class="header">
 <h2>CREATE ACCOUNT</h2>
</header>
<div class="username">
    <label for="firstname">
        First name:
    </label>
    <input type="text" placeholder="Firstname" name="firstname" id="name">
</div>
<div class="lastname">
    <label for="lastname">
        Last name:
    </label>
    <input type="text" placeholder="Lastname" name="lastname" id="name">
</div>
<div class="gender">
    <label for="gender">
        Gender
    </label>
    <input type="checkbox" name="gender" value="male"><u>Male</u>
    <input type="checkbox" name = "gender" value="female"><u>Female</u>
</div>
<div class="email">
    <label for="email">
        Email:
    </label>
    <input type="email" placeholder="Input your Email" name="email" id="email">
</div>
<div class="number">
    <label for="number"> 
        Phone Number
    </label>
        <input type="number"placeholder="Phone number" name="number" id="number">
</div>
<div class="Address">
    <label for="address">
        Address:
    </label>
    
    <input type="text" placeholder="Input your address" name="address" id="address" maxlength="100">
</div>

<button type="submit" name="btn"> Submit</a></button>
    </div>
</div>
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
        if(isset($_POST['btn'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $address = $_POST['address'];
$sql = "INSERT INTO work1(firstname,lastname,gender,email,numberr,addresss) VALUES('$firstname','$lastname','$gender','$email','$number','$address')";
if(mysqli_query($conn,$sql)){
    echo "<script>
    alert('You can now log in');
   window.location.href='login.php';
   </script>";
}
else{
echo "<script>
alert('Failed to register');
window.location.href='form.php';
</script>";
}
        }
        ?>

</body>
</html>