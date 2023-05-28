<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


  </head>
  <body>



    <div class="container">


        <div class="card">
            <h5 class="card-header">Teacher Information
                <div class="col-md-12 text-right">
                    <a class="btn btn-info" href="{{route('crud1')}}">All Users</a>
                </div>

            </h5>
            <div class="card-body">
              <h5 class="card-title">Teacher List</h5>

              <div>
                <form action="{{route('teacher.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputname1">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputname1" required aria-describedby="emailHelp">

                      @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
        
                    <div class="form-group">
                        <label for="exampleInputPhone1">Phone</label>
                        <input type="text" required name="phone" class="form-control" id="exampleInputPhone1" aria-describedby="emailHelp">
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
        
        
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" required class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputaddress">Address</label>
                        <textarea class="form-control" required name="address" id="exampleInputaddress" cols="30" rows="10"></textarea>
                        @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
            </div>
          </div>


        

    </div>

    
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

    <script>
      $('#date-range').daterangepicker();
    </script>
  </body>
</html>