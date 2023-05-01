<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <base href="/public">
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
      
      <div class="container-fluid page-body-wrapper">
        
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
        
       <div class="container" align="center" style="padding":100px>
       <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

        <div>
            <label>Menu Name</label>
            <input type="text" name="Name" value="{{$data->Name}}">
        </div>
        <div>
            <label>Categories</label>
            <input type="text" name="Categories" value="{{$data->Categories}}">
        </div>
        <div>
            <label>Price</label>
            <input type="varchar" name="Price" value="{{$data->Price}}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="Description" value="{{$data->Description}}">
        </div>
        
      </div>
      
    </div>
    
    @include('admin.js')
  </body>
</html>