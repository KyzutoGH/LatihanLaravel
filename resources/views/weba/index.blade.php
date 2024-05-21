<html>
    <head>
    </head>
    <body>
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}  
        </div><br />
        @endif
        {{ csrf_token() }}
    </br>
    ini index
    </body>
</html>