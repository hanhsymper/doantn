<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hoadon;
use App\Phieudat;
class HoadonController extends Controller
{
   	public function __construct(Hoadon $objmHoadon,Phieudat $objmPhieudat){
    $this->objmHoadon = $objmHoadon;
		$this->objmPhieudat = $objmPhieudat;
	}
    public function index(){
      //nếu như ngày thanh toán bằng ngày hiện tại tình trạng thanh toán bằng 0 thì sẽ bị xóa
      $objItemXDT = $this->objmHoadon->xoaTD();
      foreach ($objItemXDT as $key => $value) {
      //echo $value->id_pd;die();
        $this->objmPhieudat->del($value->id_pd);
        $this->objmHoadon->del($value->id_hd);
      }
    	$objItems = $this->objmHoadon->getItems();
      	return view('admin.hoadon.index',compact('objItems'));
    }
    //del
    public function del($id,Request $request){
        if($this->objmHoadon->del($id)){
            $request->session()->flash('msg','xóa thành công');
            return redirect()->route('admin.hoadon.index');
       }else{
            $request->session()->flash('msg','xóa thất bại');
            return redirect()->route('admin.hoadon.index');
       }
    }
    //tìm kiếm id pd và ngày thanh toán
    public function search(Request $request){
      $objItems = $this->objmHoadon->search($request);
      return view('admin.hoadon.search',compact('objItems','request'));
    }
}
