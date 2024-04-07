<?php
    $ch = curl_init();

    $BASE_URL = "https://apiv3.apifootball.com/";
    $idleague = isset($idleague) ? $idleague : '';

    $env_file = __DIR__ . '/.env';
    $env_vars = parse_ini_file($env_file);
    $api = $env_vars['API_KEY'];

    $URL = "$BASE_URL?action=get_standings&league_id=$idleague&APIkey=$api";

    curl_setopt($ch, CURLOPT_URL, $URL);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $output = curl_exec($ch);

    curl_close($ch);

    $data = json_decode($output, TRUE);
?>