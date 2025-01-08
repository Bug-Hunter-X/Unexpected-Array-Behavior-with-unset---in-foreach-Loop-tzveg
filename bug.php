```php
function my_function($arr) {
  foreach ($arr as $key => $value) {
    if ($value === 0) {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$my_array = [1, 0, 2, 0, 3];
$result = my_function($my_array);
print_r($result);
```