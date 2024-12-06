<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Delete Prduct</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <x-header/>

        </div>
        <div class="row">
            <div class="">
                <x-menu/>
            </div>
            <div class="col-12">
                <h3 class="alert alert-danger text-center" role="alert">
                    Are you sure, you want to delete?
                </h3>
                <div>
                    <form action="{{route('products_delete_post',['id'=>$id,'name'=>str_replace(' ','-',$name)])}}" method="post">
                        <div class="mb-3 text-center">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">Ok</button>
                            <a href="{{route('products')}}"class="btn btn-outline-info">Cancel</a>
                          </div>
                    </form>
                </div>

                <div>
                    @foreach($products as $item)
                    <ul class="list-group">
                        <li class="list-group-item">
                            <b>Product ID :</b>
                            <i>{{$item->pro_id}}</i>
                        </li>
                        <li class="list-group-item">
                            <b>Product Name :</b>
                            <i>{{$item->pro_name}}</i>
                        </li>
                        <li class="list-group-item">
                            <b>Price :</b>
                            <i>{{$item->price}}</i>
                        </li>
                      </ul>
                      @endforeach
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
