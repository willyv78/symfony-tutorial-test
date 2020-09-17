<?php

namespace App\Service;

class ContactsInfoManager
{
    public function saveContactForm($name, $message, $phone)
    {
        file_put_contents(__DIR__.'/../../ficheroDeContactos.txt',
            '======================================='.PHP_EOL
            .'NOMBRE: '.$name.PHP_EOL
            .'MENSAJE: '.$message.PHP_EOL
            .'PHONE: '.$phone.PHP_EOL,
            FILE_APPEND
        );
    }
}