<?php

namespace App\Tests;

use App\Service\ContactsInfoManager;
use PHPUnit\Framework\TestCase;

class ContactsInfoManagerTest extends TestCase
{
    public function testSave()
    {
        if (\file_exists(__DIR__.'/../ficheroDeContactos.txt')) {
            unlink(__DIR__.'/../ficheroDeContactos.txt');
        }

        $contactsInfoManager = new ContactsInfoManager();
        $contactsInfoManager->saveContactForm(
            'Nombre de prueba',
            'Mensaje de prueba',
            'Telefono de prueba'
        );

        $this->assertEquals(\file_exists(__DIR__.'/../ficheroDeContactos.txt'), true);
    }
}