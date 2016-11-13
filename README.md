Photo gallery with AJAX and Flickr
========================

This is the test of responsive gallery using bootstrap 3, flickr and Symfony 3.

How to deploy the project:

1. Pull the code from github
2. run composer update in the root folder
3. Create database and set the database connection details in /app/config/parameters.yml
4. Clear cache
5. Run the command "php bin/console doctrine:schema:update --force" to create the database schema
6. Run the command "php bin/console app:add-user" and follow the prompt to create user and password.
7. Go to the home page and login


Note:

1. In the left navigation panel, the top button "Manage category is clickable". Click it and the category CRUD will be shown.
2. Once the category is created, it will load 100 photos from flickr automatically by searching flickr with category's name.


Furture improvement:

1. The photos in category shouldn't load automatically from flickr. It should provide a user interface for user to upload the photos.'
2. Using jQuery would be a little bit hard to maintain if it becomes complicated. We should use ReactJS or any other modern front end framework.

