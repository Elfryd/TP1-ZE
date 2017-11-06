<?php
/**
 * Created by PhpStorm.
 * User: Geoffrey
 * Date: 06/11/2017
 * Time: 20:31
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @var string
     * @ORM\Column(type="string",length=40)
     */
    protected $firstname;
    /**
     * @var string
     * @ORM\Column(type="string",length=40)
     */
    protected $surname;
    /**
     * @var string
     * @ORM\Column(type="string",length=40)
     */
    protected $discord;
    /**
     * @var string
     * @ORM\Column(type="string",length=40,nullable=true)
     */
    protected $github;
    /**
     * @var string
     * @ORM\Column(type="string",length=40)
     */
    protected $email;

    /**
     * User constructor.
     * @param string $firstname
     * @param string $surname
     * @param string $discord
     * @param string $github
     * @param string $email
     */

    public function __construct($firstname, $surname, $discord, $github, $email)
    {
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->discord = $discord;
        $this->github = $github;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getDiscord(): string
    {
        return $this->discord;
    }

    /**
     * @param string $discord
     */
    public function setDiscord(string $discord)
    {
        $this->discord = $discord;
    }

    /**
     * @return string
     */
    public function getGithub(): string
    {
        return $this->github;
    }

    /**
     * @param string $github
     */
    public function setGithub(string $github)
    {
        $this->github = $github;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }





}