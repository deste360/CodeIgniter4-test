# CodeIgniter4-test
Basic CodeIgniter 4 application test

A simple php composer repository for a CodeIgniter 4 test application.

## Prerequisites
- Composer installed (localy to specific project directory or globaly)
- Apache or other server web
- PHP >= 7.2 (minimum version for CodeIgniter 4)
- MySQL

## Install
After clone repository, in the root directory of the project, where file `composer.json` is located, launch:
```
composer install
```
Composer will download (into a new `vendor` directory) and install dependency for:
- CodeIgniter 4 framework
- CodeIgniter 4 translations
- Myth:Auth CodeIgniter authentication library

Next we have to configure CodeIgniter application Environment by an `.env` file into the root (look at `env` example file), or configure directly `./app/Config/` files (`App.php`, `Database.php`,`Email.php`).

Creating base tables structure using CodeIgniter `spark` utility to migrate all namespaces to the latest migration (alternatively we can deploy our DB from an existing dump):
```
php spark migrate --all
```

Check for App namespace migration available and migrate them if exists:
```
php spark migrate:status
php spark migrate
```

## Updating application
There are several ways to update your application. You can clone this repository, then update by Git, otherwhise you can update all file manually by FTP (or using a zip file and creating a script on server to deploy it).

Personaly i prefer a manual update on production environment. Remember that update packages with `compose` can also change libraries configuration! I use VCS (version control system, Git or Mercurial) on my local development environment to track changes of my application, but I prefer to update components locally, test the entire application, then upload it all on production environment (remember to save all environment specific settings into .env file).

## Notes
- Web server DocumentRoot must be set to `./public` folder of project root



For more information about CodeIgniter 4 give a look to [CodeIgniter 4 User Guide](https://codeigniter4.github.io/userguide/).

More resources here, on GitHub:
- https://github.com/codeigniter4/CodeIgniter4
- https://github.com/lonnieezell/myth-auth
