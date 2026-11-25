<?php
spl_autoload_register(function(string $class): void {
    $path = __DIR__ . '/classes/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$user = new User('Мария', 'maria@gmail.com');
$product1 = new Product('Книга', 600);
$product2 = new Product('Ручка', 79);
$order = new Order($user, [$product1, $product2]);

echo "Пользователь: " . $order->getUserInfo() . "\n";
echo "Итоговая сумма заказа: " . $order->getTotal() . " руб.\n";