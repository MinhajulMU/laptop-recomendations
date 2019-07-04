<!-- Signup modal content -->
<div id="edit-user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <h2 class="text-uppercase text-center m-b-30">
                </h2>

                <form id="edit-user" data-table-target="table-user" class="form-horizontal" action="{{route('admin.user.update')}}" method="POST">
                <fieldset id="fieldset">
                    <div class="form-group m-b-25">
                        <div class="col-12" id="message">
                            
                        </div>
                    </div>
                    <input type="hidden" id="id" name="id">
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="username">Nama</label>
                            <input class="form-control" name="name" type="text" id="name" required="" placeholder="Nama Lengkap">
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Email</label>
                            <input class="form-control" name="email" type="email" id="email" required="" placeholder="Email Address">
                        </div>
                    </div>


                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Role</label><br>
                            @foreach ($role as $item)
                                <input type="checkbox" value="{{$item->id}}" type="form-control" id="role_{{$item->id}}" name="role[]"> {{$item->name}}
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress">Password</label><br>
                            <input type="password" name="" id="" disabled class="form-control">
                        </div>
                    </div>
                    

                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-12">
                            <button class="btn w-lg btn-rounded btn-primary waves-effect waves-light" type="submit">Update</button>
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