<?php
namespace Model\Account;

class SavingsAccount extends Account { #SavingsAccount = Conta Poupança

    public function feePercentage(): float
    {
        return 0.03;
    }
}