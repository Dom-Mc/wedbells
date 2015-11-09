@extends('default.master')

@section('content')

<header>
  {{-- Fixed navbar --}}
  @include('partials._nav')

  {{-- Jumbotron --}}
  <div id="rsvp" class="jumbotron fullheight"
  style="position: relative;" 
  > {{-- .fullheight - adjusts element to takeup entire viewpoint via js --}}
    
      <h1 class="title">Nakissa <span class="rwd-line">&amp;</span> Dom</h1>
      <h2>got married!</h2>


       <div style=" 
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 25%;

       
       ">
        <a href="#bigday"><img class="arrow" src="img/arrow.svg" alt="Down arrow" style="
          width: 60px;
          height: 60px;
          padding: 12px;
          
          margin-top: 0;
          "></a>
          {{--           position: absolute;
          bottom: 0px; --}}
      </div> 

{{--        <div id="drop">
        <a href="#bigday" class="text-center"><img class="arrow" src="img/arrow.svg" alt="Down arrow" style="
          width: 60px;
          height: 60px;
          padding: 12px;
          position: absolute;
          bottom: 5rem;
          display: inline-block;
          margin
          "></a>

      </div>  --}}
  </div>{{-- /#rsvp --}}
  {{-- /Jumbotron --}}

</header>



<div id="top"></div>

<div class="marketing">



  <!-- The Big Day Section -->
  <section id="bigday" class="container">
    <div class="row featurette">
      <div class="col-md-6 col-lg-6">
          <h2 class="featurette-heading">Thank You</h2>
          <p>Mahalo for making the trip out to Kona to help us celebrate our special day :) We know traveling out to the middle the Pacific is no easy feat and we feel so lucky that all of you came out to be there with us.  We hope you had a wonderful time in paradise.  For us, we will always look back on the days we shared with all of you in Kona with such happiness and love.  Thank you so much for being part of the best day (and party) of our lives!</p>
          <p>Now that we are back in the mainland, we are hoping to gather up as many photos and videos from our wedding week so that we can relive the moments again and again.  If you have any pictures or videos from the ceremony, dinner, dance party, afterparty, Friday pool party, Sunday brunch - or anything else - please click the link below to send these memories with us - we can't wait to see them!</p>
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#dropModal">Upload your pics</button>
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



  <!-- Venue Section -->
  <div>
    <section id="venue">  {{-- REMOVED .PAGE and .container-fluid --}}
    </section>
  </div>
  <!-- /Venue Section -->



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
          <p>We feel so fortunate that you all could make the trip and help us celebrate our special day! For those who would like to give a card or gift, please see our information below.</p>
          <p><b>Mailing address:</b> Nakissa &amp; Dom, 140 South Van Ness Ave, #309, San Francisco, CA 94103</p>
          <p><a href="https://www.paypal.me/nakissandom" target="_blank"><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="PayPal" style="
            -webkit-border-radius: 28;
            -webkit-border-radius: 28;
            -moz-border-radius: 28;
            border-radius: 28px;
            -webkit-box-shadow: 0px 1px 3px #666666;
            -moz-box-shadow: 0px 1px 3px #666666;
            box-shadow: 0px 1px 3px #666666;
            font-family: Arial;
            color: #ffffff;
            font-size: 20px;
            background: #ffffff;
            padding: 10px 20px 10px 20px;
            /* border: solid #1f628d 1px; */
            text-decoration: none;"/></a></p>
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
          <p>If you have any thoughts, memories, or y&nbsp;-&nbsp;e&nbsp;-&nbsp;s even advice, we’d love to hear from you.</p>
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
          <p>Do you have questions about accommodations, scheduling, or the event? Please don’t hesitate to contact us!</p>
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

@include('partials._guestbook-form')
@include('partials._contact-form')
@include('partials._dropittome')


@stop
