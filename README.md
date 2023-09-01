## buulkMeNow App

buukmenow is a simple web application created with aim to help manage Bookings for vacations.
It basically a  take home project, build with the following such as:

- [PHP, Laravel](https://laravel.com/).
- [Livewire](https://laravel-livewire.com/docs/).
- DaisyUI [a lightweight TailwindCSS UI library](https://daisyui.com/)

### RUNNING THE PROJECT
- composer install
- npm install
- npm run dev
- php artisan migrate

### DATABASE CONNECTION
I used SQLite as my database driver
- create a Database Name,
for example, phonebook_db (I have created one already, assigned as: DB_DATABASE=phonebook_db)
in your preferred DB driver MYSQL or MARIADB, POSTGRESDB etc,
if you want to change the DB name then go to the *.env* created previously and
add it, as: *DB_DATABASE=*db-name-your-created*

This will create all related tables into the specified database name


### FINAL STEP

- php artisan serve --port=84
--- Note, default port is using 80, if other applications are running on port 80, then you need the to specify another free port.
Thus, the command **php artisan serve --port=84**

THIS WILL GENERATE A URL, copy and paste on the browser tab
