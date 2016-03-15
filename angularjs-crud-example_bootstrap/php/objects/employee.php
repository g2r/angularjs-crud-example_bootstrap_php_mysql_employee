<?php
class Employee{
      
    // database connection and table name
    private $conn;
    private $table_name = "employees";
      
    // object properties
    public $id;
    public $name;
    public $dept;
    public $salary;
    public $created;
      
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    
    // create product
function create(){
     
    // query to insert record
    $query = "INSERT INTO 
                " . $this->table_name . "
            SET 
                name=:name, salary=:salary, dept=:dept, created=:created";
     
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // posted values
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->salary=htmlspecialchars(strip_tags($this->salary));
    $this->dept=htmlspecialchars(strip_tags($this->dept));
 
    // bind values
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":salary", $this->salary);
    $stmt->bindParam(":dept", $this->dept);
    $stmt->bindParam(":created", $this->created);
     
    // execute query
    if($stmt->execute()){
        return true;
    }else{
        echo "<pre>";
            print_r($stmt->errorInfo());
        echo "</pre>";
 
        return false;
    }
}

// read employees
function readAll(){
 
    // select all query
    $query = "SELECT 
                id, name, dept, salary, created 
            FROM 
                " . $this->table_name . "
            ORDER BY 
                id DESC";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
     
    // execute query
    $stmt->execute();
     
    return $stmt;
}

// used when filling up the update product form
function readOne(){
     
    // query to read single record
    $query = "SELECT 
                name, salary, dept  
            FROM 
                " . $this->table_name . "
            WHERE 
                id = ? 
            LIMIT 
                0,1";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
     
    // bind id of product to be updated
    $stmt->bindParam(1, $this->id);
     
    // execute query
    $stmt->execute();
 
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
    // set values to object properties
    $this->name = $row['name'];
    $this->salary = $row['salary'];
    $this->dept = $row['dept'];
} 

// update the product
function update(){
 
    // update query
    $query = "UPDATE 
                " . $this->table_name . "
            SET 
                name = :name, 
                salary = :salary, 
                dept = :dept 
            WHERE
                id = :id";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // posted values
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->salary=htmlspecialchars(strip_tags($this->salary));
    $this->dept=htmlspecialchars(strip_tags($this->dept));
 
    // bind new values
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':salary', $this->salary);
    $stmt->bindParam(':dept', $this->dept);
    $stmt->bindParam(':id', $this->id);
     
    // execute the query
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}

// delete the product
function delete(){
 
    // delete query
    $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
     
    // prepare query
    $stmt = $this->conn->prepare($query);
     
    // bind id of record to delete
    $stmt->bindParam(1, $this->id);
 
    // execute query
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}


}