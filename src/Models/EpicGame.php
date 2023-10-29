<?php

namespace Varandas\EpicFreeGames\Models;

class EpicGame
{
    public string $title;
    public string $id;
    public string $namespace;
    public string $description;
    public string $effectiveDate;
    public string $offerType;
    public ?string $expiryDate;
    public string $viewableDate;
    public string $status;
    public bool $isCodeRedemptionOnly;
    public array $keyImages;
    public array $seller;
    public ?string $productSlug;
    public ?string $urlSlug;
    public array $items;
    public array $customAttributes;
    public array $categories;
    public array $tags;
    public array $catalogNs;
    public array $offerMappings;
    public array $price;
    public array $promotions;

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
}
