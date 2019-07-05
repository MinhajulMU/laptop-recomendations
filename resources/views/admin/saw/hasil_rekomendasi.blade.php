@extends('layouts.admin')
@section('title')
    Hasil Rekomendasi | Sitem Rekomendasi Laptop
@endsection
@section('content')
<br>
@include('admin.laptop.lihat-laptop')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Hasil Rekomendasi</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-mahasiswa" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Company</th>
                    <th>Product</th>
                    <th>Screen Resolution</th>
                    <th>Inches</th>
                    <th>Ram</th>
                    <th>Weight</th>
                    <th>Prices</th>
                    <th>Nilai Preferensi</th>
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
            function lihatLaptop(trigerer){
                    var tr = $(trigerer).parent().parent();
                    var modal = $(trigerer).data("target");
                    $(modal + " #company").html($("#table-mahasiswa").DataTable().row(tr).data().Company);
                    $(modal + " #product").html($("#table-mahasiswa").DataTable().row(tr).data().Product);
                    $(modal + " #typename").html("Type Name: " + $("#table-mahasiswa").DataTable().row(tr).data().TypeName);
                    $(modal + " #Inches").html("Inches: "+$("#table-mahasiswa").DataTable().row(tr).data().Inches);
                    $(modal + " #screenresolution").html("Screen Resolution: "+$("#table-mahasiswa").DataTable().row(tr).data().ScreenResolution);
                    $(modal + " #cpu").html("Cpu: "+$("#table-mahasiswa").DataTable().row(tr).data().Cpu);
                    $(modal + " #ram").html("Ram: "+$("#table-mahasiswa").DataTable().row(tr).data().Ram);
                    $(modal + " #memory").html("Memory: "+$("#table-mahasiswa").DataTable().row(tr).data().Memory);
                    $(modal + " #gpu").html("GPU: "+ $("#table-mahasiswa").DataTable().row(tr).data().Gpu);
                    $(modal + " #opsys").html("Operating System: "+$("#table-mahasiswa").DataTable().row(tr).data().OpSys);
                    $(modal + " #weight").html("Weight: "+$("#table-mahasiswa").DataTable().row(tr).data().Weight);
                    $(modal + " #price").html("Prices: "+$("#table-mahasiswa").DataTable().row(tr).data().Price_euros);
                }
            $(document).ready(function() {
                $("#table-mahasiswa").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('admin.saw.matrix_preferensi') !!}',
                    order:[8,'desc'],
                    columns:[
                        {data:'id', name: 'id',orderable: false,visible:false},
                        {data:'Company',name :'Company',orderable: false},
                        {data:'Product', name: 'Product',orderable: false},
                        {data:'ScreenResolution',name:'ScreenResolution',orderable: false},
                        {data:'Inches',name:'Inches',orderable: false},
                        {data:'Ram',name:'Ram',orderable: false},
                        {data:'Weight',name:'Weight',orderable: false},
                        {data:'Price_euros',name:'Price_euros',orderable: false},
                        {data:'nilai_preferensi',name:'nilai_preferensi'},
                        {data:'aksi',name: 'aksi',searchable:false,orderable: false}                       
                    ]
                });
            } );

        </script>
        @include("admin.script.form-modal-ajax")
@endpush