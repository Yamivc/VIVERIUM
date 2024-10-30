#Viverium

## Description

This app is for all the plant lovers in the world, you can save your favourite plants and have all of them in one place.

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/Yamivc/VIVERIUM.git
    cd viverium
    ```

2. Install PHP dependencies using Composer:

    ```bash
    composer install
    ```

3. Install Node.js dependencies:

    ```bash
    npm install
    ```

4. Build your assets:

    ```bash
    npm run dev
    ```

5. Set up your environment file:

    Copy the .env.example file to a new file named .env.

    ```bash
    cp .env.example .env
    ```

7. Set up your database:

-   Create a new database in your MySQL server (e.g., my_plants).
-   Update the .env file with your database credentials.(its already in the archives becouse you need it)

8. Run the migrations:

   ```bash
    php artisan migrate
    ```

## Running the Application

To run the application, make sure you have completed the setup above. Then, start the server with:

```bash
php artisan serve
```

Finally, visit http://localhost:8000 in your web browser.

## Built With

`PHP` `laravel` `blade` `mysql` `tailwind` `flowbite`

## Authors

-   **Yamiley** - 
