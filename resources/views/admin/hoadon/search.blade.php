@extends('templates.admin.master')
@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Danh sách hóa đơn</h4>
                                <p class="category success">{{ session('msg') }}</p>
                                <form action="{{ route('admin.hoadon.search') }}" method="get">
                                    {{ csrf_field() }}
                                	<div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" name="search" class="form-control border-input" placeholder="tìm idct, tenbl" value="{{ $request->search }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                        	<div class="form-group">
		                                        <input type="submit" name="tk" value="Tìm kiếm" class="is" />
		                                        <input type="submit" name="reset" value="Hủy tìm kiếm" class="is" />
	                                        </div>
                                        </div>
                                    </div>
                                    
                                </form>
                                
                                <a href="edit.html" class="addtop"><img src="{{ $urlAdmin }}/img/add.png" alt="" /> Thêm</a>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped" border="1">
                                    <thead>
                                        <th>ID_HD</th>
                                    	<th>ID_PĐ</th>
                                    	<th>Ngày thanh toán</th>
                                    	<th>Tổng tiền</th>
                                    	<th>Chức năng</th>
                                    </thead>
                                    <tbody>
                                        @foreach($objItems as $key => $objItem)
                                        <tr>
                                        	<td>{{ $objItem->id_hd }}</td>
                                        	<td><a href="edit.html">{{ $objItem->id_pd }}</a></td>
                                        	<td>{{ $objItem->ngaythanhtoan }}</td>
                                        	<td>{{ $objItem->tongtien }}</td>
                                        	<td>
                                        		<a href="{{ route('admin.hoadon.del',['id' => $objItem->id_bl]) }}"><img src="{{ $urlAdmin }}/img/del.gif" alt="" /> Xóa</a>
                                        	</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
 
                                </table>

								<div class="text-center">
								    <ul class="pagination">
                                        {{ $objItems->appends(Request::all())->links() }}
								    </ul>
								</div>
                            </div>
                        </div>
                    </div>
@stop