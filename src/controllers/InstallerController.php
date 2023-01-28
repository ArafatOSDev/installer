<?php

namespace Pixamo\Installer\controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;
use DB;
use Pixamo\Installer\Installer;

class InstallerController extends Controller
{
    protected $status;

    public function index()
    {
        if(Installer::isActive())
        {
            return view('installer::install.index');
        }else{
            return abort(404);
        }
    }

    public function config()
    {
        if(Installer::isActive())
        {
            return view('installer::install.config');
        }else{
            return abort(404);
        }
    }

    public function migrate()
    {
        try {

            $pdo = DB::connection()->getPdo();

            if($pdo)
            {
                ini_set('max_execution_time', '0');
                \Artisan::call('migrate:fresh --seed');
                \Artisan::call('storage:link');

                return response()->json(['success' => true]);
            } else {
                return response()->json(['errors' => "The Database Credentials doesn't Match."], 400);
            }

        } catch (\Exception $e) {
            return response()->json(['errors' => "The Database Credentials doesn't Match."], 400);
        }
    }

    public function update(Request $request)
    {
        if(Installer::isActive())
        {
            $path = base_path('.env');
            $test = file_get_contents($path);

            if (file_exists($path)) {
                file_put_contents($path, str_replace(array("APP_NAME='".env('APP_NAME')."'", "APP_URL=".env('APP_URL')."", "DB_CONNECTION='".env('DB_CONNECTION')."'","DB_HOST='".env('DB_HOST')."'","DB_PORT='".env('DB_PORT')."'","DB_DATABASE='".env('DB_DATABASE')."'", "DB_USERNAME='".env('DB_USERNAME')."'","DB_PASSWORD='".env('DB_PASSWORD')."'"),
                array("APP_NAME='".$request->APP_NAME."'", "APP_URL=".url('/')."", "DB_CONNECTION='".$request->DB_CONNECTION."'","DB_HOST='".$request->DB_HOST."'","DB_PORT='".$request->DB_PORT."'","DB_DATABASE='".$request->DB_DATABASE."'", "DB_USERNAME='".$request->DB_USERNAME."'","DB_PASSWORD='".$request->DB_PASSWORD."'"), $test));
            }

            return response()->json(['success' => true]);
        }
    }



    public function congratulations()
    {
        return view('installer::install.congratulations');
    }
}
