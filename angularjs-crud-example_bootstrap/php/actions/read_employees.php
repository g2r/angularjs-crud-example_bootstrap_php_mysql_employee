<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/employee.php';
 
// instantiate database and employee object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$employee = new Employee($db);
 
// query employees
$stmt = $employee->readAll();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
     
    $data="";
    $x=1;
     
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
         
        $data .= '{';
            $data .= '"id":"'  . $id . '",';
            $data .= '"name":"'   . $name . '",';
            $data .= '"dept":"'   . html_entity_decode($dept) . '",';
            $data .= '"salary":"' . $salary . '"';
        $data .= '}'; 
         
        $data .= $x<$num ? ',' : ''; 
         
        $x++;
    }
}
 
// json format output
echo '{"records":[' . $data . ']}';
?>