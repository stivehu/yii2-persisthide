Persistent hide/show item
=========================
Holding hide/show item after page reload

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist stivehu/yii2-persisthide "*"
```

or add

```
"stivehu/yii2-persisthide": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php     
   $hidden = stivehu\persisthide\Persisthide::begin();
    echo $hidden->beginTag();?>
The hiden text
<?= $hidden->endTag(); ?>
<?=  echo $hidden->showButton(Yii::t('app', 'More search'), ['class' => 'btn btn-primary']); ?>

<?php        stivehu\persisthide\Persisthide::end(); ?>
```