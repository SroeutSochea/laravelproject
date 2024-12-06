<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Administrator</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <x-header/>
        </div>
        <div class="row">
            <div>
                <x-menu/>
            </div>
            <div class="col-12">
                <h3 class="alert alert-success text-center" role="alert">
                    List of Products
                </h3>
                <div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)


                          <tr>
                            <th scope="row">{{$item->pro_id}}</th>
                            <td>{{$item->pro_name}}</td>
                            <td>{{$item->price}}</td>
                            <td>
                                <a href="{{route('products_view',['id'=>$item->pro_id,'name'=>str_replace(' ','-',$item->pro_name)])}}" class="btn btn-outline-info">View</a>
                                <a href="{{route('products_edit',['id'=>$item->pro_id,'name'=>str_replace(' ','-',$item->pro_name)])}}" class="btn btn-outline-secondary">Edit</a>
                                <a href="{{route('products_delete',['id'=>$item->pro_id,'name'=>str_replace(' ','-',$item->pro_name)])}}" class="btn btn-outline-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="d-flex justify-content-center">
                        {!! $products->links('pagination::bootstrap-5') !!}
                    </div>
                      <a href="{{route("products_save")}}" class="btn btn-outline-primary">Add New Product</a>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <x-footer/>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
