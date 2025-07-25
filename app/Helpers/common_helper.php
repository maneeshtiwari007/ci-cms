<?php

if (!function_exists('create_unique_slug')) {
    /**
     * Generate a unique slug based on the given title and model.
     *
     * @param string $title
     * @param object $model  CodeIgniter Model instance
     * @return string
     */
    function create_unique_slug($title, $model)
    {
        helper('url'); // For url_title()
        $slug = url_title($title, '-', true);
        $original = $slug;
        $i = 1;

        while ($model->where('slug', $slug)->countAllResults() > 0) {
            $slug = $original . '-' . $i++;
        }

        return $slug;
    }
}
