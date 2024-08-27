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

   ```bash
   git clone https://github.com/mranidev/Education.git
   cd Education
   composer install
   npm install
   cp .env.example .env
   php artisan key:generate
   php artisan migrate --seed
   php artisan serve
  ```

## Frontend Routes Overview

    / - Home page
    /download - Downloadable resources
    /gallery - Gallery page
    /notice - Notice board
    /about-us - About Us page
    /contact-us - Contact page
    /courses - Course listings
    /single-course/{id} - Single course details
    /certificate-download/{id} - Certificate download

## Backend Routes (Admin)

    /admin/add-countdown - Add countdown
    /admin/manage-course - Manage courses
    /admin/manage-teacher - Manage teachers
    /admin/manage-notice - Manage notices
    /admin/manage-gallery - Manage gallery
    /admin/manage-certificate - Manage certificates
    /admin/message - Manage messages

## Contributing

    Fork the repository.
    Create a new branch (git checkout -b feature-branch).
    Make your changes.
    Commit your changes (git commit -m 'Add new feature').
    Push to the branch (git push origin feature-branch).
    Create a new Pull Request.

## License

This project is licensed under the MIT License. See the LICENSE file for more information.
Contact

For any inquiries or feedback, please contact us at mranidev@proton.me.
