

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
     <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
    <?php 
session_start();
    include("navbar.php");
	include("db.php");
	include("function.php");

	// $user_data = check_login($con);

?>

   <section class="intro-container">
         <div class="intro-container__left"> 
               <p class="intro-container__Left-title">lets start your careers here!</p>
              <h2 class="intro-container__Left-body" >Looking for a career <br> change? Browse our job<br> listings now!</h2>
              <p>Mus vehicula dignissim quis si lorem libero cras pulvinar orci dapibus.<br> Sagittis quisque orci pretium donec elit platea porta integer maecenas risus lobortis.</p>
              <div class="client">
                 <img src="./assets/happy client.png" alt="">
                 <p>540 K+ Member Active</p>
              </div>
              <a class="browse-job" href="">BROWSE JOB</a>
         </div>
         <div class="intro-container__right">
                    <img class="idol-picture" src="./assets/idol.png" alt="">
         </div>
   </section>
    <section class="entry-container">
            <div class="entry-container__content">
                   <div class="entry-item animate__animated animate__slideInUp">
                           <img  class ="entry-icon" src="./assets/hard-hat.png" alt="">
                           <h2>Talents Agency</h2>
                           <p class="entry-content">Facilisi etiam consectetur mi nibh bibendum posuere ultricies cubilia donec potenti si</p>
                   </div>
                   <div id="mid-entry" class="entry-item animate__animated animate__slideInUp">
                           <img  class ="entry-icon" src="./assets/resume.png" alt="">
                           <h2>Portal job</h2>
                           <p class="entry-content">Facilisi etiam consectetur mi nibh bibendum posuere ultricies cubilia donec potenti si</p>
                   </div>
                   <div  class="entry-item animate__animated animate__slideInUp">
                           <img  class ="entry-icon" src="./assets/group.png" alt="">
                           <h2>Careers Coaching</h2>
                           <p class="entry-content">Facilisi etiam consectetur mi nibh bibendum posuere ultricies cubilia donec potenti si</p>
                   </div>
            </div>
     
    </section>

    <section>
             
    </section>

	  
</body>
</html>