<?php

namespace App\Http\Controllers;

use App\Models\Codes;
use App\Models\Requests;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Models\Workers;
use App\Models\BannedIp;

class AdminController extends Controller
{
    public function settings(){
        $activeUser = auth()->guard("worker")->user();
        $settings = Settings::find(1);
        $requestsCount = Requests::all()->count();
        return view("admin.settings", [
            "activeUser" => $activeUser,
            "requests" => $requestsCount,
            "settings" => $settings,
        ]);
    }
    public function bannedIp(){
        $bannedIp = BannedIp::all();
        $activeUser = auth()->guard("worker")->user();
        $requestsCount = Requests::all()->count();
        return view("admin.ips", [
            "bannedIps" => $bannedIp, 
            "activeUser" => $activeUser,
            "requests" => $requestsCount,
        ]);
    }

    public function index(){
        $activeUser = auth()->guard("worker")->user();
        $count = Codes::where("userId", $activeUser->id)->count();
        $totalActivations = Codes::where('userId', $activeUser->id)->sum('activations');
        $requestsCount = Requests::all()->count();

        return view("admin.index", [
            "activeUser" => $activeUser, 
            "count" => $count,
            "requests" => $requestsCount,
            "totalActivations" => $totalActivations,
        ]);
    }

    public function users(){
        $users = Workers::all();
        $activeUser = auth()->guard("worker")->user();
        $requestsCount = Requests::all()->count();
        return view("admin.users", [
            "users" =>  $users,
            "activeUser" => $activeUser,
            "requests" => $requestsCount,
        ]);
    }

    public function codes(){

        $user = auth()->guard("worker")->user();

        if($user->status != "admin"){
            $codes = Codes::where("workerId", $user->id)->get();
        }
        else{
            $codes = Codes::all();
        }
        $requestsCount = Requests::all()->count();
        return view("admin.codes", [
            "activeUser" => $user,
            "codes" => $codes,
            "requests" => $requestsCount,
        ]);
    }

    public function workers(){
        $workers = Workers::all();
        $activeUser = auth()->guard("worker")->user();
        $requestsCount = Requests::all()->count();
        return view("admin.workers", [
            "workers" =>  $workers,
            "activeUser" => $activeUser,
            "requests" => $requestsCount,
        ]);
    }

    public function login(){
        if(auth()->guard("worker")->check()){
            return redirect()->route("codes");
        }
        return view("admin.login");
    }

    public function requests(){
        $activeUser = auth()->guard("worker")->user();
        $requestsCount = Requests::all()->count();
        return view("admin.requests", [
            "requests" => Requests::all(), 
            "activeUser" => $activeUser,
            "requestsCount" => $requestsCount,
        ]);
    }

    public function signup(){
        if(auth()->guard("worker")->check()){
            return redirect()->route("codes");
        }
        return view("admin.signup");
    }
}
