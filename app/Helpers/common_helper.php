<?php

if (!function_exists('create_unique_slug')) {
    /**
     * Generate a unique slug based on the given title and model.
     *
     * @param string $title
     * @param object $model  CodeIgniter Model instance
     * @param int|null $id   Current record ID to exclude during update
     * @return string
     */
    function create_unique_slug($title, $model, $id = null)
    {
        helper('url');
        $slug = url_title($title, '-', true);
        $original = $slug;
        $i = 1;

        while (true) {
            $query = $model->where('slug', $slug);
            if ($id !== null) {
                $query->where('id !=', $id); // exclude current record
            }

            if ($query->countAllResults() == 0) {
                break; // slug is unique
            }

            $slug = $original . '-' . $i++;
        }

        return $slug;
    }
}

