# PHP JS WebRequest
Use headless chrome to get contents of webpage after running javascript. Tested on Windows 10.

## Requirements
- Node/NPM
- Puppeteer

## Getting started

```
composer require klepak/php-js-webrequest
```

```
npm install puppeteer
```

## Usage
```
$req = (new PhpJsWebRequest);

echo $req->get('https://url.tld');
```

The package assumes your node executable is located in C:\Program Files\nodejs. If it is located elsewhere, you may call the setNodeExecutablePath method.


```
$req = (new PhpJsWebRequest)
    ->setNodeExecutablePath('path');

echo $req->get('https://url.tld');
```
