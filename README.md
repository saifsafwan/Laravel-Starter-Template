# Starter Laravel Template

This is my own version of Laravel starter template.

-   Out of the box with 2 roles; Admin and User
-   Registration and login redirection
-   Laravel Breeze (TailwindCSS)

Thanks!

## Installation

Clone this project to your local and `cd` into the project.

```bash
composer install

npm install

cp .env.example .env            //configure your database

php artisan key:generate

php artisan template:new        //will generate Admin and User role

php artisan serve               //run your application

Register/Login to your system
```

## Default Role

By default, all user's will be assigned `user` role when register. To change this, you need to go to:

`app\Http\Controllers\Auth\RegisteredUserController.php`

Change line with `$user->assignRole('user');` to your own role.

## Custom Role

You can create your own custom role by typing:

`php artisan create:role`

Running this command will ask you for the Role's name you wish to create.

You also can pass `name` option to command, something like `--name={'Role name'}`

Example: `php artisan create:role --name='Editor'`

## Admin Role

When running `php artisan template:new`, two default users' roles will created, which are `Admin` and `User`.

#### Admin Credential

| email           | password  |
| --------------- | --------- |
| admin@admin.com | adminpass |

## Feedback

If you have any feedback, please reach out to me at [![twitter](https://img.shields.io/badge/twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white)](https://twitter.com/saifsfwn)
