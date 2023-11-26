<?php

declare(strict_types=1);

namespace Chernykh\OpenapiObj;

use Chernykh\OpenapiObj\Info\Contact;
use Chernykh\OpenapiObj\Info\License;

/**
 * Описание метаданных API.
 */
final class Info
{
    /**
     * @var string|null Краткое описание API.
     */
    private ?string $summary = null;

    /**
     * @var string|null Описание API. Может содержать CommonMark синтаксис.
     */
    private ?string $description = null;

    /**
     * @var string|null Ссылка на описание условий предоставления API.
     */
    private ?string $termsOfService = null;

    /**
     * @var Contact|null Контактная информация.
     */
    private ?Contact $contact;

    /**
     * @var License|null Используемая лицензия.
     */
    private ?License $license;

    /**
     * @param string $title Название API.
     * @param string $version Версия реализации API.
     */
    public function __construct(
        private readonly string $title,
        private readonly string $version,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
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

    public function setTermsOfService(?string $termsOfService): self
    {
        $this->termsOfService = $termsOfService;

        return $this;
    }

    public function getTermsOfService(): ?string
    {
        return $this->termsOfService;
    }

    public function setContact(?Contact $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    public function setLicense(?License $license): self
    {
        $this->license = $license;

        return $this;
    }

    public function getLicense(): ?License
    {
        return $this->license;
    }

    public static function create(
        string $title,
        string $version,
        ?string $summary,
        ?string $description,
        ?string $termsOfService,
        ?Contact $contact,
        ?License $license
    ): Info {
        return (new Info($title, $version))
            ->setSummary($summary)
            ->setDescription($description)
            ->setTermsOfService($termsOfService)
            ->setContact($contact)
            ->setLicense($license);
    }
}
