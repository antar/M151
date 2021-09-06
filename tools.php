<?php

class Tools {
    public static function CallProc($db, $proc_name, $params = []) {
        $params_string = "";
        $keys = array_keys($params);

        foreach ($keys as $key) {
            if ($params_string) {
                $params_string .= ",";
            }

            $params_string .= " :" . $key;
        }

        $stmt = $db->prepare($proc_name . ($params ? "(" . $params_string . ")" : ""));
        
        foreach ($keys as $key) {
            $stmt->bindParam(":" . $key, $params[$key]);
        }

        $stmt->execute();

        return $stmt->fetchAll();
    }
}

?>