@extends('admin.layouts.main')
@section('content')
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Orders</h4>


                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Orders</h4>
                                        <p class="card-title-desc"> @if (\Session::has('success'))
                                            <div class="alert alert-success">
                                                <p>{{ \Session::get('success') }}</p>
                                            </div>
                                        @endif
                                      <!--   <span class="float-right">
                                            <a class="btn btn-primary" href="{{ route('print.create') }}">Create</a>
                                        </span> -->
                                        </p>
        
                                        <table id="exportexample1" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>User Name</th>
                                                <th>User Email</th>
                                                <th>Total Amount</th>
                                                <th>Order Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="subscribeModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">

                    <h3>Order Status Change</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/action_page.php">
                        <div class="row">
                          <div class="form-group">
                            <div class="col-12">
                                
                            <label for="email">Order Status</label>
                            </div>
                            <div class="col-12">
                                
                            <select class="form-control-lg">
                                <option value="">select status</option>
                                <option value="pending">pending</option>
                                <option value="complete">complete</option>
                            </select>
                             </div>
                          </div>
                           
                        </div><br>

                     
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')
<script src="{{ URL::to('/admin') }}/assets/libs/jquery/jquery.min.js"></script>
<script src="{{ URL::to('/admin') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ URL::to('/admin') }}/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ URL::to('/admin') }}/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ URL::to('/admin') }}/assets/libs/node-waves/waves.min.js"></script>

<!-- Required datatable js -->
<script src="{{ URL::to('/admin') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ URL::to('/admin') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{{ URL::to('/admin') }}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ URL::to('/admin') }}/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{ URL::to('/admin') }}/assets/libs/jszip/jszip.min.js"></script>
<script src="{{ URL::to('/admin') }}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{ URL::to('/admin') }}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="{{ URL::to('/admin') }}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ URL::to('/admin') }}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ URL::to('/admin') }}/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="{{ URL::to('/admin') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ URL::to('/admin') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="{{ URL::to('/admin') }}/assets/js/pages/datatables.init.js"></script>    

<script src="{{ URL::to('/admin') }}/assets/js/app.js"></script>

 <script>
    var table = '';
    $(document).ready(function () {

        table = $('#exportexample1').DataTable({
            processing: true,
            responsive: true,
            serverSide: true,
            ajax: {
                "url": "{{ route('order-list') }}",
                "type": "get",
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'username', name: 'username'},
                {data: 'useremail', name: 'useremail'},
                {data: 'total', name: 'total'},
                {data: 'created_at', name: 'created_at'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            "fnDrawCallback": function () {
            }
        });
    });
    
    $(document).on('click','.statuschange',function(){
        var id = $(this).attr('id');
        $.ajax({
            url:'',
            type:'get',
            data:{id:id},
            success:function(res){
               
            }
        })
        $('#myModal').modal('show');
    })

</script>
@endsection
