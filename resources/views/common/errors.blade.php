
<!-- vista parcial traido desde create.blade.php para implementarlo en cualquier sitio-->
@if ($errors->any())
    <div class = "alert alert-danger" id = "error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>          
            @endforeach
        </ul>
    </div> 
@endif