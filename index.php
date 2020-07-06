<!DOCTYPE html >
<html  ng-app = 'listData'>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="x-UA-Compatible" content="ie=edge" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  </head>
  <body>

<div ng-controller = "showData">
       <table class="table table-striped w-25">
            <tr>
              <th>ID</th>
              <th>Name</th>
            </tr>
          
            <tr ng-repeat = "x in names">
                <td>{{ x.ID }}</td>
                <td>{{ x.listitem }}</td>
            
            </tr>
        </table>
    
</div>
    <script src="app/controllers/controller.js"></script>
  </body>
</html>
