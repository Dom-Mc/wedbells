@extends('default.master')
@section('content')

{{-- Header --}}
@include('partials._header')

 <div id="drop">
    <a href="#top"><img class="arrow" src="img/arrow.svg" alt="Down arrow"></a>
</div>


<!-- Marketing (wrapper) -->
<div class="marketing">


  <!-- Share Section -->
  <section id="share" class="container">
    <div class="row featurette">
      <div class="col-md-6 col-lg-6">
          <h2 class="featurette-heading" id="top">Our Wedding Album</h2>
          <p class="marginBottom">Pictures from our big day are finally here! We’re overwhelmed by the number of incredible photos &amp; videos that were generously submitted as it gave us an opportunity to witness the experience through your eyes. Thank you so much!</p>
          <p>If you still have additional photos or videos you’d like to share, it’s not too late. Simply click <span class="highlightText">Share</span> below and we’ll add your memories to our album.</p>
          <p>To view our album, scroll down and click on the <span class="highlightText">Wedding Album</span> button below to launch the slideshow. Mahalo!</p>
        {{-- Activate dropittomeModal (desktop) --}}
          <button type="button" id="dropittomeButton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#dropittomeModal">Share</button>
        {{-- Activate dropboxModal (mobile) --}}
          <button type="button" id="dropboxButton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#dropboxModal">Share</button>
      </div>{{-- /.col-md-6 .col-lg-6 --}}
      <div class="col-md-6 col-lg-5 col-lg-offset-1">
        <div class="hidden-sm hidden-xs">    {{-- REMOVE LATER --}}
          <img class="featurette-image img-responsive center-block img-circle visible-md-block visible-lg-block" src="img/kiss-350.jpg">{{-- Hidden on at > 991px --}}
        </div>{{-- /.hidden-sm hidden-xs --}}
      </div>{{-- /.col-md-6 .col-lg-5 .col-lg-offset-1 --}}
    </div>{{-- /.row. featurette --}}
  </section>


  <!-- Album Section -->
  <div>
    <section id="album">
      <div id="flickr-section" class="text-center vertical-center">
        <!-- Trigger the modal with a button -->
        <button  type="button"  id="fl" class="btn btn-info btn-lg" data-toggle="modal" data-target="#flickr-album">Wedding Album</button>
      </div>{{-- /#flickr-section --}}
    </section>
  </div>
  @include('partials._flickr')


  <!-- Guest Book Section -->
  <section id="guestbook" class="container page">
    <div class="row featurette">
      <div class="col-md-6 col-lg-6">
          <h2 class="featurette-heading">Sign our Guestbook</h2>
          <p>Would you like to leave a message for the newly weds? If you have any thoughts, memories, or <span class="nobr">y-e-s</span> even advice, we would love to hear from you.</p>
         <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-primary btn-lg b-pad" data-toggle="modal" data-target="#gbModal">Guestbook</button>
      </div>{{-- /.col-md-6 .col-lg-6 --}}
      <div class="col-md-6 col-lg-6 col-lg-offset-1">
          <img class="featurette-image img-responsive center-block visible-md-block visible-lg-block" src="img/gb.jpg">{{-- Hidden on at > 991px --}}
          {{-- .img-thumbnail - BEVEL --}}
      </div>{{-- /.col-md-6 .col-lg-6 .col-lg-offset-1 --}}
    </div>{{-- /.row. featurette --}}
  </section>


  <!-- Story Section -->
  @include('partials._story')


  <!-- Honeyfund Section -->
  <section id="honeyfund" class="container page">
    <div class="row featurette">
      <div class="col-md-6 col-lg-5">
          <img class="featurette-image img-responsive center-block visible-md-block visible-lg-block" src="img/gift.jpg">{{-- Hidden on at > 991px --}}
      </div>{{-- /.col-md-6 .col-lg-5 --}}
      <div class="col-md-6 col-lg-6 col-lg-offset-1">
        <h2 class="featurette-heading">Cards &amp; Gifts </h2>
        <p>We feel so fortunate that you all could make the trip and help us celebrate our special day! For those who would like to give or send a gift, please see our information below.</p>
        <p><b>Mailing address -</b> Nakissa &amp; Dom, 140 South Van Ness Ave, #309, San Francisco, CA 94103</p>
        <div id="paypal">
          <p><b>Going paperless?</b> You can send a gift to our PayPal account by clicking the link below. You'll be redirected to our personal PayPal page.</p>
          <p><a href="https://www.paypal.me/nakissandom" target="_blank"><small>Paypal ID: nakissandom@gmail.com</small></a></p>
          <p><a href="https://www.paypal.me/nakissandom" target="_blank"><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="PayPal"/></a></p>
        </div>{{-- /#paypal --}}
      </div>{{-- /.col-md-6 .col-lg-6 .col-lg-offset-1 --}}
    </div>{{-- /.row .featurette --}}
  </section>


  {{-- Background img #view --}}
  <div id="view"></div>


  <!-- Contact Section -->
  <section id="contact" class="container page">
    <div class="row featurette">
      <div class="col-md-6 col-sm-12">
          <h2 class="featurette-heading">Contact Us</h2>
          <p>If you would like to reach either Nakissa or Dom, you can reach us at <a href="mailto:nakissandom@gmail.com?Subject=Contact%20Us" target="_top">nakissandom@gmail.com</a> and we’ll get back to you at our earliest convience. <i class="fa fa-smile-o"></i></p>
      </div>{{-- /.col-md-6 .col-sm-12 --}}
      <div class="col-md-5 col-md-offset-1 col-sm-12">
        <img class="featurette-image img-responsive center-block img-circle" src="img/smiles-350.jpg"
             srcset="img/smiles-350.jpg 1x,
                     img/smiles-700.jpg 2x,
                     img/smiles-1050.jpg 3x">
      </div>{{-- /.col-md-5 .col-md-offset-1 .col-sm-12 --}}
    </div>{{-- /.row .featurette --}}
  </section>


</div>{{-- /.marketing (wrapper)--}}


{{-- Footer --}}
@include('partials._footer')


<!-- Modals -->
@include('partials._flickr')
@include('partials._guestbook-form')
@include('partials._dropittome')
@include('partials._dropbox')


@stop
