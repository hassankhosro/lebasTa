@if ($errors->any())
    <div style="margin: 10px!important;margin-top:60px!important" class="alert alert-danger">
        <ul style="padding: 15px">
            @foreach ($errors->all() as $error)
                <li style="padding: 5px;font-family:IRANSans, Helvetica Neue, Roboto, Arial, Droid Sans, sans-serif">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
