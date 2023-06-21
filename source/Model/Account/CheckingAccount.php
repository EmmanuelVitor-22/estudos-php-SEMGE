<?php
namespace Model\Account;

class CheckingAccount extends Account { #CheckingAccount = conta corrente

    public function feePercentage(): float
    {
       return 0.05;
    }
}