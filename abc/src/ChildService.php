<?php
namespace PrestaShop\Module\Abc;

use PrestaShop\Module\Modulea\YourService;

class ChildService extends YourService
{
    public function __construct()
    {
    }

    public function sayHello()
    {
        dd('Hello from modulea');
    }
}
