# shopSport
The online sports shop "Shop Sport"

The online shop is a project created using HTML, CSS, and Bootstrap on the front-end side, and PHP on the back-end side.
Users need to register and log in to the system in order to add sports products to their cart and remove them as desired.
Additionally, they can confirm their orders for further processing.
They can also change their account password or completely delete their account in the account settings.
The project allows the store/inventory administrator to conveniently manage the inventory of products and orders.

My online shop uses a MySQL database. Newly registered users are added to the database, and it also stores the products available for purchase, as well as the products added to the user's cart.
When a user decides to delete their account from the server, their data is removed from the database.

How to run on computer:

The project requires a virtual server XAMPP to be installed on the computer.

After starting Apache and MySQL in XAMPP, to run the project, follow these steps:

    1.Extract the file.
    2.Copy the main project folder.
    3.Paste it into the xampp/htdocs/ folder.
    4.Open a browser and go to the URL "http://localhost/phpmyadmin/".
    5.Select the database tab.
    6.Create a database named "shopsport" and click on the "Import" tab.
    7.Click on "Browse Files" and select the file "shopsport.sql".
    8.Click on "Execute".

After creating the database,
9. Open a browser and go to the URL "http://localhost/shopSport/".
