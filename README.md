step 1 =>  git clone https://github.com/francisgill42/auth-ready-with-passport-laravel.git
<br>
step 2 =>  cd auth-ready-with-passport-laravel
<br>
step 3 => copy .env.example .env
<br>
step 4 => composer update
<br>
step 5 => php artisan key:generate
<br>
step 6 => configure database
<br>
step 6 => php artisan migrate
<br>
step 7 => php artisan passport:install
<br>
step 8 => php artisan serve
<br>
step 9 => http://localhost:8000/api/register (use api tester) parameters => (name,email,password,c_password)
<br>
step 10 => http://localhost:8000/api/login (use api tester) parameters => (email,password)
<br>
step 11 => http://localhost:8000/api/me (use api tester to get user details with token) 
           parameters => (token)
           headers => 1. Authorization => Bearer {{token}} 2. Accept => application/json
           (get token from login or register response) 
                 
