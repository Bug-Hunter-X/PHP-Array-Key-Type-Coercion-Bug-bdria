The solution is simple: always use string keys explicitly, even if your intention is to use numerical indices. This removes ambiguity and prevents PHP's type coercion from interfering. 

```php
$data = [];
$data['true'] = 'This is true';
$data['false'] = 'This is false';
$data['1'] = 'This is one';

var_dump($data);
```

This results in the expected output:

```
array(3) {
  ['true']=>
  string(11) "This is true"
  ['false']=>
  string(12) "This is false"
  ['1']=>
  string(11) "This is one"
}
```

By enforcing string keys, you eliminate the risk of data loss and maintain the integrity of your array data.