<?php include('header.php') ?>
<style>
  .center {
    text-align: center;
    width: 100%;
  }
</style>

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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15677.412344835908!2d78.70027589999997!3d10.784245900000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf527d8c3ffff%3A0x6a37adecffc7fb68!2sUnique%20Constructionns%20-%20Trichy!5e0!3m2!1sen!2sin!4v1705060623897!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <textarea name="message" id="message" placeholder="Comment..." required=""></textarea>
              </div>
              <div class="col-xxl-12">
                <button class="submit wc-btn-primary btn-hover" type="submit"> Send Message</button>
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