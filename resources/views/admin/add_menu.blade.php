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
  </div>
    {{session()->get('message')}}
    @endif
        <form action="{{url('upload_menu')}}" method="POST" enctype="multipart/form-data">

        @csrf

        
            <div style="padding:15px;">
                <label>Menu Name</label>
                <input type="text" style="color:black;" name="name" placeholder="Write the name" Required="">

            </div>
            <div style="padding:15px;">
                <label>Categories</label>
                <select style="color:black; width: 200px">
                <option>--Select--</option>
                <option value="Drink">Drink</option>
                <Option value="Lunch">Lunch</option>
                <Option value="Dinner">Dinner</option>
              </select>

            </div>
            <div style="padding:15px;">
                <label>Price</label>
                <input type="varchar" style="color:black;" name="price" placeholder="Enter the price" Required="">

            </div>

            <div style="padding:15px;">
                <label>Description</label>
                <input type="text" style="color:black;" name="description" placeholder="Write the description" Required="">

            
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