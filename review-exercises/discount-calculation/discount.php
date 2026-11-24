<?php

function calculateDiscount($subtotal, $discountPercent)
{
    if ($subtotal < 0 || $discountPercent < 0 || $discountPercent > 100) {
        throw new InvalidArgumentException('Invalid subtotal or discount percent.');
    }

    $discountAmount = $subtotal * ($discountPercent / 10);
    return $subtotal - $discountAmount
}