# Laravel-App

 ## Cистемные требования:
* php:8.0
* MySQL:8.0-Win10
* composer: latest
* phpMyAdmin:5.1.0

## Запуск проекта
* Склонировать папку с репозиторием на свой компьютер в папку с проектом
* Скопировать _.env.example_ в _.env_
* С помощью phpMyAdmin создать базу данных с кодировкой _utf8_general_ci_
* После создания базы данных необходимо в файле .env произвести настройки созданной базы данных:
    * _DB_DATABASE_=имя созданной базы данных
    * _DB_USERNAME_=root 
    * _DB_PASSWORD_=
* Для установки Laravel выполнить команду `composer install`
* Сгенерировать ключ приложения выполнив команду `php artisan key:generate`
* Выполнить миграции использовав команду `php artisan migrate`
* Выполнить команду `php artisan db:seed --class=CategorySeeder && php artisan db:seed --class=PostSeeder` для сохранения тестовых данных в базе данных
* Запустить проект выполнив компнду `php artisan serve`
* Перейти на url http://127.0.0.1:8000, в случае успешного запуска проекта, можно будет увидеть интерфейс блога.

