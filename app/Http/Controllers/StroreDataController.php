<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PVArray;
use App\User;
use function Sodium\increment;
use DB;
use Naux\Mail\SendCloudTemplate;
use Mail;
class StroreDataController extends Controller
{
    //
    protected $status_code;
    public function store(Request $request)
    {
        $data = $request->all();
       $data_p = array($data['station_id'],$data['array_id'],$data['Current'],$data['Voltage'],$data['Power'],$data['Temp'],$data['Irr'],$data['status_describe'],$data['upload_time'],$data['upload_time']);
       $s = DB::insert('INSERT INTO p_v_arrays(station_id,array_id,Current,Voltage,Power,Temp,Irr,status_describe,upload_time,created_at) VALUES (?,?,?,?,?,?,?,?,?,?)',$data_p);
        $client_id = $data['client_id'];
        $this->status_code = $data['status_code'];

        if($this->status_code != 1)
        {
            $user = User::where('client_id',$client_id)->first();
//            $this->sendNotificationToUser($user);
        }
        return $data;
    }
    private function sendNotificationToUser($user)
    {
        // 模板变量
        $data = [
            'stationID' => 1,
            'type' => $user->name,
            'ji'=>$this->status_code,
        ];
        $template = new SendCloudTemplate('pvfault', $data);

        Mail::raw($template, function ($message) use($user) {
            $message->from('admin@PVStation.com', '光伏预警');

            $message->to($user->email);
        });
    }
}
