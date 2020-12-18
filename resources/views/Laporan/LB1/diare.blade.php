@extends('layouts.default')

@section('welcome')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>LAPORAN LB1, PTM, P2P 2020</h4>
           
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Laporan</a></li>
        <li class="breadcrumb-item active"><a href="{{route('lb1.diare')}}">LAPORAN LB1, PTM, P2P 2020</a></li>
        </ol>
    </div>
</div>
@endsection
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif
    <div class="col-xl-12 col-xxl-6">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#tambahdata"><span
                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                </span>Tambah Data
            </button>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    
                    <table id="examplerow" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                
                                <th colspan="6"></th>
                                <th colspan="2">Umur</th>
                                <th colspan="1"></th>
                                <th colspan="3">Derajat Dahidrasi</th>
                                <th colspan="2">Jumlah yang Diberi</th>
                                <th colspan="1"></th>
                                <th colspan="3">Rencana Terapi</th>
                                <th colspan="1"></th>
                            </tr>
                            <tr>
                               
                                <th>Aksi</th>
                                <th>No</th>
                                <th>Nama Nagari</th>
                                <th>Nama Jorong</th>
                                <th>Bulan</th>
                                <th>Tanggal</th>
                                <th>L</th>
                                <th>P</th>
                                <th>Tanggal Sakit</th>
                                <th>Tanpa Dehidrasi</th>
                                <th>ringan/sedang</th>
                                <th>Berat</th>
                                <th>Oralit</th>
                                <th>Zinc</th>
                                <th>Konseling</th>
                                <th>a</th>
                                <th>b</th>
                                <th>c</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                        @endphp
                            <tr>
                               
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Aksi</th>
                                <th>No</th>
                                <th>Nama Nagari</th>
                                <th>Nama Jorong</th>
                                <th>Bulan</th>
                                <th>Tanggal</th>
                                <th>L</th>
                                <th>P</th>
                                <th>Tanggal Sakit</th>
                                <th>Tanpa Dehidrasi</th>
                                <th>ringan/sedang</th>
                                <th>Berat</th>
                                <th>Oralit</th>
                                <th>Zinc</th>
                                <th>Konseling</th>
                                <th>a</th>
                                <th>b</th>
                                <th>c</th>
                                <th>Keterangan</th>
                            </tr>
                        </tfoot>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambahdata">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{-- <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div> --}}
            <div class="modal-body">

                <form method="POST" action="{{route('tambahk1')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="Nama Nagari" name="nama_nagari">
                   </div>
                   <div class="form-group">
                    <input type="text"   class="form-control input-rounded" placeholder="Nama Jorong" name="nama_jorong">
                   </div>
                   <div class="form-group">
                    <select name="bulan"class="form-control @error('bulan') is-invalid @enderror"  id="bulan">
                        <option selected="selected">Bulan</option>
                        <?php
                        $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                        $jlh_bln=count($bulan);
                        for($c=0; $c<$jlh_bln; $c+=1){
                            echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                        }
                        ?>
                        </select>
                   </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <input type="text"   class="form-control input-rounded" placeholder="Nama Ibu" name="na_ibu">
                            </div> 
                            <div class="col-sm-6 mt-2 mt-sm-0">
                              
                                    <input type="number" placeholder="Umur" class="form-control input-rounded"  name="umur">
                            </div>
                        </div> 
                    </div>
                    
                    <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="Alamat" name="alamat">
                   </div>

                   <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 mt-2 mt-sm-0">
                            <input type="text"   class="form-control input-rounded" placeholder="Nama Suami" name="na_suami">
                        </div> 
                        <div class="col-sm-6 mt-2 mt-sm-0">
                          
                                <input type="number" placeholder="Hamil Ke" class="form-control input-rounded"  name="hamil_ke">
                        </div>
                    </div>
                   </div>

                    <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="HPHT" name="HPHT">
                   </div>
                   <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="Usia Kehamilan" name="usia_kehamilan">
                  </div> 
                  <div class="form-group">
                    <input type="text"   class="form-control input-rounded" placeholder="Jenis Resiko" name="jr">
                  </div>
                <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="DPT Buku" name="DPT">
                </div> 
              

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


@endsection

