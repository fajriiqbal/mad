<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('breadcrumb')) {
    function breadcrumb($items) {
        $output = '<nav aria-label="breadcrumb">';
        $output .= '<ol class="breadcrumb">';

        foreach ($items as $item) {
            if (isset($item['url'])) {
                $output .= '<li class="breadcrumb-item"><a href="' . $item['url'] . '">' . $item['title'] . '</a></li>';
            } else {
                $output .= '<li class="breadcrumb-item active" aria-current="page">' . $item['title'] . '</li>';
            }
        }

        $output .= '</ol>';
        $output .= '</nav>';

        return $output;
    }
}