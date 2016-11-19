'use strict'

var app = angular.module("Example", [])

app.controller("main", function ($scope, $http) {
  $scope.heroes = [{ name:"superman" }, { name:"spiderman" }, { name:"batman" }]

  $scope.guardar = function () {

    var items = Array.prototype.slice.call(document.querySelectorAll('.items'))
    var array = []
    for(var i in items) {
      var item = items[i]

      if(item.checked === true) {
        array.push({ vida:item.value })
      }

    }
    $scope.data.vida = array

    $http.post("model.php", $scope.data)
      .then(function (response) {
        console.log(response)
      })
  }

})