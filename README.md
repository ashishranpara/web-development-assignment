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
    <li> <b>Migration file</b>  - <a href="https://github.com/ashishranpara/web-development-assignment/blob/master/database/migrations/2020_09_14_100708_list_table.php">ListTest/database/migrations/2020_09_14_100708_list_table.php</a></li>
    <li> <b>View files</b>      -  <a href="https://github.com/ashishranpara/web-development-assignment/tree/master/resources/views">ListTest/resources/views</li>
    <li><b>Controller file</b>  - <a href="https://github.com/ashishranpara/web-development-assignment/blob/master/app/Http/Controllers/Controller.php">ListTest/app/Http/Controllers/Controller.php</a></li>
    <li><b>CSS file</b>         - <a href="https://github.com/ashishranpara/web-development-assignment/blob/master/public/assets/css/custom.css">ListTest/public/assets/css/custom.css </a></li>
    <li><b>Javascript file</b>  - <a href="https://github.com/ashishranpara/web-development-assignment/blob/master/public/assets/js/custom.js">ListTest/public/assets/js/custom.js</a></li>
    <li><b>Sample Logo</b>      - <a href="https://github.com/ashishranpara/web-development-assignment/tree/master/public/assets/images">ListTest/public/assets/images/logo.png</a></li>

</ul>
