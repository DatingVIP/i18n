i18n
=============

i18n helpers

Currently offers a simple class to transliterate Serbian cyrillic to latin script and vice versa.

Example usage:

```php
require_once 'src/DatingVIP/i18n/Serbian.php';

use DatingVIP\i18n\Serbian;

echo Serbian::cyr2lat ('ћевапчић');
// outputs: ćevapčić
```
