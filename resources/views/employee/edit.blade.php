<h1>Edit Employee</h1>
<form action="{{url('/employee)}}" method="post">
     {{ csrf_field() }}

{{ method_field('PUT') }}

    <input type="text" name="name" placeholder="name"><br><br>
    <input type="text" name="age" placeholder="age"><br><br>
    <input type="text" name="name" placeholder="name"><br><br>
    <input type="text" name="salary" placeholder="salary"><br><br>
    <input type="textarea" name="hobbies" value="{{$employee->name}}"><br><br>

    <input type="submit">

    </form>
        


