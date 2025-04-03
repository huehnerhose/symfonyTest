<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Id;


#[ORM\Entity]
#[ORM\Table(name: 'users2')]
class User2
{
    #[Id]
    #[ORM\Column(name: 'id', type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'users2_id_seq', allocationSize: 1, initialValue: 1)]
    public int $id;

    #[ORM\Column(name: 'username', type: 'string')]
    public string $username;
}