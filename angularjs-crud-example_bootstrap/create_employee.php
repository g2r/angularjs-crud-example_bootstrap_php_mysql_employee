<?php
// get database connection
include_once 'config/database.php';
 
$database = new Database();
$db = $database->getConnection();
 
// instantiate employee object
include_once 'objects/employee.php';
$employee = new Employee($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input")); 
 
// set employee property values
$employee->name = $data->name;
$employee->salary = $data->salary;
$employee->dept = $data->dept;
$employee->created = date('Y-m-d H:i:s');
     
// create the employee
if($employee->create()){
    echo "Employee was created.";
}
 
// if unable to create the employee, tell the user
else{
    echo "Unable to create employee.";
}
?>