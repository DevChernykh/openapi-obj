<?php

declare(strict_types=1);

namespace Chernykh\OpenapiObj\Info;

/**
 * Контактная информация поставщика API.
 */
final class License
{
    /**
     * @var string|null Ссылка на описание лицензии.
     */
    private ?string $url = null;

    /**
     * @var string|null Выражение лицензии SPDX для API.
     */
    private ?string $identifier = null;

    /**
     * @param string $name Название лицензии используемой для API.
     */
    public function __construct(
        private readonly string $name,
    ) {
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

    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;

        return $this;
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public static function create(
        string $name,
        ?string $url,
        ?string $identifier,
    ): License {
        return (new License($name))
            ->setUrl($url)
            ->setIdentifier($identifier);
    }
}
