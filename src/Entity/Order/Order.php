<?php

declare(strict_types=1);

namespace App\Entity\Order;

use BitBag\SyliusMolliePlugin\Entity\AbandonedEmailOrderTrait;
use BitBag\SyliusMolliePlugin\Entity\MollieSubscriptionInterface;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use BitBag\SyliusMolliePlugin\Entity\OrderInterface;

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
        // TODO: Implement hasRecurringContents() method.
    }

    public function hasNonRecurringContents(): bool
    {
        // TODO: Implement hasNonRecurringContents() method.
    }

    public function getRecurringSequenceIndex(): ?int
    {
        // TODO: Implement getRecurringSequenceIndex() method.
    }

    public function setRecurringSequenceIndex(int $recurringSequenceIndex): void
    {
        // TODO: Implement setRecurringSequenceIndex() method.
    }

    public function getSubscription(): ?MollieSubscriptionInterface
    {
        // TODO: Implement getSubscription() method.
    }

    public function setSubscription(MollieSubscriptionInterface $subscription): void
    {
        // TODO: Implement setSubscription() method.
    }

    public function getRecurringItems(): Collection
    {
        // TODO: Implement getRecurringItems() method.
    }

    public function getNonRecurringItems(): Collection
    {
        // TODO: Implement getNonRecurringItems() method.
    }
}
