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

use App\Book;
use App\Electronics;
use App\Product;

$catalog = [
    new Book('Война и мир', 800),
    new Electronics('Смартфон', 30000, 5),
    new Book('Мастер и Маргарита', 650),
    new Electronics('Ноутбук', 75000, 10),
    new Book('1984', 450),
    new Electronics('Планшет', 25000, 3)
];

$totalFinalPrice = 0;
foreach ($catalog as $product) {
    echo $product->getInfo() . "\n";
    $totalFinalPrice += $product->getFinalPrice();
}

echo "\nСумма конечных цен по каталогу: {$totalFinalPrice} руб.\n";
echo "Общее число созданных товаров: " . Product::getCount() . "\n";