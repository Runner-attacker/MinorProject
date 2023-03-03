<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo"><i class="fas fa-house"></i>MyHome</a>

         <ul>
            <li><a href="post_property.php">Post Property<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">My Listings<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="dashboard.php">Dashboard</a></li>
                     <!-- <li><a href="post_property.php">Post Property</a></li> -->
                     <li><a href="my_listings.php">My Listings</a></li>
                  </ul>
               </li>
               <li><a href="search.php"><i class="fa fa-search"></i> Search</a></li>
               <!-- <li><a href="#">Options<i class="fas fa-angle-down"></i></a> -->
                  <!-- <ul>
                     <li><a href="listings.php">All Listings</a></li>
                  </ul> -->
               </li>
               <li><a href="#">Help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.php">About us</a></i></li>
                     <li><a href="contact.php">Contact us</a></i></li>
                     <li><a href="contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="saved.php">Saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">Account <i class="fas fa-angle-down"></i></a>
               <ul>
                   <!-- <li><a href="login.php">Login now</a></li>
                  <li><a href="register.php">Register new</a></li> -->
                  <!-- 
                  <li><a href="update.php">Update Profile</a></li>
                  <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">Logout</a> -->
                  
                  
               
                  <?php
                     if($user_id != ''){?>
                        <li><a href="update.php">Update Profile</a></li>
                        <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">Logout</a>
                     <?php } ?>
                     <?php if  ($user_id == ''){?>
                        <li><a href="login.php">Login now</a></li>
                        <li><a href="register.php">Register new</a></li>
                        <?php } ?>

               
                  
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->