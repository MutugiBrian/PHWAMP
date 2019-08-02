

<section class="md-col-6 px2 pt2 pb5 md-px4 md-pt4 md-pb7 ">
      <div class="flex flex-column">
        <h1 class="h5 mb2">EMPLOYEE REGISTRATION</h1>
        <p class="mb2 h6">SIGN UP TO GET HIRED QUICKLY</p>
        <hr class="xs-hide sm-hide mt3 mb3 tc">
<form class="md-col-6 px2 pt1 pb1 md-px2 md-pt2 md-pb4 tbds tc"  method="post"
    action-xhr="http://localhost/unapi/index.php/welcome/save"  
    target="_top"
    on="submit-success:success-lightbox;submit-error:error-lightbox"
    >

<input type="hidden" value='2' name="type" />

<!-- Start Input -->
<div class="ampstart-input inline-block relative m0 p0 mb3 tc">
  <input type="text" value="" name="fname" id="firstname" class="block border-none p0 m0" placeholder="first name">
  <label for="firstname" class="absolute top-0 right-0 bottom-0 left-0 tc" aria-hidden="true">firstname</label>
</div>
<!-- End Input-->
<!-- Start Input -->
<div class="ampstart-input inline-block relative m0 p0 mb3 tc">
  <input type="text" value="" name="lname" id="lastname" class="block border-none p0 m0" placeholder="last name">
  <label for="lastname" class="absolute top-0 right-0 bottom-0 left-0 tc" aria-hidden="true">lastname</label>
</div>
<!-- End Input-->
<!-- Start Input -->
<div class="ampstart-input inline-block relative m0 p0 mb3 ">
  <input type="text" value="" name="email" id="email" class="block border-none p0 m0 tc" placeholder="E-Mail address">
  <label for="email" class="absolute top-0 right-0 bottom-0 left-0 tc" aria-hidden="true">E-Mail address</label>
</div>
<!-- End Input-->
<input type="hidden" value='<?php echo $_SESSION['country']; ?>' name="country" />
<input type="hidden" value='<?php echo $_SESSION['city']; ?>' name="city" />

<input type="hidden" value='<?php echo $_SESSION['lat']; ?>' name="reg_lat" />
<input type="hidden" value='<?php echo $_SESSION['long']; ?>' name="reg_long" />

<!-- Start Input -->
<div class="ampstart-input inline-block relative m0 p0 mb3 ">
  <input type="number" value="" name="number" id="number" class="block border-none p0 m0 tc" placeholder="Phone Number">
  <label for="email" class="absolute top-0 right-0 bottom-0 left-0 tc" aria-hidden="true">Phone Number</label>
</div>
<!-- End Input-->

<!-- Start Textarea -->
<div class="ampstart-input inline-block relative m0 p0 mb3 mt3 mb5">
  <textarea name="mesage" id="message" class="block border-none  p0 m0" rows="2"></textarea>
  <label for="message" class="absolute top-0 right-0 bottom-0 left-0 tc" aria-hidden="true">About - short description</label>
</div>
<!-- End Textarea -->

<!-- Start Input -->
<div class="ampstart-input inline-block relative m0 p0 mb3 ">
  <input type="password" value="" name="password" id="number" class="block border-none p0 m0 tc" placeholder="password">
  <label for="email" class="absolute top-0 right-0 bottom-0 left-0 tc" aria-hidden="true">Set Password</label>
</div>
<!-- End Input-->

<!-- Start Input -->
<div class="ampstart-input inline-block relative m0 p0 mb3 ">
  <input type="passwordc" value="" name="number" id="number" class="block border-none p0 m0 tc" placeholder="Set Password">
  <label for="email" class="absolute top-0 right-0 bottom-0 left-0 tc" aria-hidden="true">Confirm Password</label>
</div>
<!-- End Input-->












        <div>
          <button type="submit" class="ampstart-btn ampstart-btn-secondary caps tb tc">REGISTER</button>
        </div>
      </div>
      </form>
    </section>