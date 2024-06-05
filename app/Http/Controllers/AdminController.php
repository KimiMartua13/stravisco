<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\PhotoGroup;
use App\Models\MasterClass;
use App\Models\MasterStudent;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use Vinkla\Hashids\Facades\Hashids;

class AdminController extends Controller
{
    public function index( Request $request )
    {
        // dd(Auth::user());
        $group = PhotoGroup::count();
        $student = MasterStudent::count();
        $kelas = MasterClass::where('id', 'like',  '__.__.__.')->count();

        $dataPhoto = $group + $student;

        return view('admin/home/index', [
            'title' => 'Dashboard',
            'dataFoto' => $dataPhoto,
            'dataStudent' => $student,
            'dataKelas' => $kelas,
        ]);
    }

    public function aksiLogoutAplikasi( Request $request ) 
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    public function aksiTampilFotoGroup( Request $request , $jurusan = 'ak' , $filter = 'all') 
    {
        $fotoGroup = PhotoGroup::leftJoin('master_classes', 'photo_groups.class_id', '=', 'master_classes.id')
                                ->select('master_classes.id as idc', 'photo_groups.id', 'photo_groups.class_id', 'type_foto', 'name', 'photo');

        if ( $jurusan == 'ak') {
            $fotoGroup = $fotoGroup->where('master_classes.id', 'like', '01.01.__.');
        } elseif ( $jurusan == 'rpl') {
            $fotoGroup = $fotoGroup->where('master_classes.id', 'like', '01.02.__.');
        } elseif ($jurusan == 'tei'){
            $fotoGroup = $fotoGroup->where('master_classes.id', 'like', '01.03.__.');
        }elseif ($jurusan == 'tet'){
            $fotoGroup = $fotoGroup->where('master_classes.id', 'like', '01.04.__.');
        }elseif ($jurusan == 'tsm'){
            $fotoGroup = $fotoGroup->where('master_classes.id', 'like', '01.05.__.');
        }elseif ($jurusan == 'tkj'){
            $fotoGroup = $fotoGroup->where('master_classes.id', 'like', '01.06.__.');
        }else{
            return redirect('error');
        }

        
        if ( $filter == 'sekelas' ) {
            $fotoGroup->where('type_foto', '1');
            $title = 'Sekelas';
        }else if( $filter == 'putbu' ){
            $fotoGroup->where('type_foto', '2');
            $title = 'Putbu';
        }elseif( $filter == 'kelompok'){
            $fotoGroup->where('type_foto', '3');
            $title = 'Kelompok';
        }elseif($filter == 'all'){
            $title = 'Semua';
        }else{
            return redirect('error');
        }
        
        $jumlahFoto = $fotoGroup->count();
        $fotoGroup = $fotoGroup->get()->groupBy('name');

        // dd($fotoGroup);

        return view('admin.manajemenfoto.group',[
            'title' => 'Photo Groups',
            'fotoGroup' => $fotoGroup,
            'jurusan' => $jurusan,
            'title' => $title,
        ]);
    }

    public function aksiTambahFotoGroup( Request $request, $jurusan ) 
    {
        $kelas = MasterClass::select('*');

        if ( $jurusan == 'ak') {
            $kelas = $kelas->where('id', 'like', '01.01.__.');
        } elseif ( $jurusan == 'rpl') {
            $kelas = $kelas->where('id', 'like', '01.02.__.');
        } elseif ($jurusan == 'tei'){
            $kelas = $kelas->where('id', 'like', '01.03.__.');
        }elseif ($jurusan == 'tet'){
            $kelas = $kelas->where('id', 'like', '01.04.__.');
        }elseif ($jurusan == 'tsm'){
            $kelas = $kelas->where('id', 'like', '01.05.__.');
        }elseif ($jurusan == 'tkj'){
            $kelas = $kelas->where('id', 'like', '01.06.__.');
        }else{
            return redirect('error');
        }

        $tipe = [
            [
                'name' => 'Sekelas',
                'value' => 1,
            ],
            [
                'name' => 'Putbu',
                'value' => 2,
            ],
            [
                'name' => 'Kelompok',
                'value' => 3,
            ],
        ];

        return view('admin/manajemenfoto/group/tambah', [
            'title' => 'Tambah Foto Group ' . strtoupper($jurusan),
            'kelas' => $kelas->get(),
            'tipe' => $tipe,
        ]);

    }

    public function tambahFotoGroup( Request $request ) 
    {
        $validated = $request->validate([
            'kelas' => 'required',
            'foto_group' => 'required',
            'type_foto' => 'required',
        ]);
        

        if ( $validated['type_foto']  == 1 ) {
            $store = 'photo_groups_sekelas';
        }elseif( $validated['type_foto'] == 2 ) {
            $store = 'photo_groups_putbu';
        }elseif( $validated['type_foto'] == 3 ) {
            $store = 'photo_groups_kelompok';
        }else{
            return redirect()->back();
        }

        $path = $request->file('foto_group')->store('public/' . $store);

        PhotoGroup::create([
            'class_id' => $validated['kelas'],
            'photo' => $path,
            'type_foto' => $validated['type_foto'],
        ]);

        return redirect()->back();
    }

    public function aksiHapusFotoGroup( Request $request ) 
    {
        $id = $request->id;
        $foto = PhotoGroup::find($id);
        $foto->delete();
        return redirect()->back();
    }

    public function aksiTampilFotoIndividual( Request $request, $filter = 'ak' ) 
    {

        $kelas = MasterClass::leftJoin('master_students', 'master_classes.id', '=', 'master_students.class_id');

        if ( $filter == 'ak') {
            $kelas = $kelas->where('master_classes.id', 'like', '01.01.__.');
        } elseif ( $filter == 'rpl') {
            $kelas = $kelas->where('master_classes.id', 'like', '01.02.__.');
        } elseif ($filter == 'tei'){
            $kelas = $kelas->where('master_classes.id', 'like', '01.03.__.');
        }elseif ($filter == 'tet'){
            $kelas = $kelas->where('master_classes.id', 'like', '01.04.__.');
        }elseif ($filter == 'tsm'){
            $kelas = $kelas->where('master_classes.id', 'like', '01.05.__.');
        }elseif ($filter == 'tkj'){
            $kelas = $kelas->where('master_classes.id', 'like', '01.06.__.');
        }

        $kelas = $kelas->orderBy('student_name', 'asc');
        $kelas = $kelas->get()->groupBy('name');

        return view('admin.manajemenfoto.individual',[
            'title' => 'Photo Individuals',
            'kelas' => $kelas,
            'jurusan' => $filter,
        ]);
    }

    public function aksiTampilLogin( Request $request ) 
    {
        return view('admin/login/index');
    }

    public function aksiLoginAplikasi( Request $request ) 
    {
        $validatedData = $request->validate([
            'username' => 'required|min:8',
            'password' => 'required',
        ]);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }

        return back()->withErrors('msg',$validatedData);
    }

    public function aksiRegisterUser( Request $request ) 
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
        ]);

        User::create([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'password' => bcrypt( $validatedData['password'] ),
        ]);

        return redirect('/login');

    }

    public function aksiTampilRegister( Request $request ) 
    {
        return view('admin/register/index');
    }

    public function aksiTambahFotoIndividual( Request $request, $filter, $kelas ) 
    {
        $data = MasterClass::where('name', 'like', $kelas)->first();

        if ( empty($data) ) {
            return redirect()->back();
        }

        // cek data apakah jurusan? jika ya redirect
        $id_data = $data->id;
        $id_data = explode('.', $id_data);

        if ( count($id_data) == 3 ) {
            return redirect()->back();
        }
        
        return view('admin/manajemenfoto/individual/tambah', [
            'title' => 'Tambah Data Siswa Kelas ' . $data->name,
            'kelas' => $data,
        ]);
    }

    public function aksiTambahSiswa( Request $request ) 
    {
        $path = $request->file('foto_siswa')->store('public/photo_individual');
        
        MasterStudent::create([
            'student_name' => $request->nama,
            'quotes' => $request->quotes,
            'photo' => $path,
            'class_id' => $request->id,
        ]);
        
        return redirect()->back();
    }

    public function aksiEditSiswa( Request $request ) 
    {
        $id = decrypt($request->student_id);
        $siswa = MasterStudent::find($id);

        return view('admin/manajemenfoto/individual/edit', [
            'title' => 'Edit Siswa ' . $siswa->name,
            'dataSiswa' => $siswa,
        ]);
    }

    public function aksiEditIndividual( Request $request ) 
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'quotes' => 'required|string',
            'id' => 'required',
            'foto_siswa' => 'sometimes|required|max:2500'
        ]);


        if ($validator->fails()) {
            return redirect('/dashboard/photo/individual/')->withErrors($validator);
        }


        $validated = $validator->validated();
        $id = Hashids::decode($validated['id']);
        $student = MasterStudent::find($id)->first();


        if ($request->file('foto_siswa')) {
            $fileName = $student->photo;
            Storage::delete($fileName);
            $path = $request->file('foto_siswa')->store('public/photo_individual');
            $student->photo = $path;
        }
        $student->student_name = $validated['nama'];
        $student->quotes = $validated['quotes'];

        $student->save();

        return redirect('/dashboard/photo/individual/')->with('Siswa Berhasil Diubah');
    }
    
    public function aksiHapusFotoIndividual( Request $request ) 
    {
        $id = decrypt($request->student_id);
        $siswa = MasterStudent::find($id);
        $siswa->delete();
        return back()->with('msg', 'Berhasil Dihapus');
    }

    public function aksiTampilGuru( Request $request ) 
    {
        return view('admin.guru.index', [
            'title' => 'Teachers'
        ]);
    }
}
