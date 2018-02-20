@if(Session::get('errors'))
     <div id="form_errors" class="bg-danger">
       <ul>
       @foreach(Session::get('errors')->all() as $error)
           <li>{{ $error }}</li>
      @endforeach
      </ul>
     </div>
@endif
