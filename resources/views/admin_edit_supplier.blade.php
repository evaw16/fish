@extends('layouts.admin')
@section('title','Edit Supplier')
@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <!-- ============================================================== -->
            <!-- valifation types -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Edit Supplier</h5>
                    <div class="card-body">
                        <form id="validationform" method="POST"
                              action="{{route('update_supplier',['id'=>$supplier->id_supplier])}}">
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" placeholder="Nama" class="form-control" name="nama"
                                           value="{{$supplier->nama}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea required="" class="form-control"
                                              name="alamat">{{$supplier->alamat}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">No Hp</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number" required="" placeholder="No Hp" class="form-control"
                                           name="no_hp"
                                           value="{{$supplier->no_hp}}">
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                </div>
                            </div>
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end valifation types -->
            <!-- ============================================================== -->
        </div>

    </div>
@endsection
