<script>
            function getFormSelectorAndData(trigerer){
                var tabel = $(trigerer).parent().data('table-target');
                var modal = $(trigerer).data('target');
                var tr =$(trigerer).parent().parent().parent();
                data = $("table#"+tabel).DataTable().row(tr).data();
                var form = "form"+modal+" ";
                return {'form':form,'data':data}
            }
                function hapusData(trigerer){
                    var tabel = $(trigerer).parent().data('table-target');
                    var modal = $(trigerer).data('target');
                    var tr = $(trigerer).parent().parent().parent();
                    Swal({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Delete'
                        }).then((result) => {
                            console.log(result);
                            if (result.value) {
                                $.ajax({
                                    type: "POST",
                                    url: $(trigerer).data("url"),
                                    data: {'id':tr.attr('id')},
                                    dataType: "json",
                                    success: function (response) {
                                        if(response.ok){
                                            $("#"+tabel).DataTable().ajax.reload(null,false);
                                            Swal(
                                                'Deleted!',
                                                response.msg,
                                                'success'
                                            )
                                        }else{
                                            Swal(
                                                'Error!',
                                                response.msg,
                                                'error'
                                            )
                                        }
                                    },
                                    error: function(){
                                        Swal(
                                                'Error!',
                                                'There\'s Something error!',
                                                'error'
                                            )
                                    }
                                });
                                
                            }
                        })
                       
                }

            

$(document).ready(function(ev){
                function setMsg(target,msg){
                    $("form#"+target+" #message").html(msg);
                }
                const clearMsg = (target) => {
                    setMsg(target,"");
                }

                const errorMsg = (msg) => {
                    return `<div class="alert alert-danger" role="alert">`+msg+`</div>`
                }

                
                $("form").on("submit", function (ev) {
                    ev.preventDefault();
                    let form = $(this);
                    let fieldset = $(this).find("#fieldset");
                    var postData = new FormData(this);
                    var fId = $(this).attr('id');
                    console.log("fID ",fId);
                    var tabel = $(this).data('table-target');
                    var no_reset = $(this).data('no-reset') !== undefined ? $(this).data('no-reset') : false;
                    $.ajax({
                        type: "POST",
                        url: $(this).attr("action"),
                        data: postData,
                        processData: false,
                        contentType: false,
                        dataType: "json",
                        beforeSend:function(){
                            fieldset.prop("disabled",true);
                        },
                        success: function (response) {
                            if(response.no_timer == undefined){
                                response.no_timer = false;
                            }
                            if(response.stored){
                                Swal({
                                    type: 'success',
                                    html: response.msg,
                                    title: "Success",
                                    showConfirmButton: false,
                                    timer: response.no_timer ? null : 1500
                                })
                                $("table#"+tabel).DataTable().ajax.reload( null, false );
                                var timer = setInterval(() => {
                                    if(no_reset == false) form.trigger("reset");
                                    $('#'+fId).modal('hide');
                                    
                                    clearInterval(timer);
                                }, 1000);
                                if(no_reset == false) $(form).trigger("reset");
                            }  else{
                                Swal({
                                    type: 'error',
                                    title: 'Error',
                                    html: response.msg,
                                    showConfirmButton: false,
                                    timer: response.no_timer ? null : 1500
                                })
                            }
                        },
                        error: function(textStatus, errorThrown){
                            Swal({
                                type: 'error',
                                title: "Ada kesalahan,Silahkan input Ulang",
                                showConfirmButton: false,
                                timer: 1500
                            })
                        },
                        complete:function(){
                            
                            fieldset.prop("disabled",false);
                        }
                    });
                });

                
                ;
                $('.modal').on('shown.bs.modal', function (event) {
                    var triggerElement = $(event.relatedTarget);
                    var table = triggerElement.parent().data('table-target');
                    //clearMsg(table);
                })
});
                </script>