Very simple Object-Oriented PHP 'Framework'.

`index.php` creates an **object** `$page` which is an **instance** of the `PageWithFooter` class which **extends** the `Page` class and 
overloads one of it's **protected** functions `renderBody()`.

The `MySQL` class **implements** the `Database` class, allowing us to create an `SQLite` class or a `Postgres` class if we want to move away 
from MySQL, but without having to completely rewrite our application.
