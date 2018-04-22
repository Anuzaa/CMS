

## About Client Management System
Client Management System is developed using PHP Framework Laravel 5.6. I have developed this simple CRUD application where you can add the client's information.For the database insertion, laravel/tinker 1.0 has been used. Laravelcollective/html is used to implement  the forms in the application. Also maatwebsite/excel 3.0 has been used to implement the import and export the MySQL data in excel.

I have also added pagination and authentication services in this system.

## How to use

i. Clone repo
git clone https://github.com/Anuzaa/CMS.git

ii. Install the composer dependencies
    
   composer install

iii. Save .env.example as .env and put your database credentials

iv. Set application key

    php artisan key:generate        

v. And Migrate with
  
  php artisan migrate

## Usage Instructions
To use this client management system application , one should follow the routing instructions or you can go simply through the interface and click the tabs.

Here is the list of routing that i have added to my application.


About: '/about'
Service: '/services'

'clients'
Import: '/getImport'
        '/postImport'
Export: '/getExport'
Delete: '/deleteAll'
Home Page :'/home'

## Deployment
I have added the ProcFile for deploying the application on Laravel Framework.

Procfile
web: vendor/bin/heroku-php-apache2 public/

APP_KEY, APP_URL are also added in settings in a Heroku Dashboard.

## Problems

Since, i have MySQL database i couldnt perform database setup in Heroku as Heroku supports PostgreSQL.

The APP_URL of my application is 
http://hidden-forest-77607.herokuapp.com/


## Future
This is a simple CRUD application at the present where there are many changes needed to be made to run the bug free application. I could not deploy database  on heroku due to some 'missing flag' error. I want to fetch the data by making an api through ajax in the Laravel Framework in this application. I am planning to do in future to make this application more effective.

## About Version
In the laravel 5.6 and maatwebsite/excel 3.0, there are some changes which are updated as per the documentation on https://laravel-excel.maatwebsite.nl/docs/3.0/getting-started/upgrade.
So, mattwebsite/excel 3.0 didn't support export the MySQL data into CSV file.

## Thankyou! 


