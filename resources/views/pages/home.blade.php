@extends('default.master')

@section('content')


<header>

{{-- Fixed navbar --}}




@include('partials._nav')


{{-- End Navbar --}}






{{-- Jumbotron --}}
<div id="rsvp" class="jumbotron "> {{-- .fullheight - adjusts element to takeup entire viewpoint via js --}}
  <div class="container">
    <h1><span class="title">Nakissa <strong>&amp;</strong> Dom</span><br>
    are getting married!</h1>
    <p>Join us October 17th in Kailua-Kona, Hawaii</p>
    
 <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">RSVP Today</button>

    
  </div>{{-- /.container --}}
</div>{{-- /#rsvp --}}
{{-- /Jumbotron --}}

</header>


 

<!-- Modal -->
@include('partials._form')
{{-- /Modal --}}



<div class="marketing">


  {{-- The Big Day Section --}}
  <section id="bigday" class="container page">
    <div class="row featurette">
      <div class="col-md-6 col-lg-6 col-lg-offset-1">
        <div class="r-pad">
          <h2 class="featurette-heading">The Big Day</h2>
          <p>On October 17th, 2015, we're getting married in beautiful Kailua-Kona, located on the Big Island of Hawaii. We are so excited to celebrate this special occasion with the family and friends we love and who have meant so much to us throughout the years.</p>
          <p>The ceremony will begin at 4:00pm, directly followed by cocktail hour and reception. Attire for the evening will be semiformal / cocktail.</p> 
        </div>
      </div>
      <div class="col-md-5 col-lg-5">
        <div class="l-pad">
          <img class="featurette-image img-responsive center-block img-circle visible-md-block visible-lg-block" src="img/kiss.jpg">{{-- Hidden on at > 991px --}}
        {{-- .img-thumbnail - BEVEL --}}
        </div>
      </div>
    </div>{{-- /.row.featurette --}}
  </section>
  {{-- /Big Day Section --}}
 

{{-- Venue Section --}}

  <section id="venue" class="container page">
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
        <p>From vacation rentals to hotels, the Big Island offers a wide variety of lodging accommodations. A quick ten minute drive from our venue in Kailua-Kona, you’ll find numerous hotel options.</p>
        <p>We’ve worked with the Sheraton to secure a special group rate for our guests of $149 / night. You can book this rate <a href="http://nakissandom.com/getaroom" title="nakissandom.com/getaroom">online</a> or call <a href="tel:1-844-235-6796">1-844-235-6796</a> and mention the “Gradert-McKellar Wedding.”</p>
        <p>The hotel address is 78-128 Ehukai Street, Kailua-Kona, HI 96740.</p>
        <p><a class="btn btn-primary btn-lg" href="http://nakissandom.com/getaroom" target="_blank">Book Now</a></p>
      </div>
    </div>
  </div>{{-- /.row.featurette --}}
</section>
<!-- /Get a Room Section -->


<!-- Fun Section -->
<div id="fun">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    {{--  Indicators  --}}
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      {{-- <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
      <li data-target="#myCarousel" data-slide-to="9"></li>
      <li data-target="#myCarousel" data-slide-to="10"></li>
      <li data-target="#myCarousel" data-slide-to="11"></li> --}}
    </ol>
    {{--  /Indicators  --}}

    {{-- Wrapper for Slides --}}
    <section class="carousel-inner">

      {{-- First Slide --}}
      <div class="item active">
        <img src="img/fun/1e.jpg" alt="">
        <div class="carousel-caption">
          <h3>Stargaze ontop of Mt. Mauna Kea</h3>
          <p>A magical place on the island - this is where Dom proposed :).</p>
          <p>
            <a class="btn btn-primary btn-lg" href="http://www.lovebigisland.com/stargazing/" target="_blank">Learn More</a>
          </p>
        </div>
      </div>{{-- /.item. --}}

      {{-- Second Slide --}}
      <div class="item">
        <img src="img/fun/2d.jpg" alt="">
        <div class="carousel-caption">
          <h3>Snorkelling at Captain Cook Bay</h3>
          <p>Take a hike or a boat down to one of the most beautiful snorkeling locations in all of Hawaii!</p>
          <a class="btn btn-primary btn-lg" href="http://www.bigislandguru.com/snorkel-kealakekua-bay.html" target="_blank">Learn More</a>
        </div>
      </div>{{-- /.item --}}

      {{-- Third Slide --}}
      <div class="item">
        <img src="img/fun/6a.jpg" alt="">
        <div class="carousel-caption">
          <h3>Volcano &amp; Lava</h3>
          <p>Flowing lava and steaming vents show the earth in action.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="http://www.lovebigisland.com/hawaii-volcanoes-national-park/" target="_blank">Learn More</a>
          </p>
        </div>
      </div>{{-- /.item --}}

      {{-- Fourth Slide --}}
      <div class="item">
        <img src="img/fun/3.jpg" alt="">
        <div class="carousel-caption">
          <h3>Manta Ray Night Diving</h3>
          <p>Go under the (illuminated) sea to swim with large Manta Rays.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="http://www.lovebigisland.com/big-island-manta-ray-night-dive/" target="_blank">Learn More</a>
          </p>
        </div>
      </div>{{-- /.item --}}

      {{-- Fifth Slide --}}
{{--       <div class="item">
          <img src="#" alt="">
        <div class="carousel-caption">
          <h3>Art &amp; Museums</h3>
          <p>Lorem ipsum Nostrud amet aute voluptate ea et esse dolore cillum ad ea consectetur laboris eiusmod commodo dolor sunt dolor ea esse tempor voluptate pariatur est aute amet.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="#" target="_blank">Learn More</a>
          </p>
        </div>
      </div> --}}{{-- /.item --}}

      {{-- Sixth Slide --}}
{{--       <div class="item">
      <img src="#" alt="">
        <div class="carousel-caption">
          <h3>Beaches</h3>
          <p>Lorem ipsum Proident dolore aute adipisicing et Duis quis laboris culpa proident cillum consequat Excepteur consectetur mollit commodo pariatur culpa do nostrud minim proident ea. Lorem ipsum Qui velit dolore laboris aliquip incididunt officia laborum exercitation ex.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="#" target="_blank">Learn More</a>
          </p>
        </div>
      </div> --}}
      {{-- /.item --}}

      {{-- Seventh Slide --}}
{{--       <div class="item">
          <img src="#" alt="">
        <div class="carousel-caption">
          <h3>Coffee Tours &amp; Tastings</h3>
          <p>Lorem ipsum Laborum dolore amet ea commodo nisi sed nisi magna labore ea Duis consequat dolore velit adipisicing qui tempor elit nisi sint dolore proident ea voluptate et nisi laboris eiusmod. Lorem ipsum Nulla minim officia dolore anim proident.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="#" target="_blank">Learn More</a>
          </p>
        </div>
      </div> --}}{{-- /.item --}}

      {{-- Eighth Slide --}}
{{--       <div class="item">
          <img src="#" alt="">
        <div class="carousel-caption">
          <h3>Hiking &amp; Horseback Riding</h3>
          <p>Lorem ipsum Deserunt minim enim Duis cillum labore cillum quis mollit fugiat sint eiusmod elit dolore voluptate in dolore est veniam irure labore. Lorem ipsum Elit cillum proident tempor culpa Excepteur irure fugiat elit sed magna do adipisicing quis quis.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="#" target="_blank">Learn More</a>
          </p>
        </div>
      </div> --}}{{-- /.item --}}

      {{-- Ninth Slide --}}
      <div class="item">
        <img src="img/fun/5.jpg" alt="">
        <div class="carousel-caption">
          <h3>Golf</h3>
          <p>Enjoy some of the best golfing Hawaii has to offer.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="http://www.aloha-hawaii.com/big-island/things-to-do/activities/golf/" target="_blank">Learn More</a>
          </p>
        </div>
      </div>
      {{-- /.item --}}

      {{-- Tenth Slide --}}
{{--       <div class="item">
        <img src="#" alt="">
        <div class="carousel-caption">
          <h3>Scenic Drives</h3>
          <p>Lorem ipsum Ad eu amet officia velit aliquip occaecat ut proident adipisicing exercitation voluptate velit laborum eu in exercitation non proident anim laboris elit eiusmod adipisicing pariatur nulla officia quis. Lorem ipsum Dolore consequat eiusmod.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="#" target="_blank">Learn More</a>
          </p>
        </div>
      </div> --}}
      {{-- /.item --}}
      

      {{-- Eleventh Slide --}}
      {{-- <div class="item">
      <img src="#" alt="">
        <div class="carousel-caption">
          <h3>Scuba Diving &amp; Snorkelling</h3>
          <p>Lorem ipsum Occaecat adipisicing in voluptate minim ut do quis eiusmod in ullamco Ut consequat in nostrud Ut enim magna incididunt aliqua culpa est laboris enim in pariatur fugiat velit. Lorem ipsum Et anim in nulla sit cillum.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="#" target="_blank">Learn More</a>
          </p>
        </div>
      </div> --}}
      {{-- /.item --}}

      {{-- Twelfth Slide --}}
      <div class="item">
        <img src="img/fun/9.jpg" alt="">
        <div class="carousel-caption">
          <h3>Top Ten Activities</h3>
          <p>Checkout the top ten experiences on the Big Island according to the “experts”.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="http://www.lonelyplanet.com/usa/hawaii/travel-tips-and-articles/77680" target="_blank">Learn More</a>
          </p>
        </div>
      </div> {{-- /.item --}}

    </section>{{-- /.carousel-inner --}}
    {{-- /Wrapper for Slides --}}
    
    {{-- Controls --}}
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    {{-- end Controls --}}

  </div>{{-- /.myCarousel --}}
</div>{{-- /#fun --}}
<!-- /Fun Section -->



<!-- Guest Book Section -->
<section id="guestbook" class="container page">
  <div class="row featurette">
    <div class="col-md-6 col-lg-6">
      <div class="l-pad">
        <h2 class="featurette-heading">Sign our Guestbook</h2>
        <p>Do you care are to share? If you have any thoughts, memories, or y-e-s even advice, we’d love to hear from you. Just remember this is a public forums, so please keep it PG-13 :b{{-- <i class="fa fa-smile-o fa-lg"></i> --}}</p>
        <p><strong>Coming Soon!</strong></p>
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
    {{-- <section id="story"> --}}
      <div id="featured" class="carousel fade" data-ride="carousel">
        <ol class="carousel-indicators">
        </ol>
        <div class="carousel-inner fullheight">
          <div class="item"><img src="img/story/2007b.jpg" alt=""></div>
          <div class="item"><img src="img/story/2007c.jpg" alt=""></div>
          <div class="item"><img src="img/story/2007a.jpg" alt=""></div>
          <div class="item"><img src="img/story/2008.jpg" alt=""></div>
          <div class="item"><img src="img/story/2008a.jpg" alt=""></div>
          <div class="item"><img src="img/story/2008c.jpg" alt=""></div>
          <div class="item"><img src="img/story/2008b.jpg" alt=""></div>
          <div class="item"><img src="img/story/2009.jpg" alt=""></div>
          <div class="item"><img src="img/story/2009a.jpg" alt=""></div>
          {{-- <div class="item"><img src="img/story/2009b.jpg" alt=""></div> --}}
          <div class="item"><img src="img/story/2010c.jpg" alt=""></div>
          <div class="item"><img src="img/story/2012.jpg" alt=""></div>
          <div class="item"><img src="img/story/2013a.jpg" alt=""></div>
          {{-- <div class="item"><img src="img/story/2013b.jpg" alt=""></div> --}}
          <div class="item"><img src="img/story/2014c.jpg" alt=""></div>
          <div class="item"><img src="img/story/2014.jpg" alt=""></div>
          <div class="item"><img src="img/story/2014a.jpg" alt=""></div>
          <div class="item"><img src="img/story/2014b.jpg" alt=""></div>
        </div>{{-- .carousel-inner.fullheight --}}
        <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#featured" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>{{-- /#featured --}}
    {{-- </section> --}}
    <!-- /Story Section -->


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
            <p>Your presence at our wedding is our present :) We feel very fortunate that you will be making the trip to help us celebrate our special day! As a result we have not created a wedding registry. However, if you would like to give a gift, please visit our honeyfund page for more information..</p>
            <p><a class="btn btn-primary btn-lg" href="http://www.honeyfund.com/wedding/nakissandom" target="_blank">Learn More</a></p>
          </div>
        </div>
      </div>{{-- /.row.featurette --}}
    </section>
    <!-- /Registry Section -->



{{-- View Background img --}}
<div id="view">
<div class="container page">

</div>
</div>
{{-- /Looking Down pic --}}


<!-- Contact Section -->
<section id="contact" class="container page"> 
  <div class="row featurette">
    <div class="col-md-6 col-lg-6">
      <div class="r-pad">
        <h2 class="featurette-heading">Contact Us</h2>
        <p>Do you have questions about the accommodations, scheduling, or the event? Please don’t hesitate to contact us!<br>
          <a href="mailto:nakissandom@gmail.com?subject=question"><strong>nakissandom@gmail.com</strong> <i class="fa fa-envelope-o fa-lg"></i></a>
        </p>
      </div>
    </div>
    <div class="col-md-6 col-lg-5 col-lg-offset-1">
      <div class="l-pad">
        <img class="featurette-image img-responsive center-block img-circle" src="img/smile.jpg">
        {{-- visible-md-block visible-lg-block --}}
      </div>
    </div>
  </div>{{-- /.row.featurette --}}
</section>
<!-- /Contact Section -->




{{-- <hr class="featurette-divider"> --}}


    {{-- Footer Section--}}
{{--       <footer class="row">
        <p class="pull-right"><a href="#rsvp">Back to top</a></p>
        <p>&copy; 2015 nakissandom</p>
      </footer> --}}

</div>{{-- /.container.marketing --}}

@stop