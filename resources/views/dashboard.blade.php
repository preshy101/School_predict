@extends('admin.admin_master')
@section('admin')
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Welcome Back
                            {{-- {{$user->name}}! --}}
                             🎉</h5>
                          <p class="mb-4">
                            You have done <span class="fw-bold">Great</span> you will do greater
                          </p>

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary mt-4">Coming soon</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @php
             $user = auth()->user()->role;
            @endphp
            @if($user == 'admin')
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">

                              <i class="bx bx-user bx-md mb-3 "></i>
                            </div>

                          </div>
                          <span class="fw-semibold d-block mb-1">Users</span>
                          <h3 class="card-title mb-2">
                            {{-- {{count($users)}} --}}
                            @php
                            $users = App\Models\User::all();
                            $users = count($users);

                            @endphp
                            {{ $users}}
                        </h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                               <i class="bx bx-car bx-md mb-3"></i>
                            </div>

                          </div>
                          <span class="fw-semibold d-block mb-1">School</span>
                          <h3 class="card-title text-nowrap mb-1">
                            {{-- {{count($driver)}} --}}
                            @php
                            $schoolcount = App\Models\School::all();
                            $schoolcount = count($schoolcount);

                            @endphp
                            {{ $schoolcount}}
                        </h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <i class="bx bx-package bx-md mb-3"></i>
                            </div>

                          </div>
                          <span class="d-block mb-1">Departments</span>
                          <h3 class="card-title text-nowrap mb-2">
                             @php
                            $dept = App\Models\Department::all();
                            $dept = count($dept);

                            @endphp
                            {{ $dept}}
                        </h3>
                          <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <i class="bx bx-stopwatch bx-md"></i>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Admitted</span>
                          <h3 class="card-title mb-2">
                            {{-- {{count($orderComplete)}} --}}
                            @php
                            $dept = App\Models\User::where('admitted',1)->get();
                            $dept = count($dept);

                            @endphp
                            {{ $dept}}
                        </h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                        </div>
                      </div>
                    </div>
                    <!-- </div>
    <div class="row"> -->
@endif
                  </div>
                </div>
              </div>

              <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
              <script type="text/javascript">
        // $(document).ready(function() {
        //     var income = document.getElementById('income').text;
        // });
              </script>
                @endsection
