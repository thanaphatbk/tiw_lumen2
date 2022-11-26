# How to install
1.  Downloads or clone this repository
2.  RUN Composer install
3.  Check .env database username and password 
4.  RUN php artisan migrate:fresh
5.  RUN php artisan tinker 
6.  RUN App\Models\Employees::factory()->count(5)->create()
7.  RUN php -S localhost:8000 -t public
