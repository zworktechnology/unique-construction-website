
<?php include('header.php') ?>

<style>
.team__img {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #b5c918;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
  opacity: 0.8;
}

.team__img:hover .overlay {
  height: 100%;
}

.text {
  color: white;
  font-size: 16px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb__area">
      <div class="container">
        <div class="row">
          <div class="col-xxl-12">
            <div class="breadcrumb__content">
              <h1 class="breadcrumb__title">about</h1>
              <p>Our Journey, Your Vision : The Unique Construction Narrative.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Area End -->


    <!-- About Area Start -->
    <section class="about__area-4">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="about__right-4">
              <h2 class="section-sub-title">About Company</h2>
              <h3 class="section-title">Crafting Dreams, Building Realities : The Unique Construction Journey</h3>
              <p class="about__right-4-text wow wcfadeUp" data-wow-delay="0.45s">
                Embark on a transformative experience with Unique Construction. 
                Our legacy blends innovation, craftsmanship, and personalized solutions, creating architectural wonders that resonate with each client's unique vision and lifestyle.
              </p>

              <ul class="feature__list wow wcfadeUp" data-wow-delay="0.6s">
                <li>+ Architectural plan</li>
                <li>+ Residential space</li>
                <li>+ Innovation</li>
                <li>+ Interior design</li>
              </ul>

              <div class="about__counter-3">
                <div class="about__content-3">
                  <h4 class="about__number about__number-3 wow wcfadeUp" data-wow-delay="0.75s">36+</h4>
                  <h5 class="about__counter-title-3">Years <br>experience</h5>
                </div>
                <!-- <div class="about__content-3 wow wcfadeUp" data-wow-delay="0.9s">
                  <button data-bs-toggle="modal" data-bs-target="#about_modal"><i class="fa-solid fa-play"></i></button>
                  <p>Watch Video</p>
                </div> -->
              </div>
            </div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="about__left-4 zi-9">
              <div class="about__left-4-img">
                <img class="about__img4-1" src="assets/imgs/about/4/1.jpg" alt="About Image">
                <img class="about__img4-2" src="assets/imgs/about/4/3.jpg" alt="About Image">
              </div>
              <div class="about__left-4-img-2">
                <img class="about__img4-3" src="assets/imgs/about/4/2.jpg" alt="About Image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Area End -->

    <!-- Video Modal -->
    <div class="modal fade" id="about_modal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog__hero">
        <div class="modal-content modal-content__hero">
          <button type="button" class="close-modal" data-bs-dismiss="modal" aria-label="Close"><i
              class="fa-solid fa-xmark"></i></button>
          <iframe src="https://www.youtube.com/embed/0g1Q4fBDp2U" title="Modal Video" allow="accelerometer; autoplay;"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>



    <!-- Step Area Start -->
    <div class="step__area">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div class="step__content wow wcfadeUp" data-wow-delay="0.15s">
              <img src="assets/imgs/icon/step-icon-1.png" alt="Planning">
              <h4>Planning</h4>
              <p>Strategic blueprint creation for your vision's foundation.</p>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div class="step__content step-2 wow wcfadeUp" data-wow-delay="0.3s">
              <img src="assets/imgs/icon/step-icon-2.png" alt="Planning">
              <h4>Sketch</h4>
              <p>Artistic sketches breathe life into project concepts.</p>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div class="step__content step-3 wow wcfadeUp" data-wow-delay="0.45s">
              <img src="assets/imgs/icon/step-icon-3.png" alt="Planning">
              <h4>Architect</h4>
              <p>Refining designs for functional elegance and structural integrity.</p>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div class="step__content step-4 wow wcfadeUp" data-wow-delay="0.6s">
              <img src="assets/imgs/icon/step-icon-4.png" alt="Planning">
              <h4>Handover</h4>
              <p>Seamless project delivery, joyous handover of your dream space.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Step Area End -->


    <!-- Team Area Start -->
    <section class="team__area-4">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-12">
            <div class="team__title-wrapper">
              <h2 class="section-sub-title wow wcfadeUp" data-wow-delay="0.3s">about team</h2>
              <h3 class="section-title wow wcfadeUp" data-wow-delay="0.45s">Meet the expert</h3>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div class="team__member wow wcfadeUp" data-wow-delay="0.15s">
              <div class="team__img">
                <img src="assets/imgs/team/1/1.jpg" alt="Team Member"
                    class="br-left">
                    <div class="overlay">
                      <div class="text">
                        Completed on <b>B.E(Civil Engineering)</b> at Mookambigai College of Engineering <br>
                        and <b>M.E(Structural Engineering)</b> at SRM Valliammai Engineering College, Kattankulathur.
                      </div>
                    </div>
              </div>
              <div class="team__info">
                <a href="javascript:void(0)">Er.R.Naveen Kumar M.E.,</a>
                <p>Proprietor</p>
              </div>
            </div>
          </div>

          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div class="team__member wow wcfadeUp" data-wow-delay="0.3s">
              <div class="team__img">
                <img src="assets/imgs/team/1/2.jpg" alt="Team Member">
                  <div class="overlay">
                    <div class="text">
                      Completed on <b>B.E(Civil Engineering)</b> at M.I.E.T College, Trichy <br>
                      and <b>M.E(Structural Engineering)</b> at Alagappa Chettiar Government College of Engineering & Technology, Karaikudi.
                    </div>
                  </div>
              </div>
              <div class="team__info">
                <a href="javascript:void(0)">Er.S.Aravind M.E.,</a>
                <p>Structural Engineer</p>
              </div>
            </div>
          </div>

          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div class="team__member wow wcfadeUp" data-wow-delay="0.45s">
              <div class="team__img">
              <img src="assets/imgs/team/1/3.jpg" alt="Team Member">
                  <div class="overlay">
                    <div class="text">
                      Completed on <b>B.E(Computer Science)</b> at TRP Engineering College(SRM Group of Institutions) <br>
                      and <b>MBA</b> at University of West of Scotland(United Kingdom).
                    </div>
                  </div>
              </div>
              <div class="team__info">
                <a href="javascript:void(0)">Er.M.Jayendran B.E.,</a>
                <p>Marketing Manager</p>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div class="team__member wow wcfadeUp" data-wow-delay="0.6s">
              <div class="team__img">
                <img src="assets/imgs/team/1/4.jpg" alt="Team Member"class="br-right">
                    <div class="overlay">
                      <div class="text">
                        Has experience in the field of civil & structural engineering for more than 50 years. Had worked in <b>TamilNadu State Highways</b> as an Engineer as well as gulf country
                      </div>
                    </div>
              </div>
              <div class="team__info">
                <a href="javascript:void(0)">Er.M.Sellamuthu M.E.,</a>
                <p>Mentor</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
              <div class="team__member wow wcfadeUp" data-wow-delay="0.6s">
                <div class="team__img">
                  <img src="assets/imgs/team/1/5.jpg" alt="Team Member" class="br-right">
                    <div class="overlay">
                      <div class="text">
                        Completed on <b>B.Arch.,</b> at Adhiyamaan College of Engineering, Hosur <br>
                        and <b>Master of Urban and Regional Planning</b> at CEPT University, Ahmedabad.
                      </div>
                    </div>
                </div>
                <div class="team__info">
                  <a href="javascript:void(0)">Ar.F.Gary Naveen</a>
                  <p>Architect</p>
                </div>
              </div>
            </div>
            
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
              <div class="team__member wow wcfadeUp" data-wow-delay="0.6s">
                <div class="team__img">
                  <img src="assets/imgs/team/1/6.jpg" alt="Team Member" class="br-left">
                    <div class="overlay">
                      <div class="text">
                        Our Associate Interior & Exterior Incharge
                      </div>
                    </div>
                </div>
                <div class="team__info">
                  <a href="javascript:void(0)">Mr.C.Muthukumar</a>
                  <p>Interior & Exterior Incharge</p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- Team Area End -->


    <!-- Testimonial Area Start -->
    <section class="testimonial__area-2">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-12">
            <div class="swiper testimonial__slider-2">
              <div class="swiper-wrapper">
                <div class="swiper-slide testimonial__slide-2">
                  <p class="wow wcfadeUp" data-wow-delay="0.15s">
                    Unique Construction made our dream home a reality. Their attention to detail and commitment to quality are truly commendable. We're grateful for their exceptional work.
                  </p>
                  <h3 class="wow wcfadeUp" data-wow-delay="0.3s">Happy Customers <span>From Google</span> </h3>
                </div>
                <div class="swiper-slide testimonial__slide-2">
                  <p class="wow wcfadeUp" data-wow-delay="0.15s">
                    Choosing Unique Construction was the best decision for our commercial project. Their innovative approach and timely delivery exceeded our expectations. Highly recommended!
                  </p>
                  <h3 class="wow wcfadeUp" data-wow-delay="0.3s">Happy Customers <span>From Google</span> </h3>
                </div>
                <div class="swiper-slide testimonial__slide-2">
                  <p class="wow wcfadeUp" data-wow-delay="0.15s"> 
                    Our experience with Unique Construction was outstanding. From the initial planning to the final handover, the team's professionalism and dedication shone through. Thank you for creating our beautiful space!
                  </p>
                  <h3 class="wow wcfadeUp" data-wow-delay="0.3s">Happy Customers <span>From Google</span> </h3>
                </div>
                <div class="swiper-slide testimonial__slide-2">
                  <p class="wow wcfadeUp" data-wow-delay="0.15s"> 
                    Unique Construction stands out for its meticulous planning and skilled architects. The result was a home that perfectly suits our lifestyle. Thank you for making our dream a reality!
                  </p>
                  <h3 class="wow wcfadeUp" data-wow-delay="0.3s">Happy Customers <span>From Google</span> </h3>
                </div>
              </div>

              <div class="testimonial__btn-2">
                <div class="swiper-btn-prev wow wcfadeUp" data-wow-delay="0.3s"><img
                    src="assets/imgs/icon/long-arrow-l-black.png" alt="Prev Icon"></div>
                <div class="swiper-btn-next wow wcfadeUp" data-wow-delay="0.3s"><img
                    src="assets/imgs/icon/long-arrow-r-black.png" alt="Next Icon"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Area End -->

    <?php include('footer.php') ?>