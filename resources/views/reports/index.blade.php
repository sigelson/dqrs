@extends('layouts.app', ['title' => __('Reports')])

@section('content')
    {{-- @include('layouts.headers.cards') --}}


    <div class="header bg-gradient-dark pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <h1 class="text-white display-2">Reports</h1>
            </div>
        </div>
    </div>


<div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Report Logs') }}</h3>
                            </div>
                        </div>
                    </div>

<div class="card-body">
        <div class="row align-items-center">

          {{-- <div class="input-daterange datepicker form-group col-md-5">
            <h5>From<span class="text-danger"></span></h5>
            <div class="controls">
                <input type="date" name="from_date" id="from_date" class="form-control datepicker-autoclose" placeholder="Please from date">
              </div>
          </div>

          <div class="form-group col-md-5">
            <h5>To<span class="text-danger"></span></h5>
            <div class="controls">
                <input type="date" name="to_date" id="to_date" class="form-control datepicker-autoclose" placeholder="Please to date">
            </div>
          </div> --}}
<div class="col-md-10">
    <div class="input-daterange datepicker row float-right">
        <div class="col-6">
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input name="from_date" id="from_date" class="form-control" placeholder="Start date" type="text" value="">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input name="to_date" id="to_date" class="form-control" placeholder="End date" type="text" value="">
                </div>
            </div>
        </div>
    </div>
</div>



          <div class="form-group col-md-2">
            <div class="controls">
            <button type="text" id="btn-search" class="btn btn-info form-control">Search</button>
           </div>
         </div>

        </div>

        <div class="table-responsive">
            <table id="reporttable" class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                <th scope="col">Name</th>
                 <th scope="col">Student number</th>
                 <th scope="col">Email</th>
                 <th scope="col">Mobile number</th>
                 <th scope="col">Department</th>
                 <th scope="col">Transaction</th>
                 <th scope="col">Remarks</th>
                 {{-- <th scope="col">Served by:</th> --}}
                 <th scope="col">Created at</th>
                </tr>
                </thead>
            </table>
        </div>
                </div>
            </div>
        </div>

</div>


        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
<script>
    $(document).ready( function () {
     $('#reporttable').DataTable({
        dom: 'Bfrtip',
          processing: true,
          serverSide: true,
         ajax: {
           url: "{{ url('/reports') }}",
           type: 'GET',
           data: function (d) {
           d.from_date = $('#from_date').val();
           d.to_date = $('#to_date').val();
           }
          },
        columns: [
                   { data: 'name', name: 'name' },
                   { data: 'snumber', name: 'snumber' },
                   { data: 'email', name: 'email' },
                   { data: 'mobile', name: 'mobile' },
                   { data: 'department', name: 'department' },
                   { data: 'transaction', name: 'transaction' },
                   { data: 'remarks', name: 'remarks' },
                //    { data: 'server', name: 'server' },
                   { data: 'created_at', name: 'created_at' },
                ],
                buttons:['csv'],

      });
    });
   $('#btn-search').click(function(){
      $('#reporttable').DataTable().draw(true);
   });
  </script>
@endpush


