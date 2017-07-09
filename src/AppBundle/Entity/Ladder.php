<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ladder
 *
 * @ORM\Table(name="ladder")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LadderRepository")
 */
class Ladder
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="game", type="string", length=255, nullable=true)
     */
    private $game;

    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="ladder")
     */
    private $players;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="rules", type="object")
     */
    private $rules;

    /**
     * @ORM\OneToMany(targetEntity="Game", mappedBy="ladder")
     */
    private $matches;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->players = new ArrayCollection();
        $this->matches = new ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     *
     * @return Ladder
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set game
     *
     * @param string $game
     *
     * @return Ladder
     */
    public function setGame($game)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return string
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set players
     *
     * @param array $players
     *
     * @return Ladder
     */
    public function setPlayers($players)
    {
        $this->players = $players;

        return $this;
    }

    /**
     * Get players
     *
     * @return array
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set rules
     *
     * @param \stdClass $rules
     *
     * @return Ladder
     */
    public function setRules($rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * Get rules
     *
     * @return \stdClass
     */
    public function getRules()
    {
        return $this->rules;
    }
}

