@if(Session::has('success'))
    <script> Notiflix.Notify.success("<?php echo Session::get('success'); ?>"); </script>
@endif

@if(Session::has('error'))
    <script> Notiflix.Notify.failure("<?php echo Session::get('error') ; ?>"); </script>
@endif

@if(Session::has('info'))
    <script> Notiflix.Notify.info("<?php echo Session::get('info'); ?>"); </script>
@endif

@if(Session::has('warning'))
    <script> Notiflix.Notify.warning("<?php echo Session::get('warning'); ?>"); </script>
@endif

@if(Session::has('success_report'))
    <script> Notiflix.Report.success("Hurray!!!","<?php echo Session::get('success_report'); ?>", "Close"); </script>
@endif

@if(Session::has('error_report'))
    <script> Notiflix.Report.failure("Ughhhh...","<?php echo Session::get('error_report') ; ?>", "Close"); </script>
@endif

@if(Session::has('info_report'))
    <script> Notiflix.Report.info("Heads Up..","<?php echo Session::get('info_report'); ?>", "Close"); </script>
@endif

@if(Session::has('warning_report'))
    <script> Notiflix.Report.warning("Attention!","<?php echo Session::get('warning_report'); ?>", "Close"); </script>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <script> Notiflix.Notify.failure("<?php echo $error; ?>"); </script>
    @endforeach
@endif