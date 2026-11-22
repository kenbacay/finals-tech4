# TFA6 POS CRUD and Avatar Upload

Copy these files into the TFA6 POS Laravel project. Install `intervention/image-laravel`, run `php artisan storage:link`, then run `php artisan migrate`.

Routes: `/customers/create`, `/customers/{customer}/edit`, `/users/create`, `/users/{user}/edit`.

The avatar is validated as an image up to 2 MB, resized to 300 by 300 pixels with Intervention Image, saved on the public disk, and stored in the database as a path only. User fields follow the TFA5 schema: username and full_name.
