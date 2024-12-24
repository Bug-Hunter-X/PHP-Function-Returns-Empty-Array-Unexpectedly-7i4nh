```php
function processData(array $data): array {
  // ... correct code to process the data without unintended side effects...
  return $data; // Ensure data is returned correctly.
}

$data = [1, 2, 3, 4, 5];
$result = processData($data);

// Now the output is as expected
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 ) 
```