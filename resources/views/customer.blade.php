<!doctype html>
<html lang="en">
  <head>
    <title>index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body cass ="bg-dark">
      <form action="{{url('/')}}/customer" method ="post">
        @csrf
        <div class ="container mt-4 card p-3 bg-white">
        <h1 class = "text-center text-primary">
            customer registration
        </h1>
        <div class="row">
        <!-- <form> -->
  <!-- <div class="form-row"> -->
    <div class="form-group col-md-6">
      <label for="">name</label>
      <input type="text" class="form-control" id="" name="name"/>
      <span class ="text-danger">
          @error('name')
              {{$message}}
          @enderror
      </span>
    </div>

    <div class="form-group col-md-6">
      <label for="">Email</label>
      <input type="text" class="form-control" id="" name="email"/>
      <span class ="text-danger">
          @error('email')
              {{$message}}
          @enderror
      </span>
    </div>
    <div class="form-group col-md-6">
      <label for="">password</label>
      <input type="text" class="form-control" id="" name="password"/>
      <span class ="text-danger">
          @error('password')
              {{$message}}
          @enderror
      </span>
    </div>
    <div class="form-group col-md-6">
      <label for="">country</label>
      <input type="text" class="form-control" id="" name="country"/>
      <span class ="text-danger">
          @error('country')
              {{$message}}
          @enderror
      </span>
    </div>
    <div class="form-group col-md-6">
      <label for="">state</label>
      <input type="text" class="form-control" id="" name="state"/>
      <span class ="text-danger">
          @error('state')
              {{$message}}
          @enderror
      </span>
    </div>
    
  <div class="form-group col-md-6">
    <label for="">Address</label>
    <input type="text" class="form-control" id="" name ="address">
    <span class ="text-danger">
          @error('address')
              {{$message}}
          @enderror
      </span>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
<!-- </form> -->
        </div>
        </div>
      </form>
  </body>
</html>