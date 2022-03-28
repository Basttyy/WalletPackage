<?php
namespace Basttyy\Wallet\controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Basttyy\Wallet\Model\Account;
use Basttyy\Wallet\Model\AccountType;
use Basttyy\Wallet\Model\TransactionType;
use Basttyy\Wallet\Model\UserBalance;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
class WalletController extends Controller
{
    function __construct()
    {
        
    }

    public function test() {
        echo "This is test method";
    }
}