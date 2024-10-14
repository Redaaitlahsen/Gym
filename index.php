  <!DOCTYPE html>
  <html lang="en">
    <head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="templateStyle.css">
    </head>
    <body>
    <?php include 'includes/templateNavbar.php'; ?>

      <header class="header" id="header">
        <div class="section__container header__container">
          <div class="header__content">
            <h1>HARD WORK</h1>
            <h2>ISS FOR EVERY SUCCESS</h2>
            <p>Start by taking inspirations, continue it to give inspirations</p>
            <div class="header__btn">
            <a href="signup.php" class="join">GET STARTED</a>
            </div>
          </div>
        </div>
      </header>
      <button id="backToTop" class="backToTop" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up" style="color: white;"></i></button>
      <section class="section__container about__container" id="about">
        <div class="about__header">
          <h2 class="section__header" id="about">ABOUT US</h2>
          <p class="section__description">
            Our mission is to inspire and support individuals in achieving their
            health and wellness goals, regardless of their fitness level or
            background.
          </p>
        </div>
        <div class="about__grid">
          <div class="about__card">
            <h4>WINNER COACHES</h4>
            <p>
              We pride ourselves on having a team of dedicated and experienced
              coaches who are committed to helping you succeed.
            </p>
          </div>
          <div class="about__card">
            <h4>AFFORDABLE PRICE</h4>
            <p>
              We believe that everyone should have access to high-quality fitness
              facilities without breaking the bank.
            </p>
          </div>
          <div class="about__card">
            <h4>MODERN EQUIPMENTS</h4>
            <p>
              Stay ahead of the curve with our state-of-the-art equipment designed
              to elevate your workout experience.
            </p>
          </div>
        </div>
      </section>

      <section class="session">
        <div class="session__card">
            <h4>BODY BUILDING</h4>
            <p>
                Sculpt your physique and build muscle mass with our specialized
                bodybuilding programs at FitPhysique.
            </p>
            <a href="morepages/gyminfo.html" class="btn btn__secondary">
                READ MORE <i class="ri-arrow-right-line"></i>
            </a>
        </div>
        <div class="session__card">
            <h4>CARDIO</h4>
            <p>
                Elevate your heart rate and boost your endurance with our dynamic
                cardio workouts at FitPhysique.
            </p>
            <a href="morepages/gyminfo.html" class="btn btn__secondary">
                READ MORE <i class="ri-arrow-right-line"></i>
            </a>
        </div>
        <div class="session__card">
            <h4>FITNESS</h4>
            <p>
                Embrace a holistic approach to fitness with our comprehensive fitness
                programs at FitPhysique.
            </p>
            <a href="morepages/gyminfo.html" class="btn btn__secondary">
                READ MORE <i class="ri-arrow-right-line"></i>
            </a>
        </div>
        <div class="session__card ">
            <h4>CROSSFIT</h4>
            <p>
                Experience the ultimate full-body workout with our intense CrossFit
                classes at FitPhysique.
            </p>
            <a href="morepages/gyminfo.html" class="btn btn__secondary">
                READ MORE <i class="ri-arrow-right-line"></i>
            </a>
        </div>
    </section>

      <section class="section__container trainer__container" id="trainer">
        <h2 class="section__header" id="trainer">MEET OUR TRAINERS</h2>
        <div class="trainer__grid">
          <div class="trainer__card">
            <img src="images\staff/trainer-1.jpg" alt="trainer" />
            <h4>DAVID WILLIAMS</h4>
            <p>Body Builder Coach</p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
              <a href="#"><i class="ri-youtube-fill"></i></a>
            </div>
          </div>
          <div class="trainer__card">
            <img src="images\staff/trainer-2.jpg" alt="trainer" />
            <h4>ROSY RIVERA</h4>
            <p>Cardio Coach</p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
              <a href="#"><i class="ri-youtube-fill"></i></a>
            </div>
          </div>
          <div class="trainer__card">
            <img src="images\staff/trainer-3.jpg" alt="trainer" />
            <h4>MATT STONIE</h4>
            <p>Fitness Coach</p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
              <a href="#"><i class="ri-youtube-fill"></i></a>
            </div>
          </div>
          <div class="trainer__card">
            <img src="images\staff/trainer-4.jpg" alt="trainer" />
            <h4>SOFIA LAUREN</h4>
            <p>Crossfit Coach</p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
              <a href="#"><i class="ri-youtube-fill"></i></a>
            </div>
          </div>
        </div>
      </section>

      <section class="membership">
        <div class="section__container membership__container">
          <h2 class="section__header" id="membership">MEMBERSHIP</h2>
          <div class="membership__grid">
            <div class="membership__card">
              <h4>STANDARD</h4>
              <ul>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Gym floor access and standard equipment.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Group fitness classes: yoga, Zumba, Pilates.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Complimentary fitness consultations.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Locker room and showers.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Nutritional guidance and snacks.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Member discounts on merchandise.
                </li>
              </ul>
              <h3><sup>$</sup>30<span>/month</span></h3>
              <button class="btn btn__primary">BUY NOW</button>
            </div>
            <div class="membership__card">
              <h4>PROFESSIONAL</h4>
              <ul>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Standard Membership facilities included.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Priority booking for personal training.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Access to advanced equipment.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Complimentary fitness consultations.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Exclusive member events and workshops.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Discounts on additional services.
                </li>
              </ul>
              <h3><sup>$</sup>45<span>/month</span></h3>
              <button class="btn btn__primary">BUY NOW</button>
            </div>
            <div class="membership__card">
              <h4>ULTIMATE</h4>
              <ul>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Standard and Professional facilities included.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Unlimited access to premium amenities.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Reserved parking or valet service.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Complimentary premium fitness classes.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Customized workout plans.
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>
                  Priority access to guest passes and events.
                </li>
              </ul>
              <h3><sup>$</sup>60<span>/month</span></h3>
              <button class="btn btn__primary">BUY NOW</button>
            </div>
          </div>
        </div>
      </section>
      <section class="section__container client__container" id="client">
        <h2 class="section__header">OUR TESTIMONIALS</h2>
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="client__card">
                <img src="images\members/client-1.jpg" alt="client" />
                <div><i class="ri-double-quotes-r"></i></div>
                <p>
                  I've been a member at FitPhysique for over a year now, and I
                  couldn't be happier with my experience. The range of classes
                  offered here is impressive - from high-energy cardio sessions to
                  relaxing yoga classes, there's something for everyone.
                </p>
                <h4>Sarah Johnson</h4>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client__card">
                <img src="images\members/client-2.jpg" alt="client" />
                <div><i class="ri-double-quotes-r"></i></div>
                <p>
                  The classes are always well-planned and engaging, and the
                  instructors do an excellent job of keeping us motivated
                  throughout. I'm so grateful to have found such a supportive and
                  inclusive gym.
                </p>
                <h4>Michael Wong</h4>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="client__card">
                <img src="images\members/client-3.jpg" alt="client" />
                <div><i class="ri-double-quotes-r"></i></div>
                <p>
                  I've tried many gyms in the past, but none of them compare to
                  FitPhysique. From the moment I walked through the doors, I felt
                  welcomed and supported by the staff and fellow members alike.
                </p>
                <h4>Emily Davis</h4>
              </div>
            </div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <section class="blog" id="blog">
        <div class="section__container blog__container">
          <h2 class="section__header" id="blog">BLOGS</h2>
          <div class="blog__grid">
            <div class="blog__card">
              <img src="images\template/blog-1.jpg" alt="blog" />
              <h4>Fueling Your Body for Optimal Performance</h4>
            </div>
            <div class="blog__card">
              <img src="images\template/blog-2.jpg" alt="blog" />
              <h4>A Guide to Setting and Achieving Fitness Goals</h4>
            </div>
            <div class="blog__card">
              <img src="images\template/blog-3.jpg" alt="blog" />
              <h4>Tips and Techniques for Efficient Exercise</h4>
            </div>
            <div class="blog__card">
              <img src="images\template/blog-4.jpg" alt="blog" />
              <h4>A Beginner's Guide to Starting Your Running Journey</h4>
            </div>
          </div>
          <div class="blog__btn">
            <button class="btn btn__primary">VIEW ALL</button>
          </div>
        </div>
      </section>

      <section class="section__container logo__banner">
        <img src="images\banners/banner-1.png" alt="banner" />
        <img src="images\banners/banner-2.png" alt="banner" />
        <img src="images\banners/banner-3.png" alt="banner" />
        <img src="images\banners/banner-4.png" alt="banner" />
      </section>
      <?php include 'includes/footer.php'; ?>
      <script src="https://unpkg.com/scrollreveal"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js">
        
      </script>
      <script src="main.js"></script>
    </body>
  </html>
