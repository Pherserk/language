<?php

namespace Pherserk\Language\model;

interface LanguageInterface
{
    public function getIso639Alpha2Code(): string;

    public function getName() : string;
   
    public function getNativeName() : string;
}
