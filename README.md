ammont/finglify
=============

> Translates Farsi/Persian to Finglish/Pinglish for developement purposes.


Features
--------

- Dictionary Match
- Vowel match
- PSR-4 compatible.
- Compatible with PHP >= 5.3.


Installation
------------

You can install ammont/fa-slugify through [Composer](https://getcomposer.org):

```shell
$ composer require ammont/finglify:dev-master
```


Usage
-----

Translate a persian string:

```php
use Ammont\Finglify\Finglify;

$finglify = new Finglify();
echo $finglify->translate('سلام دنیا');

// salam donya
```

You can also use the class statically:

```php
echo Finglify::trans('سلام دنیا');

// salam donya
```


Changelog
---------

### Version 0.1 (27 July 2014)


Authors
-------

- [Amir Montazer](https://github.com/ammont)



Contributions
-------

We need heavy contributions on the dictionary resourse (words.json file) because there are a lot of words that are not translated yet,
please take a look at the resources/words.json file, try to complete the file and submit pull requests for it so
the project gets more and more accurate.

Do not forget your contributions are appriciated!


License
-------

The MIT License (MIT)

Copyright (c) 2012-2014 Amir Montazer

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
documentation files (the "Software"), to deal in the Software without restriction, including without limitation the
rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit
persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the
Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.