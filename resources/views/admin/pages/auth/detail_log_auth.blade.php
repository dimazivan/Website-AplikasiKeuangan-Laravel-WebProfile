@extends('admin.layouts.app')
@section('title')
{{ isset($title) ? $title : "Halaman Log Data Auth"; }}
@endsection
@section('content')
<!--  -->
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
                $(this).remove();
            });
        }, 5000);

    });
</script>
@endsection