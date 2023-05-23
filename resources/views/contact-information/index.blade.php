@extends('layouts.app')
@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Projects</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="javascript:void(0)" class="btn btn-sm btn-primary" id="create-new-info">Create New</a></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-3">
                <table class="table table-striped projects" id="data-cotact-informations">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Contact
                            </th>
                            <th>
                                Address
                            </th>
                            <th>
                                Gender
                            </th>

                            <th>
                                Nationality
                            </th>
                            <th>
                                Qualification
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                              AdminLTE v3
                          </a>
                          <br/>
                          <small>
                              Created 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                              </div>
                          </div>
                          <small>
                              57% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr> --}}

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="contact-info" aria-modal="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title subject-type-title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" class="form" id="contact-info-form">
                            {{-- <input type="hidden" name="_token" value="Ymn2uZbD8IiwCW0DOt4Mv8QPDmidv7RQkBEmvZbO"> --}}
                            @csrf
                            <div class="card card-body card-primary">
                                {{-- <h5 class="font-weight-bolder text-dark pb-2">Plan Information</h5> --}}
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="name" class="col-form-label font-weight-bold"> Name <span class="required">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">

                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-form-label font-weight-bold"> Email <span class="required">*</span></label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">

                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-form-label font-weight-bold"> Contact <span class="required">*</span></label>
                                            <input type="number" class="form-control" id="mobile" name="mobile" min="0" placeholder="Mobile No">

                                        </div>
                                         <div class="form-group">
                                            <label for="name" class="col-form-label font-weight-bold"> Address <span class="required">*</span></label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Address">

                                        </div>
                                         <input type="hidden" class="form-control" id="type" >
                                        <div class="form-group">
                                            <label for="name" class="col-form-label font-weight-bold"> DOB <span class="required">*</span></label>
                                            <input type="text" class="form-control" onfocus="(this.type = 'date')"  id="dob" name="dob" placeholder="Date of Birth">
                                            

                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-form-label font-weight-bold"> Gender <span class="required">*</span></label>

                                            <select class="form-control" id="gender" name="gender">
                                                <option>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Others">Others</option>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-form-label font-weight-bold"> Qualification <span class="required">*</span></label>

                                            <select class="form-control" name="qualification" id="qualification">
                                                <option>Select Qualification</option>
                                                <option value="Slc">Slc</option>
                                                <option value="Plus Two">Plus Two</option>
                                                <option value="Bachelor Degree">Bachelor Degree</option>
                                                <option value="Plus Two">Plus Two</option>
                                                <option value="Bachelor Degree">Bachelor Degree</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-form-label font-weight-bold"> Nationality <span class="required">*</span></label>
                                            <input type="text" class="form-control" id="nationality" name="nationality" value="" placeholder="Nationality">

                                        </div>

                                    </div>

                                </div>
                            </div>


                            {{-- </form> --}}
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="contact-info-btn" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        var baseUrl = "{{route('contact-informations.index')}}"
        $('#data-cotact-informations').DataTable({
            processing: true
            , serverSide: true
            , ajax: baseUrl
            , orderable: true
            , columns: [{
                    data: 'DT_RowIndex'
                    , name: 'DT_RowIndex'
                }
                , {
                    data: 'name'
                    , name: 'name'
                }
                , {
                    data: 'email'
                    , name: 'email'
                }
                , {
                    data: 'mobile'
                    , name: 'mobile'
                },

                {
                    data: 'address'
                    , name: 'address'
                }
                , {
                    data: 'gender'
                    , name: 'gender'
                }
                , {
                    data: 'nationality'
                    , name: 'nationality'
                }
                , {
                    data: 'qualification'
                    , name: 'qualification'
                }
                , {
                    data: 'action'
                    , name: 'action'
                },

            ]
        });




        $(document).on('click', '#create-new-info', function(ev) {
            ev.preventDefault();
            $('.modal-title').text('Add New Contact Info');
            $('#type').val('create');
           
            $('#contact-info').modal('show');
            
             $('#contact-info-form').append('<input type="hidden" id="url"  value="'+'{{ route('contact-informations.store')}}'+'" />');
        });
        $(document).on('click', '.contact-edit', function(ev) {
            ev.preventDefault();
            $('.modal-title').text('Edit Contact Info');
            $('#url').remove();
             $('#name').val($(this).attr('data-name'));
            $('#email').val($(this).attr('data-email'));
            $('#mobile').val($(this).attr('data-mobile'));
            $('#dob').val($(this).attr('data-dob'));
            $('#nationality').val($(this).attr('data-nationality'));
            $('#address').val($(this).attr('data-address'));
            $('#gender').val($(this).attr('data-gender'));
            $('#qualification').val($(this).attr('data-qualification'));
            $('#type').val('edit');
              var mt = '@method('put ')';
             $('#contact-info-form').append('<input type="hidden" id="url"  value="'+$(this).attr('data-url')+'" />');
            $('#contact-info-form').append('<input type="hidden" id="id" name="id" value="'+$(this).attr('data-id')+'" />');
            $('#contact-info-form').append(mt);
            $('#contact-info').modal('show');
        });
 

        $(document).on('click','#contact-info-btn', function(e) {
          e.preventDefault();
        e.stopPropagation();
            var form = document.getElementById('contact-info-form');
            var formData = new FormData(form);
                 var url = $('#url').val();
                add(url, formData, 'POST');
        })

   $("body").on('click', '.contact-info-delete', function(event) {
        var url = $(this).attr('data-url');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: url
            , type: 'DELETE'
            , dataType: 'json'
            , data: {
                "_token": "{{ csrf_token() }}"
            }
            , success: function(data) {
                $('#data-cotact-informations').DataTable().draw();
                // your success logic here
            }
            , error: function(data) {
                console.log('Error:', data);
                // your error logic here
            }
        });
    });

    })

    function add(url, formData, method) {
        $('.text-danger').remove();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: url
            , type: method
            , data: formData
            , processData: false
            , contentType: false
            , success: function(response) {
                $('#data-cotact-informations').DataTable().draw();

                $('#contact-info').modal('hide');
                $('#contact-info-form')[0].reset();
            }
            , error: function(response) {
                
                var errors = response.responseJSON.errors;
                $.each(errors, function(field, messages) {
                    $.each(messages, function(index, message) {
                        console.log(field, index, message);
                        $('#' + field).parent().append('<span class="text-danger">' + message + '</span>'); {
                            
                        }
                    });
                });
            }
        });
       
    }
    

</script>

@endsection
