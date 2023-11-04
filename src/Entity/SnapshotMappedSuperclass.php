<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
abstract class SnapshotMappedSuperclass
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    protected $id;
}
