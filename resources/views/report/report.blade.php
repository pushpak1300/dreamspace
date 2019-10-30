@extends('layouts.dbapp')

@section('content')

<!-- ============ Body content start ============= -->
<div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                      <div class="breadcrumb">
                <h1>Report</h1>
               
            </div>
            <div class="separator-breadcrumb border-top"></div>

            
            <!-- end of row -->

            <div class="row mb-4">
                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h2 class="card-title mb-3">Report Genration</h2>
                              <div class="float-right p-1" id="export-buttons"></div>
                            <div class="table-responsive">
                                <table id="report" class="display table table-striped table-bordered" style="width:100%">
                                 <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Roll NO</th>
                                            <th>Project Topic</th> 
                                            <th>Project Domain</th>
                                            <th>Research Papaer</th>
                                            <th>Department</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Student Name</th>
                                            <th>Roll NO</th>
                                            <th>Project Topic</th> 
                                            <th>Project Domain</th>
                                            <th>Research Papaer</th>
                                            <th>Department</th>
                                                                                    
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
@include('common.footer')
                
                </div>
            </div>


@endsection

@push('script')

  {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script> --}}
    <script> 
let reporttable = $('#report');
 reporttable.DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{$report}}',
            columns: [
                {data: 'name', name: 'name'},
                {data: 'no', name: 'no'},
                {data: 'topic', name: 'topic'},
                {data: 'domain', name: 'domain'},
                {data: 'is_research_published', name: 'is_research_published'},
               {data: 'department', name: 'department'},                
            ],
            
        });
    jQuery(document).ready(function(){
    reporttable.init();


    var buttons = new $.fn.dataTable.Buttons(reporttable, {
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            {
                extend: 'pdfHtml5',
                 messageTop: 'Report Genrated',
                exportOptions: {
                    columns: ':visible'
                    }
                }
        ]
    }).container().appendTo($('#export-buttons'));


    $(".buttons-pdf").addClass("btn btn-primary");
    $(".buttons-excel").addClass("btn btn-primary");
    $(".buttons-copy").addClass("btn btn-primary");
    $(".buttons-csv").addClass("btn btn-primary");
    $('[name="staff-table_length"]').addClass("input-sm");
});
</script>
@endpush