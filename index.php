<?php
function findDuplicates($arr) {
    $duplicates = array();

    foreach (array_count_values($arr) as $element => $values) {
        if( $values > 1){
            $duplicates[] = $element;
        }
    }

    return $duplicates;
}

// Example usage:
$N = 5;
$a = array(2, 3, 1,5,3,2, 2, 3);

$result = findDuplicates($a);
echo "Output: " . implode(' ', $result);
?>
