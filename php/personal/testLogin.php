<?php $curl = curl_init(); $search_String = "pc video games 2016"; $Url = "https://listado.mercadolibre.com.ar/juegos";
curl_setopt($curl, CURLOPT_URL, $Url); curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); $result = curl_exec($curl); preg_match_all("!https://http2.mlstatic.com/[^\s]*?-X.jpg!", $result, $matches); $images = array_values(array_unique($matches[0])); for ($i=0; $i < count($images); $i++) { echo "<div style='float:left; margin: 10 0 0 0;'>"; echo "<img src='" . $images[$i] . "'><br />"; echo "</div>"; }; curl_close($curl); ?>﻿