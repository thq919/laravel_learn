<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title> Hello world</title>
<body> 
   
    <ul>
        @foreach ($tasks as $task)
         <li>{{$tasks->body}}</li>
        @endforeach
    </ul>
</body>


</html>


