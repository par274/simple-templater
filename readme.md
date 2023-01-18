![php](https://img.shields.io/github/languages/top/par274/simple-templater)
![license](https://img.shields.io/github/license/par274/simple-templater)

# PHP Simple Templater

A simple template engine for simple PHP applications.

# Install

### Requirements & Setup
- Composer
- PHP 7.4+

```
composer require par274/templater
```

OR

```
git clone https://github.com/par274/simple-templater
composer update
```

# Usage

```php
<?php
use Templater\Templater;
?>
```

### Print DocType 
```php
<?php echo $this->getDoctype(); ?>
```

### Global variable definition 
```php
<?php
$templater->addGlobals([
  'test' => [
      'status' => 'ok'
  ]
]);
?>
```

```php
<?php echo $test->status; ?>
```

### Change page title
```php
<?php $this->setPageTitle('Depremler Tablo'); ?>
```

### Variable definition
```php
<?php
$data = [
  'test' => 'test'
];
echo $templater->render('{page_container:index}', $data);
?>
```

View/view.index.php
```php
<?php echo $test; ?>
```

### Set head items

This is the function where you can easily define such as style and js definitions.

```php
<head>
<?php
echo $this->setHead([
    'title' => [
        'content' => $this->getPageTitle()
    ],
    '{meta_0}' => [
        'attributes' => [
            'http-equiv' => 'Content-Type',
            'content' => 'text/html; charset=utf-8'
        ]
    ],
    '{meta_1}' => [
        'attributes' => [
            'http-equiv' => 'X-UA-Compatible',
            'content' => 'IE=Edge'
        ]
    ],
    '{meta_2}' => [
        'attributes' => [
            'name' => 'viewport',
            'content' => 'user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1'
        ]
    ],
    '{link_0}' => [
        'attributes' => [
            'rel' => 'stylesheet',
            'href' => "public/vendor/vendor.css?v=1673363766"
        ]
    ],
    '{link_1}' => [
        'attributes' => [
            'rel' => 'stylesheet',
            'href' => "public/style.css?v=" . time()
        ]
    ]
]);
?>
</head>
```

### Last look
```php
<?php

define('APPLICATION_SELF', __DIR__);

require(APPLICATION_SELF . '/vendor/autoload.php');

use Templater\Templater;

$templater = new Templater();
$templater->setPath(APPLICATION_SELF . '/View');
$templater->addGlobals([
    'test' => [
        'status' => 'ok'
    ]
]);

$data = [];
echo $templater->render('{page_container:index}', $data);
?>
```

## Packages used for this library

- [Symfony/VarDumper](https://github.com/symfony/var-dumper)

# License
The license of this library is MIT(MIT License). It cannot be sold, but you can use it.

You can check [this file](https://github.com/par274/simple-templater/blob/master/license.md) for more information.