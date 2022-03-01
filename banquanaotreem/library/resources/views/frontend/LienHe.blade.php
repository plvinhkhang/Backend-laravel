@extends('frontend.Master')
@section('title','Liên Hệ')
@section('main')
<div class="page-banner-section section" style="background-image: url(//cdn.shopify.com/s/files/1/0017/9440/8561/files/hero-1_6e6124c9-278a-46fa-8e71-8664cba4d26b.jpg?v=1533461483);">
  <div class="container">
    <div class="row">
      <div class="page-banner-content col">

        <h1 style="color: #1a161e">Liên Hệ</h1><ul class="page-breadcrumb">
  <li>
    <a href="{{asset('home')}}" title="Back to the home page">Home</a>
  </li>
  <li>

    <span>Liên Hệ</span>

  </li>
</ul></div>
    </div>
  </div>
</div>
<main role="main">
      <div id="shopify-section-contact-template" class="shopify-section"><div class="page-section section mt-100 mt-md-70 mt-sm-70 mt-xs-50 mb-50 mb-md-20 mb-sm-20 mb-xs-0">
  <div class="container">
    <div class="row row-30">
      <div class="contact-info-wrap col-md-6 col-12 mb-50"><h3>Get in Touch</h3><p>Jadusona is the best theme for elit, sed do eiusmod tempor dolor sit ame tse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris nisi</p><ul class="contact-info"><li><i class="fa fa-map-marker"></i><p>Your address goes here</p>
          </li><li><i class="fa fa-phone"></i><p>+01 235 567 89<br>
+01 235 567 89</p>
          </li><li><i class="fa fa-globe"></i><p>info@example.com<br>
info@example.com</p>
          </li></ul>
      </div>

      <div class="contact-form-wrap col-md-6 col-12 mb-50"><h3>Leave a Message</h3><form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="contact"><input type="hidden" name="utf8" value="✓">

        <div class="contact-form">
          <div class="row">
            <div class="col-lg-6 col-12 mb-30">
              <input required="" type="text" class="" name="contact[name]" id="ContactFormName" placeholder="Full Name" value="">
            </div>
            <div class="col-lg-6 col-12 mb-30">
              <input required="" type="email" class="" name="contact[email]" id="ContactFormEmail" placeholder="Email" value="">
            </div>
            <div class="col-12 mb-30"><textarea name="contact[body]" id="ContactFormMessage" placeholder="Message"></textarea></div>
            <div class="col-12"><input type="submit" value="Send"></div>
          </div>
        </div></form><p class="form-messege"></p>
      </div>
    </div>
  </div>
</div>










</div>
    </main>
    @stop