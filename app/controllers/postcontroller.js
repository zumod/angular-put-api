var fetch = angular.module("myApp", []);

fetch.controller("myCtrl", [
  "$scope", "$http",
  function ($scope, $http) {
    $http({
      method: "get",
      url: "api/putData.php",
    }).then(function successCallback(response) {
      $scope.names = response.data;
    });
  },
]);*/
