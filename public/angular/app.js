var app = angular.module('supplierApp',[])
    .constant('API_URL','http://prov.dev/');

app.constant("CSRF_TOKEN", '{{ csrf_token() }}');
