<?php

namespace App\DataFixtures;

use App\Entity\Invoice;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class InvoiceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $invoice = new Invoice();
        $invoice->setCompanyName('Posnania');
        $invoice->setCompanyStreet('Bla bla st.');
        $invoice->setCompanyStreetNumber('24');
        $invoice->setCompanyStreetFlatNumber('500');
        $invoice->setCompanyCity('Poznan');
        $invoice->setCompanyPostCode('06-900');
        $invoice->setCreated(new \DateTime());
        $invoice->setUpdated(new \DateTime());
        $invoice->setEmail('bnayman@cdv.pl');
        $invoice->setPhone('123456789');
        $invoice->setTaxNumber('1234567890');

        $manager->persist($invoice);
        $manager->flush();
    }
}
