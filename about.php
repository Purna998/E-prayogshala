<?php include "header.php"; ?>
<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
        <?php 
        $select = "SELECT * FROM about WHERE status=1";
        $result = mysqli_query($con, $select);
        $row = mysqli_fetch_assoc($result);
        ?>
         <h3><?= $row['title'];?></h3>
         <p><?php echo $row['description'];?> </p>
         <a href="courses.html" class="inline-btn">Our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+10k</h3>
            <p>online courses</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+40k</h3>
            <p>Brilliant students</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+2k</h3>
            <p>Expert tutors</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <p>Job placement</p>
         </div>
      </div>

   </div>

</section> 

<section class="reviews">

   <h1 class="heading">Student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo repudiandae, quam neque debitis odio quas magni expedita, tenetur rem nam libero quis facilis recusandae in temporibus qui dolore optio sequi?</p>
         <div class="student">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Adarsh Sharma</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
         <div class="student">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Purna Kant Acharya</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
         <div class="student">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Sharmila Shahi</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
         <div class="student">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Adarsh Sharma</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
         <div class="student">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Purna kant Acharya</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
         <div class="student">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Sharmila Shahi</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>
<?php include "footer.php"; ?>