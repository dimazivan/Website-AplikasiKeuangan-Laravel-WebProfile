@extends('admin.layouts.app')
@section('title')
{{ isset($title) ? $title : "Error Page"; }}
@endsection
@section('content')
<div class="col-md-12">
    <div class="col-middle">
        <div class="text-center text-center">
            <h1 class="error-number">😮</h1>
            <h2>Sorry but we couldn't find this page</h2>
            <p>
                This page you are looking for does not exist
                <a href="#">Report this?</a>
            </p>
            @if(isset($e))
            @foreach($e as $error)
            <p>"{{ $error }}"</p>
            @endforeach
            @endif
            <div class="mid_center">
                <p>You will redirect to <a href="/">homepage&nbsp;</a>in&nbsp;<span id="counter">10</span> second(s)</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    function countdown() {
        var i = document.getElementById('counter');
        if (parseInt(i.innerHTML) <= 0) {
            window.location = "/";
        }
        if (parseInt(i.innerHTML) != 0) {
            i.innerHTML = parseInt(i.innerHTML) - 1;
        }
    }
    setInterval(function() {
        countdown();
    }, 1000);
</script>
@endsection