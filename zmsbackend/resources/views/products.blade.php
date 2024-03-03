<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Upload your products here</title>
    <style>
        .container {
            max-width: 60%;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        table{
            padding-left:0px !important;
            width: 100%;

  /* border: 1px solid; */
}
 th { 
    padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
 }   
 td{
    border: 1px solid #ddd;
  padding: 8px;


 } 
 .Row{
 display: table;
    width: 100%; /*Optional*/
    table-layout: fixed; 
    position: relative;
 }
 tr:nth-child(even){background-color: #f2f2f2; width:100%;}
 tr:hover {background-color: #ddd;width:100%;}

    </style>
</head>
<body>
    <div class="container mt-5">
        <form action="{{route('productsadd')}}" method="post" enctype="Content-Type/application/json">
            <h1 class="text-center mb-5" style="color:#ff0000">ZMS<span style="color:#000000">DASHBOARD</span></h1>
          <h3 class="text-center mb-5">Upload your products here</h3>
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif
           <div class="Row">
           
            <div class="text">
            
          
            <input type="name" name="name"  id="name" class="form-control" placeholder="Enter product's name here">
        </div>
        <br/>
       
          
            <div class="text">
                <input type="type" name="type"  id="type" class="form-control" placeholder="Enter product's type here">
            </div>
            <br/>

            <div class="text">
            
          
            <input type="size" name="size"  id="size" class="form-control" placeholder="Enter product's size here">
        </div>
            <br/>
            <div class="text">
                <input type="price" name="price"  id="prcie" class="form-control" placeholder="Enter product's price here">
            </div>
            

            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
               add prodcut
            </button>
            <br/>
</div>
           
    


<div align="start" style="width:100%">
    <table >
    <th>id</th>
    <th>name</th>
    <th>type</th>
    <th>size</th>
    <th>price</th>
    <th> </th>
    <th> </th>
    <th> </th>
    @foreach($infos as $info)
        <tr>
       
    
            <div style="background-color=#ff0000">
            <td>{{$info->id}}</td> <td>{{$info->name}}</td>  <td> {{$info->type}}</td><td> {{$info->size}}</td><td> {{$info->price}}</td> <td><a href="/api/remove/{{$info->id}}"> Remove </a></td></div>
            </tr>
    @endforeach
</table>
</div>


        </form>

          
    
   

</body>
</html>