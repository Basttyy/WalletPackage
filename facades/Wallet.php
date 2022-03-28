<?php

namespace Basttyy\Wallet\facades;
use Illuminate\Support\Facades\Facade;

class WalletApiFacades extends Facade{
    protected static function getFacadeAccessor() { return 'wallet'; }
}