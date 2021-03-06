
function CollaborationSearchResult($scope, $http){

	$scope.invite = function($url){
		
		$http({method: 'GET', url: $url}).
			success(function(data, status, headers, config) {
				if(angular.isUndefined($scope.item._embedded)){
					$scope.item._embedded = {};
				}
				
				$scope.item._embedded.collaboration = { 'status': 'invited', 'role' : data };
				
			}).
			error(function(data, status, headers, config) {
				alert('error');
			});
	};
}