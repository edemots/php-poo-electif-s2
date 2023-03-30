<?php

class Character
{
    public function __construct(
        private float $health,
        private float $defenseRatio,
        private int $attackDamages,
    ) {}

    public function getHealth()
    {
        return $this->health;
    }

    public function setHealth(float $health)
    {
        if ($health < 0) {
            $this->health = 0;
        } else {
            $this->health = round($health, 2);
        }
    }

    public function isDead()
    {
        return $this->health == 0;
    }

    public function getAttackDamages()
    {
        return $this->attackDamages;
    }

    public function getDefenseRatio()
    {
        return $this->defenseRatio;
    }
}