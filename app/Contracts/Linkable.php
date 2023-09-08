<?php


namespace App\Contracts;


interface Linkable
{
    public function getRouteParams(): array;
    public function getUrl(): string;
}
