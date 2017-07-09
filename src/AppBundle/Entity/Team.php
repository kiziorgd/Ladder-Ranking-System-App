<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeamRepository")
 */
class Team
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="Player")
     */
    private $players;

    /**
     * @var int
     *
     * @ORM\Column(name="mmr", type="integer")
     */
    private $mmr;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set players
     *
     * @param string $players
     *
     * @return Team
     */
    public function setPlayers($players)
    {
        $this->players = $players;

        return $this;
    }

    /**
     * Get players
     *
     * @return string
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set mmr
     *
     * @param integer $mmr
     *
     * @return Team
     */
    public function setMmr($mmr)
    {
        $this->mmr = $mmr;

        return $this;
    }

    /**
     * Get mmr
     *
     * @return int
     */
    public function getMmr()
    {
        return $this->mmr;
    }
}

