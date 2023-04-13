@extends('admin.admin_master')
@section('admin')

  <div class="container-xxl flex-grow-1 container-p-y">
{{--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
              <h4 class="fw-bold    "><span class="text-muted fw-light">utme /</span> view</h4>

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
                        <div class="card-body">

                            <form
                            action="{{route('store.utme')}}"
                            method="post"
                            enctype="multipart/form-data"
                            >
                                @csrf
                                <div class="row pt-4">
                                    <div class="col-6">
                                        <h4>Post UTME result </h4>

                        {{-- <div class="mb-3 row">

                        <label for="html5-text-input" class="col-md-3 col-form-label">School</label>

                            <div class="col-md-6">
                            <select autofocus required class="form-control"  name="school_id" id="selectState">

                                <option value="">select one</option>
                            @foreach($schools as $school)
                            <option value="{{$school->id}}">{{$school->name}}</option>
                            @endforeach
                            </select>
                        </div>

                        </div> --}}
                        <div class="mb-3 row">

                        <label for="html5-text-input" class="col-md-3 col-form-label">Department</label>

                            <div class="col-md-6">
                            <select autofocus required class="form-control"  name="dept_id" id="selectState">

                                <option value="">select one</option>
                            @foreach($depts as $dept)
                            <option value="{{$dept->id}}">{{$dept->name}}</option>
                            @endforeach
                            </select>
                        </div>

                        </div>
                        <div class="row">
                            <div class="col-8">

                            </div>
                        </div>
                                </div>

                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-6">
                            <div class="mb-3 row">
                             <div class="col-md-9">
                                <h4>Science Subjects Only</h4>
                            <input for="html5-text-input" name="sub1" value="Mathematics" class="col-md-1 form-control"><br>
                            <input for="html5-text-input" name="sub2" value="English"  class="col-md-1 form-control"><br>
                            <input for="html5-text-input" name="sub3" value="Chemistry"  class="col-md-1 form-control"><br>
                            <input for="html5-text-input" name="sub4" value="Physics"  class="col-md-1 form-control"><br>
                            </div>
                            <div class="col-md-3">
                                <h4>Scores</h4>
                            <input autofocus required class="form-control" type="text" name="score1"  /><br>
                            <input autofocus required class="form-control" type="text" name="score2"  /><br>
                            <input autofocus required class="form-control" type="text" name="score3"  /><br>
                            <input autofocus required class="form-control" type="text" name="score4"  /><br>
                        </div>

                        </div>
                                    </div>
                                </div>
                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label"> </label>
                        <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset"  class="btn btn-outline-secondary" value="Clear">
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



@endsection
