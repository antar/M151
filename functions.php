<?php

function create_data_set(){
        $row_value = "";
        $query = ("SELECT sidebarposts FROM table;");
        $result = mysql_query($query);
        if ($row = mysql_fetch_array($result)){
            $row_value = $row['sidebarposts'];
        }
    return $rValue;
    }

?>