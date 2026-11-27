<?php

function str_normalize(string $input): string
{
    $tagsStripped = htmlspecialchars(strip_tags($input), ENT_QUOTES);
    
    $normalized = (strlen($tagsStripped) > 0) ? trim($tagsStripped) : $tagsStripped;
    
    return strtolower($normalized);
}