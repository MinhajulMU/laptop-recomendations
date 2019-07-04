<!-- Signup modal content -->
<div id="tambah-mahasiswa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <h2 class=" text-center m-b-30">
                    Tambah Laptop Baru
                </h2>

                <form id="tambah-mahasiswa" data-table-target="table-mahasiswa"  class="form-horizontal" action="{{route('admin.laptop.add')}}" method="POST">
                <fieldset id="fieldset">
                    <div class="form-group m-b-25">
                        <div class="col-12" id="message">
                            
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="username">Company</label>
                            <input class="form-control" name="company" type="text" id="name" required="" placeholder="Company">
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Product</label>
                            <input class="form-control" name="product" type="text" id="email" required="" placeholder="Product">
                        </div>
                    </div>
                     <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Type Name</label>
                            <input class="form-control" name="typename" type="text" id="email" required="" placeholder="Type Name">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Inches</label>
                            <input class="form-control" name="inches" type="text" id="email" required="" placeholder="Inches">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                            <div class="col-12">
                                <label for="emailaddress">Screen Resolution</label>
                                <input class="form-control" name="screenresolution" type="text" id="email" required="" placeholder="Screen Resolution">
                            </div>
                    </div>
                    <div class="form-group m-b-25">
                                <div class="col-12">
                                    <label for="emailaddress">Cpu</label>
                                    <input class="form-control" name="cpu" type="text" id="email" required="" placeholder="Cpu">
                                </div>
                    </div>
                    <div class="form-group m-b-25">
                            <div class="col-12">
                                <label for="emailaddress">Ram</label>
                                <input class="form-control" name="ram" type="text" id="email" required="" placeholder="Ram">
                            </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Memory</label>
                            <input class="form-control" name="memory" type="text" id="email" required="" placeholder="Memory">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">GPU</label>
                            <input class="form-control" name="gpu" type="text" id="email" required="" placeholder="GPU">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Operating System </label>
                            <input class="form-control" name="operating_system" type="text" id="email" required="" placeholder="Operation System">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Weight</label>
                            <input class="form-control" name="weight" type="text" id="email" required="" placeholder="Weight">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Prices </label>
                            <input class="form-control" name="prices" type="text" id="email" required="" placeholder="Prices">
                        </div>
                    </div>
                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-12">
                            <button class="btn w-lg btn-rounded btn-primary waves-effect waves-light" type="submit">Tambah</button>
                        </div>
                    </div>
                </fieldset>
                </form>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->