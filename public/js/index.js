var app = angular.module("app", ['toaster']);
moment.locale('es');

app.controller("tripCtrl", function($rootScope, $scope, $http, filterFilter, toaster) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
    $scope.edit = false;
    $scope.form = {"trip": {}};

 
 
 	$scope.newTrip = function(form){
 		$scope.edit = false;
 		$scope.form = {"trip": {}};
    };

    $scope.saveTrip = function(form){
    	
    	 $http.post("/trips", form).then(function(response){
            if(response.data.code == "WS001"){
                toaster.pop('success', response.data.message, '');
                $scope.form.trip.id = response.data.id;
                $scope.mytrips.push(form);
            }else{
                toaster.pop('warning', response.data.message, response.data.errors);
            }
            $('#myModal').modal('toggle');
	    });
    };

    $scope.editTrip = function(edit){
    	$scope.form.trip = filterFilter($scope.mytrips, {"id": edit})[0];
    	$scope.edit = true;
    };

    $scope.updateTrip = function(edit){
    	

    	$scope.form.trip = angular.copy(filterFilter($scope.mytrips, {"id": edit}))[0];

    	 $http.put("/trips/" + edit, $scope.form.trip).then(function(response){
            if(response.data.code == "WS001"){
                toaster.pop('success', response.data.message, '');
                form.trip.id = response.data.id;
                $scope.mytrips.push(form);
        	 	var fecha1 = moment($scope.form.trip.startdate);
    			var fecha2 = moment($scope.form.trip.enddate);
    			$scope.form.trip.days = moment(fecha1, "YYYYMMDD").fromNow();
            }else{
                toaster.pop('warning', response.data.message, response.data.errors);
            }
            $('#myModal').modal('toggle');
            
	    });
    };

    $scope.deleteTrip = function(edit){
        

        $scope.form.trip = angular.copy(filterFilter($scope.mytrips, {"id": edit}))[0];

         $http.delete("/trips/" + edit, $scope.form.trip).then(function(response){
            if(response.data.code == "WS001"){
                toaster.pop('success', response.data.message, '');

                var index = $scope.mytrips.forEach(function(element, index){
                    if(element.id == edit)
                        return index;
                });

               
                console.log(index);
                $scope.mytrips.splice(index, 1);

                // $scope.mytrips.push(form);
            }else{
                toaster.pop('warning', response.data.message, response.data.errors);
            }
            $('#myModalDelete').modal('toggle');
            
        });
    };

    $http.get("/trips").then(function(response){
    	$scope.mytrips = response.data;
    	$scope.mytrips.forEach( function(element, index) {
    		element.startdate = new Date(element.startdate);
    		element.enddate = new Date(element.enddate);
    		var fecha1 = moment(element.startdate);
			var fecha2 = moment(element.enddate);

			console.log(fecha2.diff(fecha1, 'days'), ' dias de diferencia');

    		element.days = moment(fecha1, "YYYYMMDD").fromNow();
			
    	});
    });



});