<?php
// include database and object file
include_once 'config/database.php';
include_once 'objects/employee.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare employee object
$employee = new Employee($db);
 
// get employee id
$data = json_decode(file_get_contents("php://input"));     
 
// set employee id to be deleted
$employee->id = $data->id;
 
// delete the employee
if($employee->delete()){
    echo "Employee was deleted.";
}
 
// if unable to delete the employee
else{
    echo "Unable to delete object.";
}
?>