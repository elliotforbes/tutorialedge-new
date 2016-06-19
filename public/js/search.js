angular.module('TutorialApp', [])

.controller('SearchController', [ '$scope', '$http', function($scope, $http) {
      
    var init = function() {
        
        $http.get('/api/v1/lessons')
            .success(function (response){
                console.log("Successfully Retrieve lessons");
                $scope.results = response;
                console.log($scope.results);
            })
            .error(function (response){
                 console.log("Failed to retrieve lessons");
            });
    };
    
    init();
      
}]);