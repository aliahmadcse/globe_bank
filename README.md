## Globe Bank

Globe bank is a content management system, for subjects and pages.

It has public as well as admin interface.

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
