<!---
Copyright 2018 Google Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->
<!doctype html>
<?php
//IMPORT THE CREDENTIALS
include '../sections/common.php';
?>
<html ⚡>
<head>
  <meta charset="utf-8">
  <title><?php echo $an." - ".$as; ?></title>
  <link rel="canonical" href="http://example.com/amp-pwa-codelab">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

<?php 
//IMPORT STYLES.CSS 
include '../sections/styles.php'; 
?>
  
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-install-serviceworker" src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  <link rel="manifest" href="../ampwa/project/manifest.json">
</head>
<body>
   <!-- Start Navbar -->
  <header class="ampstart-headerbar fixed flex justify-start items-center top-0 left-0 right-0 pl2 pr4 pt2 md-pt0 ts">
   <div  role="button" aria-label="open sidebar" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger  pr2 absolute top-0 pr0 mr2 mt0 "><p class="tt">☰</p></div>
      <a href="?" class="text-decoration-none inline-block mx-auto ampstart-headerbar-home-link mb1 md-mb0 ">
        <amp-img src="../img/e-commerce/logo/ronin_wide.png" width="140" height="38" layout="fixed" class="my0 mx-auto " alt=""></amp-img>
      </a>
    <!--
      TODO: currently "fixeditems" is an array, therefore it's not possible to
      add additional classes to it. An alternative solution would be to make it
      an oject, with a "classes" and "items" sub-properties:
     "fixeditems": {
       "classes": "col-3",
       "items": [{
         "link": {
           "url": "mailto:contact@lune.com",
           "text": "—contact@lune.com",
           "classes": "xs-small sm-hide h6 bold"
         }
       }]
     }
     -->
    <div class="ampstart-headerbar-fixed center m0 p0 flex justify-center nowrap absolute top-0 right-0 pt2 pr3">
      <div class="mr2">
      </div>
        <a href="cart.amp.html" class="text-decoration-none mr2 ampstart-headerbar-fixed-link tt">
          
          <div class="ampstart-headerbar-icon-wrapper relative tt"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 35"><g><path d="M.8.47598c-.4 0-.8.3-.8.8s.4.9.8.9h4.4l4.4 21.6c0 .5.4 1 .9.9h21c.4 0 .9-.4.9-.9s-.4-.9-.9-.9H11.2l-.7-3.5h22.7c.4 0 .7-.3.8-.7l2.9-13c.1-.5-.3-1.1-.8-1.1H7.5l-.8-3.5c-.1-.3-.4-.6-.8-.6H.8zm7 6h27.3l-2.6 11.3H10.1l-2.3-11.3zm6.9 19.9c-2.1 0-3.8 1.8-3.8 3.9s1.7 3.9 3.8 3.9c2.1 0 3.8-1.8 3.8-3.9 0-2.1-1.7-3.9-3.8-3.9zm12.6 0c-2.1 0-3.8 1.8-3.8 3.9s1.7 3.9 3.8 3.9c2.1 0 3.8-1.8 3.8-3.9 0-2.1-1.7-3.9-3.8-3.9zm-12.6 1.7c1.2 0 2.1 1 2.1 2.2 0 1.2-.9 2.2-2.1 2.2-1.2 0-2.1-1-2.1-2.2 0-1.2.9-2.2 2.1-2.2zm12.6 0c1.2 0 2.1 1 2.1 2.2 0 1.2-.9 2.2-2.1 2.2-1.2 0-2.1-1-2.1-2.2 0-1.2 1-2.2 2.1-2.2z" fill="white"></path></g></svg></div>
        </a>

    </div>
  </header>

<!-- Start Sidebar -->
<amp-sidebar id="header-sidebar" class="ampstart-sidebar px3  md-flex flex-column justify-content items-center justify-center ts" layout="nodisplay">
  <div class="flex justify-start items-center ampstart-sidebar-header">
    <div role="button" aria-label="close sidebar" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start tt">✕</div>
  </div>
  <nav class="ampstart-sidebar-nav ampstart-nav">
    <ul class="list-reset m0 p0 ampstart-label">
        <li>
          <a href="?" class="text-decoration-none block 22">
          <amp-img src="../img/e-commerce/logo/ronin_side.png" width="400" height="400" layout="responsive" class="ampstart-sidebar-nav-image inline-block mb4" alt="Company logo" noloading="">
            <div placeholder="" class="commerce-loader"></div>
          </amp-img>
          </a>
        </li>
          <li class="ampstart-nav-item tt"><a class="ampstart-nav-link" href="?page=joinemployer">JOIN AS EMPLOYER</a></li>
          <li class="ampstart-nav-item tt"><a class="ampstart-nav-link" href="pages/register.php">JOIN AS EMPLOYEE</a></li>
          <li class="ampstart-nav-item tt"><a class="ampstart-nav-link" href="?page=login">LOGIN</a></li>
          <li class="ampstart-nav-item tt"><a class="ampstart-nav-link" href="?page=home">HOME</a></li>
          <li class="ampstart-nav-item tt"><a class="ampstart-nav-link" href="?page=post">POST</a></li>
          <li class="ampstart-nav-item tt"><a class="ampstart-nav-link" href="?page=job">JOB</a></li>
          <li class="ampstart-nav-item tt"><a class="ampstart-nav-link" href="?page=contact">Contact us</a></li>
    </ul>
  </nav>



    <h3 class="h7 block pt3">follow us</h3>
<ul class="ampstart-social-follow list-reset flex justify-around items-center flex-wrap m0 mb4">
    <li>
        <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="23.6" viewBox="0 0 56 55"><title>Facebook</title><path d="M47.5 43c0 1.2-.9 2.1-2.1 2.1h-10V30h5.1l.8-5.9h-5.9v-3.7c0-1.7.5-2.9 3-2.9h3.1v-5.3c-.6 0-2.4-.2-4.6-.2-4.5 0-7.5 2.7-7.5 7.8v4.3h-5.1V30h5.1v15.1H10.7c-1.2 0-2.2-.9-2.2-2.1V8.3c0-1.2 1-2.2 2.2-2.2h34.7c1.2 0 2.1 1 2.1 2.2V43" class="ampstart-icon ampstart-icon-fb"></path></svg></a>
    </li>
    <li>
        <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 54 54"><title>instagram</title><path d="M27.2 6.1c-5.1 0-5.8 0-7.8.1s-3.4.4-4.6.9c-1.2.5-2.3 1.1-3.3 2.2-1.1 1-1.7 2.1-2.2 3.3-.5 1.2-.8 2.6-.9 4.6-.1 2-.1 2.7-.1 7.8s0 5.8.1 7.8.4 3.4.9 4.6c.5 1.2 1.1 2.3 2.2 3.3 1 1.1 2.1 1.7 3.3 2.2 1.2.5 2.6.8 4.6.9 2 .1 2.7.1 7.8.1s5.8 0 7.8-.1 3.4-.4 4.6-.9c1.2-.5 2.3-1.1 3.3-2.2 1.1-1 1.7-2.1 2.2-3.3.5-1.2.8-2.6.9-4.6.1-2 .1-2.7.1-7.8s0-5.8-.1-7.8-.4-3.4-.9-4.6c-.5-1.2-1.1-2.3-2.2-3.3-1-1.1-2.1-1.7-3.3-2.2-1.2-.5-2.6-.8-4.6-.9-2-.1-2.7-.1-7.8-.1zm0 3.4c5 0 5.6 0 7.6.1 1.9.1 2.9.4 3.5.7.9.3 1.6.7 2.2 1.4.7.6 1.1 1.3 1.4 2.2.3.6.6 1.6.7 3.5.1 2 .1 2.6.1 7.6s0 5.6-.1 7.6c-.1 1.9-.4 2.9-.7 3.5-.3.9-.7 1.6-1.4 2.2-.7.7-1.3 1.1-2.2 1.4-.6.3-1.7.6-3.5.7-2 .1-2.6.1-7.6.1-5.1 0-5.7 0-7.7-.1-1.8-.1-2.9-.4-3.5-.7-.9-.3-1.5-.7-2.2-1.4-.7-.7-1.1-1.3-1.4-2.2-.3-.6-.6-1.7-.7-3.5 0-2-.1-2.6-.1-7.6 0-5.1.1-5.7.1-7.7.1-1.8.4-2.8.7-3.5.3-.9.7-1.5 1.4-2.2.7-.6 1.3-1.1 2.2-1.4.6-.3 1.6-.6 3.5-.7h7.7zm0 5.8c-5.4 0-9.7 4.3-9.7 9.7 0 5.4 4.3 9.7 9.7 9.7 5.4 0 9.7-4.3 9.7-9.7 0-5.4-4.3-9.7-9.7-9.7zm0 16c-3.5 0-6.3-2.8-6.3-6.3s2.8-6.3 6.3-6.3 6.3 2.8 6.3 6.3-2.8 6.3-6.3 6.3zm12.4-16.4c0 1.3-1.1 2.3-2.3 2.3-1.3 0-2.3-1-2.3-2.3 0-1.2 1-2.3 2.3-2.3 1.2 0 2.3 1.1 2.3 2.3z" class="ampstart-icon ampstart-icon-instagram"></path></svg></a>
    </li>
    <li>
        <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Twitter"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.2" viewBox="0 0 53 49"><title>Twitter</title><path d="M45 6.9c-1.6 1-3.3 1.6-5.2 2-1.5-1.6-3.6-2.6-5.9-2.6-4.5 0-8.2 3.7-8.2 8.3 0 .6.1 1.3.2 1.9-6.8-.4-12.8-3.7-16.8-8.7C8.4 9 8 10.5 8 12c0 2.8 1.4 5.4 3.6 6.9-1.3-.1-2.6-.5-3.7-1.1v.1c0 4 2.8 7.4 6.6 8.1-.7.2-1.5.3-2.2.3-.5 0-1 0-1.5-.1 1 3.3 4 5.7 7.6 5.7-2.8 2.2-6.3 3.6-10.2 3.6-.6 0-1.3-.1-1.9-.1 3.6 2.3 7.9 3.7 12.5 3.7 15.1 0 23.3-12.6 23.3-23.6 0-.3 0-.7-.1-1 1.6-1.2 3-2.7 4.1-4.3-1.4.6-3 1.1-4.7 1.3 1.7-1 3-2.7 3.6-4.6" class="ampstart-icon ampstart-icon-twitter"></path></svg></a>
    </li>
</ul>

    <ul class="ampstart-sidebar-faq list-reset m0">
        <li class="ampstart-faq-item"><a href="#" class="text-decoration-none">Size Guide</a></li>
        <li class="ampstart-faq-item"><a href="#" class="text-decoration-none">Returns Policy</a></li>
        <li class="ampstart-faq-item tt"><a href="#" class="text-decoration-none">&copy; 2019 LOTUSAPURI LTD.</a></li>
    </ul>
</amp-sidebar>
<!-- End Sidebar -->
  <!-- End Navbar -->

  <main id="content" role="main" class="main commerce-landing">