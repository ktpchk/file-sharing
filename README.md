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
![register](https://user-images.githubusercontent.com/104438625/172863794-28457322-942f-4e49-8445-ce3c1a8179bf.png)
![file_uploading](https://user-images.githubusercontent.com/104438625/172863839-f0a1f578-9a43-4a84-a498-7e797e212f70.png)
![flash_message](https://user-images.githubusercontent.com/104438625/172863859-efddf98a-dc79-4b1f-bc00-a4c84801e538.png)
![latest](https://user-images.githubusercontent.com/104438625/172863900-0cbb6a3f-cb66-4d9b-903b-29ad4817f34c.png)
![file_managing](https://user-images.githubusercontent.com/104438625/172863927-324ced54-e0f9-40b9-804a-92558d230651.png)
![file_page](https://user-images.githubusercontent.com/104438625/172863947-c0a9dc70-f1f2-475e-bd4f-8a69a11dcc6b.png)
![comment_section](https://user-images.githubusercontent.com/104438625/172864003-7b218efe-3154-4675-9f35-49390093d512.png)
![mobile](https://user-images.githubusercontent.com/104438625/172864026-3275ca49-e23d-4eac-ba3e-3baa3312d815.png)
## License

This app uses

-   The Laravel framework which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
-   The Tailwind css framework which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

