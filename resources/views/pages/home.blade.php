@extends('default.master')

@section('content')

<header>
  {{-- Fixed navbar --}}
  @include('partials._nav')

  {{-- Jumbotron --}}
  <div id="rsvp" class="jumbotron fullheight"> {{-- .fullheight - adjusts element to takeup entire viewpoint via js --}}

      <h1 class="title">Nakissa <span class="rwd-line">&amp;</span> Dom</h1>
      <h2>got married!</h2>

  </div>{{-- /#rsvp --}}
  {{-- /Jumbotron --}}

</header>
       <div id="drop">
          <a href="#top"><img class="arrow" src="img/arrow.svg" alt="Down arrow"></a>
      </div>


<div class="marketing">

  <!-- The Big Day Section -->
  <section id="bigday" class="container">
    <div class="row featurette">
      <div class="col-md-6 col-lg-6">

          <h2 class="featurette-heading" id="top">Our Wedding Album</h2>

          <p class="marginBottom">Pictures from our big day are finally here! Scroll down and click on the <span class="highlightText">Wedding Album</span> button below to take a look.</p>
          <p>If you have pictures that you'd like to send us, please click <span class="highlightText">Share</span> below. We’ll add your memories to our Wedding Album soon. Mahalo!</p>
          {{-- <a type="button" id="viewButton" class="btn btn-primary btn-lg" href="https://flic.kr/s/aHsko3k15B" target="_blank">View Album</a> --}}

          <button type="button" id="dropittomeButton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#dropittomeModal">Share</button>

          <button type="button" id="dropboxButton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#dropboxModal">Share</button>

      </div>
      <div class="col-md-6 col-lg-5 col-lg-offset-1">
        <div class="hidden-sm hidden-xs">    {{-- REMOVE LATER --}}
          <img class="featurette-image img-responsive center-block img-circle visible-md-block visible-lg-block" src="img/kiss-350.jpg">{{-- Hidden on at > 991px --}}
        {{-- .img-thumbnail - BEVEL --}}
        </div>
      </div>
    </div>{{-- /.row.featurette --}}
  </section>
  <!-- /Big Day Section -->


  <!-- Wedding Album Section -->
  <div>
    <section id="venue">  {{-- REMOVED .PAGE and .container-fluid --}}
      <div class="text-center vertical-center" id="flickr-section" >
        <!-- Trigger the modal with a button -->
        <button  type="button"  id="fl" class="btn btn-info btn-lg" data-toggle="modal" data-target="#flickr">Wedding Album</button>
      </div>
    </section>
  </div>
  <!-- /Wedding Album Section -->

  @include('partials._flickr')


  <!-- Fun Section -->
  {{-- REMOVED SECTION --}}
  {{-- @include('partials._fun') --}}



  <!-- Honeyfund Section -->
  <section id="honeyfund" class="container page">
    <div class="row featurette"
    data-bottom="left:-200%;"
    data-center-top="left:0;">
      <div class="col-md-6 col-lg-5">
        <div class="r-pad">
          <img class="featurette-image img-responsive center-block visible-md-block visible-lg-block" src="img/gift.jpg">{{-- Hidden on at > 991px --}}
          {{-- .img-thumbnail - BEVEL --}}
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-lg-offset-1">
        <div class="l-pad">
          <h2 class="featurette-heading">Cards &amp; Gifts </h2>
          <p>We feel so fortunate that you all could make the trip and help us celebrate our special day! For those who would like to give or send a gift, please see our information below.</p>
          <p><b>Mailing address -</b> Nakissa &amp; Dom, 140 South Van Ness Ave, #309, San Francisco, CA 94103</p>



          {{--      MOVE STYLE TO CSS      --}}
          <div id="paypal">
            <p style="margin-bottom: 5px;"><b>Going paperless?</b> You can send a gift to our PayPal account by clicking the link below. You'll be redirected to our personal PayPal page.</p>
            <p><a href="https://www.paypal.me/nakissandom" target="_blank"><small>Paypal ID: nakissandom@gmail.com</small></a></p>
            <p><a href="https://www.paypal.me/nakissandom" target="_blank"><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="PayPal"/></a></p>
          </div>
        </div>
      </div>
    </div>{{-- /.row.featurette --}}
  </section>
  <!-- /Honeyfund Section -->

  <!-- Story Section -->
  @include('partials._story')
  <!-- /Story Section -->

  <!-- Guest Book Section -->
  <section id="guestbook" class="container page">
    <div class="row featurette">
      <div class="col-md-6 col-lg-6">
        <div class="r-pad">
          <h2 class="featurette-heading">Sign our Guestbook</h2>
          <p>Would you like to leave a message for the newly weds? If you have any thoughts, memories, or <span class="nobr">y-e-s</span> even advice, we would love to hear from you.</p>
         <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-primary btn-lg b-pad" data-toggle="modal" data-target="#gbModal">Guestbook</button>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-lg-offset-1">
        <div class="l-pad">
          <img class="featurette-image img-responsive center-block visible-md-block visible-lg-block" src="img/gb.jpg">{{-- Hidden on at > 991px --}}
          {{-- .img-thumbnail - BEVEL --}}
        </div>
      </div>
    </div>{{-- /.row.featurette --}}
  </section>
  <!-- /Guest Book Section -->


  {{-- Background img #view --}}
  <div id="view"></div>


  <!-- Contact Section -->
  <section id="contact" class="container page">
    <div class="row featurette">
      <div class="col-md-6 col-sm-12">
          <h2 class="featurette-heading">Contact Us</h2>
          <p>If you would like to reach either Nakissa or Dom, simply fill out the contact form and we’ll get back to you at our earliest convience. <i class="fa fa-smile-o"></i></p>
           <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-primary btn-lg b-pad" data-toggle="modal" data-target="#contactModal">Contact</button>
      </div>
      <div class="col-md-5 col-md-offset-1 col-sm-12">
        <img class="featurette-image img-responsive center-block img-circle" src="img/smiles-350.jpg"
             srcset="img/smiles-350.jpg 1x,
                     img/smiles-700.jpg 2x,
                     img/smiles-1050.jpg 3x">
      </div>
    </div>{{-- /.row.featurette --}}
  </section>
  <!-- /Contact Section -->


</div>{{-- /.container.marketing --}}

<!-- Modal -->
@include('partials._flickr')
@include('partials._guestbook-form')
@include('partials._contact-form')
@include('partials._dropittome')
@include('partials._dropbox')


@stop
