steps

step 1. Clone the repository  - git clone git@github.com:ashishranpara/web-development-assignment.git
step 2. go to project directory and Run composer install and than composer dump-autoload
step 3. change permission of storage folder 
step 4. update .env file with the database name , mysql username and mysql password
step 5. run below commands
       5.1 php artisan config:clear
       5.2 php artisan cache:clear 
       5.3 php artisan key:generate
       5.4 php artisan migrate 
       
step 6. run php artisan serve 
        it will give url to test the project (127.0.0.1:8000)
