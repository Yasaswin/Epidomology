 **Step 1**: Open the terminal in your root directory(vuexy-bootstrap-laravel-admin-template) & to install the composer packages run the following command:
 
 `composer install`

 **Step 2**: In the root directory, you will find a file named .env.example, rename the given file name to .env and run the following command to generate the key (and you can also edit your database credentials here).
 
 `php artisan key:generate`
 
 `php artisan storage:link`
 
 **Step 3**: By running the following command, you will be able to get all the dependencies in your node_modules folder:
 `npm install && npm run dev`