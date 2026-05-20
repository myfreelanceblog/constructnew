<?php
$dev = '?v='.time();

function format_number_slides($number) {
    return str_pad($number, 2, '0', STR_PAD_LEFT);
}