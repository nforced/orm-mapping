<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Virtucom\SnapshotMappedSuperclass;

#[ORM\Entity]
class Snapshot extends SnapshotMappedSuperclass
{
}
