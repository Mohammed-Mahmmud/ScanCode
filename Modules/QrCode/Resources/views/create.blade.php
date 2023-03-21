<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>QR Code </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
<div style="display: flex; justify-content: center;">
<form method="get" action="{{ route('generate-qrcode') }}">
    <div class="container mt-4">
          <div class="card">
            <div class="card-header">
                <h2>QR Code</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="url" placeholder="name@example.com" name="url">
  	   <label for="url">Enter a URL</label><br>
       <button type="submit" class="btn btn-warning">Generate QR Code</button>
					</div>
            </div>



             @if(isset($qrcode))
                 <div class="card-body" id="data">
                {!! $qrcode !!} 
                    </div>
                    @endif
    </div>
</div>
</form>
         </div>
     </body>
    {{--  <script>
function validateInput() {
  var input = document.getElementById("url").value;
  if (input == null || input == "") {
    alert("Failed: Please enter a valid URL.");
    return false;
  }
  // continue with submission or other actions
}
</script> --}}
</html>