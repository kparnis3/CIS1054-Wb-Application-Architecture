# Principles of Web Application Architecture Assignment

## Project Outline

### PART 1 – SETUP AND PRELIMINARY TASKS (10%)

Note: A private GitHub repository is required for any code produced in Part 1 (named “cis1054-
part1”). Please also include chrisporter-um along with your team members as collaborators. It
doesn’t matter who creates the repository, as long as all team members are added as Collaborators.
Then proceed with the following tasks:

1)  Outline the entire process (and technologies) required to set up an HTTP server with
PHP support.

2)  Write a simple script (serverdt.php) which returns the current date and time on the
server back to the client.

3)  Write a simple script (lastvisit.php) which stores, for each user session, the date and
time of the first time the page was loaded. On subsequent interactions, the script
should return something on the lines of: "You first used this page x seconds ago".
Outline the techniques used to achieve this.

4)  You need a way by which you could (a) read a set of parameters sent along a client
request (i.e. username, age) and (b) store these parameters in session variables. Write a
script (processrequest.php) that is able to capture these request parameters for both
GET as well as POST requests and which then stores these values in session variables.

5)  Write a simple script (readsession.php) that reads session variables stored by the script
above (processrequest.php) and echoes them neatly back to the client. Explain how
sessions work, and how PHP scripts can differentiate between different user sessions.

### PART 2 – DYNAMIC WEB APPLICATION (90%)

Based on the principles and best practices discussed throughout this course, you are asked to build a
dynamic website for a restaurant of choice. This website should provide:

1)  Generic information about the restaurant (including address and opening hours)

2)  Information about the people running it.

3)  A way to allow users to contact the restaurant (to book a table, send a query or file a
complaint.

4)  Information about the current menu being served at the restaurant (i.e. list of dishes) and

5)  A detailed description of each item on the menu (on a separate page from the list provided
in 4.

6)  Users should be able to add individual dishes to a “favourites” list (from within the dish
details page).

7)  Which list can then be accessed from a dedicated page, listing all the marked dishes (and
their details), while allowing users to remove dishes from the list or send the entire list to an
email address of their choice.

The menu page as well as menu-item detail pages should be dynamically generated based on a
separate structured data file or a simple database containing a hierarchal representation of dishes
served by the restaurant. XML, CSV as well as relational databases are all acceptable formats to
represent the necessary data structure . This strategy would allow non-technical
users to modify their site content independently.

# Design

The following diagrams will provide an overview of the structure for the fork() website, the interactions between the
customers and the administrator with the website and the structure of the MySQL database setup with its respective
data types and fields.

### A General Overview

The following Use-Case-Diagram depicts a top-level view of the basic functions and interactions.

![image](https://github.com/kparnis3/CIS1054-Wb-Application-Architecture/assets/81303628/2ae8e395-107a-4a84-8b99-2992527e3f6a)

### Structure of Data

The following Data-Structure-Diagrams depicts how the data in the database was modelled prior to implementation
and the result after implementation.

![image](https://github.com/kparnis3/CIS1054-Wb-Application-Architecture/assets/81303628/678b2c74-1f8c-4568-a34f-6d3cfa829024)

![image](https://github.com/kparnis3/CIS1054-Wb-Application-Architecture/assets/81303628/8ecde853-692a-4201-8d18-de1545b0ae7b)

![image](https://github.com/kparnis3/CIS1054-Wb-Application-Architecture/assets/81303628/a57241f8-137f-4276-a305-f6bf0ea78cfe)

### Entity Relationships

For the website’s data to flow well and work efficiently, relationships between the database tables were required.
The login table utilises the usr id primary key to uniquely identify each registered user. The menu item table
utilises the iID primary key to uniquely identify each dish for sale. These two primary keys are used as foreign keys
in the favourites table to identify which users have which dishes saved in their favourites list. The following two
relationships occur in the database:

1. favourites to menu_item: 1 to N
2. login to favourites: 1 to N.

![image](https://github.com/kparnis3/CIS1054-Wb-Application-Architecture/assets/81303628/d62917fd-a7bc-427d-9a63-6a6989b4a1a8)

### Flow of Data

The following Data-Flow-Diagrams outlint the flow of data between all the functions implemented. The Context
Diagram, a Level 0 DFD, depicts the data flow between the external entities and functions. A more detailed and
internal depiction of the data flow between the entities and functions is shown through a Level 1 DFD below.

![image](https://github.com/kparnis3/CIS1054-Wb-Application-Architecture/assets/81303628/c8417fd3-9d55-4b64-993c-81411e90b444)

![image](https://github.com/kparnis3/CIS1054-Wb-Application-Architecture/assets/81303628/f54b40a9-2ad5-43bf-8ad8-f06ea477bf4a)

# Website Visuals
## Main Menu
![image](https://github.com/kparnis3/CIS1054-Wb-Application-Architecture/assets/81303628/4bc21a5d-1aff-4c71-934f-78f319d0b26f)
## Accounts Page
![image](https://github.com/kparnis3/CIS1054-Wb-Application-Architecture/assets/81303628/aa0d66d6-d599-400d-96a1-59a17dbc7ef7)
## Menu Page
![image](https://github.com/kparnis3/CIS1054-Wb-Application-Architecture/assets/81303628/03cd199d-652a-414b-9c60-91f3e3163091)

# Setup

## Server to run PHP

An Apache server was setup for the php scripts provided, this was set up using the XAMPP software (version 3.2.4).
For the database to run, XAMPP’s MySQL service was used. The folder housing the website was placed inside of the
xampp/htdocs file and could be run locally by going into any browser typing ’http://localhost/CIS1054-Part2-main/’
and finding the script ’About.php’ which is the front page of the website.

## Database

As stated above the XAMPP’s MySQL service was used for the setup for the database, to access the database
’http://localhost/phpmyadmin/’ will need to be typed in any browser. Create a new database from the lefthand side
and call it ’phplogin’ (Note: A different database name will result in the ’dbh.php’ file not being able to connect to
the database. After this, click on the empty database select ’import’ at the top of the screen and choose ’phplogin.sql’
found within the file ’DATABASE SETUP’. Alternativerly within the same folder three text files have been provided
in order and from the empty phplogin database the sql statements found within the textfile’s can be put inside sql
and run (must be run in order) for a similar result.




