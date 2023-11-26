<?php

declare(strict_types=1);

namespace Chernykh\OpenapiObj;

/**
 * Информация о внешнем источнике данных.
 */
final class ExternalDocs
{
    /**
     * @var string|null Описание целевой документации. Может содержать CommonMark синтаксис.
     */
    private ?string $description = null;

    /**
     * @param string $url Ссылка на документацию.
     */
    public function __construct(
        private readonly string $url,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
