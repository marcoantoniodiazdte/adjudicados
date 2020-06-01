<?php

namespace App\Helpers;

Class CurrencyExchangeHelper {

    public static function convertPeso($amount)
    {

        $euro   = (new self)->euro();
        $dollar = (new self)->dollar();

        $amounts = [
            "euro"   => $amount / $euro,
            "dollar" => $amount / $dollar,
            "peso"   => $amount
        ];

        return $amounts;
    }

    public static function convertDollar($amount)
    {

        $euro   = (new self)->euro();
        $dollar = (new self)->dollar();

        $amounts['peso']   = $amount * $dollar;
        $amounts['euro']   = $amounts['peso'] / $euro;
        $amounts['dollar'] = $amount;

        return $amounts;
    }

    public static function convertEuro( $amount)
    {
        $euro   = (new self)->euro();
        $dollar = (new self)->dollar();

        $amounts['peso']   = $amount * $euro;
        $amounts['dollar'] = $amounts['peso'] / $dollar;
        $amounts['euro']   = $amount;

        return $amounts;
    }
    
    public function dollar()
    {
        $currencies   = file_get_contents("https://www.currency-calc.com/currencies_rates.json");
        $data = json_decode($currencies, true);
   
        foreach($data['currencies'] as $currency) {
            if( $currency['code'] == 'DOP') {
                return $currency['rate'];
            }     
        }  
    
    }

    public function euro()
    {
        $currencies   = file_get_contents("https://www.currency-calc.com/currencies_rates.json");
        $data = json_decode($currencies, true);
   
        foreach($data['currencies'] as $currency) {
            if( $currency['code'] == 'EUR') {
                return (new self)->dollar() / $currency['rate'];
            }     
        }  
    
    }

     // public function dollar()
    // {
    //     $grab   = file_get_contents("http://www.precio-dolar.com.do/");
    //     $first  = explode( '<td class="pocket-row-right">' , $grab );
    //     $second = explode("</td>" , $first[1] );

    //     $values = explode( " ", $second[0]);
    //     $dolar  = (float) str_replace(",",".",$values[0]);

    //     return $dolar;
    // }

    // public function euro()
    // {
    //     $grab   = file_get_contents("https://www.precio-dolar.com.do/EUR_DOP");
    //     $first  = explode( '<td class="pocket-row-right">' , $grab );
    //     $second = explode("</td>" , $first[1] );

    //     $values = explode( " ", $second[0]);
    //     $euro   = (float) str_replace(",",".",$values[0]);

    //     return $euro;
    // }





}