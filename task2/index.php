<?php
spl_autoload_register(function(string $class): void {
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/src/';

    if (str_starts_with($class, $prefix)) {
        $relative = substr($class, strlen($prefix));
        $file = $baseDir . str_replace('\\', '/', $relative) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    }
});

use App\Models\Product;
use App\Services\PriceFormatter;

$product = new Product('Ноутбук', 45000.50);

echo "Название: " . $product->getTitle() . "\n";
echo "Цена: " . PriceFormatter::format($product->getPrice()) . "\n";