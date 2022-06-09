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
![register](https://user-images.githubusercontent.com/104438625/172854272-f18567e2-a5fa-49f1-a154-761ee12323d1.png)
![file_uploading](https://user-images.githubusercontent.com/104438625/172854328-6b2ad2e5-c627-43d8-af8e-740aad970772.png)
![flash_message](https://user-images.githubusercontent.com/104438625/172854412-23a23aa3-7d03-4dcd-871c-0b25a4253d0a.png)
![latest](https://user-images.githubusercontent.com/104438625/172854576-ccc6ee8e-2360-447d-be59-c79025b2e7c1.png)
![file_managing](https://user-images.githubusercontent.com/104438625/172854642-b4fcee6a-36cc-47c9-8b43-64dc394ba756.png)
![file_page](https://user-images.githubusercontent.com/104438625/172854712-081b7e26-ece5-4e4f-9fd5-b9b1a6064503.png)
![comment_section](https://user-images.githubusercontent.com/104438625/172854723-f51ad032-f68d-4892-9c0d-a636ed8bff97.png)
![mobile](https://user-images.githubusercontent.com/104438625/172854738-5fd6ad93-aa1d-44df-8261-7851a7491f47.png)

## License

This app uses

-   The Laravel framework which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
-   The Tailwind css framework which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


