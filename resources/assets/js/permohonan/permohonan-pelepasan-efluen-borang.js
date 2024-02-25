/**
 *  Form Wizard
 */

'use strict';


$(function () {
  const select2 = $('.select2'),
    selectPicker = $('.selectpicker');

  // Bootstrap select
  if (selectPicker.length) {
    selectPicker.selectpicker();
  }

  // select2
  if (select2.length) {
    select2.each(function () {
      var $this = $(this);
      $this.wrap('<div class="position-relative"></div>');
      $this.select2({
        placeholder: 'Select value',
        dropdownParent: $this.parent()
      });
    });
  }
});


(function () {
  const wizardModernVertical = document.querySelector('.wizard-modern-vertical'),
  wizardModernVerticalBtnNextList = [].slice.call(wizardModernVertical.querySelectorAll('.btn-next')),
  wizardModernVerticalBtnPrevList = [].slice.call(wizardModernVertical.querySelectorAll('.btn-prev')),
  wizardModernVerticalBtnSubmit = wizardModernVertical.querySelector('.btn-submit');
  if (typeof wizardModernVertical !== undefined && wizardModernVertical !== null) {
    const modernVerticalStepper = new Stepper(wizardModernVertical, {
      linear: false
    });
    if (wizardModernVerticalBtnNextList) {
      wizardModernVerticalBtnNextList.forEach(wizardModernVerticalBtnNext => {
        wizardModernVerticalBtnNext.addEventListener('click', event => {
          modernVerticalStepper.next();
        });
      });
    }
    if (wizardModernVerticalBtnPrevList) {
      wizardModernVerticalBtnPrevList.forEach(wizardModernVerticalBtnPrev => {
        wizardModernVerticalBtnPrev.addEventListener('click', event => {
          modernVerticalStepper.previous();
        });
      });
    }
    if (wizardModernVerticalBtnSubmit) {
      // get all data
      wizardModernVerticalBtnSubmit.addEventListener('click', event => {

        // Borang A - Individu
        const permohonanElement = document.querySelector('input[name="permohonan"]:checked');
        const permohonan = permohonanElement ? permohonanElement.value : "";
        const namaPemohonElement = document.getElementById('nama-pemohon-borang-a');
        const namaPemohon = namaPemohonElement ? namaPemohonElement.value : "";
        const alamatBerdaftarElement = document.getElementById('alamat-berdaftar-borang-a');
        const alamatBerdaftar = alamatBerdaftarElement ? alamatBerdaftarElement.value : "";
        const emailPemohonElement = document.getElementById('email-pemohon-borang-a');
        const emailPemohon = emailPemohonElement ? emailPemohonElement.value : "";
        const noTelefonElement = document.getElementById('no-telefon-borang-a');
        const noTelefon = noTelefonElement ? noTelefonElement.value : "";
        const noFaksElement = document.getElementById('no-faks-borang-a');
        const noFaks = noFaksElement ? noFaksElement.value : "";


        // Borang A - Bisnes
        const tempatPerniagaanUtamaElement = document.getElementById('tempat-perniagaan-utama-borang-a');
        const tempatPerniagaanUtama = tempatPerniagaanUtamaElement ? tempatPerniagaanUtamaElement.value : "";
        const noTelefonPerniagaanElement = document.getElementById('no-telefon-perniagaan-borang-a');
        const noTelefonPerniagaan = noTelefonPerniagaanElement ? noTelefonPerniagaanElement.value : "";
        const noFaksPerniagaanElement = document.getElementById('no-faks-borang-a');
        const noFaksPerniagaan = noFaksPerniagaanElement ? noFaksPerniagaanElement.value : "";
        const emelPerniagaanElement = document.getElementById('emel-perniagaan-borang-a');
        const emelPerniagaan = emelPerniagaanElement ? emelPerniagaanElement.value : "";

        // Borang C 
        // 1. Butiran Pemohon
        const namaPegawaiBertanggungjawabElement = document.getElementById('nama-pegawai-bertanggungjawab-borang-c');
        const namaPegawaiBertanggungjawab = namaPegawaiBertanggungjawabElement ? namaPegawaiBertanggungjawabElement.value : "";
        const noKadPengenalanPegawaiElement = document.getElementById('no_kad_pengenalan-pegawai-borang-c');
        const noKadPengenalanPegawai = noKadPengenalanPegawaiElement ? noKadPengenalanPegawaiElement.value : "";
        const noTelefonPegawaiElement = document.getElementById('no-telefon-pegawai-borang-c');
        const noTelefonPegawai = noTelefonPegawaiElement ? noTelefonPegawaiElement.value : "";

        // 2. Fasa Aktiviti
        const fasaAktivitiCheckboxList = document.querySelectorAll('input[name="fasa-aktiviti"]:checked');
        const fasaAktivitiValues = Array.from(fasaAktivitiCheckboxList).map(checkbox => checkbox.value);

        // 3. Pelepasan Efluen Daripada Aktiviti
        const pelepasanEfluenCheckboxList = document.querySelectorAll('input[name="pelepasan-efluen-daripada-aktiviti[]"]:checked');
        const pelepasanEfluenValues = Array.from(pelepasanEfluenCheckboxList).map(checkbox => checkbox.value);

        // 4. Butiran kapasiti efluen
        const lokasiElement = document.getElementById('lokasi-borang-c');
        const lokasi = lokasiElement ? lokasiElement.value : "";
        const lokasiTitikElement = document.getElementById('lokasi-titik-borang-c');
        const lokasiTitik = lokasiTitikElement ? lokasiTitikElement.value : "";
        const sifatDanKomposisiElement = document.querySelector('input[name="sifat-dan-komposisi"]:checked');
        const sifatDanKomposisi = sifatDanKomposisiElement ? sifatDanKomposisiElement.value : "";
        const kekerapanElement = document.getElementById('kekerapan-borang-c');
        const kekerapan = kekerapanElement ? kekerapanElement.value : "";
        const kadarAlirElement = document.getElementById('kadar-alir-pegawai-borang-c');
        const kadarAlir = kadarAlirElement ? kadarAlirElement.value : "";
        const peralatanElement = document.getElementById('peralatan-borang-c');
        const peralatan = peralatanElement ? peralatanElement.value : "";
        const pelanKontingensiElement = document.getElementById('pelan-borang-c');
        const pelanKontingensi = pelanKontingensiElement ? pelanKontingensiElement.value : "";
        const persampelanElement = document.getElementById('persampelan-borang-c');
        const persampelan = persampelanElement ? persampelanElement.value : "";
        const kaedahPelupusanElement = document.getElementById('kaedah-pelupusan-borang-c');
        const kaedahPelupusan = kaedahPelupusanElement ? kaedahPelupusanElement.value : "";

        // 5. Butiran Perunding Pensampelan
        const namaSyarikatPerundingElement = document.getElementById('nama-syarikat-perunding-borang-c');
        const namaSyarikatPerunding = namaSyarikatPerundingElement ? namaSyarikatPerundingElement.value : "";
        const noPendaftaranSyarikatElement = document.getElementById('no-syarikat-perunding-borang-c');
        const noPendaftaranSyarikat = noPendaftaranSyarikatElement ? noPendaftaranSyarikatElement.value : "";
        const alamatSyarikatPerundingElement = document.getElementById('alamat-syarikat-perunding-borang-c');
        const alamatSyarikatPerunding = alamatSyarikatPerundingElement ? alamatSyarikatPerundingElement.value : "";
        const namaAhliKimiaElement = document.getElementById('nama-ahli-borang-c');
        const namaAhliKimia = namaAhliKimiaElement ? namaAhliKimiaElement.value : "";
        const alamatAhliKimiaElement = document.getElementById('alamat-ahli-kimia-borang-c');
        const alamatAhliKimia = alamatAhliKimiaElement ? alamatAhliKimiaElement.value : "";
        const noTelefonAhliKimiaElement = document.getElementById('no-telefon-ahli-kimia-borang-c');
        const noTelefonAhliKimia = noTelefonAhliKimiaElement ? noTelefonAhliKimiaElement.value : "";
        const noFaksAhliKimiaElement = document.getElementById('no-faks-ahli-kimia-borang-c');
        const noFaksAhliKimia = noFaksAhliKimiaElement ? noFaksAhliKimiaElement.value : "";
        const emailAhliKimiaElement = document.getElementById('email-pegawai-borang-c');
        const emailAhliKimia = emailAhliKimiaElement ? emailAhliKimiaElement.value : "";

        // You can then use these values as needed, for example:

        alert('Submitted..!!');
      });
    }
  }
})();
