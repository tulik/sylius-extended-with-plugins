<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use BitBag\SyliusMolliePlugin\Entity\ProductInterface;
use BitBag\SyliusMolliePlugin\Entity\ProductTrait;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct implements ProductInterface
{
    use ProductTrait;

    /**
     * @ORM\ManyToOne(targetEntity="BitBag\SyliusMolliePlugin\Entity\ProductType")
     * @ORM\JoinColumn(name="product_type_id", fieldName="productType", onDelete="SET NULL")
     */
    protected $productType;

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
