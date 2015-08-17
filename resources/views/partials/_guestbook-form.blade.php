<div id="gbModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h2 class="modal-title text-center">Guestbook</h2>
        <p class="text-center">Thank you for taking the time to sign our guestbook!</p>

        {{-- ERRORS --}}
        @include ('errors._list')

      </div>{{-- /.modal-header --}}

      <div class="modal-body">

        <!-- Form Start -->
        {!! Form::open() !!}
        
        <section class="form-horizontal">
          <div class="form-group">
            {!! Form::label("name", "Name:", ["class" => "col-sm-4 control-label"]) !!}
            <div class="col-sm-6">
              {!! Form::text("name", null, ["class" => "form-control", "placeholder" => "You Name"]) !!}
            </div>
          </div>
          <div class="form-group"> 
            {!! Form::label("message", "Message:", ["class" => "col-sm-4 control-label"]) !!}
            <div class="col-sm-6">
              {!! Form::textarea("message", null, ["class" => "form-control", "placeholder" => "Leave a Message", 'rows' => 2]) !!}
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
</div>{{-- /#gbModal --}}