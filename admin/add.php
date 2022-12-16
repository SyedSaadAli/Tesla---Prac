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
         *{
            color:white;
            box-sizing: border-box;
          
        }
        body{
            background-color: black;
        }

        #logo{
         width:80px;   
        }
        #link{
            color:white;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;font-weight: 600;;
            padding:20px;
            font-size:17px;
        }
        #links{
            display: inline-block;
            position: relative;
            top:-20px;
            left:60%;
        }
        #main{
            text-align: center;
        }
        #mainimg{
            width:1190px;
            height:auto;
            position: relative;
            top:-150px
            
        }
        #name{
            font-size: 86px;
            color:white;
            font-family: 'Montserrat', sans-serif;
            z-index: 2;
            font-weight: 800;
        }
        #about{
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
            width:65%;
      position: relative;
      left:100px;
            margin: 0 auto;
            height:430px;
        }
        #aboutdesc{
            font-weight: 600;
            max-width: 550px;
            font-size: 16px;
        }
        #mainabout{
            font-size: 25px;
        }
        #right,#left{
display: inline-block;

height:430px;
        }
        #left{
            position: relative;
            top:-105px;
         
        }
        
    
        #our{
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 39px;
            text-align: center; 
        }
        #carsec{
            width:65%;
            height:auto;
            margin: 0 auto;
        }
       
        #car{
           display: inline-block;
           width:300px;
           height:350px;
           background-color: #2B2B2B;
           border-radius:15px ;
            margin:53px
        }
        #car p, #car button{
           
            text-align: center;
        }
        #carname{
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 27px;
        }
        #price{
            font-family: 'Montserrat', sans-serif;
            font-weight: 800; 
            font-size: 30px;
        }
        button{
            background-color: #CE0513;
            border:none;
            padding:15px;
            border-radius:5px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 19px;
            width:80%;
            height:auto;
          margin-left: 10%;
          cursor: pointer;
        }
        #product{
          width:300px;
          
           margin: auto;
            
            margin-top:-80px
        }
        #form{
            width:55%;
            height: auto;
            margin: 0 auto;
        }
        form{
           width:100%;
 
           

        }
        input,select{
width:100%;
padding:18px 50px;

margin:25px;
background-color: #181818;
border:none;
border-radius:10px ;
color:#C5C5C5;
font-size: 15px;
font-family: 'Montserrat', sans-serif;
            font-weight: 500;
        }
        #booktext{
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 54px;
            text-align: center;
        }
        ::placeholder{
            color:#C5C5C5;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
        }
        #formbutton{
            width:20%;
            height:auto;
            margin-left: 40%;
        }
        ::selection{
            color:#CE0513;
        }
        footer{
    width:100%;
    height:auto;
    background-color: #181818;
    margin:0 auto;
    border-radius: 10px;
    padding:20px;
    position: relative;
    top:50px;
}  
#section{
    display: inline-block;
    margin:45px;
}  
li{
    list-style-type: none;
    padding:15px;
    font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            cursor: pointer;
}
#mainlink{
    font-weight:700 ;
    font-size: 17px;
}
#logo2{
    display: inline-block;
    position: relative;
    left:-700px
}
#social li{

    cursor: pointer;
}
        @media only screen and (max-width: 1750px) {
#all{
    zoom:80%;
}





        }
       /* The media query for most tablets */
        @media only screen and (max-width: 750px)  {
#name{
    font-size: 50px;
}
#mainimg{
    width:700px;
    top:-70px;
}
#links{
    left:50px;
}
#header{
    margin: none;
}
#main{
    position: relative;
    top:20px;
}
#logo{
    width:60px
}#left{
    top:0px;
    left:-100px;
}
#right{
    position: relative;
    top:-300px;
  left:-200px
}
#formbutton{
    width:50%;
    margin-left: 30%;
}
#all{
    overflow: hidden;
}
#carsec{
    width:400px;
}
#left{
    position: relative;
   
}
#right{
    position: relative;
  
}

}
@media only screen and (max-width: 428px ) {

#logo{
    width:40px;
    position: relative;
    left:-10px;
  
}

#name{
    font-size: 40px;
}
#mainimg{
    width:500px;
    top:-40px;
    left:-50px;
}
#about{
    width:90%;
}
#aboutimg{
    width:400px;
}
#booktext{
    font-size: 40px;
}
#form{
    width:80%;
}
#left{
    left:-80px;
}
#right{
    left:-120px;
    margin-top:30px;
}
#section{
    margin:0px;
    display:inline-block;
    padding:0px;
    font-size: 9px;
}
#mainlink{
    font-size: 12px;
}
#social li{
    display:inline-block;
    margin: 0 auto;
    padding:15px;
}
#social{
    position: relative;
    left:20px
}
input,select{
    position: relative;
    left:-20px
}
#formbutton{
    position: relative;
    left:-20px 
}



}
.topnav {
  overflow: hidden;
  background-color: black;
       font-family: 'Montserrat', sans-serif;font-weight: 600;;
       font-size:17px;
       position: relative;
top:30px;
            width:80%;
            height:auto;
            margin: 0 auto;
       
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
 
    #myTopnav{
      width:100%;
  }
  
  #links{
  
  margin-top:20px;
  
  
  }
  .computer{
      display: none;
  }
  
  .phone{
      display: inline-block;
  }
  #logo2{
      display: inline-block;
      position: relative;
      left:-20px
  }
}


#myTopnav{
    position: relative;
    top:40px;
    z-index:3;
    
}


@media only screen and (max-width: 1024px ) and (min-width:430px){
   #links{
       left:500px
   }
   #name{
       font-size: 66px;
   }
   #mainimg{
       width:850px;
       margin-top: 10px;
   }
   #right{
       position: relative;
       top:-400px;
       left:-100px;
   }
   #carsec{
       position: relative;
       left:100px;
   }
}


        body{
            margin:0;
            padding:0;
            background-color: black;
            color:white;
            font-family: 'Montserrat', sans-serif;
        }
        #sidebar{
            width:15%;
            height:120vh;
background-color:#181818 ;
border-radius: 10px;
display: inline-block;
position: relative;
top:-350px


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
        input,select{
            width:100%;
padding:18px 50px;

margin:25px;
background-color: #181818;
border:none;
border-radius:10px ;
color:#C5C5C5;
font-size: 15px;
font-family: 'Montserrat', sans-serif;
            font-weight: 500;
        }
        #form{
            width:65%;
            margin: 0 auto;
            position: relative;
            top:130px
        }
        #booktext{
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 54px;
            text-align: center;
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

        <div id="form">
            <p id="booktext">BOOK NOW</p>
            <form action="code.php" method="post" enctype="multipart/form-data">
        
     <input type="file" name="image[]"  accept="image/*"><br>

     <!-- <input type="text" name="name" placeholder="Your Name..."><br> -->
     <!-- <select  id="model">
         <option value="">Model</option>
         <option value="">Tesla Model Y</option>
         <option value="">Tesla Model Z</option>
         <option value="">Tesla Model S </option>
     
     </select>
     <br>
     <select  id="color">
         <option value="">Color</option>
         <option value="">White</option>
         <option value="">Black</option>
         <option value="">Blue </option>
         <option value="">Red </option>
     
     </select>
     <br>
     <select  id="pay">
         <option value="">Payment Type</option>
         <option value="">Check</option>
         <option value="">Cash</option>
         <option value="">Card </option>
         <option value="">Loan</option>
     
     </select> -->
     <br>
     <button id="formbutton" name="upload">Upload Image</button>
            </form>
        </div>
        </div>
    </div>

    </div>
</body>
</html>

<?php

?>