<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
  <div class="container-fluid py-4">
    <div class="row">
      <!-- Podcast Card -->
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Podcast</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{$podcastCount}} Episodes
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-green-400 shadow text-center border-radius-md">
                  <i class="fa-solid fa-microphone"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Scholarship Card -->
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Scholarships</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{$scholarship}} Scholarships
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-green-400 shadow text-center border-radius-md">
                  <i class="ni ni-hat-3 text-lg opacity-10" aria-hidden="true"></i> <!-- Scholarship icon -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Vacancies Card -->
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Vacancies</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{$vacanyCount}} Jobs
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-green-400 shadow text-center border-radius-md">
                  <i class="ni ni-briefcase-24 text-lg opacity-10" aria-hidden="true"></i> <!-- Vacancies icon -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>