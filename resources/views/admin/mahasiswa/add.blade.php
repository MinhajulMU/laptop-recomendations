<!-- Signup modal content -->
<div id="tambah-mahasiswa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <h2 class=" text-center m-b-30">
                    Tambah Mahasiswa
                </h2>

                <form id="tambah-mahasiswa" data-table-target="table-mahasiswa"  class="form-horizontal" action="{{route('admin.mahasiswa.add')}}" method="POST">
                <fieldset id="fieldset">
                    <div class="form-group m-b-25">
                        <div class="col-12" id="message">
                            
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="username">Nama</label>
                            <input class="form-control" name="nama" type="text" id="name" required="" placeholder="Nama Lengkap">
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">NIM</label>
                            <input class="form-control" name="nim" type="text" id="email" required="" placeholder="NIM">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Fakultas</label>
                            <select name="fakultas" id="" class="form-control">
                                <option value="FMIPA">FMIPA</option>
                                <option value="FIP">FIP</option>
                                <option value="FBS">FBS</option>
                                <option value="FE">FE</option>
                                <option value="FIK">FIK</option>
                                <option value="FIS">FIS</option>
                                <option value="FH">FH</option>
                                <option value="FT">FT</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Prestasi</label>
                            <input class="form-control" name="prestasi" type="text" id="email" required="" placeholder="Prestasi">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Bahasa Asing</label>
                            <input class="form-control" name="bahasa_asing" type="text" id="email" required="" placeholder="Bahasa Asing">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                            <div class="col-12">
                                <label for="emailaddress">Prestasi</label>
                                <input class="form-control" name="prestasi" type="text" id="email" required="" placeholder="Prestasi">
                            </div>
                    </div>
                    <div class="form-group m-b-25">
                                <div class="col-12">
                                    <label for="emailaddress">Karya Ilmiah</label>
                                    <input class="form-control" name="karya_ilmiah" type="text" id="email" required="" placeholder="Karya Ilmiah">
                                </div>
                    </div>
                    <div class="form-group m-b-25">
                            <div class="col-12">
                                <label for="emailaddress">IPK</label>
                                <input class="form-control" name="ipk" type="text" id="email" required="" placeholder="IPK">
                            </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Indeks SKS</label>
                            <input class="form-control" name="indeks_sks" type="text" id="email" required="" placeholder="Indeks SKS">
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