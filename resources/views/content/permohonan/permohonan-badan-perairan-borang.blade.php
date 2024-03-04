@extends('layouts/layoutMaster')

@section('title', 'Permohonan Badan Perairan')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/bs-stepper/bs-stepper.scss',
  'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/bs-stepper/bs-stepper.js',
  'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite([
  'resources/assets/js/permohonan/permohonan-pelepasan-efluen-borang.js',
  'resources/assets/js/form-wizard-validation.js'
])
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Permohonan Badan Perairan /</span> 
  @if (url()->current() ==  route('permohonan-badan-perairan-borang-individu')) 
  Borang Individu
  @elseif (url()->current() ==  route('permohonan-badan-perairan-borang-bisnes')) 
  Borang Bisnes
  @endif
</h4>


  <div class="col-12">
    <div class="bs-stepper vertical wizard-modern wizard-modern-vertical mt-2">
      
      <div class="bs-stepper-header">
        <div class="step" data-target="#borang-a">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">1</span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Borang A</span>
              <span class="bs-stepper-subtitle">Permohonan Lesen <br> Pelepesan Efluen
                </span>
            </span>
          </button>
        </div>
        <div class="line"></div>
        
        @foreach ($listBorang as $key => $list)
            @if($list == 1)
            <div class="step" data-target="#borang-c">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle">{{ $key + 2 }}</span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Borang C</span>
                  <span class="bs-stepper-subtitle">Aktiviti Rekreasi Sukan Air</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            @endif

            @if($list == 2)
            <div class="step" data-target="#borang-d">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle">{{ $key + 2 }}</span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Borang D</span>
                  <span class="bs-stepper-subtitle">Aktiviti Vesel Rekreasi</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            @endif

            @if($list == 3)
            <div class="step" data-target="#borang-f">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle">{{ $key + 2 }}</span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Borang F</span>
                  <span class="bs-stepper-subtitle">Aktiviti Sangkar</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            @endif
              
            @if($list == 4)
            <div class="step" data-target="#borang-g">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle">{{ $key + 2 }}</span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Borang G</span>
                  <span class="bs-stepper-subtitle">Aktiviti Binaan</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            @endif
        @endforeach
         
        <div class="step" data-target="#fail-upload">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">{{ count($listBorang)+2 }}</span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Muat Turun Fail</span>
            </span>
          </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#pembayaran">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">{{ count($listBorang)+3 }}</span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Pembayaran Permohonan</span>
            </span>
          </button>
        </div>
      </div>

      <div class="bs-stepper-content">
        <form  id="submit-badan-perairan" onSubmit="return false" method="post" action="{{ route('permohonan-pelepasan-efluen-store') }}" enctype="multipart/form-data">
          @csrf

          <!-- START BORANG A -->
          <div id="borang-a" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Borang A</h6>
              <small>Permohonan Lesen Pelepesan Efluen</small>
            </div>

           
            <div class="row g-3">
              <div class="col-sm-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis-permohonan" id="permohonan1" value="1" checked />
                  <label class="form-check-label" for="permohonan1">Permohonan baru</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis-permohonan" id="permohonan2" value="2" />
                  <label class="form-check-label" for="permohonan2">Pembaharuan</label>
                </div>
              </div>
              <input type="text" name="nama-permohonan" value="2" hidden>
             
              @if (url()->current() ==  route('permohonan-badan-perairan-borang-individu'))    
              <input type="text" name="akaun" value="1" hidden>
              <div class="col-sm-12">
                <label class="form-label" for="nama-pemohon-borang-a">Nama pemohon</label>
                <input type="text" name="nama-pemohon-borang-a" id="nama-pemohon-borang-a" class="form-control" value="{{ Auth::user()->name }}" readonly />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="alamat-berdaftar-borang-a">Alamat berdaftar</label>
                <input type="text" name="alamat-berdaftar-borang-a" id="alamat-berdaftar-borang-a" class="form-control"/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="email-pemohon-borang-a">E-mel Pemohon</label>
                <input type="email" name="email-pemohon-borang-a" id="email-pemohon-borang-a" class="form-control" value="{{ Auth::user()->email }}" readonly/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="no-telefon-borang-a"> 
                  No. telefon</label>
                <input type="text" name="no-telefon-borang-a" id="no-telefon-borang-a" class="form-control"/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="no-telefon-borang-a"> 
                  No. faks</label>
                <input type="text" name="no-faks-borang-a" id="no-faks-borang-a" class="form-control"/>
              </div>

              @elseif (url()->current() ==  route('permohonan-badan-perairan-borang-bisnes') )
              <input type="text" name="nama-permohonan" value="3" hidden>
              <input type="text" name="akaun" value="1" hidden>
              <div class="col-sm-6">
                <label class="form-label" for="tempat-perniagaan-utama-borang-a"> 
                  Tempat Perniagaan Utama</label>
                <input type="text" name="tempat-perniagaan-utama-borang-a" id="tempat-perniagaan-utama-borang-a" class="form-control"/>
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-telefon-perniagaan-borang-a">No. Telefon Perniagaan</label>
                <input type="text" name="no-telefon-perniagaan-borang-a" id="no-telefon-perniagaan-borang-a" class="form-control"/>
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-faks-perniagaan-borang-a"> 
                  No. faks Perniagaan</label>
                <input type="text" name="no-faks-perniagaan-borang-a" id="no-faks-perniagaan-borang-a" class="form-control" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="email-perniagaan-borang-a">E-mel Perniagaan</label>
                <input type="text" name="email-perniagaan-borang-a" id="email-perniagaan-borang-a" class="form-control"  />
              </div>
              
              @endif
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev" disabled> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Kembali</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Seterusnya</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>
           <!-- END BORANG A -->

          @foreach ($listBorang as $key => $list)

          @if ($list == 1)
          <!-- START BORANG C -->
          <div id="borang-c" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Borang C</h6>
              <small>Aktiviti Rekreasi Sukan Air</small>
            </div>
            <div class="row g-3">
              <h6 class="mb-3">Butiran Pemohon</h6>

              <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="multicol-username">Ski Jet</label>
                <div class="col-sm-2">
                  <input type="text" id="multicol-username" class="form-control" placeholder="" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="multicol-username">Banana boat</label>
                <div class="col-sm-2">
                  <input type="text" id="multicol-username" class="form-control" placeholder="" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="multicol-username">Selam skuba</label>
                <div class="col-sm-2">
                  <input type="text" id="multicol-username" class="form-control" placeholder="" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="multicol-username">Kanu</label>
                <div class="col-sm-2">
                  <input type="text" id="multicol-username" class="form-control" placeholder="" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="multicol-username">Parasailing</label>
                <div class="col-sm-2">
                  <input type="text" id="multicol-username" class="form-control" placeholder="" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="multicol-username">Boat kayuh</label>
                <div class="col-sm-2">
                  <input type="text" id="multicol-username" class="form-control" placeholder="" />
                </div>
              </div>

              <div class="row">
                <label class="col-sm-3 col-form-label" for="multicol-username">Lain-lain (nyatakan)</label>
                <div class="col-sm-2">
                  <input type="text" id="multicol-username" class="form-control" placeholder="" />
                </div>
              </div>


              <div class="col-12">
                <hr class="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="no_kad_pengenalan-pegawai-borang-c">Keluasan kawasan operasi</label>
                <input type="text" name="no_kad_pengenalan-pegawai-borang-c" id="no_kad_pengenalan-pegawai-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="no_kad_pengenalan-pegawai-borang-c">Lokasi operasi</label>
                <input type="text" name="no_kad_pengenalan-pegawai-borang-c" id="no_kad_pengenalan-pegawai-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-12">Koordinat</label>
                <input type="text" name="no_kad_pengenalan-pegawai-borang-c" id="no_kad_pengenalan-pegawai-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="no_kad_pengenalan-pegawai-borang-c">Hari beroperasi</label>
                <input type="text" name="no_kad_pengenalan-pegawai-borang-c" id="no_kad_pengenalan-pegawai-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="no_kad_pengenalan-pegawai-borang-c">Waktu operasi</label>
                <input type="text" name="no_kad_pengenalan-pegawai-borang-c" id="no_kad_pengenalan-pegawai-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="no_kad_pengenalan-pegawai-borang-c">Catatan</label>
                <input type="text" name="no_kad_pengenalan-pegawai-borang-c" id="no_kad_pengenalan-pegawai-borang-c" class="form-control"/>
              </div>

              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Kembali</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Seterusnya</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>
           <!-- END BORANG C -->
           @endif

          @if ($list == 2)
          <!-- START BORANG D -->
          <div id="borang-d" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Borang D</h6>
              <small>Aktiviti Vesel Rekreasi</small>
            </div>
            <div class="row g-3">

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Jenis vesel</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">No pendaftaran vesel</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Kawasan aktiviti vesel</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Koordinat kawasan operasi</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Bilangan penumpang dalam vesel</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Hari operasi</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Waktu operasi</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Catatan</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>
            
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Kembali</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Seterusnya</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>
          <!-- END BORANG D -->
          @endif

           @if ($list == 3)
           <!-- START BORANG F -->
           <div id="borang-f" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Borang F</h6>
              <small>Altiviti Sangkar</small>
            </div>
            <div class="row g-3">

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Keluasan sangkar</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Jenis sangkar (bahan binaan)</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Akuakultur</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Kawasan aktiviti</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Koordinat</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Status pemilikan tanah</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Catatan</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Kembali</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Seterusnya</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>
           <!-- END BORANG F -->
           @endif

           @if ($list == 4)
           <!-- START BORANG G -->
           <div id="borang-g" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Borang G</h6>
              <small>Aktiviti Binaan</small>
            </div>
            <div class="row g-3">

              <div class="col-sm-12">
                <label class="form-label col-sm-12" for="permohonan2">Bentuk binaan </label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis-permohonan" id="permohonan1" value="1" checked />
                  <label class="form-check-label" for="permohonan1">kekal</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis-permohonan" id="permohonan2" value="2" />
                  <label class="form-check-label" for="permohonan2">sementara</label>
                </div>
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Jenis binaan</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Jenis bahan binaan</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Keluasan binaan </label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Kawasan binaan </label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Koordinat</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Status pemilikan tanah</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Jenis kumbahan (jika ada)</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Cara pelupusan</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Tahun dibina (jika binaan sudah siap)</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Tarikh jangkaan siap (jika kerja-kerja binaan sedang dijalankan)</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Catatan</label>
                <input type="text" name="nama-syarikat-borang-d" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Kembali</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Seterusnya</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>
           <!-- END BORANG D -->
           @endif
               
           @endforeach

          <!-- START FILE UPLOAD -->
          <div id="fail-upload" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Muat Turun Fail</h6>
            </div>
            <div class="row g-3">
              <div class="mb-3">
                <label class="form-label" for="basic-default-upload-file">Salinan Sijil Pendaftaran Syarikat daripada
                  Syarikat Suruhanjaya Syarikat Malaysia (SSM)
                  </label>
                <input type="file" class="form-control" name="upload1-pelepasan-efluen" id="upload1-pelepasan-efluen" />
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-default-upload-file">Salinan Permit Operasi daripada Pihak Berkuasa
                  Tempatan atau Jabatan Berkaitan.
                  </label>
                <input type="file" class="form-control" name="upload2-pelepasan-efluen" id="upload2-pelepasan-efluen" />
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-default-upload-file">Salinan Pelan Lokasi Aktiviti Berkenaan.
                </label>
                <input type="file" class="form-control" name="upload3-pelepasan-efluen" id="upload3-pelepasan-efluen" />
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-default-upload-file">Status Pemilikan Tanah
                </label>
                <input type="file" class="form-control" name="upload4-pelepasan-efluen" id="upload4-pelepasan-efluen" />
              </div>
       
         
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Kembali</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Seterusnya</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>
          <!-- END FILE UPLOAD -->

          <!-- START PEMBAYARAN -->
          <div id="pembayaran" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Pembayaran Permohonan</h6>
            </div>
            <div class="row g-3">
              <div class="">
                <div class="card invoice-preview-card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column m-sm-3 m-0">
                      <div class="mb-xl-0 mb-4">
                        <div class="d-flex svg-illustration mb-4 gap-2 align-items-center">
                          <div class="app-brand-logo demo">@include('_partials.macros',["height"=>22,"withbg"=>''])</div>
                          <span class="app-brand-text fw-bold fs-4">
                            {{ config('variables.templateName') }}
                          </span>
                        </div>
                       
                        <p class="mb-2">Aras 1, Blok E, Wisma Darul Aman, Alor Setar,</p>
                        <p class="mb-2">05503 Alor Setar, Kedah</p>
                        <p class="mb-0">04-774 4650</p>
                      </div>
                      <div>
                        {{-- <h4 class="fw-medium mb-2">INVOICE #86423</h4> --}}
                        <div class="pt-1">
                          <span>Tarikh:</span>
                          <span class="fw-medium">{{ date('d - m - Y') }}
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-0" />
                  <div class="card-body">
                    <div class="row p-sm-3 p-0">
                      <div class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
                        <h6 class="mb-3">Invoice Untuk:</h6>
                        <p class="mb-1">{{ Auth::user()->name }}</p>
                        <p class="mb-0">{{ Auth::user()->email }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive border-top">
                    <table class="table m-0">
                      <thead>
                        <tr>
                          <th>Tajuk</th>
                          <th>Penerangan</th>
                          <th>Harga</th>
                          <th>Kuantiti</th>
                          <th>Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-nowrap">Permohonan Badan Perairan</td>
                          <td class="text-nowrap"> 
                            @if (url()->current() ==  route('permohonan-pelepasan-efluen-borang-individu')) 
                            Permohonan Individu
                            @elseif (url()->current() ==  route('permohonan-pelepasan-efluen-borang-bisnes')) 
                            Permohonan Bisnes
                            @endif
                          </td>
                          <td>RM 150</td>
                          <td>1</td>
                          <td>RM 150</td>
                        </tr>
                        <tr>
                          <td colspan="3" class="align-top px-4 py-4">
                          </td>
                          <td class="text-end pe-3 py-4">
                            <p class="mb-2 pt-3">Jumlah Keseluruhan:</p>
                          </td>
                          <td class="ps-2 py-4">
                            <p class="fw-medium mb-2 pt-3">RM 150.00</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
            
                  <div class="card-body mx-3">
                    <div class="row">
                      <div class="col-12">
                        <span class="fw-medium"></span>
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Kembali</span>
                </button>
                <button class="btn btn-success btn-submit">Pembayaran</button>
              </div>
            </div>
          </div>
           <!-- TAMAT PEMBAYARAN -->
          
        </form>
      </div>
    </div>
  </div>
 
</div>
@endsection
