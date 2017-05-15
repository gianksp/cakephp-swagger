# Swagger CakePHP 2.0 Module

A quick implementation to provide Swagger documentation as a CakePHP 2.0 plugin

## Prerequisites

Add [swagger-php](https://github.com/zircote/swagger-php/blob/master/README.md) composer dependency to the project

## Usage

 * Clone this repository to your Plugin folder within your CakePHP 2.x application.
 * Add the following to your Config/bootstrap.php file
 
```php
    CakePlugin::load( array( 'Swagger' => array( 'routes' => true, 'bootstrap'=>true ) ) );
```

When running your project you will have access to the generated JSON at

```sh
   http://localhost:8080/docs
```
