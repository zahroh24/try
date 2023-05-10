<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
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
        <div align="center" style="padding-top:100px;"> 
        <table>
            <tr align="center" style="background-color:navy;">
        <th style="padding:10px"> Menu Name</th>
        <th style="padding:10px"> Categories</th>
        <th style="padding:10px"> Description</th>
        <th style="padding:10px"> Price</th>
        <th style="padding:10px"> Image</th>
        <th style="padding:10px"> Delete</th>
        <th style="padding:10px"> Uptade</th>
</tr>
@foreach($data as $menu)
<tr align="center" style="background-color:skyblue;">
<td>{{$menu->Name}}</td>
<td>{{$menu->Categories}}</td>
<td>{{$menu->Description}}</td>
<td>{{$menu->Price}}</td>
<td><img height="50" width="100" src="menuimage/{{$menu->Image}}"></td>
<td><a onclick="return confirm('Are You Sure To Delete This?')" class="btn btn-danger" href="{{url('deletemenu',$menu->id)}}">Delete</a></td>
<td><a class="btn btn-primary" href="{{url('update_menu',$menu->id)}}">Update</a></td>
</tr>
@endforeach
</table>
        </div>
</div>
</div>
        
      </div>
      
    </div>
    
    @include('admin.js')
  </body>
</html>