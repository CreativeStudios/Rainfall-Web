<?php
    $mozilla_assert_verify_url = "https://verifier.login.persona.org/verify";
    function GUID() {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }
            return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }
    if ($_POST["login"] == TRUE) {
        login(assert($_POST["assertion"]), storeSession(GUID()));
    } else if ($_POST["login"] == FALSE) {
        logout();
    }

    function assert($assertion) {
        $fields = array('assertion' => urlencode($assertion), 'audience' => '192.168.1.110:80');
        foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
        rtrim($fields_string, '&');
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $mozilla_assert_verify_url);
        curl_setopt($ch,CURLOPT_POST, count($fields));
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        $return = curl_exec($ch);
        curl_close($ch);
        return $return;
    }

    function logout() {
        
    }
    function storeSession($session_id) {
        $connection = mysqli_connect("localhost", "rainfall", "Aw8Yzm2T2NM31ZENvxtg", "rainfall");
        if (mysqli_connect_errorno()) {
            die json_encode(array("error" => array("type" => "mysql", "error" => mysqli_connect_errorno())));
        }
        $query = "INSERT INTO sessions VALUES (" . $session_id . ")";
        mysqli_query($connection, $query)
        mysqli_close($connection);
        return $session_id;
    }
    function isSessionGood($session_id) {
        $connection = mysqli_connect("localhost", "rainfall", "Aw8Yzm2T2NM31ZENvxtg", "rainfall");
        if (mysqli_connect_errorno()) {
            die json_encode(array("error" => array("type" => "mysql", "error" => mysqli_connect_errorno())));
        }
        $result = mysqli_query($connection, "SELECT * FROM sessions");
        while ($i = mysqli_fetch_array($result)) {
            if ($i['PRIMARY'] == $session_id) {
                return TRUE;
            }
        } return FALSE;
    }
    function login($assert, $session_id) {
        if (isSessionGood($session_id) && $assert != NULL) {
            return TRUE;
        } else return FALSE;
    }
?>