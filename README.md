
# IP 2020: Online Graded Assignment - Simple To-Do List using Laravel

<img src="https://imgur.com/92FMPUU.png"/>

## Assignment Details:

In this individual assignment, you are supposed to complete this Laravel project yourself. This assignment is 10 points worth and will count as your Quiz 2. The **deadline** for this project is on Friday **(17/04/2020) midnight**, Tashkent time. You must push your finished project to this repository before the deadline. Late submissions will not be accepted. 

No other technology but Laravel is allowed in this project. No Javascript or Javascript-related technology are allowed in this project. Do not tamper with irrelevant parts of this project. You can only modify HTML, CSS and relevant PHP files in this project.

No collaboration is allowed. Any attempt to cheat will be penalized with 0 point for this assignment and reported to Academic Affairs for further measures. 

## Cloning and Setting Up Your Project

Go through following steps:

1) Run `git clone [URL of your current repository]` on your `htdocs` folder (or anywhere preferred).
2) Go to this project's folder on your terminal, and run `composer install`
3) Rename `.env.example` file in this folder to `.env`. You can do it directly from your terminal:
	- For Windows, run `ren .env.example .env`
	- For Linux/Mac, run `mv .env.example .env`
4) After that, generate a new app key, run `php artisan key:generate`
5) Go to a PHPMyAdmin page on your local computer and create a database `laravel_todolist`.
5) Open `.env` file and set up your database connection settings. Modify below variables according to the settings of your environment.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1 
DB_PORT=3306
DB_DATABASE=laravel_todolist
DB_USERNAME=root
DB_PASSWORD=
```
6) Run `php artisan migrate --seed`
5) Finally, run `php artisan serve`

Note, that in order set up this blog on your PC, you must have latest versions of PHP and Composer (http://getcomposer.org/) installed on your computer and they must be accessible from your terminal. You have to add paths to these tools into your PATH environment variable to make them accessible from your terminal.

## Completing Tasks

You must complete each task given below:

- [ ] Break down `welcome.blade.php` template into layout and index views. Create necessary components for reusable parts such as task item in necessary. Configure routes in `web.php`.
- [ ] Create a `Task` Eloquent model with a migration file to represent a task in your to-do list. Modify the corresponding migration file with necessary fields, and run all migrations on your local database.
- [ ] Create a corresponding controller and implement user actions for adding, editing and deleting a task. Map these actions to routes in `web.php`. 
- [ ] Implement a following validation rule to each task: Any task must consist of 2 or more words. If user input does not comply with this validation rule, a corresponding error message should be shown to the user. If the message is added to your database successfully, a corresponding notification should be flashed once at the top of your To-Do app.
- [ ] Create a seeder file for populating tasks in database and run it in your local database. 
- [ ] Scaffold an authentication mechanism in this project. Make sure that it registers and logins users. 
- [ ] Customize newly generated login and register pages to your project's design. Include corresponding Login/Logout and Register links at the top of your to-do list app.
- [ ] Use middleware to protect relevant routes of your project from unauthenticated access.
- [ ] Establish a one-to-many relationship between `Task` and `User` models both on a model level and on a migration level. Run all migration files again to refresh your database with new changes. Make appropriate modifications in your task controller as well to incorporate new relationship between `Task` and `User`.
- [ ] Your To-Do app has to show only those tasks which belong to an authenticated user, and should not display or allow the modification of tasks which belong to other users. Use `Gates` to enforce restrictions on making modifications on other users' tasks. 

Once you finish all tasks above, export the current state of your local database into a `dump.sql` file and include it into this folder.

## Submiting Your Project

Once you finish your project, go through following steps:

1) Open terminal in your project's root directory.
2) Run `git add .`
3) Run `git commit -m 'finished all tasks'`
4) Run `git push -u origin master`

Once you finish above steps, make sure that all your changes are uploaded to this repository.

## Your Mark

You mark for this quiz will be written here. Also it will be announced in eClass.