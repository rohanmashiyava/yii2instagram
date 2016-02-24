Yii 2 Instagram Integration
===========================
Instagram for yii 2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist rohanmashiyava/yii2instagram "*"
```

or add

```
"rohanmashiyava/yii2instagram": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, you should configure it in the application configuration like the following,

```php
'components' => [
    'yii2instagram' => [
        'class' => 'rohanmashiyava\yii2instagram\Yii2instagram',
        'environment' => 'sandbox',
        'apiKey' => '8f6432a39aec4e99b2d0b54f93a35564',
	'apiSecret' => 'a116b4a7e37645a083eb9a7c7d2492a6',
	'apiCallback' => 'login/instagram',
    ]
]
```
Instagram don't have PHP SDK so we use REST API in order to use Instagram integration on PHP.

Yii2Instagram  by Theta Technolabs
----------------------------------
Contact if any help - rohan@thetatechnolabs.com
