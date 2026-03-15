<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function profile($id,$name){
        return view('user',[
            'id'=>$id,
            'name'=>$name
        ]);
    }
    public function index(){
        // $data = [
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ];
        // UserModel::insert($data);

        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);

        // $user = UserModel::all();
        // return view('user',['data'=>$user]);
        
        $user = UserModel::firstOrNew(
            [
                'nama' => 'Manager33',
                'username' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2,
            ]
        );
        $user->save();
        return view('user',['data'=>$user]);
    }
    public function delete(){
        $row = DB::delete('delete from m_user where nama = ?', ['Pelanggan 1']);
        return 'Delete data berhasil, jumlah data yang dihapus: '.$row.' baris';
    }

}
