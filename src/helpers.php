<?php

if (! function_exists('get_enum_values')) {
    /**
     * Get value from enums file.
     * 
     * @param array|string $data
     * @param array $
     * @return array
     */
    function get_enum_values(array|string $data)
    {
        $data = is_array($data) ? $data : func_get_args();
        $values = [];

        foreach ($data as $value) {
            $values[] = $value->value;
        }

        return $values;
    }
}