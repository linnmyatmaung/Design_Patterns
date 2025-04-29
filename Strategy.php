<?php
interface PaymentMethod{
    public function amount();
}
class Cash implements PaymentMethod{
    public function amount(){
        return 100;
    }
}
class Card implements PaymentMethod{
    public function amount(){
        return 50;
    }
}

class Payment{
    private $paymentMethod;
    public function pay($context){
        switch($context){
            case 'cash':
                $this->paymentMethod = new Cash();
                break;
            case 'card':
                $this->paymentMethod = new Card();
                break;
            default:
                throw new Exception("Invalid payment method");
        }
        return $this->paymentMethod->amount();
    }
}

$payment = new Payment();
echo $payment->pay('cash'); // Output: 100