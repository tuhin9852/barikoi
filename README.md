To Run this you have to use following command


composer install
npm install
php artisan key:generate

npm install socket.io-client
npm install laravel-echo
npm install -g laravel-echo-server
laravel-echo-server init
npm run dev
laravel-echo-server start

 
php artisan migrate
php artisan db:seed --class=DatasetSeeder

php arisan serve

turn on redis server

broadcasted dataset will be shown on http://127.0.0.1:8000/ console

TO trigger the event http://127.0.0.1:8000/t

