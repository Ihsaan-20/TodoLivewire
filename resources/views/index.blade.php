<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">
    <script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>
    <title>Todo | App</title>

</head>
<body>
   <div class="container">
    <div class="row py-4">
       @livewire('todo-list')
    </div>
   </div>
</body>
</html>
