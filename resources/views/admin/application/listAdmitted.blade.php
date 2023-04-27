@extends('admin.admin_master')
@section('admin')


  <div class="container-xxl flex-grow-1 container-p-y">
{{--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
              <h4 class="fw-bold    "><span class="text-muted fw-light">Review /</span> view</h4>

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

@if(Session::has('message'))
                  <p class="alert alert-success alert-dismissible fade show">
                   {{Session::get('message')}}
                  </p>
                  @endif

                    <div class="card  ">
                    <h5 class="card-header">Student Review</h5>
                    <!-- Account -->
                    <div class="card-body">
                           <div class="table-responsive text-nowrap mx-1">
                  <table id="table" class="m-3 table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Cutt-Off</th>
                        <th>Status</th>
                        <th> </th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if($applications)
                        @foreach ($applications as $key => $applicatio)
                        <tr>
                            <td>
                                {{$key+1}}
                            </td>
                            @php
                                $username = App\Models\User::where('id',$applicatio->user_id )->first();
                            @endphp
                            <td>
                                {{$username->name}}
                            </td>
                            @php
                                $postutme = App\Models\PostUtme::where('user_id',$applicatio->user_id )->first();
                                $depart = App\Models\Department::find($postutme->dept_id ) ;
                            @endphp
                            <td>
                                {{$depart->name}}
                            </td>

                            <td>
                                {{$applicatio->cuttOff}}
                            </td>
                            <td>
                                {{$applicatio->status}}
                            </td>
                            <td>
                               <form action="{{route('update.application',$applicatio->id)}}" method="post">
                                @csrf
                                <select required class="form-control" name="admit" id="">
                                    <option value="">select one</option>
                                    <option value="approved">approve</option>
                                    <option value="pending">pendind</option>
                                </select>

                            </td>
                            <td>
                                <input class="btn btn-success" type="submit" value="submit">
                            </form>
                                <a
                                href="{{route('view.user', $applicatio->id)}}"
                                class="btn btn-info text-white">
                                    view
                                </a>

                                <a
                                href="{{route('delete.application', $applicatio->id)}}"
                                class="btn btn-danger text-white">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
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
