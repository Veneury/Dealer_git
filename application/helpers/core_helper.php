<?php 
class core_conteo{
    static function numRegistros($table)
    {
        $CI=& get_instance();
        $dv=$CI->db->count_all($table);
        return $dv;
    }
}