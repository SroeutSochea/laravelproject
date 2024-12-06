<!doctype html> 
<html lang="en"> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Categories</title> 
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css 
    " rel="stylesheet" integrity="sha384- 
    T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous"> 
</head> 
<body> 
    <div class="container-fluid"> 
        <div class="row"> 
            <x-header parheader="Success"/> 
        </div> 
        <div class="row"> 
            <div class="col-12"> 
                <x-menu paruser="XYZ"/> 
            </div> 
            <div class=""> 
                <h3 class="alert alert-primary text-center" role="alert"> 
                List of Categories 
                </h3> 
                @if(Session()->has('save')) 
                    <div class="alert alert-success text-center" role="alert"> 
                        {{ Session()->get('save') }} is saved!!! 
                        {{ Session()->forget('save') }} 
                    </div> 
                @endif 
                <table class="table"> 
                    <thead> 
                      <tr> 
                        <th scope="col">Category ID</th> 
 
                        <th scope="col">Category Name</th> 
                        <th scope="col">Ordered By</th> 
                        <th scope="col">Action</th> 
                        <!-- <th scope="col" colspan="3" class="text-center">Action</th> -->
                      </tr> 
                    </thead> 
                    <tbody> 
                        @foreach ($categories as $Itm) 
                      <tr> 
                        <th scope="row">{{ $Itm->cat_id }}</th> 
                        <td>{{ $Itm->cat_name }}</td> 
                        <td>{{ $Itm->ordered_by }}</td> 
                        <td> 
                            <a href="{{route('category_view',['id'=>$Itm->cat_id,'name'=>str_replace(' ', '-',$Itm->cat_name)])}}" class="btn btn-outline-info">View</a> 
                            <a href="{{route('category_edit',['id'=>$Itm->cat_id,'name'=>str_replace(' ', '-',$Itm->cat_name)])}}" class="btn btn-outline-success">Update</a> 
                            <a href="{{route('category_delete',['id'=>$Itm->cat_id,'name'=>str_replace(' ', '-',$Itm->cat_name)])}}" class="btn btn-outline-danger">Delete</a> 
                        </td> 
                      </tr> 
                      @endforeach 
                    </tbody> 
                </table> 
                <div class="d-flex justify-content-center"> 
                    {!! $categories->links('pagination::bootstrap-5') !!} 
                </div> 
                <a href="{{ route('categories-save') }}" class="btn btn-outline-danger"> 
                    Add New Category 
                </a> 
            </div> 
        </div>
        <br> 
        <div class="row"> 
            <x-footer pardesigner="XYZ" paryear="2021-2022"/> 
        </div> 
    </div> 
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.mi 
    n.js" integrity="sha384- 
    C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script> 
    </body> 
</html> 