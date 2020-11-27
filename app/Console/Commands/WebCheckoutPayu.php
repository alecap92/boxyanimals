<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WebCheckoutPayu extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'checkout:payu';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'genera claves de payu en .env';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
    $capcha ='
API_KEY_PAYU=4Vj8eK4rloUd272L48hsrarnUA
MERCHANT_ID_PAYU=508029
ACOUNT_ID_PAYU=512324
CURRENCY_PAYU=MXN';
            file_put_contents($this->laravel->environmentFilePath('API_KEY_PAYU'), $capcha, FILE_APPEND);


                return "Capcha generado";
    }
}