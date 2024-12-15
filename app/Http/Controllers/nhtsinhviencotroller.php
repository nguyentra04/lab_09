<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\nhtsinhvien;

class nhtsinhviencotroller extends Controller
{
    //hien thi trang danh sach sinh vien
    public function nhtlist()
    {
    // Lấy toàn bộ dữ liệu trong bảng sinh viên
    $nhtSinhVien = nhtsinhvien::all();
    return view('nhtsinhvien.nht-list', ['nhtsinhvien'=>$nhtSinhVien]);
    }
    //hien thi trang them sinh vien
    public function nhtcreate()
    {
    return view('nhtsinhvien.nht-create');

    }
    //create submit 
    public function nhtcreatesubmit(Request $request)
    {
        //lấy dữ liệu từ form gắn cho thuộc tính của đối tượng sinh viên 
        $nhtSinhVien = new nhtsinhvien();
        $nhtSinhVien->nhtmasv = $request->input('nhtmasv');
        $nhtSinhVien->nhthosv = $request->input('nhthosv');
        $nhtSinhVien->nhttensv = $request->input('nhttensv');
        $nhtSinhVien->nhtphai = $request->input('nhtphai');
        $nhtSinhVien->nhtnoisinh = $request->input('nhtnoisinh');
        $nhtSinhVien->nhtngaysinh = $request->input('nhtngaysinh');
        $nhtSinhVien->nhtmakhoa = $request->input('nhtmakhoa');
        //ghi vào bảng trong csdl
        $nhtSinhVien->save();
        //chuyển hướng trang
        //return view ('nhtsinhvien.nht-create');
        return back()->with('nhtsinhvien_created', 'Đã thêm sinh viên thành công');
        //return redirect()->route('nhtsinhvien.nht-list');
    }
    //hien thi trang sua sinh vien
    public function nhtedit($nhtmasv)
    {
        $nhtSinhVien = nhtsinhvien::find($nhtmasv);
        return view('nhtsinhvien.nht-edit', ['nhtsinhvien'=>$nhtSinhVien]);
    }
    //submit sua sinh vien
    public function nhteditsubmit(Request $request, $nhtmasv)
    {
        $nhtSinhVien = nhtsinhvien::find($nhtmasv);
        $nhtSinhVien->nhtmasv = $request->input('nhtmasv');
        $nhtSinhVien->nhthosv = $request->input('nhthosv');
        $nhtSinhVien->nhttensv = $request->input('nhttensv');
        $nhtSinhVien->nhtphai = $request->input('nhtphai');
        $nhtSinhVien->nhtnoisinh = $request->input('nhtnoisinh');
        $nhtSinhVien->nhtngaysinh = $request->input('nhtngaysinh');
        $nhtSinhVien->nhtmakhoa = $request->input('nhtmakhoa');
        $nhtSinhVien->save();
        return back()->with('nhtsinhvien_edited', 'Đã sửa thông tin sinh viên thành công');
    }
    public function delete($nhtmasv)
    {
        SinhVien::where('nhtmasv',$nhtmasv)->delete();
        return back()->with('nhtsinhvien_deleted','Đã xóa sinh viên thành công!');
    }
    //xoa sinh vien
    public function nhtdelete($nhtmasv)
    {
        $nhtSinhVien = nhtsinhvien::find($nhtmasv);
        $nhtSinhVien->delete();
        return back()->with('nhtsinhvien_deleted', 'Đã xóa sinh viên thành công');
    }
    
    //tim kiem sinh vien
    public function nhtsearch(Request $request)
    {
        $nhtSinhVien = nhtsinhvien::where('nhtmasv', 'like', '%'.$request->input('nhtmasv').'%')
        ->orWhere('nhthosv', 'like', '%'.$request->input('nhthosv').'%')
        ->orWhere('nhttensv', 'like', '%'.$request->input('nhttensv').'%')
        ->orWhere('nhtphai', 'like', '%'.$request->input('nhtphai').'%')
        ->orWhere('nhtnoisinh', 'like', '%'.$request->input('nhtnoisinh').'%')
        ->orWhere('nhtngaysinh', 'like', '%'.$request->input('nhtngaysinh').'%')
        ->orWhere('nhtmakhoa', 'like', '%'.$request->input('nhtmakhoa').'%')
        ->get();
        return view('nhtsinhvien.nht-list', ['nhtsinhvien'=>$nhtSinhVien]);
    }
    //thông tin chi tiết sinh viên
    public function nhtdetail($nhtmasv)
    {
        $nhtSinhVien = nhtsinhvien::find($nhtmasv);
        return view('nhtsinhvien.nht-detail', ['nhtsinhvien'=>$nhtSinhVien]);
    }

}
    