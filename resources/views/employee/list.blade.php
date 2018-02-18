<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
</head>
<body>
        <h1>Employee Listing</h1>
        <a href="{{url('/employee/create')}}">Add Employee</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">age</th>
                    <th scope="col">salary</th>
                    <th scope="col">hobbies</th>
                    <th scope="col">actions</th>

        </tr>
        </thead>
            <tbody>
      @foreach($employees as $employee)
        <tr>

        <th>scope="row">{{$employee->id}}</th>
        <td><a href="{{url('/employee')}}/{{$employee->id}}">{{$employee->name}}</a></td>
        <td>{{$employee->age}}</td>
        <td>{{$employee->salary}}</td>
        <td>{{$employee->hobbies}}</td>
       <td><a href="{{url('/employee')}}/{{$employee->id}}/edit">Edit</a><br><form action="{{url('/employee')}}/{{$employee->id}}" method="post">{{ method_field('DELETE')}}{{csrf_field()}}<input type="submit" value="Delete"></form></td>



   </tr>
@endforeach
</tbody>
</table>


       
    </body>
</html>
