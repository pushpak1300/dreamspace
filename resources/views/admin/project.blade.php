@extends('layouts.dbapp')

@section('content')

<!-- ============ Body content start ============= -->
<div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                      <div class="breadcrumb">
                <h1>Project</h1>
               
            </div>
            <div class="separator-breadcrumb border-top"></div>

            
            <!-- end of row -->

            <div class="row mb-4">
               
                <div class="col-md-12 mb-4">
                    <div class="card text-left">
                         
                        <div class="card-body">
                            <h2 class="card-title mb-3">All Project Details</h2>
                              <div class="float-right p-1" id="export-buttons"></div>
                            <div class="table-responsive">
                                <table id="project" class="display table table-striped table-bordered" style="width:100%">
                                 <thead>
                                        <tr>
                                            <th>Topic</th>
                                            <th>Domain</th>
                                            <th>Mentor</th> 
                                            <th>Upload by</th>
                                            <th>View</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Topic</th>
                                            <th>Domain</th>
                                            <th>Mentor</th>
                                            <th>Upload by</th> 
                                            <th>View</th>
                                            <th>Delete</th>
                                                                                    
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
             <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Delete Project</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form  id="delete_form" method="POST">
                    <div class="modal-body">

                        @method('DELETE')
                        @csrf
                        <div class="form-body">
                            <!-- START OF MODAL BODY -->
                            <div class="container">
                                <label>Are you sure you want to delete this Project?</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default  ml-auto" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
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
let projecttable = $('#project');
 projecttable.DataTable({
            processing: true,
            serverSide: true,
            ajax: '/admin/all/project',
            columns: [
                {data: 'topic', name: 'topic'},
                {data: 'domain', name: 'domain'},
                {data: 'mentor', name: 'mentor'},
                {data: 'owner', name: 'owner'},
                {data: 'view', name: 'view'},
                {data: 'delete', name: 'delete'},
            ],
            
        });
        projecttable.on('click', '.delete', function() {
            $id = $(this).attr('id');
            $('#delete_form').attr('action', '/project/' + $id);
        });
    // jQuery(document).ready(function(){
    // projecttable.init();


//     var buttons = new $.fn.dataTable.Buttons(projecttable, {
//         buttons: [
//             'copyHtml5',
//             'excelHtml5',
//             'csvHtml5',
//             {
//                 extend: 'pdfHtml5',
//                 exportOptions: {
//                     columns: ':visible'}
//                 }
//         ]
//     }).container().appendTo($('#export-buttons'));


//     $(".buttons-pdf").addClass("btn btn-primary");
//     $(".buttons-excel").addClass("btn btn-primary");
//     $(".buttons-copy").addClass("btn btn-primary");
//     $(".buttons-csv").addClass("btn btn-primary");
//     $('[name="project-table_length"]').addClass("input-sm");
// });
</script>
@endpush