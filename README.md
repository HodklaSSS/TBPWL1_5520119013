# TBPWL1_5520119013

# Instalasi 
```sh
npm install
composer install
cp .env.example .env
php artisan key:generate
php artisan storage:link
php artisan migrate
php artisan db:seed
```
# Registrasi belum berfungsi (sudah masuk ke DB, tapi akan terjadi bug)

# Apabila button login & registrasi hilang
```sh
php artisan migrate:fresh
php artisan db:seed
```

# Demo Akun
```sh
email: admin_a@mail.com
password: 123456

email: user_a@mail.com
password: 123456
```
