<div id="contactModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h2 class="modal-title text-center">Contact Us</h2>
        <p class="text-center">Do you have a question or comment... let us know!</p>


        {{-- ERRORS --}}
       {{--  @include ('errors._contact-error') --}}


      </div>{{-- /.modal-header --}}

      <div class="modal-body">

        <!-- Form Start -->
        {!! Form::open(['route' => 'store_contact']) !!}
        
        {{-- Invitee Information section --}}
        <section class="form-horizontal">
          <div class="form-group">
            {!! Form::label("name", "Name:", ["class" => "col-sm-4 control-label"]) !!}
            <div class="col-sm-6">
              {!! Form::text("name", null, ["class" => "form-control input-x", "placeholder" => "Your Name"]) !!}
            </div>
          </div>
          <div class="form-group"> 
            {!! Form::label("message", "Message:", ["class" => "col-sm-4 control-label"]) !!}
            <div class="col-sm-6">
              {!! Form::textarea("message", null, ["class" => "form-control input-x", "placeholder" => "Leave a Question or Comment", 'rows' => 3]) !!}
            </div>
          </div>
        </section>

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