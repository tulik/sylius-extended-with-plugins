<?php

declare(strict_types=1);

namespace App\Entity\Order;

use BitBag\SyliusMolliePlugin\Entity\MollieSubscriptionInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use BitBag\SyliusMolliePlugin\Entity\OrderInterface;
use BitBag\SyliusMolliePlugin\Entity\AbandonedEmailOrderTrait;
use Sylius\Component\Core\Model\Order as BaseOrder;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_order")
 */
class Order extends BaseOrder implements OrderInterface
{
    use AbandonedEmailOrderTrait;

    /**
     * @var bool
     * @ORM\Column(type="boolean", name="abandoned_email")
     */
    protected $abandonedEmail = false;

    public function hasRecurringContents(): bool
    {
        return false;
    }

    public function hasNonRecurringContents(): bool
    {
        return true;
    }

    public function getRecurringSequenceIndex(): ?int
    {
        return null;
    }

    public function setRecurringSequenceIndex(int $recurringSequenceIndex): void
    {
    }

    public function getSubscription(): ?MollieSubscriptionInterface
    {
        return null;
    }

    public function setSubscription(MollieSubscriptionInterface $subscription): void
    {
    }

    public function getRecurringItems(): Collection
    {
        return new ArrayCollection();
    }

    public function getNonRecurringItems(): Collection
    {
        return new ArrayCollection();
    }
}
