<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="player")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlayerRepository")
 */
class Player
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
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Ladder")
     */
    private $ladder;

    /**
     * @var int
     *
     * @ORM\Column(name="mmr", type="integer")
     */
    private $mmr;

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="integer")
     */
    private $points;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusPool", type="integer")
     */
    private $bonusPool;

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
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getLadder()
    {
        return $this->ladder;
    }

    /**
     * @param mixed $ladder
     */
    public function setLadder($ladder)
    {
        $this->ladder = $ladder;
    }

    /**
     * @return int
     */
    public function getMmr()
    {
        return $this->mmr;
    }

    /**
     * @param int $mmr
     */
    public function setMmr($mmr)
    {
        $this->mmr = $mmr;
    }

    /**
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param int $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * @return int
     */
    public function getBonusPool()
    {
        return $this->bonusPool;
    }

    /**
     * @param int $bonusPool
     */
    public function setBonusPool($bonusPool)
    {
        $this->bonusPool = $bonusPool;
    }

}

