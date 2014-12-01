# MobilDetect package for Laravel

[![Build Status](https://travis-ci.org/marktopper/Laravel-MobileDetect.svg)](https://travis-ci.org/marktopper/Laravel-MobileDetect)
[![Total Downloads](https://poser.pugx.org/marktopper/Laravel-MobileDetect/downloads.svg)](https://packagist.org/packages/marktopper/Laravel-MobileDetect)
[![Latest Stable Version](https://poser.pugx.org/marktopper/Laravel-MobileDetect/v/stable.svg)](https://packagist.org/packages/marktopper/Laravel-MobileDetect)
[![Latest Unstable Version](https://poser.pugx.org/marktopper/Laravel-MobileDetect/v/unstable.svg)](https://packagist.org/packages/marktopper/Laravel-MobileDetect)
[![License](https://poser.pugx.org/marktopper/Laravel-MobileDetect/license.svg)](https://packagist.org/packages/marktopper/Laravel-MobileDetect)

### Installation

First add the package to your composer by running command `composer require marktopper/mobiledetect 1.*` or by adding the following code to `composer.json` followed by running the command `composer update`:
```
{
    "require": {
        "marktopper/mobiledetect": "1.*"
    }
}
```

Add the alias to the aliases in your `app/config/app.php`:
```
'aliases' => array(
    // ...
    'MobileDetect' => 'MarkTopper\MobileDetect\MobileDetect',
)
```

### Usage

The following examples assume you use the MobileDetect class name as alias, but the packages is namespaced so you can name the facade as you wish.

```
$detect = MobileDetect;

if ($detect->isMobile()){
  // this is a mobile
}
else if ($detect->isTablet()){
  // this is a tablet
}

if ($detect->isIE()){
  // this is IE -.-'
}
```

More examples on http://mobiledetect.net/
