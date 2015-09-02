@extends('default.master')

@section('content')

<header>

{{-- Fixed navbar --}}

@include('partials._nav')


{{-- Jumbotron --}}
<div id="rsvp" class="jumbotron fullheight"> {{-- .fullheight - adjusts element to takeup entire viewpoint via js --}}
  <div class="container">
    <h1 class="title">Nakissa <span class="rwd-line">&amp;</span> Dom</h1>
    <h2>are getting married!</h2>
    {{-- <p>Join us October 17th in Kailua-Kona, Hawaii</p> --}}
    
 <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">RSVP Today</button>

    
  </div>{{-- /.container --}}
</div>{{-- /#rsvp --}}
{{-- /Jumbotron --}}

</header>


<div class="marketing">


  {{-- The Big Day Section --}}
  <section id="bigday" class="container">
    <div class="row featurette">
      <div class="col-md-6 col-lg-6">
        <div class="">
          <h2 class="featurette-heading">The Big Day</h2>
          <p>On October 17th, 2015, we're getting married in beautiful Kailua-Kona, located on the Big Island of Hawaii. We are so excited to celebrate this special occasion with the family and friends we love and who have meant so much to us throughout the years.</p>
          <p>The ceremony will begin at 4:00pm, directly followed by cocktail hour and reception.</p>
          <p>Attire for the evening is semiformal / cocktail.</p> 
        </div>
      </div>
      <div class="col-md-6 col-lg-5 col-lg-offset-1">
        <div class="pad hidden-sm hidden-xs">    {{-- REMOVE LATER --}}
          <img class="featurette-image img-responsive center-block img-circle visible-md-block visible-lg-block" src="img/kiss.jpg">{{-- Hidden on at > 991px --}}
        {{-- .img-thumbnail - BEVEL --}}
        </div>
      </div>
    </div>{{-- /.row.featurette --}}
  </section>
  {{-- /Big Day Section --}}
 

{{-- Venue Section --}}

  <section id="venue" class="container-fluid">  {{-- REMOVED .PAGE --}}
    <div class="row featurette">
      <div class="col-sm-6 col-centered text-center">
        <h2 class="featurette-heading">Wedding Venue</h2>
        <p>78-7102 Walua Road<br>
          Kailua Kona, HI 96740<br></p>
        </div>
      </div>{{-- /.row.featurette --}}
    </section>


{{-- Google Map --}}
{{-- <div id="google_map"  data-1000="opacity: 0;" data-2000="opacity: 1;"></div> --}}
{{-- /Venue Section --}}



<!-- Get a Room Section -->
<section id="room" class="container page"> 
  <div class="row featurette">
    <div class="col-md-6 col-lg-5">
      <div class="r-pad">
        <img class="featurette-image img-responsive center-block visible-md-block visible-lg-block" src="img/hotel.jpg">{{-- Hidden on at > 991px --}}
        {{-- .img-thumbnail - BEVEL --}}
      </div>
    </div>
    <div class="col-md-6 col-lg-6 col-lg-offset-1">
      <div class="l-pad">
        <h2 class="featurette-heading">Get a Room</h2>
        <p>From vacation rentals to hotels, the Big Island offers a wide variety of lodging accommodations. Just 20 mins from <a href="http://hawaii.gov/koa" target="_blank" title="Kona International Airport">KOA airport</a> and a quick 10 minute drive from our venue in Kailua-Kona, you’ll find numerous hotel options.</p>
        <p>We’ve worked with the Sheraton to secure a special group rate for our guests of $149 / night. You can book this rate <a href="http://nakissandom.com/getaroom" title="nakissandom.com/getaroom">online</a> or call <a href="tel:1-844-235-6796">1-844-235-6796</a> and mention the “Gradert-McKellar Wedding.”</p>
        <p>The hotel address is 78-128 Ehukai Street, Kailua-Kona, HI 96740.</p>
        <p><a class="btn btn-primary btn-lg" href="http://nakissandom.com/getaroom" target="_blank">Book Now</a></p>
      </div>
    </div>
  </div>{{-- /.row.featurette --}}
</section>
<!-- /Get a Room Section -->


<!-- Fun Section -->
@include('partials._fun')


<!-- Guest Book Section -->
<section id="guestbook" class="container page">
  <div class="row featurette">
    <div class="col-md-6 col-lg-6">
      <div class="l-pad">
        <h2 class="featurette-heading">Sign our Guestbook</h2>
        <p>If you have any thoughts, memories, or y-e-s even advice, we’d love to hear from you. Just remember this is a public forum, so please keep it PG-13 <i class="fa fa-smile-o fa-lg"></i></p>


 <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gbModal">Guestbook</button>



      </div>
    </div>
    <div class="col-md-6 col-lg-5 col-lg-offset-1">
      <div class="r-pad">
        <img class="featurette-image img-responsive center-block visible-md-block visible-lg-block" src="img/gb.jpg">{{-- Hidden on at > 991px --}}
        {{-- .img-thumbnail - BEVEL --}}
      </div>
    </div>
  </div>{{-- /.row.featurette --}}
</section>
<!-- /Guest Book Section -->





<!-- Story Section -->
@include('partials._story')






    <!-- Registry Section -->
    <section id="registry" class="container page">
      <div class="row featurette">
        <div class="col-md-6 col-lg-5">
          <div class="r-pad"> 
            <img class="featurette-image img-responsive center-block visible-md-block visible-lg-block" src="img/gift.jpg">{{-- Hidden on at > 991px --}}
            {{-- .img-thumbnail - BEVEL --}}
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-lg-offset-1">
          <div class="l-pad">
            <h2 class="featurette-heading">Registry</h2>
            <p>Your presence at our wedding is our present :) We feel very fortunate that you will be making the trip to help us celebrate our special day! As a result we have not created a wedding registry. However, if you would like to give a gift, please visit our honeyfund page for more information.</p>
            <p><a class="btn btn-primary btn-lg" href="http://www.honeyfund.com/wedding/nakissandom" target="_blank">Learn More</a></p>
          </div>
        </div>
      </div>{{-- /.row.featurette --}}
    </section>
    <!-- /Registry Section -->



{{-- View Background img --}}
<div id="view">
<div class="container"> {{-- REMOVED .PAGE --}}

</div>
</div>
{{-- /Looking Down pic --}}


<!-- Contact Section -->
<section id="contact" class="container page"> 
  <div class="row featurette">
    <div class="col-md-6 col-lg-6">

        <h2 class="featurette-heading">Contact Us</h2>
        <p>Do you have questions about accommodations, scheduling, or the event? Please don’t hesitate to contact us!</p>
         <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contactModal">Contact</button>
    </div>
    <div class="col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
      <div class="pad">
        <img class="featurette-image img-responsive center-block img-circle" src="img/smiles.jpg">
        {{-- visible-md-block visible-lg-block --}}
      </div>
    </div>
  </div>{{-- /.row.featurette --}}
</section>
<!-- /Contact Section -->



</div>{{-- /.container.marketing --}}

<!-- Modal -->
@include('partials._rsvp-form')
@include('partials._guestbook-form')
@include('partials._contact-form')



@stop