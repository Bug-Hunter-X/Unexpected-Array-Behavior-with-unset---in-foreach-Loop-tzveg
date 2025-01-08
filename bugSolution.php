```php
function my_function($arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 0) {
      $keysToRemove[] = $key;
    }
  }

  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$my_array = [1, 0, 2, 0, 3];
$result = my_function($my_array);
print_r($result);
```