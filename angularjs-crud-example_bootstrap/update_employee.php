<?php 
// include database and object files
include_once 'config/database.php';
include_once 'objects/employee.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare employee object
$employee = new Employee($db);
 
// get id of employee to be edited
$data = json_decode(file_get_contents("php://input"));     
 
// set ID property of employee to be edited
$employee->id = $data->id;
 
// set employee property values
$employee->name = $data->name;
$employee->salary = $data->salary;
$employee->dept = $data->dept;
 
// update the employee
if($employee->update()){
    echo "Employee was updated.";
}
 
// if unable to update the employee, tell the user
else{
    echo "Unable to update employee.";
}
?>