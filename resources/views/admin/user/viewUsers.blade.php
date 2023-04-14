@extends('admin.admin_master')
@section('admin')

  <div class="container-xxl flex-grow-1 container-p-y">
{{--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
              <h4 class="fw-bold    "><span class="text-muted fw-light">User/</span> view</h4>

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
                    <h4 class="card-header">Student Academic Records</h4>
                        <div class="card-body">

                     <div class="row pt-4">
                       @if($postutmes)
                       <table class="table mt-1 table-striped">
                        <tbody>
                            <tr>
                                <td>{{$postutmes->sub1}}: <b>{{$postutmes->sub1score}}</b> </td>
                            </tr>
                            <tr>
                                <td>{{$postutmes->sub2}}: <b>{{$postutmes->sub2score}}</b> </td>
                            </tr>
                            <tr>
                                <td>{{$postutmes->sub3}}: <b>{{$postutmes->sub3score}}</b> </td>
                            </tr>
                            <tr>
                                <td>{{$postutmes->sub4}}: <b>{{$postutmes->sub4score}}</b> </td>
                            </tr>
                        </tbody>
                       </table>
                       <p>Total:        <b>
                        @php
                           $all = $postutmes->sub1score+ $postutmes->sub2score+ $postutmes->sub3score+ $postutmes->sub4score
                        @endphp  {{$all}}</b>
</p>
                        @endif
                <table class="table mt-3 table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>subject</th>
                            <th>score</th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- @php
                            $olevels = App\Models\Olevel::where('user_id','=',auth()->user()->id)->get();
                            // var_dump($olevels);
                            // dd($olevels);
                        @endphp --}}
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

                        <hr>
                            <div class="col-6 my-3">
                                <h4>Result Image</h4>
                            <img class="image-fluid" src="{{$olevel->image}}" alt="">
                            </div>

                            </div>
                        <hr>
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
