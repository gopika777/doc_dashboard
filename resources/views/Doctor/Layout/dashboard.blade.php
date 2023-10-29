@section('title','dashboard')

@extends('Doctor.Layout.Doc.head')

@section('content')

<body>
    <!-- Sidebar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">DOCTOR DASHBOARD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
              <a class="nav-link active" aria-current="page" href="/doctor/login">Logout</a>
             
            </div>
            
          </div>
          
        </div>
      </nav><br><br>
    <div id="main">
        <div class='table'>

        
        <table class="table table-striped table-hover">
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Timing</th>
        </tr>
        @php
            $appoint = DB::table('appointment')->get();
            $i=0;
        @endphp
        @foreach($appoint as $a)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$a->name}}</td>
            <td>{{$a->email}}</td>
            <td>{{$a->timing}}</td>
        </tr>
        @endforeach
    </table>
        </div>
    </div>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@endsection