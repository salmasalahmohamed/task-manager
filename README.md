# Task Manager API

A simple task manager built with Laravel.  
Supports categories, priorities, and completed status toggling.

---

## 🚀 Setup Instructions

1. Clone the repo:
   ```bash
   git clone https://github.com/your-username/task-manager.git
   cd task-manager
   composer install
   cp .env.example .env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=task_manager
   DB_USERNAME=root
   DB_PASSWORD=
   php artisan key:generate
   php artisan migrate --seed
   php artisan serve




2-Database Schema:
   
   Categories

   id (PK)

  name (string)

  color (string HEX)

  timestamps

  Tasks

  id (PK)

  title (string)

  description (string)

  category_id (FK → categories.id)

  priority (enum: low, medium, high)

  completed (boolean)

  completed_at (timestamp, nullable)

  timestamps


📌 Import [Task-Manager.postman_collection.json](./Task-Manager.postman_collection.json) into Postman to test all API endpoints.


