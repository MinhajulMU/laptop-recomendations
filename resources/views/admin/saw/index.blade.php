@extends('layouts.admin')
@section('title')
    Data Laptop | Sitem Rekomendasi Laptop
@endsection
@section('content')
<br>
<div class="row">
    <div class="col-12">
        <div class="card-box">

            <h4 class="header-title m-t-0">Tambah Laptop</h4>
            @include('admin.laptop.lihat-laptop')
            @include('admin.laptop.add')
            {{-- @include('admin.user.edit-user') --}}


            <div class="button-list">
                <!-- Custom width modal -->
                <button type="button" class="btn btn-info waves-light waves-effect w-md" data-toggle="modal" data-target="#tambah-mahasiswa" data-table="#tabel-user"><i class="mdi mdi-library-plus"></i> Tambah Data</button>
            </div>
        </div>
    </div><!-- end col -->
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Daftar Laptop</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-mahasiswa" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Company</th>
                    <th>Product</th>
                    <th>CPU</th>
                    <th>Screen Resolution</th>
                    <th>Inches</th>
                    <th>Ram</th>
                    <th>Weight</th>
                    <th>Prices</th>
                    <th>Aksi</th>                                            
                </tr>
                </thead>


                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->
<!-- end row -->


@endsection
@push('scripts')
        <script type="text/javascript">
            function lihatLaptop(trigerer){
                    var tr = $(trigerer).parent().parent();
                    var modal = $(trigerer).data("target");
                    $(modal + " #company").html($("#table-mahasiswa").DataTable().row(tr).data().Company);
                    $(modal + " #product").html($("#table-mahasiswa").DataTable().row(tr).data().Product);
                    $(modal + " #typename").html("Type Name: " + $("#table-mahasiswa").DataTable().row(tr).data().TypeName);
                    $(modal + " #Inches").html("Inches: "+$("#table-mahasiswa").DataTable().row(tr).data().Inches);
                    $(modal + " #screenresolution").html("Screen Resolution: "+$("#table-mahasiswa").DataTable().row(tr).data().ScreenResolution);
                    $(modal + " #cpu").html("Cpu"+$("#table-mahasiswa").DataTable().row(tr).data().Cpu);
                    $(modal + " #ram").html("Ram"+$("#table-mahasiswa").DataTable().row(tr).data().Ram);
                    $(modal + " #memory").html("Memory"+$("#table-mahasiswa").DataTable().row(tr).data().Memory);
                    $(modal + " #gpu").html("GPU"+ $("#table-mahasiswa").DataTable().row(tr).data().Gpu);
                    $(modal + " #opsys").html("Operating System"+$("#table-mahasiswa").DataTable().row(tr).data().OpSys);
                    $(modal + " #weight").html("Weight"+$("#table-mahasiswa").DataTable().row(tr).data().Weight);
                    $(modal + " #price").html("Prices"+$("#table-mahasiswa").DataTable().row(tr).data().Price_euros);
                }
            // function editDataUser(trigerer){
            //         var tabel = $(trigerer).parent().data('table-target');
            //         var modal = $(trigerer).data('target');
            //         var tr =$(trigerer).parent().parent().parent();
            //         data = $("table#"+tabel).DataTable().row(tr).data();
            //         var form = modal+" form ";
            //         var role = JSON.parse(data.role_id);
            //         $(form+"input#name").val(data.name);
            //         $(form+"input#email").val(data.email);
            //         $(form+" input[type=checkbox]").prop("checked",false);
            //         role.forEach(role_id => {
            //             $(form+" input#role_"+role_id).prop("checked",true);
            //         });
            //         $(form+"input#id").val(data.id);
            //     }
            $(document).ready(function() {
                $("#table-mahasiswa").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('admin.laptop.index') !!}',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'Company',name :'Company'},
                        {data:'Product', name: 'Product'},
                        {data:'Cpu',name:'Cpu'},
                        {data:'ScreenResolution',name:'ScreenResolution'},
                        {data:'Inches',name:'Inches'},
                        {data:'Ram',name:'Ram'},
                        {data:'Weight',name:'Weight'},
                        {data:'Price_euros',name:'Price_euros'},
                        {data:'aksi',name: 'aksi',searchable:false,orderable: false}                        
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush