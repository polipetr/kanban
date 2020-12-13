<?php

namespace App\Http\Controllers;

use Spatie\DbDumper\Databases\MySql;


class DumpController extends Controller
{

    public function index()
    {
        MySql::create()
            ->setDbName(env('DB_DATABASE'))
            ->setUserName(env('DB_USERNAME'))
            ->setPassword(env('DB_PASSWORD'))
            ->dumpToFile('dump.sql');
  
        return response()->download('dump.sql', 'dumpData.sql', ['location' => '/']);
    }

}
