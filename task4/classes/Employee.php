<?php
abstract class Employee
{
    public const MIN_BONUS = 500;
    private static int $employeeCount = 0;

    public function __construct(
        protected string $name,
        protected float $salary
    ) {
        self::$employeeCount++;
    }

    abstract public function calculateBonus(): float;

    public function getInfo(): string
    {
        $bonus = $this->calculateBonus();
        return "{$this->name}: оклад = {$this->salary}, премия = {$bonus}";
    }

    public static function getEmployeeCount(): int
    {
        return self::$employeeCount;
    }

    public function getTotalPayment(): float
    {
        return $this->salary + $this->calculateBonus();
    }
}