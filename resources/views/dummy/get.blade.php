<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        any con get
        <form action="{{ url('any') }}" method="get">
            <input type="submit" value="Submit"/>
        </form>
        <a href="{{ url('any') }}">any con get, sólo con get</a>
        <hr>
        any con delete
        <form action="{{ url('any') }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Submit"/>
        </form>
        <hr>
        any con post
        <form action="{{ url('any') }}" method="post">
            <input type="submit" value="Submit"/>
            @csrf
        </form>
        <hr>
        any con put
        <form action="{{ url('any') }}" method="post">
            <input type="submit" value="Submit"/>
            @method('put')
            @csrf
        </form>
        <hr>
        get
        <form action="{{ url('get') }}" method="get">
            <input type="submit" value="Submit"/>
            <a href="{{ url('get') }}">get con get, sólo con get</a>
        </form>
        <hr>
        delete
        <form action="{{ url('delete') }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Submit"/>
        </form>
        <hr>
        post
        <form action="{{ url('post') }}" method="post">
            @csrf
            <input type="submit" value="Submit"/>
        </form>
        <hr>
        put
        <form action="{{ url('put') }}" method="post">
            @method('put')
            @csrf
            <input type="submit" value="Submit"/>
        </form>
        <hr>
    </body>
</html>