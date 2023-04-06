@extends('admin.admin_master')
@section('admin')


  <div class="container-xxl flex-grow-1 container-p-y">
{{--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
              <h4 class="fw-bold    "><span class="text-muted fw-light">Department /</span> edit</h4>

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

                   <div class="  card clearfix  my-3">
                     <h5 class="card-header">Update Department</h5>
                        <div class="card-body">
                                {{-- <div class="alert alert-primary alert-dismissible" role="alert">
                        We advice you fill your address in city / landmark closest to you in situation were your home address does not appear in the google search
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div> --}}
                            <form
                            action="{{route('update.department',$department->id)}}"
                            method="post"
                            enctype="multipart/form-data"
                            >
                                @csrf
                                <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">School</label>
                        <div class="col-md-6">
                            <select autofocus required class="form-control"  name="school_id" id="selectState">

                                <option value="">select one</option>
                            @foreach($schools as $school)
                            <option value="{{$school->id}}">{{$school->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Department</label>
                        <div class="col-md-6">
                          <input class="form-control"required value="{{$department->name}}" name="name" type="text" placeholder="Computer Science" id="html5-text-input" />
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">O'Level</label>
                        <div class="col-md-3">
                          <input class="form-control"required name="level"value="{{$department->O_level_avg}}" type="text" placeholder="O'Level Average" id="html5-text-input" />
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Info</label>
                        <div class="col-md-6">
                        <textarea class="form-control"required name="info" id="" cols="10" rows="5">{{$department->info}}</textarea>
                         </div>
                        </div>

                                <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label"> </label>
                        <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Update">
                        <input type="reset" class="btn btn-outline-secondary" value="Clear">
                        </div>
                        </div>

                            </form>

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
