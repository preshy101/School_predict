@extends('admin.admin_master')
@section('admin')

  <div class="container-xxl flex-grow-1 container-p-y">
{{--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
              <h4 class="fw-bold    "><span class="text-muted fw-light">O'Level /</span> view</h4>

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
                            action="{{route('store.olevel')}}"
                            method="post"
                            enctype="multipart/form-data"
                            >
                                @csrf
                                <div class="row pt-4">
                                    <div class="col-6">
                                        <h4>Subject</h4>
                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-6 col-form-label">Mathematics</label>
                        <div class="col-md-3">
                            <input autofocus required class="form-control border border-primary" type="text" name="maths" id="selectState"/>

                        </div>
                         <b class="col-md-1 col-form-label">A</b>
                        </div>
                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-6 col-form-label">English</label>
                        <div class="col-md-3">
                            <input autofocus required class="form-control border border-primary" type="text" name="eng" id="selectState"/>

                        </div>
                         <b class="col-md-1 col-form-label">A</b>
                        </div>
                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-6 col-form-label">Physics</label>
                        <div class="col-md-3">
                            <input autofocus required class="form-control border border-primary" type="text" name="physics" id="selectState"/>

                        </div>
                         <b class="col-md-1 col-form-label">A</b>
                        </div>
                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-6 col-form-label">Chemistry</label>
                        <div class="col-md-3">
                            <input autofocus required class="form-control border border-primary" type="text" name="chem" id="selectState"/>
                        </div>
                         <b class="col-md-1 col-form-label">A</b>
                        </div>

                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-6 col-form-label">Boilogy</label>
                        <div class="col-md-3">
                            <input autofocus required class="form-control border border-primary" type="text" name="bio" id="selectState"/>

                        </div>
                         <b class="col-md-1 col-form-label">A</b>
                        </div>
                        <div class="mb-3 row">
                             <div class="col-md-6">
                            <input for="html5-text-input"name="other1" class="col-md-1 form-control">
                            </div>
                        <div class="col-md-3">
                        <input autofocus required class="form-control" type="text" name="other1score" id="selectState"/>

                        </div>
                         <b class="col-md-1 col-form-label">A</b>
                        </div>
                        <div class="mb-3 row">
                             <div class="col-md-6">
                            <input for="html5-text-input"name="other2" class="col-md-1 form-control">
                            </div>
                            <div class="col-md-3">
                            <input autofocus required class="form-control" type="text" name="other2score" id="selectState"/>

                        </div>
                         <b class="col-md-1 col-form-label">A</b>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-6">
                            <input for="html5-text-input"name="other3" class="col-md-1 form-control">
                            </div>
                            <div class="col-md-3">

                            <input autofocus required class="form-control" type="text" name="other3score" id="selectState"/>

                        </div>
                         <b class="col-md-1 col-form-label">A</b>
                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h4>Result Image</h4>
                             <input autofocus required class="form-control" type="file" name="result"/>
                                        <img src="" alt="">
                                    </div>

                                </div>


                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label"> </label>
                        <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-outline-secondary" value="Clear">
                        </div>
                        </div>
  </form>

                <table class="table mt-3 table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>subject</th>
                            <th>score</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $olevels = App\Models\Olevel::where('user_id','=',auth()->user()->id)->get();
                            // var_dump($olevels);
                            // dd($olevels);
                        @endphp
                        @foreach ($olevels as $key => $olevel)

                       <tr>

                            <td>{{1}}</td>
                            <td>Mathematics</td>
                            <td>{{$olevel->maths}}</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>English</td>
                            <td>{{$olevel->eng}}</td>
</tr>
                        <tr>
                            <td>3</td>
                            <td>Chemistry</td>
                            <td>{{$olevel->chem}}</td>
</tr>
                        <tr>
                            <td>4</td>
                            <td>Physics</td>
                            <td>{{$olevel->phys}}</td>
</tr>
                        <tr>
                           <td>5</td>
                            <td>Boilogy</td>
                            <td>{{$olevel->bio}}</td>
</tr>
                        <tr>
                            <td>6</td>
                            <td>{{$olevel->othwers1}}</td>
                            <td>{{$olevel->othwerScore1}}</td>
</tr>
                        <tr>
                            <td>7</td>
                            <td>{{$olevel->othwers2}}</td>
                            <td>{{$olevel->othwerScore2}}</td>
</tr>
                        <tr>
                            <td>8</td>
                            <td>{{$olevel->othwers3}}</td>
                            <td>{{$olevel->othwerScore3}}</td>
                        </tr>

                        <hr><hr>
                        @endforeach

                    </tbody>
                </table>
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
