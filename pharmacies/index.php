<?php
$bdd=new PDO('mysql:host=localhost;dbname=inscrit','root','');
if(isset($_POST['commander']))
{
    
    $email=htmlspecialchars($_POST['email']);
    $user=$bdd->prepare('SELECT * FROM user WHERE email=?');
    $user->execute(array($email));
    $rb=$user->rowCount();
    if($rb==1)
    {
           $eurreur="success";
            
    }
    else{
        $eurreur="you need to create an account";
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website design </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>
    <nav>
        <div class="logo">
            <i class="fa-solid fa-heart-pulse"></i>
            <h1>Tunicare</h1>
        </div>
        <div class="onglets">
        
           <a href="/Acceuil.html">Home</a>
            <a href="/Acceuil.html">About</a>
            <a href="/Acceuil.html">services</a>
            <a href="/Acceuil.html">Team</a>
            <a href="/contact/index.html"><button>Contact</button></a>
            <a href="/Login saif/index.php"><button>Login</button></a>
        
        </div>
    </nav>
   
</header>
<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="insurance-animate (1).svg" alt="">
    </div>

    <div class="content">
        <h3>stay safe, stay healthy</h3>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->
<section class="services" id="services">

    <h1 class="heading"> <span>choix de l'horaire</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="soleil.jpg" style="width: 60px;">
            <h3>jour</h3>
            <p>de 8h-17h</p>
        </div>

        <div class="box">
            <img src="moon.png" style="width: 60px;">
            <h3>nuit</h3>
            <p>A partir de 19:30h</p>
        </div>

    </div>

</section>

<section class="icons-container">

    <div class="icons">
        <img src="tuni.jpg" style="width: 60px;">
        <h3>tunis</h3>
        <a href="pharmacie tunis.html">enter</a>
    </div>

    <div class="icons">
        <img src="tuni.jpg" style="width: 60px;">
        <h3>ben arous</h3>
        <a href="pharmacie ben arous.html">enter</a>
    </div>

    <div class="icons">
        <img src="tuni.jpg" style="width: 60px;">
        <h3>ariana</h3>
        <a href="pharmacie ariana.html">enter</a>
    </div>

    <div class="icons">
        <img src="tuni.jpg" style="width: 60px;">
        <h3>manouba</h3>
        <a href ="pharmacie la manouba.html">enter</a>
    </div>

</section>

<!-- icons section ends -->

<!-- services section starts  -->



<!-- about section ends -->

<!-- doctors section starts  -->



<!-- doctors section ends -->

<!-- booking section starts   -->

<section class="book" id="book">

    <h1 class="heading"> <span>commander </span> medicament</h1>    

    <div class="row">

        <div class="image">
            <img src="online-doctor-animate (1).svg" alt="">
        </div>

        <form action="" method ="post">
            <h3>choisir la quantité</h3>
            <input type="text" name="nmedicament"placeholder="nom du medicament" class="box" required="">
            <input type="number" name="number" placeholder="la quantité" class="box" required="">
            <input type="email" name="email"placeholder="your email" class="box" required="">
            <input type="date" name="date" class="box">
            <div align="center">
                <?php
                      if(isset($eurreur))
                      {
                        echo "<font color=red>".$eurreur."</font>";
                      }
                      ?>

            </div>
            <input type="submit" name="commander"value="valider" class="btn" required="">
            <div class="env">

            </div>
            
                 

        </form>
        

    </div>

</section>

<!-- booking section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.png" alt="">
            <h3>AHmed mourdi</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text"></p>
        </div>

        <div class="box">
            <img src="image/pic-2.png" alt="">
            <h3>Nawres ben Dahou</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text"></p>
        </div>

        <div class="box">
            <img src="image/pic-3.png" alt="">
            <h3>Adem rahmen</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text"></p>
        </div>

    </div>

</section>

<!-- review section ends -->

<footer class="footer-distributed">
  
    <div class="footer-left">

      <h3>Tuni<span>care</span></h3>

      <p class="footer-links">
        <a href="/Benarous.php" class="link-1">Doctors</a>
        
        <a href="/hospital/index.html">Hospitals</a>
      
        <a href="index.php">Pharmacies</a>
      
       
      </p>

      <p class="footer-company-name">Tunicare © 2022</p>
    </div>

    <div class="footer-center">

      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Campus Universitaire de la Manouba</span> - 2010 Tunisie</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p>+21626484496</p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@company.com">Send-Email</a></p>
      </div>

    </div>

    <div class="footer-right">

      <p class="footer-company-about">
        <span>About Tunicare</span>
        Tunisia has a very vast medical field full of <br>hospitals, pharmacies
        and doctors. to stay in good health each person must consult one of these 
        three places which are very important and which occupy an important place
        in tunisia
      </p>

      <div class="footer-icons">

        <a href="https://www.facebook.com/eya.chehoudi"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/florachehoudi/"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/eya-chehoudi-122887240/"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://github.com/Eya102"><i class="fa-brands fa-github"></i></a>

      </div>

    </div>

  </footer>



</section>























<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>