<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Rotas do Console
|--------------------------------------------------------------------------
|
| Este arquivo é onde você pode definir todos os seus comandos de console
| baseados em Closure. Cada Closure está vinculada a uma instância de comando,
| permitindo uma abordagem simples para interagir com os métodos de E/S de cada comando.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Exibir uma citação inspiradora');
