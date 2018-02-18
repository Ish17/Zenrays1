<h1>Create Employee</h1>
<form action="{{url('/employeedetail)}}" method="post">
    {{csrf_field() }}


    <input type="text" name="employee_id" placeholder="employee_id"><br><br>
    <input type="text" name="pancrd_no" placeholder="pancrd_no"><br><br>
    <input type="text" name="passport_no" placeholder="passport_no"><br><br>

 

    <input type="submit">

    </form>
        
