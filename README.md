# Cli_Color

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

echo CLI_Color::Success("Some text to user"); //will return pretty white text on green background
echo CLI_Color::Success("Some text to user",true); //will return pretty white text on green background on new line

echo CLI_Color::Warning("Some text to user"); //will return pretty white text on green background
echo CLI_Color::Notify("Some text to user"); //will return pretty dark text on gray background
echo CLI_Color::Promt("Some text to user"); //will return pretty white text on blue background

CLI_Color::Wait(); //each time you call it, will print one symbol in cycle (prev symbol of progress will be deleted); You do not need to echo method return
```
