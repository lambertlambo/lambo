<!DOCTYPE html>
<html lang="en">
<head>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise 1</title>
    <style>
       .one{
        margin-left: 500px;
        border: 2px solid green;
        width: fit-content;
        height: 400px;
       }
       a{
        margin-left: 30px;
        text-decoration: none;
    }
       .links{
        border: 1px solid black;
        margin-top: 5px;
        background-color: black;
       }
       .two{
        width: 40px;
        border: 3px solid black;
        margin-top: 10px;
        height: 90px;
        width: 110px;
        margin-left: 20px;
       }
       .two_{
        width: 40px;
        border: 3px solid black;
        margin-top: 10px;
        height: 90px;
        width: 250px;
        margin-left: 20px;
        font-size: 17px;
       }
       .all{
        display: flex;
       }
       h6{
        margin-top: 0px;
       }
       ._1{
margin-left: 20px;
       }
       .total{
        margin-top: 20px;
        display: flex;
        margin-left: 5px;
       }
       img{
        margin-left: 8px;
       }
       span::after{
        content: '';
        animation-name: change;
       }
       .create a{
        animation-name: create;
        animation-iteration-count: infinite;
        animation-duration: 5s;
        animation-delay: 2s;
       }
       @keyframes create {
        0%{
         color:blue;   
        }
        45%{
            color:aqua;
            margin-left:40px;
        }
        100%{
            color:yellowgreen;
            margin-left:60px;

        }
       }
       h4{
        margin-left:30px;

       }
    </style>
</head>
<body>
            <div class="one">
                <div class="links">
            <a href="forma.html">Home</a>
            <a href="photos.html">Gallery</a>
            <a href="About us.html">About us</a>
            <a href="About us.html">Help</a>
            <a href="About us.html">Contact Us</a>
        </div>
        <div class="all">
        <div class="two">
<h6>
    Software development refers to a set of computer science activities dedicated to the process.
</h6>
        </div>
        <div class="two_">
<h6>
    Software development refers to a set of computer science activities dedicated to the process of creating, designing, deploying and supporting software. Software itself is the set of instructions or programs that tell a computer what to do. It is independent of hardware and makes computers programmable.
</h6>
        </div>
    </div>
    <div class="total">
        <div class="_1">
<img src="Screenshot 2023-02-03 181418.jpg" alt="image 1" width="110px">
        </div>
        <div class="_2">
<img src="Screenshot 2023-02-22 100809.jpg" alt="image 2"  width="110px" height="110px">
        </div>
        <div class="_3">
            <img src="WA-IMG-20220813-35abbf88.jpg" alt="image 2"  width="110px" height="110px">
        </div>
    </div> <div>
        <h2 class="create">
          <a href="form.php"><h4 class="animate__animated animate__bounce">Create account</h4> <span></span></a>
        </h2>
    </div>
        </div>
   
</body>
</html>