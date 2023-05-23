@extends('layouts.app')
@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
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
 
    <!-- /.content -->
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        var baseUrl = "{{url('/')}}"
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

@endsection
