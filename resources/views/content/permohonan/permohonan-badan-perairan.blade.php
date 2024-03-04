@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Permohonan - Badan Perairan')

<!-- Page Styles -->
@section('page-style')
@vite(['resources/assets/vendor/scss/pages/page-pricing.scss'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite([
        'resources/assets/js/permohonan/modal-permohonan-badan-perairan.js'
])
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Permohonan Badan Perairan
</h4>

<div class="card">
  <!-- Pricing Plans -->
  <div class="pb-sm-5 pb-2 rounded-top">
    <div class="container py-5">
      <h2 class="text-center mb-2 mt-0 mt-md-4">Jenis Permohonan</h2>
      <p class="text-center"> Sila Pilih Jenis Permohonan anda. </p>

      <div class="row mx-0 gy-3 px-lg-5">

         <!-- Individu -->
         <div class="col-lg">
          <div class="card border rounded shadow-none">
            <div class="card-body">

              <div class="my-3 pt-2 text-center">
                <img src="{{asset('assets/img/illustrations/page-pricing-standard.png')}}" alt="Standard Image" height="140">
              </div>
              <h3 class="card-title text-center text-capitalize mb-1">Individu</h3>
              <p class="text-center">Solution for big organizations</p>

              <button type="button" class="btn btn-label-primary d-grid w-100" data-bs-toggle="modal" data-bs-target="#addNewCCModal1"> Permohonan Individu </button>
            </div>
          </div>
        </div>

        <!-- Bisnes -->
        <div class="col-lg">
          <div class="card border rounded shadow-none">
            <div class="card-body">

              <div class="my-3 pt-2 text-center">
                <img src="{{asset('assets/img/illustrations/page-pricing-enterprise.png')}}" alt="Enterprise Image" height="140">
              </div>
              <h3 class="card-title text-center text-capitalize mb-1">Bisnes</h3>
              <p class="text-center">Solution for big organizations</p>

              <button type="button" class="btn btn-label-primary d-grid w-100" data-bs-toggle="modal" data-bs-target="#addNewCCModal2"> Permohonan Bisnes </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Pricing Plans -->
</div>
@endsection

@include('_partials/_modals/modal-add-borang-badan-perairan-individu')
@include('_partials/_modals/modal-add-borang-badan-perairan-bisnes')
