## A PHP project.
### This is a simple project that you can use to store html color codes and their names.

Libraries Used
=================
- Fast Route for Routing https://github.com/nikic/FastRoute
- Eloquent ORM for Data Storage https://github.com/illuminate/database
- Guzzle Http for Http Requests http://docs.guzzlephp.org/en/stable/

External APIs
=================
https://www.thecolorapi.com/

How To Use
--------------
- Clone the Repository
- Create A Database with your preferred details, and run the query contained in _db/migrations/colorTable.sql_
- Copy _settings.example.php_ into a file named _settings.php_ and modify the settings with your own database connection details 
- Run _composer install_ to get project dependencies.
- The routes to the API can be seen in _routes.php_. You can add, edit, remove, or fetch all colors with a client like POSTMAN.
- There is an extra route to fetch color details from _https://www.thecolorapi.com/_

Hint:
-------
Works better if you set up a virtual host for this repo.