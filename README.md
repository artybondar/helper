# INSTALL LARAVEL

sudo apt-get install composer

sudo apt-get install php7.4 php7.4-bcmath php7.4-bz2 php7.4-cli php7.4-common php7.4-curl php7.4-fpm php7.4-gd php7.4-imap php7.4-intl php7.4-json php7.4-mbstring php7.4-mysql php7.4-opcache php7.4-pgsql php7.4-readline php7.4-sqlite3 php7.4-tidy php7.4-xml php7.4-zip

composer create-project --prefer-dist laravel/laravel blog

php artisan serve

# Steps To Clone & Run

1. git clone https://github.com/...git

2. composer install/update

3. npm install
3.1 npm install express // npm install -g express-generator
3.2 npm init then -> npm install

4. cp .env.example .env and then configure your db

5. php artisan migrate
5.1 php artisan passport:install
5.2 php artisan storage:link
5.3 php artisan serve & npm run watch
