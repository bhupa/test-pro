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
                <h3 class="card-title">Contact Informations &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('contact-informations.index')}}" class="btn btn-sm btn-primary" id="create-new-info">Add Contact</a></h3>

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
                                DOB
                            </th>

                            <th>
                                Nationality
                            </th>
                            <th>
                                Qualification
                            </th>
                           
                        </tr>
                    </thead>
                    <tbody>
                      
                        @foreach($data as $key=>$dt)
                         <tr>
                          <td>{{  $key+1  }}</td>
                           <td>{{ $dt[0] }}</td>
                           <td>{{ $dt[1] }}</td>
                           <td>{{ $dt[2] }}</td>
                           <td>{{ $dt[3] }}</td>
                           <td>{{ $dt[5] }}</td>
                           <td>{{ $dt[4] }}</td>
                           <td>{{ $dt[7] }}</td>
                           <td>{{ $dt[6] }}</td>
                          
                         </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
      
    </section>
    <!-- /.content -->
</div>
@endsection
@section('js')


@endsection
