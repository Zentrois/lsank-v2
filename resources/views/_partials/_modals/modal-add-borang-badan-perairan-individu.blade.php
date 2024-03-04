<!-- Add New Credit Card Modal -->
<div class="modal fade" id="addNewCCModal1" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="mb-2">Aktiviti Permohonan - Individu</h3>
          <p class="text-muted">Pilih Permohonan aktiviti</p>
        </div>
        <form id="submit-badan-perairan-individu" method="POST" action="{{ route('permohonan-badan-perairan-borang-individu') }}" class="row g-3" onsubmit="return false">
          @csrf

              <!-- Checkboxes and Radios -->
              <div class="row row-bordered g-0">
                <div class="col-md p-4">
                  <div class="form-check mt-3">
                    <input class="form-check-input" name="aktiviti[]"  type="checkbox" value="1" id="aktiviti1" />
                    <label class="form-check-label" for="aktiviti1">
                      Permohonan Aktiviti Rekreasi Sukan Air
                    </label>
                  </div>
                  <div class="form-check mt-3">
                    <input class="form-check-input" name="aktiviti[]" type="checkbox" value="2" id="aktiviti2" />
                    <label class="form-check-label" for="aktiviti2">
                      Permohonan Vesel Rekreasi
                    </label>
                  </div>
                  <div class="form-check mt-3">
                    <input class="form-check-input" name="aktiviti[]"  type="checkbox" value="3" id="aktiviti3" />
                    <label class="form-check-label" for="aktiviti3">
                      Permohonan Aktiviti Sangkar
                    </label>
                  </div>
                  <div class="form-check mt-3">
                    <input class="form-check-input" name="aktiviti[]"  type="checkbox" value="4" id="aktiviti4" />
                    <label class="form-check-label" for="aktiviti4">
                      Permohonan Aktiviti Binaan
                    </label>
                  </div>
                 
                </div>
     
              </div>


            <button type="submit" id="button-submit-individu" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->
