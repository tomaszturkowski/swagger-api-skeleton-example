#swagger-api-skeleton-example

This skeleton is an example of using SwaggerBundle, Swagger contract, Doctrine and Symfony to provide quickly a REST API.

----------


How to use it?
-------------

 - Clone the repository
 - Execute `composer install`
 - Provide your database data inside `app/config/parameters.yml`
 - Run bin/console `doctrine:schema:create` to create a db table
 - Fill up created table with some data
 - Run `http://127.0.0.1:8000/app_dev.php/v1/car/1` you should see response like: 
   - `{"id":1,"model":"126p","color":"Green","mileage":0,"price":"1.10","productionDate":"2016-08-12T00:00:00+0200","forSale":true}`
	 - In case if you will see error instead a record from the database check `var/logs/dev.log` for reason

Useful paths:

 - Swagger contract `web/swagger/car_v1.yml` 
 - Swagger and Doctrine Cache Configuration `app/config/config.yml`
 - Swagger routing definition `app/config/routing.yml`


----------
Credits:
   - DoctrineCacheBundle
   - JMSSerializerBundle
   - KleijnWebSwaggerBundle
