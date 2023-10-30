<?php

namespace Varandas\EpicFreeGames\Models;

class EpicGame
{
    private string $title;
    private string $id;
    private string $namespace;
    private string $description;
    private string $effectiveDate;
    private string $offerType;
    private ?string $expiryDate;
    private string $viewableDate;
    private string $status;
    private bool $isCodeRedemptionOnly;
    private array $keyImages;
    private array $seller;
    private ?string $productSlug;
    private ?string $urlSlug;
    private array $items;
    private array $customAttributes;
    private array $categories;
    private array $tags;
    private array $catalogNs;
    private array $offerMappings;
    private array $price;
    private array $promotions;

    public function __construct(array $data)
    {
        $this->title = $data['title'];
        $this->id = $data['id'];
        $this->namespace = $data['namespace'];
        $this->description = $data['description'];
        $this->effectiveDate = $data['effectiveDate'];
        $this->offerType = $data['offerType'];
        $this->expiryDate = $data['expiryDate'];
        $this->viewableDate = $data['viewableDate'];
        $this->status = $data['status'];
        $this->isCodeRedemptionOnly = $data['isCodeRedemptionOnly'];
        $this->keyImages = $data['keyImages'];
        $this->seller = $data['seller'];
        $this->productSlug = $data['productSlug'] ?? null;
        $this->urlSlug = $data['urlSlug'] ?? null;
        $this->items = $data['items'];
        $this->customAttributes = $data['customAttributes'];
        $this->categories = $data['categories'];
        $this->tags = $data['tags'];
        $this->catalogNs = $data['catalogNs'];
        $this->offerMappings = $data['offerMappings'];
        $this->price = $data['price'];
        $this->promotions = $data['promotions'] ?? [];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getEffectiveDate(): string
    {
        return $this->effectiveDate;
    }

    public function getOfferType(): string
    {
        return $this->offerType;
    }

    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }

    public function getViewableDate(): string
    {
        return $this->viewableDate;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function isCodeRedemptionOnly(): bool
    {
        return $this->isCodeRedemptionOnly;
    }

    public function getKeyImages(): array
    {
        return $this->keyImages;
    }

    public function getSeller(): array
    {
        return $this->seller;
    }

    public function getProductSlug(): ?string
    {
        return $this->productSlug;
    }

    public function getUrlSlug(): ?string
    {
        return $this->urlSlug;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function getCatalogNs(): array
    {
        return $this->catalogNs;
    }

    public function getOfferMappings(): array
    {
        return $this->offerMappings;
    }

    public function getPrice(): array
    {
        return $this->price;
    }

    public function getPromotions(): array
    {
        return $this->promotions;
    }
}
