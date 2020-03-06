## Globe Bank

Globe bank is a content management system for managing content
related to subjects and pages.

![Globe Bank](public/images/docs/ss_globe_bank.png)

## Set Up Project

- Download the project repository from github.
- Extract the zip file and move the project repository into server's (xampp or wamp) web root folder.
- Import the database file (globe_bank.sql) into your server.
- Start your server and type 'localhost/globe_bank/public' to view the site.

## Description

This project public as well as admin interface.

Public interface is intended for common viewer

```
│
├───.vscode
│       launch.json
│
├───private
│   │   auth_functions.php
│   │   database.php
│   │   db_credentials.php
│   │   functions.php
│   │   initialize.php
│   │   query_functions.php
│   │   validation_functions.php
│   │
│   └───shared
│           public_footer.php
│           public_header.php
│           public_navigation.php
│           staff_footer.php
│           staff_header.php
│           static_homepage.php
│
└───public
    │   index.php
    │   language.php
    │
    ├───images
    │   │   gbi_logo.png
    │   │
    │   ├───homepage_assets
    │   │       family_buying_home_L30707.jpg
    │   │
    │   └───page_assets
    │           about us_96582054.png
    │           banking_57278269.png
    │
    ├───staff
    │   │   index.php
    │   │   login.php
    │   │   logout.php
    │   │
    │   ├───admins
    │   │       delete.php
    │   │       edit.php
    │   │       index.php
    │   │       new.php
    │   │       show.php
    │   │
    │   ├───pages
    │   │       delete.php
    │   │       edit.php
    │   │       index.php
    │   │       new.php
    │   │       show.php
    │   │
    │   └───subjects
    │           delete.php
    │           edit.php
    │           index.php
    │           new.php
    │           show.php
    │
    └───stylesheets
            public.css
            staff.css
```

## Setting up the project

## Admin Access

User name: johndoedev

Password: Johndoe@12345

## Database ERD

![Globe Bank Entity Relationship Diagram](public/images/docs/globe_bank_erd.png)
