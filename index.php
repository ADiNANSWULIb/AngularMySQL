<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Angular JS - INSERT DATA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0-rc.2/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
        <div class="container" style="width:500px">
          <h3 align="center"><b>Loan equipment systems</b></h3>
          <div ng-app="myApp" ng-controller="userController" ng-init="displayData()">
            <label>User ID:</label>
            <input type="text" name="user_id" ng-model="user_id" class="form-control" />
            <label>Name:</label>
            <input type="text" name="name" ng-model="name" class="form-control" />
            <label>Room Number:</label>
            <input type="text" name="num" ng-model="num" class="form-control" />
            <br><input type="hidden" ng-model="id" />
            <input type="submit" name="btnInsert" ng-click="insertData()" class="btn btn-info" value="{{btnName}}"/>
            <br><br>
            <table class="table table-bordered">
              <tr>
                  <th>User ID</th>
                  <th>Name</th>
                  <th>Update</th>
                  <th>Delete</th>
                  </tr>
                  <tr ng-repeat="x in names">
                    <td>{{x.user_id}}</td>
                    <td>{{x.name}}</td>
                    <td>{{x.num}}</td>
                    <td><button ng-click="updateData(x.id, x.user_id, x.name, x.num)" class="btn btn-info btn-xs">Update</button></td>
                    <td><button ng-click="deleteData(x.id)" class="btn btn-danger btn-xs">Delete</button></td>
                  </tr>
          </table>
          </div>
        </div>
  </body>
  <script src="apptest.js"></script>
  <script src="dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
</html>
