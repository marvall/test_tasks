<?php

namespace App\Services;

use App\Models\Domains;

/**
 * Class FindDomain
 * @package App\Services
 */
class FindDomainService
{
    public static function searchDomain($id, $domain){
        $host = gethostbyname($domain);
        if($host == $domain){
            $message = "cannot find host by name";
            Domains::insert([
                'host' => $message,
                'domain' => $domain,
                'user_id' => $id
            ]);
        }else{
            Domains::insert([
                'host' => $host,
                'domain' => $domain,
                'user_id' => $id
            ]);
        }
    }
}
