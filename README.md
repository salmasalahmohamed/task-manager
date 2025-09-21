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


📌 Import [task-manager.postman_collection.json](./Task-Manager.postman_collection.json) into Postman to test all API endpoints.


📌 API Documentation (Postman): [View the collection] https://.postman.co/workspace/My-Workspace~9d86fe73-a538-418e-8a36-609d554b367b/collection/24028450-86441909-a258-499c-a231-b1f624e1b81e?action=share&creator=24028450&active-environment=24028450-ebdf8dd0-23c8-424d-b511-3b94aede0ffb
