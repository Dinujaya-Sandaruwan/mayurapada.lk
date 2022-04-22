```php
<?php

include 'dbcon.php';

    $sql = "TRUNCATE TABLE comments; TRUNCATE TABLE contact; TRUNCATE TABLE images; TRUNCATE TABLE news; TRUNCATE TABLE news_list;"
    $conn->query($sql);
?>
```

```sql
TRUNCATE TABLE comments;
TRUNCATE TABLE contact;
TRUNCATE TABLE images;
TRUNCATE TABLE news;
TRUNCATE TABLE news_list;
```
