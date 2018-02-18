<h1>Create Employee</h1>
<form action="{{url('/employee')}}" method="post">
    {{ csrf_field() }}


    <input type="text" name="name" placeholder="name"><br><br>
    <input type="text" name="age" placeholder="age"><br><br>
     
    <input type="text" name="salary" placeholder="salary"><br><br>
    <input type="textarea" name="hobbies" placeholder="hobbies"><br><br>

    <input type="submit">

    </form>
        
