step 1 =>  git clone https://github.com/francisgill42/auth-ready-with-passport-laravel.git
step 2 =>  cd auth-ready-with-passport-laravel
step 3 => copy .env.example .env
step 4 => composer update
step 5 => php artisan key:generate
step 6 => configure database
step 6 => php artisan migrate
step 7 => php artisan passport:install
step 8 => php artisan serve
step 9 => http://localhost:8000/api/register (use api tester)
                 parameters => (name,email,password,c_password) 
                 
step 10 => http://localhost:8000/api/login (use api tester)
                 parameters => (email,password) 
                 
