var rappiApp = angular.module('accordion', ['ngAnimate', 'ui.bootstrap']);

rappiApp.controller('accordionCtrl', function ($scope, $http) {

  //set that only one panel of accordion can be open
  $scope.oneAtATime = true;

  //get json data
  $http.get('news_mock.json').success(function(data) {
	$scope.allnews = data;
  }); 


  //show and hide header panel buttons
  $scope.loadBtns = function (news) {
  	if(news.open){
  		$("#otherBtns").show("slow");   
  	}else{
  		$("#otherBtns").hide("slow");     
  	}
  }

});

