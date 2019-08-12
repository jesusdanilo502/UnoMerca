@extends('layouts.layoutEmpresa')
@section('title','Administracion')
@section('active1','active')
@section('content')

        <!-- deader -->
        <section class="content-header">
            <h1>
                {{session('nombre')}}
                <small>estadisticas</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Principal</a></li>
                <li class="active">Inicio</li>
            </ol>
        </section>

        <!-- etiquetas -->
        <section class="content">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="ion ion-android-alert"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">PLANEAR</span>
                            <span class="info-box-number">90<small>%</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="ion ion-android-archive"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">HACER</span>
                            <span class="info-box-number">41%</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="ion ion-android-bookmark"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">VERIFICAR</span>
                            <span class="info-box-number">76%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-albums-outline"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">ACTUAR</span>
                            <span class="info-box-number">20%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="col-md-12">
                <div class="box box-info border-empresa">
                    <div class="box-header with-border">
                        <h3 class="box-title">Procesos en desarrollo</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                    <th>puntaje</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="#">12345</a></td>
                                    <td>descripcion actividad</td>
                                    <td><span class="label label-danger">urgente</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">10%</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">12345</a></td>
                                    <td>descripcion actividad</td>
                                    <td><span class="label label-danger">urgente</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">10%</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">12345</a></td>
                                    <td>descripcion actividad</td>
                                    <td><span class="label label-danger">urgente</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">10%</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">12345</a></td>
                                    <td>descripcion actividad</td>
                                    <td><span class="label label-warning">en espera</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20">60%</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">12345</a></td>
                                    <td>descripcion actividad</td>
                                    <td><span class="label label-warning">en espera</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20">60%</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">12345</a></td>
                                    <td>descripcion actividad</td>
                                    <td><span class="label label-warning">en espera</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20">60%</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">12345</a></td>
                                    <td>descripcion actividad</td>
                                    <td><span class="label label-success">terminado</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f56954" data-height="20">90%</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">12345</a></td>
                                    <td>descripcion actividad</td>
                                    <td><span class="label label-success">terminado</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f56954" data-height="20">90%</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">12345</a></td>
                                    <td>descripcion actividad</td>
                                    <td><span class="label label-success">terminado</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f56954" data-height="20">90%</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Ver todas</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
            <div class="col-md-12">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Planear</span>
                        <span class="info-box-number">5,200</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                    Breve descripción
                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Hacer</span>
                        <span class="info-box-number">92,050</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 20%"></div>
                        </div>
                        <span class="progress-description">
                   Breve descripción
                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Verificar</span>
                        <span class="info-box-number">114,381</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                   Breve descripción
                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-aqua">
                    <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Actuar</span>
                        <span class="info-box-number">163,921</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                        <span class="progress-description">
                    Breve descripción
                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
        </section>









@endsection
