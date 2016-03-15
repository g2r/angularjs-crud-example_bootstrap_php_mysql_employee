<?php 
// include database and object files
include_once '../config/database.php';
include_once '../objects/employee.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare employee object
$employee = new Employee($db);
 
// get id of employee to be edited
$data = json_decode(file_get_contents("php://input"));     
 
// set ID property of employee to be edited
$employee->id = $data->id;
 
// read the details of employee to be edited
$employee->readOne();
 
// create array
$employee_arr[] = array(
    "id" =>  $employee->id,
    "name" => $employee->name,
    "dept" => $employee->dept,
    "salary" => $employee->salary
);
 
// make it json format
print_r(json_encode($employee_arr));
?>