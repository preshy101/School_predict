@extends('admin.admin_master')
@section('admin')


  <div class="container-xxl flex-grow-1 container-p-y">
{{--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
              <h4 class="fw-bold    "><span class="text-muted fw-light">Admitted /</span> view</h4>

    <div class="row">
                <div class="col-md-12">

                   @if(count($errors))
                  @foreach ($errors->all() as $error)
                  <p class="alert alert-danger alert-dismissible fade show">
                    {{$error}}
                  </p>
                  @endforeach
                  @endif
                  @if(!empty($message))
                  <p class="alert alert-success alert-dismissible fade show">
                    {{$message}}
                  </p>
                  @endif
                  @if(!empty($error))
                  <p class="alert alert-warning alert-dismissible fade show">
                    {{$error}}
                  </p>
                  @endif



                    <div class="card  ">
                    <h5 class="card-header">Admissions</h5>
                    <!-- Account -->
                    <div class="card-body">


                        <div class="table-responsive text-nowrap mx-1">
                  <table id="table" class="m-3 table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        {{-- @if($hospitals)
                        @foreach ($hospitals as $key => $hospital) --}}
                        <tr>
                            <td>
                                {{-- {{$key+1}} --}}
                            </td>

                            <td>
                                {{-- {{$hospital->name}} --}}
                            </td>

                            <td>
                                {{-- {{$hospital->lga}} --}}
                            </td>
                            <td>
                                <a
                                {{-- href="{{route('view.hospital', $hospital->id)}}" --}}
                                class="btn btn-info text-white">
                                    view
                                </a>
                                <a
                                {{-- href="{{route('edit.hospital', $hospital->id)}}" --}}
                                 class="btn btn-warning text-white">
                                    Edit
                                </a>
                                <a
                                {{-- href="{{route('delete.hospitals', $hospital->id)}}" --}}
                                class="btn btn-danger text-white">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        {{-- @endforeach
                        @endif --}}
                    </tbody>
                  </table>
                </div>



      </div>
      </div>
      </div>
      </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
<script>
     $('#table').DataTable({

                    });
</script>
      <script src="{{asset('assets/js/statejson.js')}}">
                </script>


@endsection
