<?php
class Manager extends Employee
{
    public function calculateBonus(): float
    {
        $bonus = $this->salary * 0.20;
        return max($bonus, self::MIN_BONUS);
    }
}