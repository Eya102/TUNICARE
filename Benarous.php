<?php
$bdd=new PDO('mysql:host=localhost;dbname=inscrit','root','');
if(isset($_POST['send']))
{
      $mail=htmlspecialchars($_POST['mail']);
      $consultation=htmlspecialchars($_POST['consultation']);
      $message=htmlspecialchars($_POST['message']);
      $req=$bdd->prepare('SELECT * FROM user WHERE email=?');
      $req->execute(array($mail));
      $userexist=$req->rowCount();
      if($userexist==1)
      {      
        $msg=$bdd->prepare('INSERT INTO dmessage(mail,consultation,msg) VALUES(?,?,?)');
        $msg->execute(array($mail,$consultation,$message));
        
        
               
      }
     
}




?>



<html lang="en">
<head>
    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tunicare</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="Doctors.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
      
</head>

    <header>
        <nav>
            <div class="logo">
                <i class="fa-solid fa-heart-pulse"></i>
                <h1>Tunicare</h1>
            </div>
            <div class="onglets">
            
            <a href="Acceuil.html">Home</a>
            <a href="Acceuil.html">About</a>
            <a href="Acceuil.html">services</a>
            <a href="Acceuil.html">Team</a>
            <a href="/contact/index.html"><button>Contact</button></a>
            <a href="/Login saif/index.php"><button>Login</button></a>
            
            </div>
        </nav>
       
    </header>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="jquery.js" ></script>


     
  <div class="gallery">
    
    <div class="photo">
      <div class="master">
        
        
        
        <img src="female-doctor-with-smart-glasses-touching-virtual-screen-medical-technology.jpg" alt="">
        
      </div>
      <div class="thum">
        <img class="selected" src="corona-4983590_1920.jpg" alt="">
        <img src="tunisia-flag-handsome-young-muscular-man-black-background.jpg" alt="">
        <img src="young-handsome-physician-medical-robe-with-stethoscope (1).jpg" alt="">
        
        
        <img src="surgery-1822458_1920.jpg" alt="">
        <img src="stethoscope-840125_1920.jpg" alt="">
      </div>
    </div>
    
</div>
  <section class="filter">
    <span class="filter-item active-filter" data-filter="All">All</span>
    
    <span class="filter-item " data-filter='General-Practitioner'>General-Practitioner</span>
    <span class="filter-item" data-filter='Dentist'>Dentist</span>
    <span class="filter-item" data-filter='psychiatrist'>psychiatrist</span>
    <span class="filter-item" data-filter='Cardiologist'>Cardiologist</span>
    <span class="filter-item" data-filter='Nutrisionist'>Nutrisionist</span>
    <span class="filter-item" data-filter='pediatrician'>pediatrician</span>
    <span class="filter-item" data-filter='Veterinarian'>Veterinarian</span>
    

  </section>
  <div class="popup">
    <div class="innerpopup">
      <div class="send">
           <p>Send Message</p>
           <i class="fa-solid fa-x"></i>
      </div>
      <img src="attached-files-animate.svg" alt="">
      <div class="M">
      <form action="Benarous.php" method="post">
      <label for=""><i class="fa-solid fa-mobile-screen"></i>Email</label><br>
      <input type="email" placeholder="Email" name="mail" required="" ><br>
      <label for="" class="cons"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Reason for consultation</label>
      <input type="text" placeholder="Reason for consultation" name="consultation" required=""><br>
      <label for=""><i class="fa-solid fa-message"></i> Message</label><br>
      <textarea name="message"  cols="30" rows="5" placeholder="Message" required=""></textarea><br>
      <p>By clicking «Send», you agree to the <span>terms and conditions</span> as well as the <span>privacy policy</span> of this website</p><br>
      <input type="submit" value="send"  name="send" class="hh">
      </form>
      </div>
      
    </div>
  </div>
  <section class="post container">
    <div class="fixed-menu">
      <i class="fa-solid fa-circle-plus"><p>States</p></i>
      <a class="ba" href="Benarous.php"><button>Ben arous</button></a><br>
      <a href="Tunis.html"><button>Tunis</button></a><br>
      <a href="Ariana.html"><button>Ariana</button></a><br>
      <a href="Mannouba.html"><button>Mannouba</button></a><br>
    </div>
    <!--post Box1-->
    <div class="post-box pediatrician">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/205078-mme-mariem-chargui-1640191280_4143_0658.jpg" class="post-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="category">pediatrician</h5>
              <h6>Mme Mariem CHARGUI  </h6>
              <a href=""><i class="fa-solid fa-location-dot"></i> Hammam Lif Ben arous Tunisia</a>
              <p class="card-text">sculpture et modelage de la silhouette par cryo-éléctrolipolaser médical.</p>
              <h3><i class="fa-solid fa-phone"></i> : 27610260</button><br></h3>
              <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
              <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
            </div>
          </div>
        </div>
      </div>
  </div>
    <!--post Box2-->
    <div class="post-box Dentist">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/211078_dr-khouloud-ben-salem_1650889194_2109.jpg" class="post-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="category">Dentist</h5>
              <h6>Dr Khouloud BEN SALEM</h6>
              <a href=""><i class="fa-solid fa-location-dot"></i> Rades Ben arous Tunisia</a>
              <p class="card-text">diplome national de docteur en medecine et diplome de formation en implantologie dentaire </p><br>
              <h3><i class="fa-solid fa-phone"></i> : 99092082</button><br></h3>
              <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
              <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!--post Box2-->
  <div class="post-box pediatrician">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/29561-dr-nejia-bellagha-1605267089_0104.jpg" class="post-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="category">pediatrician</h5>
            <h6>Dr Nejia BELLAGHA </h6>
            <a href=""><i class="fa-solid fa-location-dot"></i>Hamma Lif Ben arous Tunisia</a>
            <p class="card-text">Ancien interne des hôpitaux de Paris Specialiste en :Pediatrie Homéopathie.</p><br>
            <h3><i class="fa-solid fa-phone"></i> : 28891889</button><br></h3>
            <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
            <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
          </div>
        </div>
      </div>
    </div>
  
</div>
<!--post Box3-->
<div class="post-box General-Practitioner ">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/27190_dr-riadh-chtourou_1590022547.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">General-Practitioner</h5>
          <h6> Dr Riadh CHTOUROU</h6>
          <a href=""><i class="fa-solid fa-location-dot"></i> El Mourouj 3 Ben arous Tunisia</a>
          <p class="card-text">Doctorat en médecine Médecine de travail.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 54775263</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!--post Box4-->
<div class="post-box Dentist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/10189-dr-houcem-belgacem-1603721206_0736.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Dentist</h5>
          <h6>Dr Houcem BELGACEM</h6>
          <a href=""> <i class="fa-solid fa-location-dot"></i> Ezzahra Ben arous Tunisia</a>
          <p class="card-text">Diplôme de Docteur en Médecine Dentaire.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 54775263</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>

</div>
<!--post Box5-->
<div class="post-box General-Practitioner">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/16077-dr-jihene-ben-ammar-1646234289.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">General-Practitioner</h5>
          <h6>Dr Jihène BEN AMMAR </h6>
          <a href=""><i class="fa-solid fa-location-dot"></i>El Mourouj 1 Ben arous Tunisia</a>
          <p class="card-text">Docteur en Médecine Générale Médecin Esthétique.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 20969968</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
          
        </div>
      </div>
    </div>
  </div>

</div>
<!--post Box6-->
<div class="post-box pediatrician">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://cdn.med.tn/img/icon/img-f.svg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">pediatrician</h5>
          <h6>Dr Raja DEBBABI KRIFA</h6>
          <a href=""><i class="fa-solid fa-location-dot"></i> Hammam Lif Ben arous Tunisia</a>
          
          <p class="card-text">pédiatre et homéopathie.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 71437640</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>

</div>
<!--post Box6-->
<div class="post-box Nutrisionist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/209466-mme-olfa-baccari-kaddour-1643021648_5433_1106.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Nutrisionist</h5>*
          <h6>Mme Olfa BACCARI KADDOUR</h6>
          <a href=""><i class="fa-solid fa-location-dot"></i> El Mourjou 3 Ben arous Tunisia</a>
          <p class="card-text">Licence appliquée en nutrition humaine.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 29999971</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>

</div>
<!--post box 7 -->
<div class="post-box psychiatrist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/30268-dr-yousra-jemli-1593044602_4914.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">psychiatrist</h5>
          <h6>Dr Yousra JEMLI </h6>
          <a href=""><i class="fa-solid fa-location-dot"></i>El Mourouj 1 Ben arous Tunisia</a>
          <p class="card-text">Psychiatre _psychothérapeute Sexologue Addictologue.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 29999971</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!--post box8-->
  <div class="post-box Dentist">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/164467_dr-wajih-khelifi_1652953256_4932.jpg" class="post-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="category">Dentist</h5>
            <h6>Dr Wajih KHELIFI</h6>
            <a href=""><i class="fa-solid fa-location-dot"></i> Bou Mhel Ben arous Tunisia</a>
            <p class="card-text">diplôme national de docteur en médecine dentaire et certifié en orthodontie préventive et interception.</p><br>
            <h3><i class="fa-solid fa-phone"></i> : 97939330</button><br></h3>
            <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
            <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
          </div>
        </div>
      </div>
    </div>
</div>
<!--post box9-->
<div class="post-box Dentist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/27701_dr-mohamed-sassi-ben-amor_1590022547.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Dentist</h5>
          <h6>Dr Mohamed sassi BEN AMOR</h6>
          <a href=""><i class="fa-solid fa-location-dot"></i> Megrine Ben arous Tunisia</a>
          <p class="card-text">docteur en medecine dentaire.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 71434364</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--post box10-->
<div class="post-box General-Practitioner">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/30061-dr-hassen-souissi-1652443673_0826.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">General-Practitioner</h5>
          <h6>Dr Hassen SOUISSI</h6>
          <a href=""><i class="fa-solid fa-location-dot"></i> Borj Cedria Ben arous Tunisia</a>
          <p class="card-text">Diplôme en médecine générale CEC maladie professionnelle.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 98230465</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--post box11-->
<div class="post-box Veterinarian">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/206823_dr-hiba-kallel_1632843156.jpeg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Veterinarian</h5>
          <h6>Dr Aymen Barhouni</h6>
          <a href=""><i class="fa-solid fa-location-dot"></i> Nouvelle Medina Ben arous</a>
          <p class="card-text">Docteur en médecine vétérinaire.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 98705455</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--post box12-->
<div class="post-box General-Practitioner">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/164736-dr-ali-filali-1648138170.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">General-Practitioner</h5>
          <h6>Dr Ali Filali</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7421672,10.3075619"><i class="fa-solid fa-location-dot"></i>Ezzahra Ben arous Tunisia</a>
          <p class="card-text">Diplôme en médecine générale CEC maladie professionnelle.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 22976405</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--post box13-->
<div class="post-box Veterinarian">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/206734-dr-sabra-chargui-1645701020.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Veterinarian</h5>
          <h6>Dr Sabra CHARGUI </h6>
          <a href=""><i class="fa-solid fa-location-dot"></i> El Mourouj 3 Ben arous Tunisia</a>
          <p class="card-text">Diplôme National de Docteur en Médecine Vétérinaire de L'école de SIDI THABET.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 52766645</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--post box14-->
<div class="post-box Cardiologist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/10247_dr-mouna-el-mensi-chaabouni_1609185417.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Cardiologist</h5>
          <h6>Dr Mouna EL MENSI CHAABOUNI </h6>
          <a href=""><i class="fa-solid fa-location-dot"></i> Rades Ben arous Tunisia</a>
          <p class="card-text">Cardiologie.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 26238789</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Nutrisionist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/187731-mme-manel-arfaoui-1647369180.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Nutrisionist</h5>
          <h6>Mme Manel ARFAOUI</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7279498,10.2101658"><i class="fa-solid fa-location-dot"></i> EL Mourjou3 Ben arous Tunisia</a>
          <p class="card-text">Licence appliquée en Nutrition Humaine Mastère en Nutrition et Santé</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 21696142</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Cardiologist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/28801_dr-fathi-touihri_1590022548.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Cardiologist</h5>
          <h6>Dr Fathi TOUIHRI  </h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7552247,10.2232719"><i class="fa-solid fa-location-dot"></i> Ben arous Ben arous Tunisia</a>
          <p class="card-text">Cardiologue, Échographie doppler cardiaque Holter Tensionnel et Rythmique.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 71383222</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Cardiologist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/207193_dr-kais-sammoud_1621531133_1932.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Cardiologist</h5>
          <h6>Dr Kais SAMMOUD</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7205346,10.2163688"><i class="fa-solid fa-location-dot"></i> EL Mourouj 4 Ben arous Tunisia</a>
          <p class="card-text">Cardiologue diplômé de la faculté de médecine de Tunis et Ex interne des hôpitaux de Paris</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 79401290</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Veterinarian">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/210138_dr-omri-wafa_1648552425.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Veterinarian</h5>
          <h6>Dr Omri Wafa</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7096812,10.2049289"><i class="fa-solid fa-location-dot"></i> Mourouj 5 Ben arous Tunisia</a>
          <p class="card-text">Diplôme National de Docteur en Médecine Vétérinaire de L'école de SIDI THABET</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 27363737</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Dentist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/29806_dr-karim-yacoubi_1590022548.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Dentist</h5>
          <h6>Dr Karim YACOUBI </h6>
          <a href="google.com/maps/dir//36.7423736,10.249775/@36.7424243,10.3197348,12z"><i class="fa-solid fa-location-dot"></i> Nouvelle Medina Ben arous Tunisia</a><br>
          <p class="card-text">Chirurgien dentiste</p>
          <h3><i class="fa-solid fa-phone"></i> : 93205093</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Dentist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/212347_dr-malek-lagha_1651247340.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Dentist</h5>
          <h6>Dr Malek Lagha </h6>
          <a href="https://www.google.com/maps/dir//36.729286,10.335917/@36.7292875,10.4060371,12z"><i class="fa-solid fa-location-dot"></i> Hamma Lif Ben Arous Tunisia</a>
          <p class="card-text"> Spécialiste en Odontologie Conservatrice (faculte MDM).</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 93205093</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box psychiatrist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/209729_mme-nedia-ben-slama-chaouch_1643749351_0538.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">psychiatrist</h5>
          <h6>Mme Nedia Ben Slama </h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7763292,10.2311223"><i class="fa-solid fa-location-dot"></i> Megrine Ben arous Tunisia</a>
          <p class="card-text">Docteur en psychologie clinique et psychopathologie.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 96570576</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box psychiatrist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/203331-dr-wassila-barouni-1589033280.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">psychiatrist</h5>
          <h6>Mme Wassila Barouni</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7310934,10.3318844"><i class="fa-solid fa-location-dot"></i> Hammam Lif Ben arous Tunisia</a>
          <p class="card-text">Doctorat en psychologie clinique en Espagne et Master en thérapies comportementales et cognitives d´enfants.</p><br>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box pediatrician">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://cdn.med.tn/img/icon/img-f.svg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">pediatrician</h5>
          <h6>Dr Raja Debbabi Krifa</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7292,10.335885"><i class="fa-solid fa-location-dot"></i> Hammam Lif Ben arous Tunisia</a>
          <p class="card-text">pédiatre et homéopathie</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 71437640</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box pediatrician">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/205225_dr-marwa-barkallah-mouanaa_1613557955.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">pediatrician</h5>
          <h6>Dr Marwa Barkallah Mouanaa</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7410404,10.3033176"><i class="fa-solid fa-location-dot"></i> Ezzahra Ben arous Tunisia</a>
          <p class="card-text">diplôme de Docteur en médecine diplôme de spécialiste en Pédiatrie</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 20422221</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Dentist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/205225_dr-marwa-barkallah-mouanaa_1613557955.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Dentist</h5>
          <h6>Dr Imen Gtari</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.73114574494049,10.334857106208803"><i class="fa-solid fa-location-dot"></i> Hammam Lif Ben arous Tunisia</a>
          <p class="card-text">diplôme de Docteur en médecine diplôme de spécialiste en Pédiatrie</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 26922941</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box pediatrician">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://cdn.med.tn/img/icon/img-f.svg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">pediatrician</h5>
          <h6>Dr Fatma Marzouki</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7725026,10.2734862"><i class="fa-solid fa-location-dot"></i> Rades Ben arous Tunisia</a>
          <p class="card-text">Spécialiste En Pédiatrie Master en Homéopathie</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 71441412</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box psychiatrist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://cdn.med.tn/img/icon/img-f.svg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">psychiatrist</h5>
          <h6>Mme Fatma Marzouki</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7441398,10.3065519"><i class="fa-solid fa-location-dot"></i> Rades Ben arous Tunisia</a>
          <p class="card-text">Spécialiste En Pédiatrie Master en Homéopathie</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 71441412</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Cardiologist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/28801_dr-fathi-touihri_1590022548.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Cardiologist</h5>
          <h6>Doctor Fathi Touihri</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7552247,10.2232719"><i class="fa-solid fa-location-dot"></i> Ben arous Ben arous Tunisia</a>
          <p class="card-text">Cardiologue, Échographie doppler cardiaque Holter Tensionnel.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 71383222</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box pediatrician">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/19600-dr-afef-ben-salah-ben-hmida-1610454097_2147.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">pediatrician</h5>
          <h6>Dr Afef Ben Salah Ben Hmida</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.715132,10.2075254"><i class="fa-solid fa-location-dot"></i> El Mourouj5 Ben arous Tunisia</a>
          <p class="card-text">Pédiatre générale(Dermatologie Homéopathie et Allergologie).</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 71475017</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box psychiatrist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/188428_dr-asma-benzid-hassen_1590022548.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">psychiatrist</h5>
          <h6>Dr Asma Benzid Hassen</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7292,10.335885"><i class="fa-solid fa-location-dot"></i> Hammam Lif Ben arous Tunisia</a>
          <p class="card-text">Psychiatre - sexologue clinicienne - Addictologue.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 71239006</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Cardiologist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://cdn.med.tn/img/icon/img-m.svg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Cardiologist</h5>
          <h6>Dr Badii Jedaida</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.729478,10.335252"><i class="fa-solid fa-location-dot"></i> Hammam Lif Ben arous Tunisia</a>
          <p class="card-text">Cardiologue Ancien Assistant Hospitalo-Universitaire à l'Hôpital Militaire.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 79218251</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Dentist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://cdn.med.tn/img/icon/img-f.svg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Dentist</h5>
          <h6>Dr Selmi Amira</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7472848,10.3088692"><i class="fa-solid fa-location-dot"></i> Ezzahra Ben arous Tunisia</a>
          <p class="card-text">Médecin dentiste spécialiste en médecine et chirurgie buccales.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 55607188</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box General-Practitioner">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://cdn.med.tn/img/icon/img-m.svg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">General-Practitioner</h5>
          <h6>Dr Mahmoud Hichem Ben Smail</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7323203,10.2058491"><i class="fa-solid fa-location-dot"></i> El Mourouj1 Ben arous Tunisia</a>
          <p class="card-text">Medecine Générale Homeopathie.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 71363621</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Nutrisionist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/200702_mme-wahiba-haddad_1638788982.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Nutrisionist</h5>
          <h6>Mme Wahiba Haddad</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7430436,10.2980731"><i class="fa-solid fa-location-dot"></i> Ezzahra Ben arous Tunisia</a>
          <p class="card-text">Medecine Générale Homeopathie.</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 98631331</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Dentist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/14604_dr-chairat-faicel_1581697726_4427.jpeg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Dentist</h5>
          <h6>Dr Faycal Chairat</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7285022,10.3376919"><i class="fa-solid fa-location-dot"></i> Hammam Lif Ben arous Tunisia</a>
          <p class="card-text">diplômé en chirurgie dentaire .</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 98818566</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Dentist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/204447_dr-nahla-hermassi_1606733863_0052_4639.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Dentist</h5>
          <h6>Dr Nahla Hermassi</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.6905142,10.1633263"><i class="fa-solid fa-location-dot"></i> Fouchana Ben arous Tunisia</a>
          <p class="card-text">Diplôme de Docteur en Médecine Dentaire</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 28180394</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box Dentist">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/187072_dr-ahmed-musrati_1590022548.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">Dentist</h5>
          <h6>Dr Ahmed Musrati</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.7559617,10.2227116"><i class="fa-solid fa-location-dot"></i> Ben arous Ben arous Tunisia</a>
          <p class="card-text">Chirurgie dentaire et implantologie</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 23952201</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="post-box General-Practitioner">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://imagecdn.med.ovh/unsafe/130x130/filters:format(webp):quality(100):blur(0)/https://www.med.tn/uploads/offices/thumbnail/204312_dr-majed-hammami_1650647277.jpg" class="post-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="category">General-Practitioner</h5>
          <h6>Dr Majad Hammami</h6>
          <a href="https://www.google.com/maps?saddr&daddr=36.727895392972854,10.210118593082775"><i class="fa-solid fa-location-dot"></i> El Mourouj3 Ben arous Tunisia</a>
          <p class="card-text"> Diplôme de Spécialiste en Médecine de Famille/ Médecine d'urgence</p><br>
          <h3><i class="fa-solid fa-phone"></i> : 51405307</button><br></h3>
          <button class="mes"><i class="fa-solid fa-message"></i> Message</button>
          <a href="/Booknow/index.php"><button><i class="fa-solid fa-address-book"></i> Book Now</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
  
  </section>

  


 

<!--footer-->
  <footer class="footer-distributed">
  
        <div class="footer-left">
  
          <h3>Tuni<span>care</span></h3>
  
          <p class="footer-links">
            <a href="Benarous.php" class="link-1">Doctors</a>
            
            <a href="hospital/index.html">Hospitals</a>
          
            <a href="pharmacies/index.php">Pharmacies</a>
          
           
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
            and doctors. to stay in good health each person must consult one of<br> these 
            three places which are very important and <br>which occupy an important place
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
    
    
</body>   

</html>