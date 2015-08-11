<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h2 class="modal-title text-center">RSVP</h2>
        <p class="text-center">Please RSVP by August 31st, 2015 | For questions email:<br>
          <a href="mailto:nakissandom@gmail.com?subject=Questions">
            nakissandom@gmail.com <i class="fa fa-envelope-o"></i>
          </a>
        </p>


        {{-- ERRORS --}}
        @include ('errors._list')


      </div>{{-- /.modal-header --}}

      <div class="modal-body">

        <!-- Form Start -->
        {!! Form::open(['route' => 'store']) !!}
        
        {{-- Invitee Information section --}}
        <h3 class="info">Your Information:</h3>
        <section class="form-horizontal">
          <div class="form-group">
            {!! Form::label("first_name", "First Name:", ["class" => "col-sm-3 col-sm-offset-1 control-label"]) !!}
            <div class="col-sm-5">
              {!! Form::text("first_name", null, ["class" => "form-control", "placeholder" => "Your First Name"]) !!}
            </div>
          </div>
          <div class="form-group"> 
            {!! Form::label("last_name", "Last Name:", ["class" => "col-sm-3 col-sm-offset-1 control-label"]) !!}
            <div class="col-sm-5">
              {!! Form::text("last_name", null, ["class" => "form-control", "placeholder" => "Your Last Name"]) !!}
            </div>
          </div>
        </section>

        <hr>{{-- HORIZONTAL RULE --}}

        {{-- Guest Information section--}}
        <h3 class="info"><i class="fa fa-asterisk"></i>Guest Information:</h3> 
        <section class="form-horizontal">
          <div class="form-group">
            {!! Form::label("guest_first_name", "First Name:", ["class" => "col-sm-3 col-sm-offset-1 control-label"]) !!} 
            <div class="col-sm-5"> 
              {!! Form::text("guest_first_name", null, ["class" => "form-control", "placeholder" => "First Name of guest"]) !!}
            </div>
          </div>

          <div class="form-group">
            {!! Form::label("guest_last_name", "Last Name:", ["class" => "col-sm-3 col-sm-offset-1 control-label"]) !!}
            <div class="col-md-5"> 
              {!! Form::text("guest_last_name", null, ["class" => "form-control", "placeholder" => "Last Name of guest"] ) !!}
            </div>
          </div>
        </section>
        <p class="note"><i class="fa fa-asterisk"></i>Due to seating limitations, all guests must be prearranged. Please check with either Nakissa or Dom if you have any questions.</p>

        <hr>{{-- HORIZONTAL RULE --}}

        {{-- RSVP section--}}
        <h3 class="info">Will you be joining us in paradise?</h3>
        <section id="radios" class="form-group">
          {!! Form::label('reservation', null, ['class' => 'sr-only']) !!} {{-- Hidden Label --}}
          <div class="radio">
            <label>
              {!!Form::radio('reservation', 'Yes', true)!!}
              Yes, can’t wait!
            </label>
          </div>
          <div class="radio">
            <label>
              {!!Form::radio('reservation', 'No')!!}
              Unfortunately, I cannot attend
            </label>
          </div>
        </section>


        <hr>{{-- HORIZONTAL RULE --}}

        <!-- Text Area -->
        <h3 class="info">Wedding questions or comments:</h3>
        <div class="form-group">
          {!! Form::label('comments', 'Comments', ['class' => 'sr-only']) !!}
          {!! Form::textarea('comments', null, ['class' => 'form-control', 'rows' => 2]) !!}
        </div>

      </div>{{-- /.modal-body --}}

      <div class='modal-footer'>

        <div class="centered">
          {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-lg']) !!}

          {!! Form::close() !!}
        </div>



      </div>{{-- /.modal-footer --}}

   </div>{{-- /.modal-content --}}
 </div>{{-- /.modal-dialog --}}
</div>{{-- /#myModal --}}