# Mental Health Website
[![MIT License][mit-shield]][mit]

This work is licenced under a [MIT license](https://opensource.org/licenses/MIT).

[mit-shield]: https://img.shields.io/badge/License-MIT-blue.svg
[mit]: https://opensource.org/licenses/MIT

## Description
The Mental Health website is aimed at creating awareness about mental health and remove stigmatization. The user of the website is able to make appointments to mentors to seek advice and help, converse with fellow mentees and be able to share their experiences which can be of help to their fellow mentees. The users can also generate posts/blogs sharing maybe their experiences or articles that can be useful to the users accessing the website.
There is also an admin who is responsible for making sure that data is upto date. Also the admin registers the various mentors of different departments to the website and displays them to the homescreen. The admin is also responsible for ensuring that the post created by the users and ethical by accepting, rejecting or updating the posts as per the rules and guidelines of good conduct.

## Project Setup

### Dependencies needed

The system requires the following libraries, packages and frameworks:


- *Javascript* - Programming language (https://www.javascript.com/)
- *PHP* - Hypertext Processor (https://www.php.net/)
- *HTML* - Markup language for structuring web pages
- *CSS* - Styling for web pages (using TailwindCSS)
- *MySQL* - Database management system (https://www.mysql.com/)
- *Laravel* - Project framework (https://laravel.com/)

### Packages to Download
Visit these links and follow the instructions to ensure these packages are installed in your machine. 
1. Laravel - https://laravel.com/docs/4.2/installation
2. XAMPP - https://www.apachefriends.org/download.html
3. Composer - https://getcomposer.org/
   
### Installation Steps of Project

1. *Install PHP and Composer*:
    Ensure you have PHP installed (Laravel requires PHP 7.3 or later). You can download PHP from php.net.
    Install Composer, a dependency manager for PHP. You can download Composer from getcomposer.org.
    
2. *Install a web server*:
You can use Apache. For local development, I preferred to use XAMPP which include Apache and other necessary components.

3. *Install Laravel via composer*:
This is done by running this command,
composer create-project --prefer-dist laravel/laravel project_name
NB: Include your preferred destination for the laravel project and your preferred name.
    
4. *Set up the .env File created by laravel for important details*

     This file will contain your confidential information. 
   ```
    APP_NAME=your_app_name
    APP_ENV=local
    APP_KEY=your_app_key
    APP_DEBUG=true
    APP_TIMEZONE=UTC
    APP_URL=http://localhost:8000
   ```


4. *Set up the database in the .env file*:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=your_port_number
    DB_DATABASE=your_database_name
    DB_USERNAME=root
    DB_PASSWORD=password
    ```
    

5. *Generate Application Key*:
    ```
    php artisan key:generate
    ```
    

6. *Set Up Database*:
    Create a new database for your Laravel application using your preferred database management tool (e.g., phpMyAdmin, MySQL Workbench).

7. *Migrate Database*:
    ```
    php artisan migrate
    ```


8. *Run the Application*
    Use Laravel's built-in development server to run your application:
    ```
    php artisan serve
    ```
9. *Access the Application*:
    Open your web browser and navigate to http://127.0.0.1:8000.

## Usage Instructions

### How to Run System

Use the following command:
```
php artisan serve
```


### Expected Input Format
User Registration - Email, password, username

Bus Search - Origin, destination, date of travel

Booking - Selected bus, seat number, payment details

### Output Format
Search Results - Available bus routes and seat availability

Booking Confirmation - Details of the booked ticket and payment receipt

## Project Structure
### Overview
```
C:.
|   .env
|   .gitignore
|   db.sqlite3
|   manage.py
|   prototype1
|   README.md
|   requirements.txt
|   tree_structure.txt
|   
+---backend
|   |   asgi.py
|   |   settings.py
|   |   urls.py
|   |   wsgi.py
|   |   __init__.py
|           
+---main
|   |   admin.py
|   |   apps.py
|   |   forms.py
|   |   models.py
|   |   signals.py
|   |   tests.py
|   |   urls.py
|   |   views.py
|   |   __init__.py
|   |   
|   +---migrations
|   |   |   0001_initial.py
|   |   |   0002_alter_otptoken_otp_code.py
|   |   |   0003_booking_bus_profile_route_alter_otptoken_otp_code_and_more.py
|   |   |   0004_remove_profile_id_user_remove_profile_profileimg_and_more.py
|   |   |   0005_alter_otptoken_otp_code_alter_profile_phone_number.py
|   |   |   __init__.py
|   |   |   
|   +---templates
|   |   |   base.html
|   |   |   resend_otp.html
|   |   |   verify_token.html
|   |   |   
|   |   +---main
|   |   |       base.html
|   |   |       home.html
|   |   |       
|   |   \---registration
|   |           login.html
|   |           password_reset_form.html
|   |           sign_up.html
|           
+---media
|   |   blank-profile-picture.png
|   |   
|   \---profile_images
|           bus.jpg
|           homepage.jpg
|           Screenshot_2024-05-30_222652.png
|           
+---static
|   +---assets
|   \---Images
|           blank-profile-picture.png
|           bus.jpg
|           homepage.jpg
|           
\---templates
    |   setting.html
    |   
    \---registration
            password_reset_complete.html
            password_reset_confirm.html
            password_reset_done.html
            password_reset_email.html
            password_reset_form.html
```
* File tree generated using command tree /F /A > tree_structure.txt
### Key Files
manage.py - Lets one interact with this Django project in various ways.

settings.py - Contains configuration for the Django project, including database settings, installed apps, middleware and other settings.

models.py - Defines the data models for the application, representing the structure of the database.

urls.py - Contains URL declarations for the application. It maps URLs to the corresponding views.

## Additional Information
### Acknowledgement
This project is built using several open-source technologies and we would like to thank the developers of these technologies:
- [![JavaScript][javascript-shield]][javascript]
- [[!CSS][css-shield]][css]
- [![PostgreSQL][postgresql-shield]][postgresql]
- [![HTML][html-shield]][html]

[python-shield]: https://img.shields.io/badge/Python-3776AB?style=for-the-badge&logo=python&logoColor=white
[python]: https://www.python.org/

[django-shield]: https://img.shields.io/badge/Django-092E20?style=for-the-badge&logo=django&logoColor=white
[django]: https://www.djangoproject.com/

[postgresql-shield]: https://img.shields.io/badge/PostgreSQL-336791?style=for-the-badge&logo=postgresql&logoColor=white
[postgresql]: https://www.postgresql.org/

[html-shield]: https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white
[html]: https://developer.mozilla.org/en-US/docs/Web/HTML
### Known Issues
1. Security Considerations
2. Validation and Error Handling
3. Payment Gateway Integration Issues
4. Real-time Seat Availability Updates
## Contact Information
For any inquiries, please contact us at:

https://github.com/Martinlenga

https://github.com/Chege-Gitiche
