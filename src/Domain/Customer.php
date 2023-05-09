<?php

namespace Bookstore\Domain;

class Customer {
    private $id;
    private $name;
    private $surname;
    private $email;

    private static $lastId = 0;

    public function __construct(
        int $id,
        string $name,
        string $surname,
        string $email
    ) {
        if ($id == null) {
            $this->id = ++self::$lastId;
        } else {
            $this->id = $id;
            if ($id > self::$lastId) {
                self::$lastId = $id;
            }
        }
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }

    public static function getLastId(): int {
        return self::$lastId;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
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
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}