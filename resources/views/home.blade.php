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

    </head>
    <body>
        <br>
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
                                                    <span class="m-l-xs todo-completed">Buy a milk</span>

                                                </li>
                                                <li>
                                                    <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                    <span class="m-l-xs">Go to shop and find some products.</span>

                                                </li>
                                                <li>
                                                    <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                    <span class="m-l-xs">Send documents to Mike</span>
                                                    <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins</small>
                                                </li>
                                                <li>
                                                    <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                    <span class="m-l-xs">Go to the doctor dr Smith</span>
                                                </li>
                                                <li>
                                                    <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                                    <span class="m-l-xs todo-completed">Plan vacation</span>
                                                </li>
                                                <li>
                                                    <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                    <span class="m-l-xs">Create new stuff</span>
                                                </li>
                                                <li>
                                                    <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                                    <span class="m-l-xs">Call to Anna for dinner</span>
                                                </li>
                                            </ul>
                                        </div>
            </div>
            <div class="ibox ">
                <div class="ibox-content">
                    <h2>FullCalendar</h2> is a jQuery plugin that provides a full-sized, drag & drop calendar like the one below. It uses AJAX to fetch events on-the-fly for each month and is
                    easily configured to use your own feed format (an extension is provided for Google Calendar).
                    <p>
                        <a href="http://arshaw.com/fullcalendar/" target="_blank">FullCalendar documentation</a>
                    </p>
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
            // events: [
            //     {
            //         title: 'All Day Event',
            //         start: new Date(y, m, 1)
            //     },
            //     {
            //         title: 'Long Event',
            //         start: new Date(y, m, d-5),
            //         end: new Date(y, m, d-2)
            //     },
            //     {
            //         id: 999,
            //         title: 'Repeating Event',
            //         start: new Date(y, m, d-3, 16, 0),
            //         allDay: true
            //     },
            //     {
            //         id: 999,
            //         title: 'Repeating Event',
            //         start: new Date(y, m, d+4, 16, 0),
            //         allDay: true
            //     },
            //     {
            //         title: 'Meeting',
            //         start: new Date(y, m, d, 10, 30),
            //         allDay: true
            //     },
            //     {
            //         title: 'Lunch',
            //         start: new Date(y, m, d, 12, 0),
            //         end: new Date(y, m, d, 14, 0),
            //         allDay: true
            //     },
            //     {
            //         title: 'Birthday Party',
            //         start: new Date(y, m, d+1, 19, 0),
            //         end: new Date(y, m, d+1, 22, 30),
            //         allDay: true
            //     },
            //     {
            //         title: 'Click for Google',
            //         start: new Date(y, m, 28),
            //         end: new Date(y, m, 29),
            //         url: 'http://google.com/'
            //     }
            // ]
        });
</script>
    </body>
</html>
    