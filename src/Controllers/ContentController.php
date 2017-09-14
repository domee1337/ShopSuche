<?php
namespace ShopSuche\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;


class ContentController extends Controller
{
	
	public function sendRequest(Request $request)
	{
		$rs = $request->all();
		$url = "http://pherrewyn1.timmeserver.de/suche/";
        $url = sprintf("%s?%s", $url, http_build_query($rs));
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
	}
}
