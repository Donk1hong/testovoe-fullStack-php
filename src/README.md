# Тестовое задание

## Инструкция по запуску

#### Шаг 1: Клонируйте репозиторий

```bash
git clone https://github.com/Donk1hong/testovoe-fullStack-php.git
cd testovoe-fullStack-php
```

#### Шаг 2: Создайте файл конфигурации окружения

```bash
cp .env.example .env
```

#### Шаг 3: Обновите переменные окружения (опционально)

Отредактируйте файл `.env` при необходимости. По умолчанию проект использует:

```env
APP_NAME=Laravel
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=testovoe_fullstack
DB_USERNAME=sail
DB_PASSWORD=password

VITE_PORT=5173
```

#### Шаг 4: Запустите инициализацию проекта

```bash
# Установка зависимостей + миграции + сборка фронтенда
composer setup
```

Эта команда выполнит:
- Установку PHP зависимостей
- Копирование `.env.example` в `.env`
- Генерацию ключа приложения
- Запуск миграций базы данных
- Установку npm зависимостей
- Сборку фронтенда

#### Шаг 5: Запустите контейнеры Docker

```bash
docker-compose up -d
```

Приложение будет доступно по адресу:
- **Основное приложение**: http://localhost
