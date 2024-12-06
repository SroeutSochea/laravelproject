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
                    Categories - Save 
                </h3> 
                <form action="{{ route('categories-save-submit') }}" method="POST" enctype="multipart/form-data"> 
                    @csrf 
                     <div> 
                        <label for="id_catname" class="label-control">Categories Name:</label> 
                        <input type="text" name="txt_catname" class="form-control" id="id_catname" required> 
                     </div> 
                     <div> 
                        <label for="id_orderedby" class="label-control">Ordered By:</label> 
                        <input type="number" name="txt_orderedby" class="form-control" id="id_orderedby" required> 
                     </div> 
                     <div class="m-3"> 
                        <button type="submit" name="btn_save" class="btn btn-outline-primary">Save</button> 
                        <button type="reset" name="btn_reset" class="btn btn-outline-danger">Reset</button> 
                    </div> 
                </form> 
            </div> 
        </div> 
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