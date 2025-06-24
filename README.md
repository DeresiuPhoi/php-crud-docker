📦 PHP CRUD App with Docker
Проект — простое CRUD-приложение на PHP + MySQL, запущенное в Docker-контейнерах.

🛠 Стек технологий
PHP 8.2 + Apache
MySQL 5.7
Docker + Docker Compose

🚀 Быстрый старт
1. Клонируй репозиторий
git clone https://github.com/DeresiuPhoi/php-crud-docker.git
cd php-crud-docker

2. Запусти контейнеры
docker compose up -d --build

3. Открой приложение
Перейди в браузере:
http://localhost:8080

📂 Структура проекта
.
├── config/               # Файл подключения к БД
│   └── connect.php
├── init/                 # SQL-скрипт для инициализации таблиц
│   └── init.sql
├── vendor/               # CRUD-операции
│   ├── create.php
│   ├── delete.php
│   └── update.php
├── index.php             # Главная страница со списком товаров
├── docker-compose.yml    # Настройка Docker-сервисов
├── Dockerfile            # Сборка PHP + Apache
├── 000-default.conf      # Конфигурация Apache
└── README.md

📌 Функционал
📄 Отображение товаров

➕ Добавление товара

✏️ Редактирование

❌ Удаление

🧪 Тестирование подключения
Открой test.php, чтобы убедиться, что подключение к базе успешно.

💡 Заметки
База данных создаётся автоматически при первом запуске.

Чтобы вручную выполнить SQL-скрипт: init/init.sql.

Nurlan Mussepov 2025
