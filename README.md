# Education - Comprehensive Education Management System

Education is a robust and scalable web-based education management system designed to streamline administrative processes and enhance the user experience for students, teachers, and administrators. The system offers a range of features including course management, certificate generation, student tracking, and more.

## Features

- **Frontend Features**
  - Home Page with Downloadable Resources
  - Gallery and Notice Board
  - Teacher Profiles and Contact Form
  - Course Listings and Enrollment
  - Certificate Generation and Download

- **Backend Features**
  - Admin Dashboard
  - Countdown Management
  - Notice Management
  - Slider and Gallery Management
  - Course and Teacher Management
  - Certificate Management
  - Message Management

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/mranidev/Education.git
   cd Education
   composer install
   npm install
   cp .env.example .env
   php artisan key:generate
   php artisan migrate --seed
   php artisan serve```

