<?php

namespace Model\Account;
use NumberFormatter;


abstract class Account {
    // Access modifiers (private, protected, public)
    private Owner $owner; // titular
    protected float $balance = 0; // saldo
    // Static attribute, it belongs to the class (form) and not to the object (cake) itself
    private static $countAccount = 0; // contadorConta

    /* Constructor method
     * NOTE: IN PHP, THERE CAN ONLY BE ONE CONSTRUCTOR
     */
    public function __construct($owner) {
        $this->owner = $owner;
        $this->balance = 0;
    }

    /*
     * It functions to close/destroy something (in this case, an object);
     * It is automatically called when the object's life comes to an end
     */
//    public function __destruct() {
//        echo "Objeto destruído;" . PHP_EOL;
//    }

    // Methods

    public function withdraw($withdrawalAmount) { # saque
        $withdrawalFee = $withdrawalAmount * $this->feePercentage();
        $withdrawalAmount += $withdrawalFee;

        ($withdrawalAmount < 0 || $withdrawalAmount > $this->balance)
            ? print("Valor inválido ou saldo insuficiente.\n")
            : $this->balance -= $withdrawalAmount;
    }

    abstract public function feePercentage(): float; // porcentagemDaTarifa

    public function deposit(float $depositAmount) { #depositar
        ($depositAmount < 0) ? print("Valor de depósito não pode ser negativo.\n")
            : $this->balance += $depositAmount;
    }



    /*
     * In the case of the balance, since the only way to alter or define it
     * will be through the withdrawal, transfer, or deposit methods.
     * Access methods do not necessarily need to be created for all attributes.
     */
    public function getBalance() {
       return  $this->formatBalance($this->balance);
    }

    private function formatBalance($balance) {
        $format = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        return numfmt_format_currency($format, $balance, 'BRL');
    }

    // Static methods
    public static function getCountAccount() {
        /*
         * To access a static attribute, we use ::
         * "self" is equivalent to "this"
         * While "this" is used for instance members, "self" is used for static members
         */
        return self::$countAccount++;
        // The above code is equivalent to: return Account::$countAccount
    }
}

/*
 * $firstAccount = new Account("ffdfdf", "Name ", 1234);
 * $firstAccount = stores the memory address where the object is stored, not the object itself;
 *
 * In other words, it is by reference.
 * $secondAccount = $firstAccount;
 * $secondAccount receives the value of the address that "$firstAccount" stores.
 * In the end, it points to the same memory address.
 *
 * Explanation in image - https://i.stack.imgur.com/drQLh.jpg ;
 */
?>
