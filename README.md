# CliColor

# Description

```
php lib for preparing colored messages (in Cli env)
Also provide pretty "load progress" for indicate some long process cycling(|/=\...)
All methods are static
```

# Usage examples

```php
<?php
require_once 'vendor/autoload.php';
use CliColor\CliColor;

echo CliColor::Success("Some text to user"); //will return pretty white text on green background
echo CliColor::Success("Some text to user",true); //will return pretty white text on green background on new line

echo CliColor::Warning("Some text to user"); //will return pretty white text on green background
echo CliColor::Notify("Some text to user"); //will return pretty dark text on gray background
echo CliColor::Promt("Some text to user"); //will return pretty white text on blue background

CliColor::Wait(); //each time you call it, will print one symbol in cycle (prev symbol of progress will be deleted); You do not need to echo method return
```
