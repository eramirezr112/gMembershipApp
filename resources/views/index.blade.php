<!DOCTYPE html>
<html lang="en" ng-app="groupMembership">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Food for the Hungry Test | Group Membership</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/f0b3db9f27.js"></script>
    <!-- Custom styles -->
    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
          	<img src="{{ asset('img/logo.png') }}" class="img-responsive pull-left" width="150px" style="margin-top:-10px;">
          	<span class="pull-right" style="margin-left: 10px;">| Test: Group Membership</span>
          </a>
        </div>        
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li active-link="active" data-href="#!/groups"><a href="#!/groups">Groups <span class="sr-only">(current)</span></a></li>
            <li active-link="active" data-href="#!/types"><a href="#!/types">Types</a></li>
            <li active-link="active" data-href="#!/individuals"><a href="#!/individuals">Individuals</a></li>            
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div ng-view></div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

	<script src="https://code.angularjs.org/1.6.6/angular.min.js"></script>
	<script src="https://code.angularjs.org/1.6.6/angular-route.min.js"></script>
	
	<script src="{{ asset('ng-app/app.js') }}"></script>
	<script src="{{ asset('ng-app/routes.js') }}"></script>

	<!-- Groups -->
	<script src="{{ asset('ng-app/controllers/group/list-controller.js') }}"></script>
	<script src="{{ asset('ng-app/controllers/group/add-controller.js') }}"></script>
	<script src="{{ asset('ng-app/controllers/group/edit-controller.js') }}"></script>
	<script src="{{ asset('ng-app/controllers/group/members-controller.js') }}"></script>

	<!-- Types -->
	<script src="{{ asset('ng-app/controllers/type/list-controller.js') }}"></script>
	<script src="{{ asset('ng-app/controllers/type/add-controller.js') }}"></script>
	<script src="{{ asset('ng-app/controllers/type/edit-controller.js') }}"></script>

	<!-- Individuals -->
	<script src="{{ asset('ng-app/controllers/individual/list-controller.js') }}"></script>
	<script src="{{ asset('ng-app/controllers/individual/add-controller.js') }}"></script>
	<script src="{{ asset('ng-app/controllers/individual/edit-controller.js') }}"></script>
	
	<!-- Services -->
	<script src="{{ asset('ng-app/services/type-service.js') }}"></script>
	<script src="{{ asset('ng-app/services/group-service.js') }}"></script>
	<script src="{{ asset('ng-app/services/member-service.js') }}"></script>
	<script src="{{ asset('ng-app/services/individual-service.js') }}"></script>

  </body>
</html>