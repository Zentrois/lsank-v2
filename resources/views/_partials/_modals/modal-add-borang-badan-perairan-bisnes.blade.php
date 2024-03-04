<!-- Add New Credit Card Modal -->
<div class="modal fade" id="addNewCCModal2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="mb-2">Aktiviti Permohonan - Bisnes</h3>
          <p class="text-muted">Pilih aktiviti Permohonan</p>
        </div>
        <form id="submit-badan-perairan-bisnes" method="POST" action="{{ route('permohonan-badan-perairan-borang-bisnes') }}" class="row g-3" onsubmit="return false">
          @csrf

          <!-- Checkboxes and Radios -->
          <div class="row row-bordered g-0">
            <div class="col-md p-4">
              <div class="form-check mt-3">
                <input class="form-check-input" name="aktiviti[]"  type="checkbox" value="1" id="aktiviti5" />
                    <label class="form-check-label" for="aktiviti5">
                  Permohonan Aktiviti Rekreasi Sukan Air
                </label>
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" name="aktiviti[]"  type="checkbox" value="2" id="aktiviti6" />
                    <label class="form-check-label" for="aktiviti6">
                  Permohonan Vesel Rekreasi
                </label>
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" name="aktiviti[]"  type="checkbox" value="3" id="aktiviti7" />
                <label class="form-check-label" for="aktiviti7">
                  Permohonan Aktiviti Sangkar
                </label>
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" name="aktiviti[]"  type="checkbox" value="4" id="aktiviti8" />
                <label class="form-check-label" for="aktiviti8">
                  Permohonan Aktiviti Binaan
                </label>
              </div>
             
            </div>
 
          </div>


          <button type="submit" id="button-submit-bisnes" class="btn btn-primary me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
      </div>
    </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->
