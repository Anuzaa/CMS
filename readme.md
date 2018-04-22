

#About Client Management System
Client Management System is developed using PHP Framework Laravel 5.6. I have developed this simple CRUD application where you can add the client's information.For the database insertion, laravel/tinker 1.0 has been used. Laravelcollective/html is used to implement  the forms in the application. Also maatwebsite/excel 3.0 has been used to implement the import and export the MySQL data in excel.

I have also added pagination and authentication services in this system.

#How to use

i.Clone repo
git clone https://github.com/Anuzaa/CMS.git

ii.Install the composer dependencies
composer install

iii.Save .env.example as .env and put your database credentials

iv.Set application key

v.php artisan key:generate        

vi.And Migrate with

php artisan migrate

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
This is a simple CRUD application at the present where there are many changes needed to be made to run the bug free application. I could not deploy database  on heroku due to some 'missing flag' error. I want to fetch the data by making an api through ajax in the Laravel Framework in this application. I am planning to do in future to make this application more effective.

#About Version
In the laravel 5.6 and maatwebsite/excel 3.0, there are some changes which are updated as per the documentation on https://laravel-excel.maatwebsite.nl/docs/3.0/getting-started/upgrade.So, mattwebsite/excel 3.0 didn't support export the MySQL data into CSV file.

Thankyou! 


