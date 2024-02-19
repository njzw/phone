# jenesiszw phone_lib

a classic phone number library.

## Get Started

---

### Installtion

```
 composer require nigel/phone_lib:dev-master jenesiszw/phone_lib:dev-master
```

---

### Import vendor folder and PhoneLibrary class

```
<?php

use JenesisZw\Phone;

require __DIR__ . '/vendor/autoload.php';

```

---

### Usage

```
$phone = "0782000340"; // Zimbabwe Econet Number

$test = (new Phone($phone, 'ZW'))->internationalFormat();


function dd($data)
{
    echo "<code>";
    echo "<pre>";
    die(print_r($data, true));
    echo "</pre>";
    echo "</code>";
}


dd($test);

```

---

### Response

```

263782000340

```

---

### Available Methods

1. isValid()

- check if number is valid or not


2. internationalFormat()

- get international format from the parsed number

3. nationalFormat()

- get national format from the parsed number

4. getCountry()

- get country name from the parsed number

5. providerInfo()

- get provider info from the parsed number

6. timeZoneInfo()

- get timezone info from the parsed number

---
