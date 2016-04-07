<?php

namespace Badger\GameBundle\Repository;

use Doctrine\Common\Persistence\ObjectRepository;
use Badger\UserBundle\Entity\User;

/**
 * Repository interface for ClaimedBadge entities.
 *
 * @author Adrien Pétremann <adrien.petremann@akeneo.com>
 */
interface ClaimedBadgeRepositoryInterface extends ObjectRepository
{
    /**
     * Get all Badge ids claimed by the given $user.
     *
     * @param User $user
     *
     * @return array
     */
    public function getBadgeIdsClaimedByUser(User $user);
}