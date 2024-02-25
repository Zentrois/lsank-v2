@extends('layouts/layoutMaster')

@section('title', 'Permohonan Pelepasan Efluen')

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
  <span class="text-muted fw-light">Permohonan Pelepasan Efluen /</span> 
  @if (url()->current() ==  route('permohonan-pelepasan-efluen-borang-individu')) 
  Borang Individu
  @elseif (url()->current() ==  route('permohonan-pelepasan-efluen-borang-bisnes')) 
  Borang Bisnes
  @endif
</h4>

  <!-- Modern Vertical Wizard -->
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
        <div class="step" data-target="#borang-c">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">2</span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Borang C</span>
              <span class="bs-stepper-subtitle">Permohonan Menjalankan <br> Aktiviti Pelepasan Efluen</span>
            </span>
          </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#borang-d">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">3</span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Borang D</span>
              <span class="bs-stepper-subtitle">Laporan Ujian <br> Pemantauan Kualiti Air</span>
            </span>
          </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#fail-upload">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">4</span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Muat Turun Fail</span>
            </span>
          </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#pembayaran">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">5</span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Pembayaran Permohonan</span>
            </span>
          </button>
        </div>
      </div>
      <div class="bs-stepper-content">
        <form onSubmit="return false">
          <!-- borang-a -->
          <div id="borang-a" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Borang A</h6>
              <small>Permohonan Lesen Pelepesan Efluen</small>
            </div>

           
            <div class="row g-3">
              <div class="col-sm-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="permohonan" id="permohonan1" value="0" />
                  <label class="form-check-label" for="permohonan1">Permohonan baru</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="permohonan" id="permohonan2" value="1" />
                  <label class="form-check-label" for="permohonan2">Pembaharuan</label>
                </div>
              </div>
             
              @if (url()->current() ==  route('permohonan-pelepasan-efluen-borang-individu'))

              <div class="col-sm-12">
                <label class="form-label" for="nama-pemohon-borang-a">Nama pemohon</label>
                <input type="text" id="nama-pemohon-borang-a" class="form-control" value="{{ Auth::user()->name }}" readonly />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="alamat-berdaftar-borang-a">Alamat berdaftar</label>
                <input type="text" id="alamat-berdaftar-borang-" class="form-control"/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="email-pemohon-borang-a">E-mel Pemohon</label>
                <input type="email" id="email-pemohon-borang-a" class="form-control" value="{{ Auth::user()->email }}" readonly/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="no-telefon-borang-a"> 
                  No. telefon</label>
                <input type="text" id="no-telefon-borang-a" class="form-control"/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="no-telefon-borang-a"> 
                  No. faks</label>
                <input type="text" id="no-faks-borang-a" class="form-control"/>
              </div>

              @elseif (url()->current() ==  route('permohonan-pelepasan-efluen-borang-bisnes') )
                  
              <div class="col-sm-6">
                <label class="form-label" for="tempat-perniagaan-utama-borang-a"> 
                  Tempat Perniagaan Utama</label>
                <input type="text" id="tempat-perniagaan-utama-borang-a" class="form-control"/>
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-telefon-perniagaan-borang-a">No. Telefon Perniagaan</label>
                <input type="text" id="no-telefon-perniagaan-borang-a" class="form-control"/>
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-telefon-borang-a"> 
                  No. faks Perniagaan</label>
                <input type="text" id="no-faks-borang-a" class="form-control" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="no-faks-borang-a">E-mel Perniagaan</label>
                <input type="text" id="emel-perniagaan-borang-a" class="form-control"  />
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

          <!-- borang-c -->
          <div id="borang-c" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Borang C</h6>
              <small>Permohonan Menjalankan Aktiviti Pelepasan Efluen</small>
            </div>
            <div class="row g-3">
              <h6 class="mb-0">1. Butiran Pemohon</h6>
              <div class="col-sm-12">
                <label class="form-label" for="pegawai-bertanggungjawab-borang-c">Nama Pegawai Bertanggungjawab</label>
                <input type="text" id="nama-pegawai-bertanggungjawab-borang-c" class="form-control"/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="no_kad_pengenalan-pegawai-borang-c">No. kad pengenalan Pegawai</label>
                <input type="text" id="no_kad_pengenalan-pegawai-borang-c" class="form-control"/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="no-telefon-pegawai-borang-c">No Telefon Pegawai</label>
                <input type="text" id="no-telefon-pegawai-borang-c" class="form-control"/>
              </div>

              <div class="col-12">
                <hr class="" />
              </div>
    
              <h6 class="mb-0">2. Fasa Aktiviti</h6>
              <div class="col-sm-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="fasa-aktiviti" id="fasa-aktiviti1" value="1" />
                  <label class="form-check-label" for="fasa-aktiviti1">Fasa pembangunan</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="fasa-aktiviti" id="fasa-aktiviti2" value="2" />
                  <label class="form-check-label" for="fasa-aktiviti2">Fasa operasi</label>
                </div>
              </div>

              <div class="col-12">
                <hr class="" />
              </div>

              <h6 class="mb-0">3. Pelepasan Efluen Daripada Aktiviti</h6>
              <div class="col-sm-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti1" value="1" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti1">Akuakultur air tawar dalam kolam atau sangkar</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti2" value="2" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti2">Akuakultur air laut dalam kolam</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti3" value="3" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti3">Pembangunan atau kerja tanah</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti4" value="4" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti4">Penternakan babi</label>
                </div>
      
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti5" value="5" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti5">Penternakan selain babi</label>
                </div> 
                
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti6" value="6" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti6">Haiwan kesayangan</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti7" value="7" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti7">Aktiviti kuari</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti8" value="8" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti8">Bengkel kenderaan/label</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti9" value="9" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti9">Aktiviti pertanian</label>
                </div>
              </div>

              <div class="col-12">
                <hr class="" />
              </div>

              <h6 class="mb-0">4. Butiran kapasiti efluen</h6>
              <div class="col-sm-12">
                <label class="form-label" for="lokasi-borang-c">Nama dan lokasi / alamat sumber air di mana efluen dimasukkan atau dilepaskan</label>
                <input type="text" id="lokasi-borang-c" class="form-control"/>
              </div>
              <div class="col-sm-12">
                <label class="form-label" for="lokasi-titik-borang-c">Lokasi titik kemasukan atau pelepasan efluen: (sertakan koordinat jika ada)</label>
                <input type="text" id="lokasi-titik-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-12">
                <label class="d-block form-label">Sifat dan komposisi efluen yang dimasukkan atau dilepaskan</label>
                <div class="form-check">
                  <input type="radio" id="sifat-cecair" name="sifat-dan-komposisi" class="form-check-input" value="1" required checked/>
                  <label class="form-check-label" for="sifat-cecair">Cecair</label>
                </div>
                <div class="form-check ">
                  <input type="radio" id="sifat-pepejal" name="sifat-dan-komposisi" class="form-check-input" value="2" required />
                  <label class="form-check-label" for="sifat-pepejal">Pepejal</label>
                </div>
                <div class="form-check ">
                  <input type="radio" id="sifat-separa-pepejal" name="sifat-dan-komposisi" class="form-check-input" value="3" required />
                  <label class="form-check-label" for="sifat-separa-pepejal">Separa Pepejal</label>
                </div>
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="kekerapan">Kekerapan kemasukan atau aktiviti pelepasan efluen</label>
                <input type="text" id="kekerapan-borang-c" class="form-control"/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="kadar-alir-pegawai-borang-c">Kadar alir maksimum kemasukan atau aktiviti pelepasan efluen</label>
                <input type="text" id="kadar-alir-pegawai-borang-c" class="form-control"/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="peralatan-borang-c">Peralatan untuk pengukuran kapasiti/kadar alir pelepasan efluen</label>
                <input type="text" id="peralatan-borang-c" class="form-control"/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="pelan-borang-c">Pelan kontingensi</label>
                <input type="text" id="pelan-borang-c" class="form-control"/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="persampelan-borang-c">Persampelan di titik pelepasan efluen</label>
                <input type="text" id="persampelan-borang-c" class="form-control"/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="kaedah-pelupusan-borang-c">Kaedah pelupusan</label>
                <input type="text" id="kaedah-pelupusan-borang-c" class="form-control"/>
              </div>

              <div class="col-12">
                <hr class="" />
              </div>

              <h6 class="mb-0">5. Butiran Perunding Pensampelan</h6>

              <div class="col-sm-6">
                <label class="form-label" for="nama-syarikat-perunding-borang-c">Nama syarikat</label>
                <input type="text" id="nama-syarikat-perunding-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-syarikat-perunding-borang-c">No. pendaftaran syarikat
                </label>
                <input type="text" id="no-syarikat-perunding-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="alamat-syarikat-perunding-borang-c">Alamat Syarikat</label>
                <input type="text" id="alamat-syarikat-perunding-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="nama-ahli-kimia-borang-c">Nama ahli kimia yang dilantik</label>
                <input type="text" id="nama-ahli-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-12">
                <label class="form-label" for="alamat-ahli-kimia-borang-c">Alamat ahli kimia</label>
                <input type="text" id="no-telefon-pegawai-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-telefon-ahli-kimia-borang-c">No. telefon ahli kimia</label>
                <input type="text" id="no-telefon-ahli-kimia-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-faks-ahli-kimia-borang-c">No. faks ahli kimia</label>
                <input type="text" id="no-faks-ahli-kimia-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="email-pegawai-borang-c">E-mel ahli kimia</label>
                <input type="text" id="email-pegawai-borang-c" class="form-control"/>
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="kaedah-pelupusan-borang-c">Kaedah pelupusan</label>
                <input type="text" id="kaedah-pelupusan-borang-c" class="form-control"/>
              </div>

              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Kembali</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Seterusnya</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>

           <!-- borang-d -->
           <div id="borang-d" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Borang D</h6>
              <small>Laporan Ujian Pemantauan Kualiti Air</small>
            </div>
            <div class="row g-3">

              <h6 class="mb-0">1. Butiran Pemohon</h6>

              <div class="col-sm-12">
                <label class="form-label" for="nama-syarikat-borang-d">Nama syarikat</label>
                <input type="text" id="nama-syarikat-borang-d" class="form-control" placeholder="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-pendaftaran-syarikat-borang-d">Alamat Syarikat</label>
                <input type="text" id="alamat-syarikat-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-telefon-pegawai-borang-d">Alamat</label>
                <input type="text" id="no-telefon-pegawai-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-telefon-pegawai-borang-d">No. telefon pegawai</label>
                <input type="text" id="no-telefon-pegawai-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-faks-pegawai-borang-d">No. faks pegawai</label>
                <input type="text" id="no-faks-pegawai-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="emel-pegawai-borang-d">E-mel pegawai</label>
                <input type="text" id="emel-pegawai-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-kad-pengenal-pegawai-borang-d">No. kad pengenalan Pegawai</label>
                <input type="text" id="no-kad-pengenal-pegawai-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-12">
                <hr class=""/>
              </div>

              <h6 class="mb-0">2. Jenis Aktiviti</h6>
              <div class="col-sm-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti1-borang-d" value="1" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti1">Akuakultur air tawar dalam kolam atau sangkar</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti2-borang-d" value="2" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti2">Akuakultur air laut dalam kolam</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti3-borang-d" value="3" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti3">Pembangunan atau kerja tanah</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti4-borang-d" value="4" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti4">Penternakan babi</label>
                </div>
      
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti5-borang-d" value="5" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti5">Penternakan selain babi</label>
                </div> 
                
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti6-borang-d" value="6" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti6">Haiwan kesayangan</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti7-borang-d" value="7" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti7">Aktiviti kuari</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti8-borang-d" value="8" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti8">Bengkel kenderaan/label</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pelepasan-efluen-daripada-aktiviti[]" id="pelepasan-efluen-daripada-aktiviti9-borang-d" value="9" />
                  <label class="form-check-label" for="pelepasan-efluen-daripada-aktiviti9">Aktiviti pertanian</label>
                </div>
              </div>

              <div class="col-12">
                <hr class="" />
              </div>

              <h6 class="mb-0">3. Butiran Ujian Kualiti Air</h6>
              <div class="col-sm-6">
                <label class="form-label" for="tarikh-ujian-kualiti-air-borang-d">Tarikh</label>
                <input type="date" id="tarikh-ujian-kualiti-air-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="masa-ujian-kualiti-air-borang-d">Masa</label>
                <input type="time" id="masa-ujian-kualiti-air-borang-d" class="form-control" placeholder="" aria-label="Time" step="3600" />
            </div>

              <div class="col-sm-6">
                <label class="form-label" for="koordinat-borang-d">Lokasi pensampelan (koordinat jika ada)</label>
                <input type="text" id="koordinat-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="parameter-ujikaji-borang-d">Parameter yang diujikaji</label>
                <input type="text" id="parameter-ujikaji-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="kaedah-ujikaji-borang-d">Kaedah ujikaji</label>
                <input type="text" id="kaedah-ujikaji-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="keputusan-borang-d">Keputusan</label>
                <input type="text" id="keputusan-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="pengesahan-borang-d">Pengesahan ahli kimia</label>
                <input type="text" id="pengesahan-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-12">
                <hr class="" />
              </div>

              <h6 class="mb-0">4. Butiran Ahli Kimia</h6>
              <div class="col-sm-6">
                <label class="form-label" for="nama-syarikat-ahli-kimia-borang-d">Nama syarikat</label>
                <input type="text" id="nama-syarikat-ahli-kimia-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-syarikat-ahli-kimia-borang-d">No. pendaftaran syarikat</label>
                <input type="text" id="no-syarikat-ahli-kimia-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="alamat-syarikat-ahli-kimia-borang-d">Alamat</label>
                <input type="text" id="alamat-syarikat-ahli-kimia-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-tel-syarikat-ahli-kimia-borang-d">No.telefon,</label>
                <input type="text" id="no-tel-syarikat-ahli-kimia-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="no-faks-syarikat-borang-d">No. faks</label>
                <input type="text" id="no-faks-syarikat-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-sm-6">
                <label class="form-label" for="emel-syarikat-borang-d">Emel</label>
                <input type="text" id="emel-syarikat-borang-d" class="form-control" placeholder="" aria-label="" />
              </div>

              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Kembali</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Seterusnya</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>

           <!-- file-upload -->
           <div id="fail-upload" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Muat Turun Fail</h6>
            </div>
            <div class="row g-3">
              <div class="mb-3">
                <label class="form-label" for="basic-default-upload-file">Salinan Sijil Pendaftaran Syarikat daripada
                  Syarikat Suruhanjaya Syarikat Malaysia (SSM)
                  </label>
                <input type="file" class="form-control" id="basic-default-upload-file" required />
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-default-upload-file">Salinan Permit Operasi daripada Pihak Berkuasa
                  Tempatan atau Jabatan Berkaitan.
                  </label>
                <input type="file" class="form-control" id="basic-default-upload-file" required />
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-default-upload-file">Salinan Pelan Lokasi Aktiviti Berkenaan.
                </label>
                <input type="file" class="form-control" id="basic-default-upload-file" required />
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-default-upload-file">Status Pemilikan Tanah
                </label>
                <input type="file" class="form-control" id="basic-default-upload-file" required />
              </div>
       
         
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Kembali</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Seterusnya</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>

          <!-- pembayaran -->
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
                       
                        <p class="mb-2"> Aras 1, Blok E, Wisma Darul Aman, Alor Setar,</p>
                        <p class="mb-2"> 05503 Alor Setar, Kedah</p>
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
                        {{-- <p class="mb-1">Shelby Company Limited</p>
                        <p class="mb-1">Small Heath, B10 0HF, UK</p>
                        <p class="mb-1">718-986-6062</p> --}}
                        <p class="mb-0">{{ Auth::user()->email }}</p>
                      </div>
                      {{-- <div class="col-xl-6 col-md-12 col-sm-7 col-12">
                        <h6 class="mb-4">Bill To:</h6>
                        <table>
                          <tbody>
                            <tr>
                              <td class="pe-4">Total Due:</td>
                              <td class="fw-medium">$12,110.55</td>
                            </tr>
                            <tr>
                              <td class="pe-4">Bank name:</td>
                              <td>American Bank</td>
                            </tr>
                            <tr>
                              <td class="pe-4">Country:</td>
                              <td>United States</td>
                            </tr>
                            <tr>
                              <td class="pe-4">IBAN:</td>
                              <td>ETD95476213874685</td>
                            </tr>
                            <tr>
                              <td class="pe-4">SWIFT code:</td>
                              <td>BR91905</td>
                            </tr>
                          </tbody>
                        </table>
                      </div> --}}
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
                          <td class="text-nowrap">Permohonan Pelepasan Efluen</td>
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
                            {{-- <p class="mb-2 mt-3">
                              <span class="ms-3 fw-medium">Salesperson:</span>
                              <span>Alfie Solomons</span>
                            </p>
                            <span class="ms-3">Thanks for your business</span> --}}
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
          
        </form>
      </div>
    </div>
  </div>
  <!-- /Modern Vertical Wizard -->
</div>
@endsection
