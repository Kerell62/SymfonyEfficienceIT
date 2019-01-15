<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=20)
     */
    private $firstName;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=20)
     */
    private $lastName;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $mailFrom;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=5)
     */
    private $message;

    /**
     * @var string|null
     * @Assert\NotBlank()
     */
    private $mailTo;

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     * @return Contact
     */
    public function setFirstName(?string $firstName): Contact
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     * @return Contact
     */
    public function setLastName(?string $lastName): Contact
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMailFrom(): ?string
    {
        return $this->mailFrom;
    }

    /**
     * @param string|null $mailFrom
     * @return Contact
     */
    public function setMailFrom(?string $mailFrom): Contact
    {
        $this->mailFrom = $mailFrom;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     * @return Contact
     */
    public function setMessage(?string $message): Contact
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMailTo(): ?string
    {
        return $this->mailTo;
    }

    /**
     * @param string|null $mailTo
     * @return Contact
     */
    public function setMailTo(?string $mailTo): Contact
    {
        $this->mailTo = $mailTo;
        return $this;
    }


}
