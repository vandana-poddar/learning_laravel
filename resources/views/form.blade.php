<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form action ="{{url('/')}}/register" method ="post">
          @csrf
        <div class =  "container" >
            <h1 class ="text- center">registration</h1>
            <div class="form-group">
          <label for="">name</label>
          <input type="text" class="form-control" name="name" id="" aria-describedby="HelpId" placeholder=""/>
          
          <span>
            @error('name')
               {{$message}}
            @enderror
          </span><!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
        </div>
        <div class =  "container" >
       
        <div class="form-group">
          <label for="">email</label>
          <input type="email" class="form-control" name="email" id="" aria-describedby="HelpId" placeholder=""/>
          <span>
            @error('email')
               {{$message}}
            @enderror
          </span>
          <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
        </div>
        <div class =  "container" >
        <!-- <h1 class ="text- center">registration</h1> -->
        <div class="form-group">
          <label for="">password</label>
          <input type="password" class="form-control" name="password" id="" aria-describedby="HelpId" placeholder=""/>
         
          <span>
            @error('password')
               {{$message}}
            @enderror
          </span> <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
        </div>
        <button class="btn btn-primary">submit</button>
</form>
    </body>
</html>