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
        
        // $user = UserModel::firstOrNew(
        //     [
        //         'nama' => 'Manager33',
        //         'username' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ]
        // );
        // $user->save();
        // return view('user',['data'=>$user]);
        // $user = UserModel::create([
        //     'username' => 'manager55',
        //     'nama'     => 'Manager55',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ]);

        // $user->username = 'manager56';

        // $user->isDirty(); // true
        // $user->isDirty('username'); // true
        // $user->isDirty('nama'); // false
        // $user->isDirty(['nama', 'username']); // true

        // $user->isClean(); // false
        // $user->isClean('username'); // false
        // $user->isClean('nama'); // true
        // $user->isClean(['nama', 'username']); // false

        // $user->save();

        // $user->isDirty(); // false
        // $user->isClean(); // true
        
        // dd($user->isDirty());
        $user = UserModel::create([
            'username' => 'manager11',
            'nama'     => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        $user->username = 'manager12';

        $user->save();

        $user->wasChanged(); // true
        $user->wasChanged('username'); // true
        $user->wasChanged(['username', 'level_id']); // true
        $user->wasChanged('nama'); // false
        dd($user->wasChanged(['nama', 'username'])); // true
    }
    public function delete(){
        $row = DB::delete('delete from m_user where nama = ?', ['Pelanggan 1']);
        return 'Delete data berhasil, jumlah data yang dihapus: '.$row.' baris';
    }

}
