<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

##About Client Management System
Client Management System is developed using PHP Framework Laravel 5.6. I have developed this simple CRUD application where you can add the client's information.For the database insertion, laravel/tinker 1.0 has been used. Laravelcollective/html is used to implement  the forms in the application. Also maatwebsite/excel 3.0 has been used to implement the import and export the MySQL data in excel.

## About Installation
To use this application, firstly composer and xampp need to be install in your computer. And you should go to my repository and clone the project along with the database. Database should be import going through the localhost/phpmyadmin. And one should add virtual host "ems.test" going through the apache folder in your computer. And you can run the file in the web browser.

## Usage Instructions
To use this client management system application , one should follow the routing instructions or you can go simply through the interface and click the tabs.
Here is the list of routing that i have added to my application.
'/' 
About: '/about'
Service:'/services'

'clients'
Import: '/getImport'
        '/postImport'
Export: '/getExport'
Delete: '/deleteAll'
Home Page :'/home'


## Future
This is a simple CRUD application at the present where there are many changes needed to be made to run the bug free application. I could not deploy this on heroku due to some 'missing flag' error. I want to fetch the data by making an api through ajax in the Laravel Framework in this application. I am planning to do in future to make this application more effective.

Thankyou! 


