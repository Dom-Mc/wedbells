        @if ($errors->any())
          <ul class="alert-danger" style="list-style-type: none;">
            @foreach ($errors->all() as $error)
              <li class="text-center">{{ $error }}</li>
            @endforeach
          </ul>
        @endif