<!DOCTYPE html>
<html>
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <title>Read Employees</title>
     
    <!-- include material design CSS -->
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css" />
     
    <!-- include material design icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- custom CSS -->
    <link href="css/custom.css" rel="stylesheet" type="text/css"/>
</head>
<body>
 
    <!-- page content and controls will be here -->
    <div class="container" ng-app="myApp" ng-controller="employeesCtrl">
         <!-- floating button for creating employee -->
         <div class="fixed-bottom" >
             <button class="btn btn-primary" ng-click="showCreateForm()" type="button">New Employee</button>
         </div>
         <div class="row">
             <div class="col s12">
                 <h4>Employees</h4>
                 <!-- used for searching the current list -->
                 <input type="text" ng-model="search" class="form-control" placeholder="Search employee...">

                 <!-- table that shows employee record list -->
                 <table class = "table table-striped">

                     <thead>
                         <tr>
                             <th class="text-align-center">ID</th>
                             <th class="width-30-pct">Name</th>
                             <th class="width-30-pct">Dept</th>
                             <th class="text-align-center">Salary</th>
                             <th class="text-align-center">Action</th>
                         </tr>
                     </thead>
                     <tbody ng-init="getAll()">
                         <tr ng-repeat="d in names | filter:search">
                             <td class="text-align-center">{{ d.id }}</td>
                             <td>{{ d.name }}</td>
                             <td>{{ d.dept }}</td>
                             <td class="text-align-center">{{ d.salary }}</td>
                             <td>
                                 <a ng-click="readOne(d.id)" class="waves-effect waves-light btn margin-bottom-1em"><i class="material-icons left">edit</i>Edit</a>
                                 <a ng-click="deleteEmployee(d.id)" class="waves-effect waves-light btn margin-bottom-1em"><i class="material-icons left">delete</i>Delete</a>
                             </td>
                         </tr>
                     </tbody>
                 </table>


                 <!-- modal for for creating new employee -->
                 <div id="modal-employee-form" class="modal" >

                     <div class="modal-content">
                         <h4 id="modal-employee-title">Create New Employee</h4>

                         <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">Emp Name (Hussain Refaa)</span>
                             <input id="form-name" class="validate" ng-model="name" type="text" class="form-control" placeholder="Type name here..." aria-describedby="basic-addon1">
                         </div>
                         <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">Dept (Maneger)</span>
                             <input id="form-name" class="validate" ng-model="dept" type="text" class="form-control" placeholder="Type dept here..." aria-describedby="basic-addon1">
                         </div>
                         <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">Salary (0000.0000)</span>
                             <input id="form-name" class="validate" id="form-salary" ng-model="salary" type="text" class="form-control" placeholder="Type salary here..." aria-describedby="basic-addon1">
                         </div>


                         <div class="modal-footer">
                             <button id="btn-create-employee" class="btn btn-primary" ng-click="createEmployee()" type="button">Create</button>
                             <button id="btn-update-employee" class="btn btn-primary" ng-click="updateEmployee()" type="button">Save Changes</button>
                             <button id="btn-update-employee" class="btn btn-default" ng-click="closeDialog()" type="button">Close</button>
                             
                         </div>

                     </div>
                 </div>

             </div> <!-- end col s12 -->
         </div> <!-- end row -->
    </div> <!-- end container -->

<!-- include jquery -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

<!-- include angular js -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
<script src="controller/app.js"></script>

</body>
</html>