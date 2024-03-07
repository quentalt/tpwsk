<?php
function main(array $args) : array {
    $rand = rand(0, 100) / 100;
    $double = $rand * 2;
    return [
        "original" => $rand,
        "résultat" => $double
    ];
}
?>
