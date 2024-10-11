
# Laravel Admin Test

A web application featuring a basic CRUD system for managing books in an administrative panel with a responsive design. This small project was created to perform a "test drive" of Laravel Admin.

## Dependencies

- PHP 8.1.5+
- Composer 2.0.9+
- Docker & Docker Compose
- Open port 80

## Installation & First Time Setup

1. Clone the repository:
    ```bash
    git clone https://github.com/dcomp7/laravel-admin-test.git
    ```
2. Navigate to the project directory:
    ```bash
    cd laravel-admin-test
    ```
3. Install PHP dependencies:
    ```bash
    composer install
    ```
4. Copy the example environment file and configure your environment settings:
    ```bash
    cp .env.example .env
    ```
5. Start the Docker environment:
    ```bash
    vendor/bin/sail up
    ```
6. Generate the application key:
    ```bash
    docker-compose exec laravel.test php artisan key:generate
    ```
7. Run database migrations:
    ```bash
    docker-compose exec laravel.test php artisan migrate
    ```
8. Install JavaScript dependencies:
    ```bash
    docker-compose exec laravel.test npm install
    ```
9. Compile frontend assets:
    ```bash
    docker-compose exec laravel.test npm run dev
    ```

**Optional**: To populate the Books table with sample data for testing pagination, run:
```bash
docker-compose exec laravel.test php artisan db:seed --class=BookSeeder
```

## Application Access & Usage

Ensure the Sail (Docker) environment and `npm run dev` are running:

```bash
vendor/bin/sail up
docker-compose exec laravel.test npm run dev
```

Once the application is up and running, access it in your browser at:
[http://localhost](http://localhost)

**Login credentials**:
- **User**: demo@demo.com
- **Password**: 12345678

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

## Author

Developed by [@dcomp7](http://github.com/dcomp7)
