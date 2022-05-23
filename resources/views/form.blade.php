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
        <div class =  "container" >
            <h1 class ="text- center">registration</h1>
            <x-input type= "text" name = "name" label= "name"/>
            <x-input type= "email" name = "email" label= "email"/>
            <x-input type= "password" name = "password" label= "password" />
            <button class="btn btn-primary">submit</button>
</div>
</form>
    </body>
</html>