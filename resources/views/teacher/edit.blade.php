<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>



    <div class="container">


        <div class="card">
            <h5 class="card-header">Teacher Information
                <div class="col-md-12 text-right">
                    <a class="btn btn-info" href="{{route('crud')}}">All Users</a>
                </div>

            </h5>
            <div class="card-body">
              <h5 class="card-title">Teacher List</h5>
              <div>
                <form action="{{route('teacher.update')}}" method="post">
                    @csrf
                    <input type="hidden" value="{{$teacher->id}}" name="teacher_id">
                    <div class="form-group">
                      <label for="exampleInputname1">Name</label>
                      <input type="text" value="{{$teacher->name}}" name="name" class="form-control" id="exampleInputname1" required aria-describedby="emailHelp">
                    </div>
        
                    <div class="form-group">
                        <label for="exampleInputPhone1">Phone</label>
                        <input type="text" value="{{$teacher->phone}}" required name="phone" class="form-control" id="exampleInputPhone1" aria-describedby="emailHelp">
                    </div>
        
        
        
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" required class="form-control" id="exampleInputEmail1" value="{{$teacher->email}}" name="email" aria-describedby="emailHelp">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputaddress">Address</label>
                        <textarea class="form-control" required name="address" id="exampleInputaddress" cols="30" rows="10">{{$teacher->address}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
            </div>
          </div>


        

    </div>
    



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>