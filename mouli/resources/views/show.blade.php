<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>trying</title>
         
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
   

    </head>

    <body>

           {{-- start --}}
              <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      </div>
      <div class="modal-body">
                     <form id="addform">
                                <div class="form-group">
                                    <label for=""><b>USER TYPE :<span class="text-danger"> *</span></b></label>
                                    <select name="user" class="user form-control">
                                        <option value="">select</option>
                                        @foreach($ser as $use)
                                        <option value="{{$use->uid}}">{{ $use-> utype}}</option>
                                     @endforeach
                                  </select>
                                   <b><span class="text-danger" id="user"></b>

                                   </span>

                                </div>
                                <div class="form-group">
                                    <label for=""><b> FIRST NAME :<span class="text-danger"> *</span></b></label>
                                    <input type="text" name="name" placeholder="Enter your first name"
                                        class="finame form-control" id="fin"  autocomplete="off">
                                     <b><span class="text-danger" id="fnam">
                                          </span></b>
                                </div>
                                <div class="form-group">
                                    <label for=""><b>LAST NAME :<span class="text-danger">*</span></b></label>
                                    <input type="text" name="last_name" placeholder="Enter your last name"
                                        class="liname form-control" id="lin" 
                                        autocomplete="off">
                                         <b><span class="text-danger" id="lnam">
                                     </span></b>
                                </div>
                                <div class="form-group">
                                    <label for=""><b>DATE OF BIRTH :<span class="text-danger">*</span></b></label>
                                    <input type="date" name="dob" class="date form-control" 
                                        autocomplete="off">
                                         <b><span class="text-danger" id="date"></b>
                                     </span>

                                </div>
                                {{-- <div class="form-group">

                                    <label for=""><b>AGE:</b></label>
                                    <input type="number" name="age" id="ag" placeholder="Enter your age"
                                        autocomplete="off"  class="age form-control">
                                         <span class="text-danger" id="age">
                                     </span>

                                </div> --}}

                                <div class="form-group">
                                    <label for=""><b> GENDER :<span class="text-danger"> *</span></b></label>
                                    @foreach($gen as $gn)
                                    <input type="radio" name="gender" class="gender" id="ad_gen" value="{{$gn->gid}}">{{ $gn->
                                    genders}}
                                    @endforeach
                                     <b><span class="text-danger" id="gend">
                                     </span></b>

                                </div>

                                <div class="form-group">
                                    <label for=""><b> EMAIL :<span class="text-danger"> *</span></b></label>
                                    <input type="email" name="email" placeholder="Enter your Email address"
                                 id="emai" autocomplete="off" class="email form-control">
                                  <b><span class="text-danger" id="ema">
                                     </span></b>

                                </div>
                                <div class="form-group">
                                    <label for=""><b>PASSWORD :<span class="text-danger"> *</span></b></label>
                                    <input type="password" name="password" placeholder="Enter your password"
                                         class=" password form-control" id="pas"
                                        autocomplete="off">
                                        <b><span class="text-danger" id="pass">
                                     </span></b>

                                </div>
                                <div class="form-group">
                                    <label for=""><b>CONFIRM PASSWORD :<span class="text-danger"> *</span></b></label>
                                    <input type="password" name="password_confirmation"
                                        placeholder="Enter your password" 
                                        class=" cpassword form-control" id="cpas" autocomplete="off">
                                        <b><span class="text-danger" id="cpass">
                                     </span></b>

                                </div>
                                <div class="form-group">
                                    <label for=""><b>PHONE NUMBER :<span class="text-danger"> *</span></b></label>
                                    <input type="tel" name="phoneno" placeholder="Enter your 10 digit mobile number"
                                        class="phone form-control" id="phone">
                                        <b><span class="text-danger" id="ph">
                                     </span></b>

                                </div>
                                <div class="form-group">
                                    <label for=""><b>STATE :<span class="text-danger"> *</span></b></label>
                                    <select name="state" class="state form-control">
                                        <option value="">select</option>
                                        @foreach($sta as $st)
                                        <option value="{{$st->sid}}">{{$st->staten}}</option>
                                        @endforeach
                                       </select>
                                         <b><span class="text-danger" id="sta">
                                     </span></b>

                                </div>
                                <div class="form-group">
                                    <b>ADDRESS :<span class="text-danger"> *</span></b>
                                    <br><textarea name="address" class="address form-control"  cols="50"
                                        rows="3"></textarea>
                                        <b><span class="text-danger" id="add">
                                     </span></b>

                                </div>
                                {{-- <div class="form-group">
                                    <input type="checkbox" name="checkbox" id="ch" class="check">I hereby
                                    declare that all the above
                                    informtion given by me are true and correct.
                                 <br> <b><span class="text-danger" id="chk">
                                     </span></b>
                                </div> --}}


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger add_cl" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary adduser">Submit</button>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
                {{-- end adding --}}




<!-- Modal -->
<div class="modal fade" id="edit_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Alert</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      </div>
      <div class="modal-body">
           <input type="hidden" name="" id="editid">
          <h4> Are you sure?want to edit </h4>
        ...
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-danger edit_no" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary edit_yes">YES</button>
      </div>
    </div>
  </div>
</div>





                {{-- start for editing --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </div>
              <div class="modal-body">
                  <form id="editform">
                                <input type="hidden" name="" id="updteid">

                                <div class="form-group">
                                    <label for=""><b>USER TYPE :<span class="text-danger"> *</span></b></label>
                                    <select name="user" class="user form-control" id="edit_us">
                                        <option value="">select</option>
                                        @foreach($ser as $use)
                                        <option value="{{$use->uid}}">{{ $use-> utype}}</option>
                                        @endforeach
                                    </select>
                                    <b><span class="text-danger" id="usr"></b>

                                   </span>
                                </div>
                                <div class="form-group">
                                    <label for=""><b> FIRST NAME :<span class="text-danger"> *</span></b></label>
                                    <input type="text" name="name" placeholder="Enter your first name"
                                        class="finame form-control" id="edit_fn" autocomplete="off">
                                        <b><span class="text-danger" id="fnm">
                                          </span></b>

                                </div>
                                <div class="form-group">
                                    <label for=""><b>LAST NAME :<span class="text-danger"> *</span></b></label>
                                    <input type="text" name="last_name" placeholder="Enter your last name"
                                        class="liname form-control" id="edit_ln" autocomplete="off">
                                        <b><span class="text-danger" id="lnm">
                                          </span></b>
                                </div>
                                <div class="form-group">
                                    <label for=""><b>DATE OF BIRTH :<span class="text-danger"> *</span></b></label>
                                    <input type="date" name="dob" id="edit_dob" class="date form-control"
                                        autocomplete="off">
                                        <b><span class="text-danger" id="db">
                                          </span></b>

                                </div>

                           
                                <div class="form-group">
                                    <label for=""><b> GENDER :<span class="text-danger"> *</span></b></label>
                                    @foreach($gen as $gn)
                                   {{$gn->genders}} <input type="radio" name="gender" class="gender" id="edit_gen" value="{{$gn->gid}}">
    
                                    @endforeach
                                    <b><span class="text-danger" id="gnd">
                                     </span></b>

                            </div>

                            <div class="form-group">
                                <label for=""><b> EMAIL :<span class="text-danger"> *</span></b></label>
                                <input type="email" name="email" placeholder="Enter your Email address"
                                    class="email form-control" id="edit_email" autocomplete="off">
                                    <b><span class="text-danger" id="eml">
                                          </span></b>

                            </div>
                            <div class="form-group">
                                <label for=""><b>PASSWORD :<span class="text-danger"> *</span></b></label>
                                <input type="password" name="password" placeholder="Enter your password"
                                    class=" password form-control" id="edit_pass" autocomplete="off">
                                    <b><span class="text-danger" id="pss">
                                          </span></b>

                            </div>
                            <div class="form-group">
                                <label for=""><b>CONFIRM PASSWORD :<span class="text-danger"> *</span></b></label>
                                <input type="password" name="password_confirmation" placeholder="Enter your password"
                                    class=" cpassword form-control" id="edit_cpass" autocomplete="off">
                                    <b><span class="text-danger" id="cpss">
                                          </span></b>

                            </div>
                            <div class="form-group">
                                <label for=""><b>PHONE NUMBER :<span class="text-danger"> *</span></b></label>
                                <input type="tel" name="phoneno" placeholder="Enter your 10 digit mobile number"
                                    class="phone form-control" id="edit_ph">
                                    <b><span class="text-danger" id="phn">
                                          </span></b>

                            </div>
                            <div class="form-group">
                                <label for=""><b>STATE :<span class="text-danger"> *</span></b></label>
                                <select name="state" class="state form-control" id="edit_st">
                                    <option value="">select</option>
                                    @foreach($sta as $st)
                                    <option value="{{$st->sid}}">{{ $st-> staten}}</option>
                                    @endforeach

                                </select><b><span class="text-danger" id="stt">
                                          </span></b>


                            </div>
                            <div class="form-group">
                                <b>ADDRESS :<span class="text-danger"> *</span></b>
                                <br><textarea name="address" class="address form-control" id="edit_address" cols="50"
                                    rows="3"></textarea>
                                    <b><span class="text-danger" id="adr">
                                          </span></b>

                            </div>
                           
                             {{-- <div class="form-group">
                                    <input type="checkbox" name="checkbox" id="edit_ch" class="check" checked>I hereby
                                    declare that all the above
                                    informtion given by me are true and correct.

                                </div> --}}


                            </div>
                        <div class="modal-footer">
                                 <button type="button" class="btn btn-danger up_no" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary updateuser">Update</button>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
                {{-- end --}}





<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Alert</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      </div>
      <div class="modal-body">
          <input type="number" name="" id="deleteid" readonly>
          <h4> Are you sure?want to delete this ID</h4>
       
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-danger delete_no" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary delete_yes">YES</button>
      </div>
    </div>
  </div>
</div>



                {{-- delete --}}

<div class="modal fade" id="status_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">status</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      </div>
      <div class="modal-body">
           <input type="" name="" id="stid" readonly>      
          <h4> Are you sure?want to update status </h4>
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger st_no" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary st_yes">YES</button>
      </div>
    </div>
  </div>
</div>



                {{-- //status --}}

            
                    <div class="ml-5 mt-3 mr-5 mb-5">
                        <button type="button" class="btn btn-primary btn-sm add" data-toggle="modal">
                            ADD NEW USER
                        </button><br><br>
                        <div class="table-data mt-2">
                            <table id="data" class="table table-bordered table-hover text-center table-sm" width="50%">
                                <thead class="table-primary text-center">
                                    <tr>
                                        <th>SL.No</th>
                                        <th>ID</th>
                                        <th>USER TYPE</th>
                                        <th>NAME</th>
                                        <th>LAST NAME</th>
                                        <th>DOB</th>
                                        <th>GENDER</th>
                                        <th>EMAIL</th>
                                        <th>PHONE NUMBER</th>
                                        <th>STATE</th>
                                        <th>ADDRESS</th>
                                        <th>EDIT</th>
                                        <th>DELETE</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    
                     
                 



                
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
                    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

                  <script>
                 $(document).ready(function(){                    
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                var datatable = $('#data').DataTable({
                      processing:true,
                      serverSide:true,
                      ajax:'/datatable',
                      columns:[{ data:'DT_RowIndex',name:'DT_RowIndex', orderable:false,searchable:false,},
                          {data:'id',name:'id'},
                          {data:'mergeuser.utype',name:'user'},
                          {data:'name',name:'name'},
                          {data:'last_name',name:'last_name'},
                          {data:'dob',name:'dob'},
                          {data:'mergegender.genders',name:'gender'},
                          {data:'email',name:'email'},
                          {data:'phoneno',name:'phoneno'},
                          {data:'mergestate.staten',name:'state'},
                           {data:'address',name:'address'},
                           {data:'edit',name:'edit',orderable:false, searchable:false,},
                           {data:'delete',name:'delete',orderable:false, searchable:false,},
                           {data:'status',name:'status',orderable:false, searchable:false,}


                      ]

                  });
                   
                  
                          function clearError()
                          {
                                    $('#user').text('');
                                    $('#fnam').text('');
                                    $('#lnam').text('');
                                    $('#date').text('');
                                    $('#ema').text('');
                                    $('#gend').text('');
                                    $('#pass').text('');
                                    $('#cpass').text('');
                                    $('#ph').text('');
                                    $('#sta').text('');
                                    $('#add').text('');
                                    
                          };

                           function clearUpdate()
                           {
                                         $('#usr').text('');
                                         $('#fnm').text('');
                                         $('#lnm').text('');
                                         $('#db').text('');
                                         $('#eml').text('');
                                         $('#gnd').text('');
                                         $('#pss').text('');
                                         $('#cpss').text('');
                                         $('#phn').text('');
                                         $('#stt').text('');
                                         $('#adr').text('');

                           };


                       
                             $(document).on('click', '.add', function (e) {
                                 e.preventDefault();
                                 $('#addModal').modal('show');

                             });
                             $(document).on('click', '.add_cl', function (e) {
                                 e.preventDefault();
                                 $('#addModal').modal('hide');

                             });

                            $(document).on('click', '.adduser', function (e) {
                                e.preventDefault();
                                        clearError();
                              
                                var data = {
                                    'user': $('.user').val(),
                                    'name': $('#fin').val(),
                                    'last_name': $('#lin').val(),
                                    'dob': $('.date').val(),
                                    'gender': $('#ad_gen:checked').val(),
                                    'email': $('#emai').val(),
                                    'password': $('#pas').val(),
                                    'password_confirmation': $('#cpas').val(),
                                    'phoneno': $('#phone').val(),
                                    'state': $('.state').val(),
                                    'address': $('.address').val(),
                                  
                                    
                                }
                                // console.log(data);

                                $.ajax({
                                    type: "post",
                                    url: "/store",
                                    data: data,
                                    // dataType:"json",
                                    success:function (response) {
                                        // console.log(response);
                                        // $('#success_m').text(response.message);

                                       $('#addModal').modal('hide');
                                       $('#addform')[0].reset();
                                        clearError();
                                        $('#data').DataTable().ajax.reload();

                                      const succ = Swal.mixin({
                                            toast:true,
                                            position: 'inherit',
                                            icon: 'success',
                                            showConfirmButton: false,
                                            timer: 1500
                                            })
                                         succ.fire({ 
                                            icon: 'success',
                                            title: 'Data added successfully',
                                            })
                                
                                    },
                                    error:function(err){
                                    // console.log('inside errr');
                                    console.log(err);
                                        clearError();
                                    
                                    // console.log(err.responseJSON.errors.user);
                                    $('#user').text(err.responseJSON.errors.user);
                                    $('#fnam').text(err.responseJSON.errors.name);
                                    $('#lnam').text(err.responseJSON.errors.last_name);
                                    $('#date').text(err.responseJSON.errors.dob);
                                    $('#ema').text(err.responseJSON.errors.email);
                                    $('#gend').text(err.responseJSON.errors.gender);
                                    $('#pass').text(err.responseJSON.errors.password);
                                    $('#cpass').text(err.responseJSON.errors.password_confirmation);
                                    $('#ph').text(err.responseJSON.errors.phoneno);
                                    $('#sta').text(err.responseJSON.errors.state);
                                    $('#add').text(err.responseJSON.errors.address);
                                    // $('#chk').text(err.responseJSON.errors.checkbox);
             

                                    }
                                });

                            });

                            //edit................
                            $(document).on('click', '.edit_u', function (e) {
                                e.preventDefault();
                                var editid = $(this).attr('id');
                                console.log(editid);
                                $('#editid').val(editid);
                                $('#edit_Modal').modal('show');

                            });
                             // console.log(editid);
                              $(document).on('click', '.edit_no', function (e) {
                                e.preventDefault();
                                 $('#edit_Modal').modal('hide');

                              });
                            $('.edit_yes').click (function (e) {
                               e.preventDefault();
                                var editid=$('#editid').val();
                                 $('#edit_Modal').modal('hide');
                                $('#editModal').modal('show');
                               
                                $.ajax({
                                    type: "get",
                                    url: "/edituser/" + editid,
                                    success: function (response) {

                                         console.log(response);
                                        $('#updteid').val(response.poste.id);
                                        $('#edit_us').val(response.poste.user);
                                        $('#edit_fn').val(response.poste.name);
                                        $('#edit_ln').val(response.poste.last_name);
                                        $('#edit_dob').val(response.poste.dob);
                                        $('#edit_age').val(response.poste.age);
                                        // $('#edit_gen').val(response.poste.gender);
                                        let gend=response.poste.gender;
                                        $("input[name=gender][value=" +gend+"]").attr('checked','checked');
                                        $('#edit_email').val(response.poste.email);
                                        $('#edit_pass').val(response.poste.password);
                                        $('#edit_cpass').val(response.poste.cpassword);
                                        $('#edit_ph').val(response.poste.phoneno);
                                        $('#edit_st').val(response.poste.state)
                                        $('#edit_address').val(response.poste.address);
                                        // console.log();

                                    },error:function(err){
                                        console.log(err);
                                    }

                                });
                            });


                            //update.................

                             $(document).on('click', '.up_no', function (e) {
                                e.preventDefault();
                                 $('#editModal').modal('hide');
                             });
                            $(document).on('click', '.updateuser', function (e) {
                                e.preventDefault();
                                var upid = $('#updteid').val();
                                var data = {
                                    'user': $('#edit_us').val(),
                                    'name': $('#edit_fn').val(),
                                    'last_name': $('#edit_ln').val(),
                                    'dob': $('#edit_dob').val(),
                                    'gender': $('#edit_gen:checked').val(),
                                    'email': $('#edit_email').val(),
                                    'password': $('#edit_pass').val(),
                                    'password_confirmation': $('#edit_cpass').val(),
                                    'phoneno': $('#edit_ph').val(),
                                    'state': $('#edit_st').val(),
                                    'address': $('#edit_address').val(),

                                }
                                console.log(data);


                                $.ajax({
                                    type: "post",
                                    url: "/updateuser/" + upid,
                                    data: data,
                                    success: function (response) {
                                        // $('#success_m').text(response.message);

                                        $('#editModal').modal('hide');
                                        $('#editform')[0].reset();
                                          clearUpdate();
                                         $('#data').DataTable().ajax.reload();
                                          const suc = Swal.mixin({
                                            toast:true,
                                            position: 'inherit',
                                            icon: 'success',
                                            showConfirmButton: false,
                                            timer: 1500
                                            })
                                         suc.fire({ 
                                            icon: 'success',
                                            title: 'Data updated successfully',
                                            })


                                    },
                                    error:function(err){
                                        // console.log(err);
                                         clearUpdate();
                                         $('#usr').text(err.responseJSON.errors.user);
                                         $('#fnm').text(err.responseJSON.errors.name);
                                         $('#lnm').text(err.responseJSON.errors.last_name);
                                         $('#db').text(err.responseJSON.errors.dob);
                                         $('#eml').text(err.responseJSON.errors.email);
                                         $('#gnd').text(err.responseJSON.errors.gender);
                                         $('#pss').text(err.responseJSON.errors.password);
                                         $('#cpss').text(err.responseJSON.errors.password_confirmation);
                                         $('#phn').text(err.responseJSON.errors.phoneno);
                                         $('#stt').text(err.responseJSON.errors.state);
                                         $('#adr').text(err.responseJSON.errors.address);



                                    }

                                });


                            });

                            $(document).on('click', '.delete_u', function (e) {
                                e.preventDefault();
                                var delid = $(this).attr('id');
                                console.log(delid);
                                $('#deleteid').val(delid);
                                $('#deleteModal').modal('show');
                            });
                            $(document).on('click','.delete_no',function(e){
                                e.preventDefault();
                                 $('#deleteModal').modal('hide');
                            });
                            $('.delete_yes').click (function (e) {
                              
                                e.preventDefault();
                                var delid=$('#deleteid').val();
                           
                                $.ajax({
                                    type: "get",
                                    url: "/delete/" + delid,
                                    success: function (response) {
                                        // $('#success_m').text(response.message);
                                        $('#deleteModal').modal('hide');
                                       $('#data').DataTable().ajax.reload();
                                         const del = Swal.mixin({
                                            toast:true,
                                            position: 'inherit',
                                            icon: 'success',
                                            showConfirmButton: false,
                                            timer: 2500
                                            })
                                         del.fire({ 
                                            icon: 'success',
                                            title: 'Data deleted successfully',
                                            })

                                    },
                                    error: function (err) {
                                        console.log("inside err....");
                                        console.log(err);
                                    }
                                });
                            });

                            $(document).on('click','.st_u',function(e){
                               e.preventDefault();
                               var statid=$(this).attr('id');
                               console.log(statid);
                               $('#stid').val(statid);
                               $('#status_Modal').modal('show');
                             });
                             $(document).on('click','.st_no',function(e){
                                 e.preventDefault();
                                $('#status_Modal').modal('hide');

                             });
                            $('.st_yes').click (function (e) {
                                e.preventDefault();
                                var statid=$('#stid').val();
                             
                                $('#status_Modal').modal('hide');

                            $.ajax({
                                   type:"get",
                                   url:"/status/"+statid,
                                   success:function(response){
                                       $('#data').DataTable().ajax.reload();
                                       const stat = Swal.mixin({
                                          toast:true,
                                            position: 'inherit',
                                            icon: 'success',
                                            showConfirmButton: false,
                                            timer: 2500
                                            })
                                         stat.fire({ 
                                            icon: 'success',
                                            title: 'status updated successfully',
                                            })
                                   },
                                   error:function(err){
                                       console.log(err);
                                   }
                               });
                             });
                         });

    

                    </script>
                
    </body>

    </html>