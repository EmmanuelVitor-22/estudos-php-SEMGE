<?php
namespace Model\Account;


class SavingsAccount extends Account { #SavingsAccount = Conta Poupança

    public function transfer(Account $destinationAccount, $transferAmount) { #transferir(metodo)
        ($transferAmount > $this->balance)
            # $transferAmount = valor de transferencia
            ? print("Valor indisponível.\n")
            : $this->withdraw($transferAmount);

        $destinationAccount->deposit($transferAmount);
    }
    public function feePercentage(): float
    {
        return 0.03;
    }

}