# Usage

1. Copy file: `/.config/settings.inc.php.example` to `./config/settings.inc.php`;
2. Setup mysql information in `settings.inc.php`;
3. Include file: `'./db/DB.php'`;
4. Use `$db = DB::getInstance()` method to receive `DB object`;
5. Use database PDO object (`$db->pdo`) to execute queries in database;

## Example

```php
// index.php
require_once './db/DB.php';
$db = DB::getInstance();

if (isset($_GET['user_id']) && $_GET['user_id'] && is_int($_GET['user_id'])) {
    $user = $db->pdo->where('id', (int)$_GET['user_id'])->getOne('users');
    if ($user) {
        print_r($user);
    } else {
        echo 'User not found';
    }
} else {
    echo 'User id not given in ';
}

```


## Docs about PDO object methods:
https://github.com/tommyknocker/pdo-database-class


## To show errors use:

Use in file:
```php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_A LL);
```


# UI:

Use custom CSS and JS or it is possible to use `Bootstrap` framework.

`Examples` folder contains how to include Bootstrap 4 CSS and JS in page.

Docs: https://getbootstrap.com/docs/4.0/
Examples: https://getbootstrap.com/docs/4.0/examples/


# Structure advices:

Public pages create in root folder:
   - index.php
   - products.php
   - product.php
   - order.php
   - etc.

Private (admin) pages create in sub folder like `admin`:
   - admin/index.php
   - admin/products.php
   - admin/product.php
   - admin/edit_product.php
   - admin/new_product.php
   - etc.