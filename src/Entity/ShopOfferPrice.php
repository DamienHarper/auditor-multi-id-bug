<?php declare(strict_types=1);

namespace App\Entity;

class ShopOfferPrice
{
    /**
     * @var Shop
     */
    private $shop;

    /**
     * @var Offer
     */
    private $offer;

    /**
     * @var float|string Decimal
     */
    private $value;

    public function __construct(Shop $shop, Offer $offer, float $value)
    {
        $this->shop = $shop;
        $this->offer = $offer;
        $this->value = $value;
    }

    public function getShop(): Shop
    {
        return $this->shop;
    }

    public function getOffer(): Offer
    {
        return $this->offer;
    }

    public function getValue(): float
    {
        return (float) $this->value;
    }

    public function setValue(float $value): void
    {
        $this->value = $value;
    }

}
