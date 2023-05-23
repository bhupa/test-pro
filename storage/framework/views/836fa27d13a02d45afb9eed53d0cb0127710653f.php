<?php $__env->startSection('content'); ?>
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
                            
                            <div class="card card-body card-primary">
                                
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
                                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile No">

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


                            
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="contact-info-btn" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function() {
        var baseUrl = "<?php echo e(url('/')); ?>"
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
        });
        $(document).on('click', '#contact-info-btn', function() {


            var form = document.getElementById('contact-info-form');
            var formData = new FormData(form);

            // Handle any errors that occur during the Ajax request
            var name = $('#name').val();
            var type = $('#type').val();
            var id = $('#subject-id').val();
            var url = $('#url').val();

            if (type == 'edit') {
                add(url, formData, 'POST');
            } else {

                add(url, formData, 'POST');
            }

        })


    })

    function add(url, formData, method) {
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

                $('#createCountry').modal('hide');
                $('#country-from')[0].reset();
            }
            , error: function(response) {
                
                var errors = response.responseJSON.errors;
                $.each(errors, function(field, messages) {
                    $.each(messages, function(index, message) {
                        console.log(field, index, message);
                        $('#' + field).parent().append('<span class="text-danger">' + message + '</span>'); {
                            {
                                --$('input[name="' + field + '"]').parent().append('<span class="text-danger">' + message + '</span>');
                                --
                            }
                        }
                    });
                });
            }
        });

    }

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/sraj/Sites/test-pro/resources/views/home.blade.php ENDPATH**/ ?>