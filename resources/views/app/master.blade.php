<!DOCTYPE html>
<html ng-app="TheHub">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <script src="{{ asset('/res/javascript/app/app.js') }}"></script>
        <script src="{{ asset('/res/javascript/app/controller/searchController.js') }}"></script>
        <script src="{{ asset('/res/javascript/app/controller/videoController.js') }}"></script>
        <script src="{{ asset('/res/javascript/app/controller/subscribeController.js') }}"></script>
        <script src="{{ asset('/res/javascript/app/controller/uploadController.js') }}"></script>

        @include('app.includes.sections.head')
    </head>

    <body>

    	@include('app.includes.sections.top_nav')

    	<div class="row">
      		<div class="col s12 m12 l9 section-container">
    			@yield('content')
      		</div>
    	</div>

        @include('app.includes.sections.script')
	</body>
</html>