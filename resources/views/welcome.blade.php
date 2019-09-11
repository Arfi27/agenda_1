<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AGENDA HARIAN</title>

    <link href="{{asset ('templates/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset ('templates/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{asset ('templates/css/plugins/iCheck/custom.css') }}" rel="stylesheet">

    <link href="{{asset ('templates/css/plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{asset ('templates/css/plugins/fullcalendar/fullcalendar.print.css') }}" rel='stylesheet' media='print'>

    <link href="{{asset ('templates/css/animate.css') }}" rel="stylesheet">
    <link href="{{asset ('templates/css/style.css') }}" rel="stylesheet">


{{-- css dalam head --}}
    <style type="text/css">
        #header{
            width:100%;
            background:#252525;
            position: fixed;
            z-index: 9999;
        }
#content{
    position:relative;
    padding-top:70px
}

#footer{
    position:relative;
    background:#000;
    height:40px;
    line-height:40px;
    color:#fff;
    text-align:center;
}

/*CONTENT SECTION*/
a.title{
    color:#f0f0f0; 
    font-weight:bold; 
    text-decoration:none; 
    font-size:30px; 
    line-height:60px; 
    padding:20px;
}
p{
    padding:.5em 1em;
    font-size:20px;
    text-align:justify;
}
    </style>




    </head>
    <body>

{{-- headernya --}}
    <div id="header">
        <a class="title">AGENDA HARIAN</a>
    </div>

        <br>

{{-- lingkungan websitenya --}}
<div id="content">
<div class="wrapper wrapper-content">
    <div class="row animated fadeInDown">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>JADWAL HARIAN</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <a href="#"><i class="fa fa-plus-square-o" ></i></a>
                                            <ul class="todo-list m-t small-list">

                                                <li>
                                                    <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                                    <span class="m-l-xs todo-completed">Rapat Dengan Klien</span>

                                                </li>
                                                <li>
                                                    <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                    <span class="m-l-xs">Menjenguk Orang</span>

                                                </li>
                                                <li>
                                                    <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                    <span class="m-l-xs">Mengirimkan Dokumen</span>
                                                    <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins</small>
                                                </li>
                                                <li>
                                                    <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                    <span class="m-l-xs">Pergi Ke Sekolah</span>
                                                </li>
                                                <li>
                                                    <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                                    <span class="m-l-xs todo-completed">Membeli Peralatan</span>
                                                </li>
                                                <li>
                                                    <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                    <span class="m-l-xs">Mengerjakan Pekerjaan</span>
                                                </li>
                                                <li>
                                                    <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                    <span class="m-l-xs">Menelepon Orang Untuk Rapat</span>
                                                </li>
                                            </ul>
                                        </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="ibox ">
                <div class="ibox-title">
                    <center><h3>KALENDAR</h3></center>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('templates/js/plugins/fullcalendar/moment.min.js') }}"></script>
<script src="{{asset('templates/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{asset('templates/js/popper.min.js') }}"></script>
    <script src="{{asset('templates/js/bootstrap.js') }}"></script>
<script src="{{asset('templates/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{asset('templates/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('templates/js/inspinia.js') }}"></script>
<script src="{{asset('templates/js/plugins/pace/pace.min.js') }}"></script>

<!-- jQuery UI  -->
<script src="{{asset('templates/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- iCheck -->
<script src="{{asset('templates/js/plugins/iCheck/icheck.min.js') }}"></script>

<!-- Full Calendar -->
<script src="{{asset('templates/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>

<script>
        /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
        });
</script>

<div id="footer">
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2018
                </div>
            </div>


</body>
</html>