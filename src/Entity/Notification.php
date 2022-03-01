<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\Entity\NotificationInterface;
use Mgilet\NotificationBundle\Model\Notification as NotificationModel;

/**
 * Class Notification
 * @ORM\Entity
 */
class Notification extends NotificationModel implements NotificationInterface
{
}