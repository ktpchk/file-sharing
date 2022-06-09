# File Sharing

## Requirements

-   PHP 7.4+
-   Composer
-   npm
-   Configured Apache web server

## Installation

Clone repo locally:

```sh
  $ git clone https://github.com/kotopuchok/file-sharing.git
```

Cd into project folder and run:

```sh
  $ composer install
```

Then:

```sh
  $ npm install
```

Copy `.env.example` file to new `.env` file:

```sh
  $ cp .env.example .env
```

Create a new application encryption key:

```sh
  $ php artisan key:generate
```

Create database, and in `.env` fill `DB_*` fields with database's credentials

Run the migrations:

```sh
  $ php artisan migrate
```

Link your `public/storage` folder to `storage/app/public` folder:

```sh
  $ php artisan link
```

## Features

-   User registration
-   File uploading
-   File downloading
-   File editing
-   File deleting
-   File searching
-   User's uploaded files page
-   Recently uploaded files page
-   File's information page
-   Preview for image files
-   Players for audio and video files
-   Nested comments
-   Adaptive design
-   Flash messages

## Screenshots

## License

This app uses

-   The Laravel framework which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
-   The Tailwind css framework which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
