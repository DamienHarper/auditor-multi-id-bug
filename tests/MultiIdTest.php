<?php declare(strict_types=1);

namespace App\Tests;

use App\Entity\Offer;
use App\Entity\Shop;
use App\Entity\ShopOfferPrice;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MultiIdTest extends KernelTestCase
{
    public function test(): void
    {
        self::bootKernel();

        $em = self::$container->get('doctrine.orm.default_entity_manager');

        $offer = new Offer('offer1');
        $em->persist($offer);

        $shop = new Shop('shop1');
        $em->persist($shop);

        $em->flush();

        self::assertNotEmpty($offer->getId());
        self::assertNotEmpty($shop->getId());

        $sop = new ShopOfferPrice($shop, $offer, 10.0);
        $em->persist($sop);
        $em->flush(); //boom!
    }
}
