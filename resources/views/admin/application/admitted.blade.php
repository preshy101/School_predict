@extends('admin.admin_master')
@section('admin')


  <div class="container-xxl flex-grow-1 container-p-y">
{{--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
              <h4 class="fw-bold    "><span class="text-muted fw-light">Prediction /</span> view</h4>

    <div class="row">
                <div class="col-md-12">

                   @if(count($errors))
                  @foreach ($errors->all() as $error)
                  <p class="alert alert-danger alert-dismissible fade show">
                    {{$error}}
                  </p>
                  @endforeach
                  @endif

                  @if(!empty($error))
                  <p class="alert alert-warning alert-dismissible fade show">
                    {{$error}}
                  </p>
                  @endif



                    <div class="card  ">
                    <h5 class="card-header">Prediction Result</h5>
                    <!-- Account -->
                    <div class="card-body">


            @if(!empty($message ) && $status === true)
                  <p class="alert alert-success alert-dismissible fade show">
                    {{$message}}
                  </p>
                  <br><br><br>
                  <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><b>Your O'Level Average:</b> {{$yourOlevel}}</td>
                        </tr>
                        <tr>
                            <td><b>Department O'Level Average Cutt-Off:</b> {{$olevelAverage->O_level_avg }}</td>
                        </tr>
                        <tr>
                            <td><b>Demartment</b> {{$olevelAverage->name }}</td>
                        </tr>
                        <tr>
                            <td><b>Your Post-UTME Total:</b> {{$yourPostUtme}}</td>
                        </tr>
                        <tr>
                            <td><b>Department Cutt-Off:</b> {{$cuttOff}}</td>
                        </tr>
                        <tr>
                            <td><b>Status:</b> {{($admited->status == 'approved')?' Admitted ':' Not Admitted '}}</td>
                        </tr>
                    </tbody>
                  </table>
                  @endif
            @if(!empty($message ) && $status === false)
                  <p class="alert alert-danger alert-dismissible fade show">
                    {{$message}}
                  </p>
                  <br><br><br>
                  <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><b>Your O'Level Average:</b> {{$yourOlevel}}</td>
                        </tr>
                        <tr>
                            <td><b>Department O'Level Average Cutt-Off:</b> {{$olevelAverage->O_level_avg }}</td>
                        </tr>
                        <tr>
                            <td><b>Demartment:</b> {{ $olevelAverage->name }}</td>
                        </tr>
                        <tr>
                            <td><b>Your Post-UTME Total:</b> {{$yourPostUtme}}</td>
                        </tr>
                        <tr>
                            <td><b>Department Cutt-Off:</b> {{$cuttOff}}</td>
                        </tr>
                         <tr>
                            <td><b>Status:</b> {{($admited->status == 'approved')?' Admitted ':' Not Admitted '}}</td>
                        </tr>
                    </tbody>
                  </table>
                  @endif
            @if(!empty($message ) && $status === 'warning')
                  <p class="alert alert-warning alert-dismissible fade show">
                    {{$message}}
                  </p>
                  <br><br><br>
                  <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><b>Your O'Level Average:</b> {{$yourOlevel}}</td>
                        </tr>
                        <tr>
                            <td><b>Department O'Level Average Cutt-Off:</b> {{$olevelAverage->O_level_avg }}</td>
                        </tr>
                        <tr>
                            <td><b>Demartment:</b> {{ $olevelAverage->name }}</td>
                        </tr>
                        <tr>
                            <td><b>Your Post-UTME Total:</b> {{$yourPostUtme}}</td>
                        </tr>
                        <tr>
                            <td><b>Department Cutt-Off:</b> {{$cuttOff}}</td>
                        </tr>
                         <tr>
                            <td><b>Status:</b> {{($admited->status == 'approved')?' Admitted ':' Not Admitted '}}</td>
                        </tr>
                    </tbody>
                  </table>
                  @endif
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
