<?php
spl_autoload_register(function(string $class): void {
    $path = __DIR__ . '/classes/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$employees = [
    new Manager('Ракова', 80000),
    new Developer('Горбатенко', 90000, 3),
    new Manager('Кристофер', 75000),
    new Developer('Мехренина', 85000, 5),
    new Manager('Колесов', 95000)
];

$totalPayments = 0;
foreach ($employees as $emp) {
    echo $emp->getInfo() . "\n";
    $totalPayments += $emp->getTotalPayment();
}

echo "\nОбщая сумма выплат: {$totalPayments} руб.\n";
echo "Количество сотрудников: " . Employee::getEmployeeCount() . "\n";