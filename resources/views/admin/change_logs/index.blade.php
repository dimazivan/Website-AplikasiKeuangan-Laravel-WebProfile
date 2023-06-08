<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Logs - Aplikasi Keuangan - Dimz</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!--===============================================================================================-->
    <link rel="icon" href="{{ asset('asset/icon/dimaz4.png') }}" type="image/ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('asset/icon/dimaz4.png') }}" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                Change Log - Dimz
            </a>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                What's Next update?
            </button>
            @include('admin.components.canvas.canvas_upcoming')
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="col-md-12">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                @forelse($data as $data_logs)
                @if($data_logs->type == "update")
                <!-- Update -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading{{ $data_logs->id }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse{{ $data_logs->id }}" aria-expanded="false"
                            aria-controls="flush-collapse{{ $data_logs->id }}" style="text-transform:capitalize;">
                            {{ $data_logs->title }} &nbsp;&nbsp;
                            <small class="d-inline-flex px-2 py-1 fw-semibold text-success
                                            bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2"
                                style="text-transform:capitalize;">
                                {{ $data_logs->type }}
                            </small>
                            <small class="d-inline-flex px-2 py-1 fw-semibold text-secondary bg-secondary bg-opacity-10 
                                border border-secondary border-opacity-10 rounded-2"
                                style="text-transform:uppercase;margin-left: 10px;">
                                {{ $data_logs->version }}
                            </small>
                            <small class="d-inline-flex px-2 py-1 fw-semibold text-secondary bg-secondary bg-opacity-10 
                                border border-secondary border-opacity-10 rounded-2"
                                style="text-transform:uppercase;margin-left: 10px;">
                                {{
                                Carbon\Carbon::parse($data_logs->created_at)
                                ->locale('id')
                                ->settings(['formatFunction' => 'translatedFormat'])
                                ->format('l, j F Y');
                                }}
                            </small>
                        </button>
                    </h2>
                    <div id="flush-collapse{{ $data_logs->id }}" class="accordion-collapse collapse"
                        aria-labelledby="flush-heading{{ $data_logs->id }}" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">{{ $data_logs->description }}</div>
                    </div>
                </div>
                @elseif($data_logs->type == "adjust")
                <!-- Adjust -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading{{ $data_logs->id }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse{{ $data_logs->id }}" aria-expanded="false"
                            aria-controls="flush-collapse{{ $data_logs->id }}" style="text-transform:capitalize;">
                            {{ $data_logs->title }} &nbsp;&nbsp;
                            <small class="d-inline-flex px-2 py-1 fw-semibold text-primary
                                            bg-primary bg-opacity-10 border border-primary border-opacity-10 rounded-2"
                                style="text-transform:capitalize;">
                                {{ $data_logs->type }}
                            </small>
                            <small class="d-inline-flex px-2 py-1 fw-semibold text-secondary bg-secondary bg-opacity-10 
                                border border-secondary border-opacity-10 rounded-2"
                                style="text-transform:uppercase;margin-left: 10px;">
                                {{ $data_logs->version }}
                            </small>
                            <small class="d-inline-flex px-2 py-1 fw-semibold text-secondary bg-secondary bg-opacity-10 
                                border border-secondary border-opacity-10 rounded-2"
                                style="text-transform:uppercase;margin-left: 10px;">
                                {{
                                Carbon\Carbon::parse($data_logs->created_at)
                                ->locale('id')
                                ->settings(['formatFunction' => 'translatedFormat'])
                                ->format('l, j F Y');
                                }}
                            </small>
                        </button>
                    </h2>
                    <div id="flush-collapse{{ $data_logs->id }}" class="accordion-collapse collapse"
                        aria-labelledby="flush-heading{{ $data_logs->id }}" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">{{ $data_logs->description }}</div>
                    </div>
                </div>
                @elseif($data_logs->type == "error")
                <!-- Fixing Bug -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading{{ $data_logs->id }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse{{ $data_logs->id }}" aria-expanded="false"
                            aria-controls="flush-collapse{{ $data_logs->id }}" style="text-transform:capitalize;">
                            {{ $data_logs->title }} &nbsp;&nbsp;
                            <small class="d-inline-flex px-2 py-1 fw-semibold text-danger
                                            bg-danger bg-opacity-10 border border-danger border-opacity-10 rounded-2"
                                style="text-transform:capitalize;">
                                {{ $data_logs->type }}
                            </small>
                            <small class="d-inline-flex px-2 py-1 fw-semibold text-secondary bg-secondary bg-opacity-10 
                                border border-secondary border-opacity-10 rounded-2"
                                style="text-transform:uppercase;margin-left: 10px;">
                                {{ $data_logs->version }}
                            </small>
                            <small class="d-inline-flex px-2 py-1 fw-semibold text-secondary bg-secondary bg-opacity-10 
                                border border-secondary border-opacity-10 rounded-2"
                                style="text-transform:uppercase;margin-left: 10px;">
                                {{
                                Carbon\Carbon::parse($data_logs->created_at)
                                ->locale('id')
                                ->settings(['formatFunction' => 'translatedFormat'])
                                ->format('l, j F Y');
                                }}
                            </small>
                        </button>
                    </h2>
                    <div id="flush-collapse{{ $data_logs->id }}" class="accordion-collapse collapse"
                        aria-labelledby="flush-heading{{ $data_logs->id }}" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">{{ $data_logs->description }}</div>
                    </div>
                </div>
                @elseif($data_logs->type == "warning")
                <!-- Warning -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading{{ $data_logs->id }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse{{ $data_logs->id }}" aria-expanded="false"
                            aria-controls="flush-collapse{{ $data_logs->id }}" style="text-transform:capitalize;">
                            {{ $data_logs->title }} &nbsp;&nbsp;
                            <small class="d-inline-flex px-2 py-1 fw-semibold text-warning
                                            bg-warning bg-opacity-10 border border-warning border-opacity-10 rounded-2"
                                style="text-transform:capitalize;">
                                {{ $data_logs->type }}
                            </small>
                            <small class="d-inline-flex px-2 py-1 fw-semibold text-secondary bg-secondary bg-opacity-10 
                                border border-secondary border-opacity-10 rounded-2"
                                style="text-transform:uppercase;margin-left: 10px;">
                                {{ $data_logs->version }}
                            </small>
                            <small class="d-inline-flex px-2 py-1 fw-semibold text-secondary bg-secondary bg-opacity-10 
                                border border-secondary border-opacity-10 rounded-2"
                                style="text-transform:uppercase;margin-left: 10px;">
                                {{
                                Carbon\Carbon::parse($data_logs->created_at)
                                ->locale('id')
                                ->settings(['formatFunction' => 'translatedFormat'])
                                ->format('l, j F Y');
                                }}
                            </small>
                        </button>
                    </h2>
                    <div id="flush-collapse{{ $data_logs->id }}" class="accordion-collapse collapse"
                        aria-labelledby="flush-heading{{ $data_logs->id }}" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">{{ $data_logs->description }}
                        </div>
                    </div>
                </div>
                @endif
                @empty
                <!-- Kosong -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headinga">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapsea" aria-expanded="false" aria-controls="flush-collapsea"
                            style="text-transform:capitalize;">
                            Lorem ipsum dolor sit amet. &nbsp;&nbsp;
                            <small
                                class="d-inline-flex px-2 py-1 fw-semibold text-secondary
                                            bg-secondary bg-opacity-10 border border-secondary border-opacity-10 rounded-2"
                                style="text-transform:capitalize;">
                                No Update
                            </small>
                            <small class="d-inline-flex px-2 py-1 fw-semibold bg-secondary bg-opacity-10 
                                border border-secondary border-opacity-10 rounded-2"
                                style="text-transform:uppercase;color:lightblue;margin-left: 10px;">
                                0.0.0.0
                            </small>
                        </button>
                    </h2>
                    <div id="flush-collapsea" class="accordion-collapse collapse" aria-labelledby="flush-headinga"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet.</div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    </script>
</body>

</html>