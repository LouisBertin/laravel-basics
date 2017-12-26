# Laravel docker environment

## Existing project

In the `docker` folder, run :

```bash
$ docker-compose up -d --build
```

The first time, run :

``` bash
# install composer dependencies
$ composer install

# install node dependencies
$ npm i
```

## Create an empty laravel project

In the `docker` folder, run :

```bash
$ docker-compose up -d --build
```

Download last version of laravel

```bash
$ composer create-project --prefer-dist laravel/laravel files
```

Copy content of `files` folder into the project root and remove `files` folder

Copy and rename `.env.example` to `.env`

Finally, run `php artisan key:generate`
