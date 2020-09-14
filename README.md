<b>steps</b>
<ul>
<li>step 1. Clone the repository  - git clone git@github.com:ashishranpara/web-development-assignment.git</li>

<li>step 2. go to project directory and Run composer install and than composer dump-autoload</li>

<li>step 3. change permission of storage folder </li>

<li>step 4. update .env file with the database name , mysql username and mysql password</li>

<li>
    step 5. run below commands
    <ul>
        <li>5.1 php artisan config:clear</li>
       <li>5.2 php artisan cache:clear </li>
       <li>5.3 php artisan key:generate</li>
       <li>5.4 php artisan migrate </li>
       </ul>
       </li>

<li>step 6. run php artisan serve 
        it will give url to test the project (127.0.0.1:8000)</li>
</ul>


<h4>Files to check</h4>
<ul>
    <li>Migration file  - ListTest/database/migrations/2020_09_14_100708_list_table.php</li>
    <li>View files -  ListTest/resources/views</li>
    <li>Controller file - ListTest/app/Http/Controllers/Controller.php</li>
    <li>CSS file - ListTest/public/assets/css/custom.css </li>
    <li>Javascript file - ListTest/public/assets/js/custom.js</li>
    <li>Sample Logo - ListTest/public/assets/images/logo.png</li>

</ul>
