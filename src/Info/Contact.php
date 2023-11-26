<?php

declare(strict_types=1);

namespace Chernykh\OpenapiObj\Info;

/**
 * Контактная информация поставщика API.
 */
final class Contact
{
    /**
     * @var string|null Имя контактного лица или организации.
     */
    private ?string $name = null;

    /**
     * @var string|null Ссылка на контактную информацию.
     */
    private ?string $url = null;

    /**
     * @var string|null Адрес электронной почты контактного лица или организации.
     */
    private ?string $email = null;

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public static function create(
        ?string $name,
        ?string $url,
        ?string $email,
    ): Contact {
        return (new Contact())
            ->setName($name)
            ->setUrl($url)
            ->setEmail($email);
    }
}
