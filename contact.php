
<?php include('header.php') ?>

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb__area" style="background-image: url(./assets/imgs/bg/10.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-xxl-12">
            <div class="breadcrumb__content">
              <h1 class="breadcrumb__title">Contact</h1>
              <p>Contact us if you have any questions to ask us</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Area End -->


    <!-- Contact Area Start -->
    <section class="contact__area">
      <div class="container line">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
        <div class="row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5">
            <div class="contact__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3086464328208!2d90.35532061543219!3d23.8076212925039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1becff28005%3A0x6d0154b01000d374!2sWealCoder%20Web%20Development%20Agency!5e0!3m2!1sen!2sbd!4v1661434719052!5m2!1sen!2sbd"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7">
            <div class="contact__content">
              <h2 class="contact__title">Get in touch</h2>
              <p>Get in touch to discuss your employee wellbeing needs today. Please give us a call, drop us an email.
              </p>
              <div class="contact__form wow wcfadeUp" data-wow-delay="0.75s">
                <form action="mail.php" method="post" autocomplete="off" class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                    <!-- <label for="name">Name</label> -->
                    <input type="text" name="name" id="name" placeholder="Name" required="">
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                    <!-- <label for="email">Email</label> -->
                    <input type="email" name="email" id="email" placeholder="Email" required="">
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                    <!-- <label for="phone">Phone (Optional)</label> -->
                    <input type="number" name="mobile" id="phone" placeholder="Mobile Number" required="">
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                    <!-- <label for="subject">Subject</label> -->
                    <input type="text" name="subject" id="subject" placeholder="Subject" required="">
                  </div>
                  <div class="col-xxl-12">
                    <!-- <label for="message">Message</label> -->
                    <textarea name="Message" id="message" placeholder="Comment..."></textarea>
                  </div>
                  <div class="col-xxl-12">
                    <button class="submit wc-btn-primary btn-hover" type="submit"><span></span> Send Message</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Area End -->

  <?php include('footer.php') ?> 