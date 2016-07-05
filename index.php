
<!DOCTYPE html>
<html ng-app="myApp" ng-app>
    <head>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
         <style type="text/css">
            ul>li, a{cursor: pointer;}
         </style>
    </head>
    <body>
        <div class="main">
            <div class="header-block">
                
               
            </div>
       <div ng-controller="customersCrtl">
        <div class="container">
        <h1 class="heading">Friends List</h1>
         <span ><a href="registrationForm.html" class="btn btn-info">Add Friend</a></span>
            <div class="row">
                <div class="col-md-2">PageSize:
                    <select ng-model="entryLimit" class="form-control">
                        <option>5</option>
                        <option>10</option>
                        <option>20</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                </div>
                <div class="col-md-3">Filter:
                    <input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control" />
                </div>
                <div class="col-md-4">
                    <h5>Filtered {{ filtered.length }} of {{ totalItems}} total customers</h5>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-12" ng-show="filteredItems > 0">
                    <table class="table table-striped table-bordered">
                    <thead>
                    <th>ID&nbsp;<a ng-click="sort_by('id');"><i class="glyphicon glyphicon-sort"></i></a></th>
                    <th>Name&nbsp;<a ng-click="sort_by('name');"><i class="glyphicon glyphicon-sort"></i></a></th>
                    <th>Email&nbsp;<a ng-click="sort_by('email');"><i class="glyphicon glyphicon-sort"></i></a></th>
                    <th>Phone&nbsp;<a ng-click="sort_by('phone');"><i class="glyphicon glyphicon-sort"></i></a></th>
                    <th>Country&nbsp;<a ng-click="sort_by('country');"><i class="glyphicon glyphicon-sort"></i></a></th>
                    <th>About&nbsp;<a ng-click="sort_by('about');"><i class="glyphicon glyphicon-sort"></i></a></th>
                    <th>DOB&nbsp;<a ng-click="sort_by('dob');"><i class="glyphicon glyphicon-sort"></i></a></th>
                    </thead>
                    <tbody>
                        <tr ng-repeat="data in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                            <td>{{data.id}}</td>
                            <td>{{data.name}}</td>
                            <td>{{data.email}}</td>
                            <td>{{data.phone}}</td>
                            <td>{{data.country}}</td>
                            <td>{{data.about}}</td>
                            <td>{{data.dob}}</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="col-md-12" ng-show="filteredItems == 0">
                    <div class="col-md-12">
                        <h4>No customers found</h4>
                    </div>
                </div>
                <div class="col-md-12" ng-show="filteredItems > 0">    
                    <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
                    
                    
                </div>
            </div>
        </div>
        </div>
<script src="js/angular.min.js"></script>
<script src="js/ui-bootstrap-tpls-0.10.0.min.js"></script>
<script src="js/app.js"></script>         
  
        </div>
    </body>
</html>
