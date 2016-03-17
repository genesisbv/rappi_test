<!doctype html>
<html ng-app="accordion">
  <head>

  	<!-- angular -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-animate.js"></script>
    
	<!-- bootstrap -->
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-1.2.4.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuey -->
   	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
   	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


   	<!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Exo+2:600,800' rel='stylesheet' type='text/css'>

    <!-- news controller -->
    <script src="js/news_controller.js"></script>


</head>
<body>
	<div id="loading"></div>
  	<h1 class="pageTitle" >Prueba Rappi</h1>
  	<!-- <div class="arrowDiv"><img src="css/img/arrow black.png" class="arrow"></div> -->
  	<div class="panel panel-primary">
  		<div class="panel-heading">
  			<button id='click' type="button" class="nobackgroung">
  				<span class="glyphicon glyphicon-menu-hamburger" >&nbsp</span>
  			</button>
  			<div id="otherBtns"> 
  				<button class="btn btn-default" type="submit">Share</button>
  				<button class="btn btn-default" type="submit">Like</button>
  			</div>
  			
  		</div>
	  	<div class="panel-body">
		   	<div ng-controller="accordionCtrl" id="accordionpanel">
				<uib-accordion >
				    <uib-accordion-group ng-repeat="news in allnews" ng-animate="'animate'" is-open="news.open" ng-click='loadBtns(news)'>

					    <uib-accordion-heading>
		                   <img src="css/img/icon_news.png" class="newsIcon">{{news.title}} 
		                </uib-accordion-heading>

					    <div class="col-md-4 centerImg">
					    	<img src="{{news.image}}" class="newsimage">
					    	<div class="aaa"></div>
					    </div>
					    <div class="col-md-8">
					    	 {{news.content}}
					    </div>
				     
				    </uib-accordion-group>
				</uib-accordion>
			</div>
	 	</div>
		
	</div>
	<h4 class="nameTitle">Genesis Borras </h4>

	<script src="js/functions.js"></script>

  </body>
</html>
