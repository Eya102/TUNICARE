<?php
$bdd=new PDO('mysql:host=localhost;dbname=inscrit','root','');
if(isset($_POST['rendezvous']))
{
    $mail=htmlspecialchars($_POST['mail']);
    $name=htmlspecialchars($_POST['Name']);
    $Phone=htmlspecialchars($_POST['Phone']);
    $Doctorname=htmlspecialchars($_POST['Doctorname']);
    $Date=htmlspecialchars($_POST['Date']);
    $Message=htmlspecialchars($_POST['Message']);
  

        $user=$bdd->prepare('SELECT * FROM user WHERE email=?' );
        $user->execute(array($mail));
        $userexist=$user->rowCount();
        if($userexist==1)
        {
             $rendez=$bdd->prepare('INSERT INTO rendezvous(namee,mail,Phone,Doctorname,DateR,Mes) VALUES (?,?,?,?,?,?)');
             $rendez->execute(array($mail,$name,$Phone,$Doctorname,$Date,$Message));
             $eurreur="Success";
        }
        else{
            $eurreur="you need to create an account";
        }
    
}



?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    
</head>
<body>
  <a href="/Benarous.php" class="x"><i class="fa-solid fa-xmark"></i></a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="jquery3.js"></script>
<div class="popup">
 <div class="opening">
    <div class="po">
        <h4>Opening Time</h4>
        <i class="fa-solid fa-xmark"></i>
    </div class="Timing">
        <p>Monday<span><i class="fa-solid fa-clock-rotate-left"></i>    08:00 > 15:00</span></p> 
        <p>----------------------------------------------------------------------------------------------------------------------------------------------</p> 
        <p>Tuesday<span><i class="fa-solid fa-clock-rotate-left"></i>   08:00 > 15:00</span></p>       
        <p>-----------------------------------------------------------------------------------------------------------------------------------------------</p> 
        <p>Wednesday<span class="pi"><i class="fa-solid fa-clock-rotate-left"></i> 08:00 > 15:00</span></p> 
        <p>-----------------------------------------------------------------------------------------------------------------------------------------------</p> 
        <p>Thursday<span><i class="fa-solid fa-clock-rotate-left"></i>  08:00 > 15:00</span></p>       
        <p>-----------------------------------------------------------------------------------------------------------------------------------------------</p>
        <p>Friday<span class="pi2"><i class="fa-solid fa-clock-rotate-left"></i>    08:00 > 13:00</span></p> 
                                               
   </div>
</div>
<div>
    <img src="online-doctor-animate.svg" alt="">
</div>
<div class="form-style-3">
    <form action="" method="post">
    <fieldset>
    <legend>Personal</legend>
    <label for="Name"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="Name" value=""   required=""/></label>
    <label for="mail"><span>Email <span class="required">*</span></span><input type="email" class="input-field" name="mail" value="" required=""/></label>
    <label for="Phone"><span>Phone <span class="required">*</span></span><input type="text" class="input-field" name="Phone" value="" required=""/></label>
    <label for="Doctor-name"><span> Doctor Name<span class="required">*</span></span><input type="text" class="input-field" name="Doctorname" required=""></label>

    <label for="Date" ><span>Date</span><span><input type="date" name="Date" placeholder="D/M/Y" required=""></span></label>
    </fieldset>
    <fieldset><legend>Message</legend>
    <label for="Message"><span>Message <span class="required">*</span></span><textarea name="Message" class="textarea-field"></textarea></label>
    <label><span> </span><input type="submit" value="Send" name="rendezvous"/></label><br>
  
        
    
    </fieldset>
    <div align="center">
    <?php  
             if(isset($eurreur)) 
             {    
                echo "<font color=white>".$eurreur."</font>";
             }
             
        ?>
    </div>

    </form>
   
    
    <fieldset>
         <button>Opening Time</button>
    </fieldset>
</div>
</body>
</html>