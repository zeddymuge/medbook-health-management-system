# Health Records Management System
Objective: Develop a web application to manage patient records for a private clinic, allowing receptionists to save and retrieve patient data electronically.

 ## Table of Contents
Introduction
Requirements
Installation
Usage
API Setup
Frontend Setup
Deployment
Contact
Introduction
Dr. Odidi's private clinic is transitioning from manual patient record keeping to a web-based system. This solution provides a web application with separate backend (Laravel) and frontend (Ionic) components to manage patient records efficiently.

### Requirements
PHP 7.x or higher
Composer
Node.js
Ionic CLI
MySQL or another compatible database

### Installation
Backend (Laravel)

- Clone the repository:
   `

git clone https://github.com/your-username/medbook-dev-backend.git`

`cd medbook-dev-backend`
- Install dependencies:

`
composer install
`
Copy the .env.example file to .env and configure your database settings:

`
cp .env.example .env`

- Generate the application key:


`php artisan key:generate`
- Run migrations to create database tables:

`
php artisan migrate`
- Start the Laravel development server:

`
php artisan serve`
### Frontend (Ionic)

Clone the repository:

`
git clone https://github.com/your-username/medbook-dev-frontend.git
cd medbook-dev-frontend`
- Install dependencies:

`
npm install`
- Usage
`Access the Laravel backend at http://localhost:8000.
Access the Ionic frontend at http://localhost:8100.`
- API Setup
   - Define Laravel API routes in routes/api.php.
  - Use controllers to handle API logic.
  - Implement CRUD operations for patients and related entities.
  - Utilize Eloquent relationships for data consistency.
- Frontend Setup
Define Ionic components for patient data entry and display.
Create a service to interact with the backend API.
Implement custom date pipe for formatting birthdates.
Create a directive for highlighting rows based on patient visits.
Deployment
Configure your web server (e.g., Apache, Nginx) to point to the backend's public directory.

Build the Ionic app for production:

bash
Copy code
ionic build --prod
Deploy the generated build files to your preferred hosting platform.
