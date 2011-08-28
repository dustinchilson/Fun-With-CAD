Readme:
================================================================================
This setup uses CakePHP as a Model-View-Controller website. Uses DRY (don't
repeat yourself) pricipal to abstract as much code as possible.

The entire directory is stored in a git repository and changes are tracked by
git. The plugins are their own repositories. There are changes to these repos to
customize them to this project.

folders & files:
    app - contains most of the application code
        config - setup configurations for db as well as environment and caching
        controllers - each controller works as a separate interface between a
                      view and a model
        libs - not used
        local - for translations, not used
        models - the setup for database interfaces, methods can be created to do
                 specific things
        plugins - outside code, structured as cakephp applications within other
                  applicatons
           facebook - plugin to allow facebook login - https://github.com/webtechnick/CakePHP-Facebook-Plugin
           media - plugin to allow users to upload files - https://github.com/davidpersson/media
           spark_plug - user authentcation and ACL - https://github.com/jedt/spark_plug
        tests - Unit Tests for test driven developemnt, not used
        tmp - log files, etc.
        vendors - not used
        views - view files for each interface
            classe - views for classe controller
                index.ctp - index view
                view.ctp - view method view
            elements - parts of pages that can be loaded into other pages
                email - not used
                sqldebugtoggle.ctp - shows sql run on each page for debuging
            errors - all error files ex 404 or controller errors
            groups - show group listings
            helpers - allows for loading of code using php
                gravitar.php - creates an image tag linking to a person's
                               gravitar - 
                               http://bakery.cakephp.org/articles/predominant/2009/08/20/gravatar-helper
            layouts - main view wrapping for each situation
                email - not used
                js - not used
                rss - not used
                xml - not used
                blank.ctp - template for page to view without nav and header -
                            used on part view as part of popout
               default.ctp - main layout of page.
        webroot - web accessible files, CSS, javascript, images
            CSS - all CSS files
                blueprint - blueprint css framework
                fwc.css - site specific css
                jquwey.fancybox-1.3.4.css - style for popouts
            files - used for downloads, not used
            img - all images for site
            js - all javascript for site
            media - user uploads
               filter - various sizes of images created durring upload process
               static - orignial file upload
               transfer - tmp file for uploads
            css.php - loads all css in css file to header of template
            favicon.ico - favicon
            index.php - handles all requests, passes to other controllers
            test.php - runs tests
    cake - cakephp code, can be updated independantly from app code
    db_dump - MySQL database dumps, most recent can be used to setup database
    plugins - site wide plugins, not used
    vendors - interfaces to other software, not used 

urls: work as root/controller/method/argument1/argument2/argument3
    root/uploads/ : Uploads
        -add 
            -adds an upload
    root/profile : User profiles
        -view/:id 
            -view the user's profile
        -index 
            -Show all users - available to Admins
    root/users :user login and management
        -index
            -show all users -available to admins
        -add
            -creates a user -available to admins
        -login
            -login screen
        -logout
            -log out
        -register
            -user creates new account
        -activate_password
            -email activation of password
        -change_password
            -user change password
        -login_as_user
            -admins can log in as s specific user
        -forgot_password
            -password recovery
    root/posts :news stories
        -index
            -list news posts blog style
        -add
            -add a post
        -manage
            -delete or edit posts
        -delete/:id
            -deletes post with id
        edit/:id
            -edit post with id
    root/classe :classification structure
        -view/:id
            -view a class & subclasses using id
        -index
            -shows all classes
    root/parts :part listing
        -index
            -shows all parts in a list
        -view/:id 
            -shows part desc page w/ 3d cad preview




Cakephp README:
================================================================================
CakePHP is a rapid development framework for PHP which uses commonly known
design patterns like Active Record, Association Data Mapping, Front Controller
and MVC. Our primary goal is to provide a structured framework that enables PHP
users at all levels to rapidly develop robust web applications, without any loss
to flexibility.

The Cake Software Foundation - promoting development related to CakePHP
http://cakefoundation.org/

CakePHP - the rapid development PHP framework http://www.cakephp.org

Cookbook - user documentation for learning about CakePHP http://book.cakephp.org

API - quick reference to CakePHP http://api.cakephp.org

The Bakery - everything CakePHP http://bakery.cakephp.org

The Show - live and archived podcasts about CakePHP and more
http://live.cakephp.org

CakePHP Google Group - community mailing list and forum
http://groups.google.com/group/cake-php

#cakephp on irc.freenode.net - chat with CakePHP developers
irc://irc.freenode.net/cakephp

CakeForge - open development for CakePHP http://cakeforge.org

CakePHP gear http://www.cafepress.com/cakefoundation

Recommended Reading http://astore.amazon.com/cakesoftwaref-20/
