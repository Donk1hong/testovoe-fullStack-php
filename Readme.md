# Testovoe Fullstack Project

Проект представляет собой Fullstack-приложение на Laravel с использованием Docker для обеспечения изолированной среды разработки.

## Инструкция по запуску

1. **Клонируйте репозиторий:**
   ```bash
   git clone git@github.com:Donk1hong/testovoe-fullStack-php.git
   cd testovoe-fullStack-php
   ```

2. **Настройте переменные окружения:**
   Скопируйте пример файла конфигурации:
   ```bash
   cp src/.env.example src/.env
   ```

3. **Отредактируйте файл `.env` при необходимости. По умолчанию проект использует:**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=mysql
   DB_PORT=3306
   DB_DATABASE=testovoe_fullstack
   DB_USERNAME=sail
   DB_PASSWORD=password
   ```

4. **Запустите Docker-контейнеры:**
   ```bash
   docker compose up -d --build
   ```

5. **Установите зависимости и настройте приложение:**
   Выполните следующие команды внутри контейнера:
   ```bash
   # Установка PHP зависимостей
   docker compose exec app composer install

   # Генерация ключа приложения
   docker compose exec app php artisan key:generate

   # Применение миграций базы данных
   docker compose exec app php artisan migrate

   # Установка прав доступа к хранилищу
   docker compose exec app chmod -R 775 storage bootstrap/cache
   ```

6. **Запуск фронтенда:**
   ```bash
   docker compose exec app npm install
   docker compose exec app npm run dev
   ```

## Доступ

После выполнения всех шагов проект будет доступен по адресу:
[http://localhost:8080](http://localhost:8080) (или [http://localhost](http://localhost), в зависимости от настроек Nginx)
