<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title> Hello world</title>
<body> 
    <ul>
   <li><a href="{{ url('/news') }}">Все новости</a></li>
   
    </ul>
    <ul>
        @foreach ($tasks as $task)
         <li>{{$tasks->body}}</li>
        @endforeach
    </ul>
</body>


</html>


