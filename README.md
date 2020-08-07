# INSTALL LARAVEL

sudo apt-get install composer

sudo apt-get install php7.4 php7.4-bcmath php7.4-bz2 php7.4-cli php7.4-common php7.4-curl php7.4-fpm php7.4-gd php7.4-imap php7.4-intl php7.4-json php7.4-mbstring php7.4-mysql php7.4-opcache php7.4-pgsql php7.4-readline php7.4-sqlite3 php7.4-tidy php7.4-xml php7.4-zip

composer create-project --prefer-dist laravel/laravel blog

php artisan serve

# Steps To Clone & Run

git clone https://github.com/...git

composer install/update

npm install

cp .env.example .env and then configure your db

php artisan migrate

php artisan passport:install

php artisan storage:link

php artisan serve & npm run watch
