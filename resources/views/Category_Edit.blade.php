<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Category</title>
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
                    List of Category
                </h3>
                @if(Session()->has("edit"))
            <div class="alert alert-success text-center" role="alert">
                {{ Session()->get("edit")}} is saved!!!
              </div>
              {{Session()->forget("edit")}}
                @endif
                <div>
                    @foreach ($category as $Itm)
                    <form action="{{route('category_edit_post',['id'=>$id,'name'=>str_replace(' ','-',$name)])}}" method="POST">
                        @csrf

                        <div> 
                            <label for="id_cat" class="label-control">Category ID :</label> 
                            <input value="{{$Itm->cat_id}}" type="number" readonly name="txt_catid" class="form-control" id="id_cat" required> 
                        </div>
                        <div> 
                            <label for="id_catname" class="label-control">Categories Name :</label> 
                            <input value="{{$Itm->cat_name}}" type="text" name="txt_catname" class="form-control" id="id_catname" required> 
                        </div> 
                        <div> 
                            <label for="id_orderedby" class="label-control">Ordered By :</label> 
                            <input value="{{$Itm->ordered_by}}" type="number" name="txt_orderedby" class="form-control" id="id_orderedby" required> 
                        </div> 
                        <div class="m-3"> 
                            <button type="submit" class="btn btn-outline-primary">Update</button>
                            <a href="{{route('categories')}}"class="btn btn-outline-info">Cancel</a>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
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
