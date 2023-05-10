<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
    <!-- Required meta tags -->
  <style type="text/css">

    label
    {
      display: inline-block;

      width: 200px;
    }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          
        </div>
  </div>

@include('admin.sidebar')

        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding top: 100px;">
      @if(session()->has('message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-bs-dismiss="alert">
          x
    </button>
  </div>    {{session()->get('message')}}
    @endif
        <form action="{{url('upload_menu')}}" method="POST" enctype="multipart/form-data">

        @csrf

        
            <div style="padding:15px;">
                <label>Menu Name</label>
                <input type="text" style="color:black;" id="Name" name="Name" placeholder="Write the name" Required="">

            </div>
            
            <div style="padding:15px;">
                <label>Categories</label>
                <input type="text" style="color:black;" id="Categories" name="Categories" placeholder="(Drink, Food)" Required="">

            </div>
            <div style="padding:15px;">
                <label>Price</label>
                <input type="varchar" style="color:black;" id="Price" name="Price" placeholder="Enter the price" Required="">

            </div>

            <div style="padding:15px;">
                <label>Description</label>
                <input type="text" style="color:black;" id="Description" name="Description" placeholder="Write the description" Required="">
  </div>
            
            <div style="padding:15px;">
                <label>Menu Image</label>
                <input type="file"  name="file" >
            
            </div>
            <div style="padding:15px;">
            <input type="submit" class="btn btn-success">
            </div>
</form>

        
        
          
        </div>
        
      </div>
      
    </div>
    
    @include('admin.js')
  </body>
</html>