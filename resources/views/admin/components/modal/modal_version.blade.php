<div class="modal fade modalversion" tabindex="-1" role="dialog" aria-hidden="true" id="modalversion">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" id="bgmodal">
            <form class="" action="#" method="post" validate enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Change Log - Newest</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            @forelse($data as $data_logs)
                            @if($data_logs->type == "update")
                            <!-- Update -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading{{ $data_logs->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{ $data_logs->id }}" aria-expanded="false"
                                        aria-controls="flush-collapse{{ $data_logs->id }}"
                                        style="text-transform:capitalize;">
                                        {{ $data_logs->title }} &nbsp;&nbsp;
                                        <small class="d-inline-flex px-2 py-1 fw-semibold text-success
                                            bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2"
                                            style="text-transform:capitalize;">
                                            {{ $data_logs->type }}
                                        </small>
                                        <small class="d-inline-flex px-2 py-1 fw-semibold text-secondary 
                                        bg-secondary bg-opacity-10 border border-secondary border-opacity-10 rounded-2"
                                            style="text-transform:uppercase;margin-left: 10px;">
                                            {{ $data_logs->version }}
                                        </small>
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $data_logs->id }}" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading{{ $data_logs->id }}"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">{{ $data_logs->description }}</div>
                                </div>
                            </div>
                            @elseif($data_logs->type == "adjust")
                            <!-- Adjust -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading{{ $data_logs->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{ $data_logs->id }}" aria-expanded="false"
                                        aria-controls="flush-collapse{{ $data_logs->id }}"
                                        style="text-transform:capitalize;">
                                        {{ $data_logs->title }} &nbsp;&nbsp;
                                        <small class="d-inline-flex px-2 py-1 fw-semibold text-primary
                                            bg-primary bg-opacity-10 border border-primary border-opacity-10 rounded-2"
                                            style="text-transform:capitalize;">
                                            {{ $data_logs->type }}
                                        </small>
                                        <small class="d-inline-flex px-2 py-1 fw-semibold text-secondary 
                                        bg-secondary bg-opacity-10 border border-secondary border-opacity-10 rounded-2"
                                            style="text-transform:uppercase;margin-left: 10px;">
                                            {{ $data_logs->version }}
                                        </small>
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $data_logs->id }}" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading{{ $data_logs->id }}"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">{{ $data_logs->description }}</div>
                                </div>
                            </div>
                            @elseif($data_logs->type == "error")
                            <!-- Fixing Bug -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading{{ $data_logs->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{ $data_logs->id }}" aria-expanded="false"
                                        aria-controls="flush-collapse{{ $data_logs->id }}"
                                        style="text-transform:capitalize;">
                                        {{ $data_logs->title }} &nbsp;&nbsp;
                                        <small class="d-inline-flex px-2 py-1 fw-semibold text-danger
                                            bg-danger bg-opacity-10 border border-danger border-opacity-10 rounded-2"
                                            style="text-transform:capitalize;">
                                            {{ $data_logs->type }}
                                        </small>
                                        <small class="d-inline-flex px-2 py-1 fw-semibold text-secondary 
                                        bg-secondary bg-opacity-10 border border-secondary border-opacity-10 rounded-2"
                                            style="text-transform:uppercase;margin-left: 10px;">
                                            {{ $data_logs->version }}
                                        </small>
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $data_logs->id }}" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading{{ $data_logs->id }}"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">{{ $data_logs->description }}</div>
                                </div>
                            </div>
                            @elseif($data_logs->type == "warning")
                            <!-- Warning -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading{{ $data_logs->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{ $data_logs->id }}" aria-expanded="false"
                                        aria-controls="flush-collapse{{ $data_logs->id }}"
                                        style="text-transform:capitalize;">
                                        {{ $data_logs->title }} &nbsp;&nbsp;
                                        <small class="d-inline-flex px-2 py-1 fw-semibold text-warning
                                            bg-warning bg-opacity-10 border border-warning border-opacity-10 rounded-2"
                                            style="text-transform:capitalize;">
                                            {{ $data_logs->type }}
                                        </small>
                                        <small class="d-inline-flex px-2 py-1 fw-semibold text-secondary 
                                        bg-secondary bg-opacity-10 border border-secondary border-opacity-10 rounded-2"
                                            style="text-transform:uppercase;margin-left: 10px;">
                                            {{ $data_logs->version }}
                                        </small>
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $data_logs->id }}" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading{{ $data_logs->id }}"
                                    data-bs-parent="#accordionFlushExample">
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
                                        data-bs-target="#flush-collapsea" aria-expanded="false"
                                        aria-controls="flush-collapsea" style="text-transform:capitalize;">
                                        Lorem ipsum dolor sit amet. &nbsp;&nbsp;
                                        <small
                                            class="d-inline-flex px-2 py-1 fw-semibold text-secondary
                                            bg-secondary bg-opacity-10 border border-secondary border-opacity-10 rounded-2"
                                            style="text-transform:capitalize;">
                                            No Update
                                        </small>
                                        <small class="d-inline-flex px-2 py-1 fw-semibold text-secondary 
                                        bg-secondary bg-opacity-10 border border-secondary border-opacity-10 rounded-2"
                                            style="text-transform:uppercase;margin-left: 10px;">
                                            0.0.0.0
                                        </small>
                                    </button>
                                </h2>
                                <div id="flush-collapsea" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headinga" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet.</div>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <span>
                        <a href="{{ route('change_log.index') }}" target="_blank">See More Update</a>
                    </span>
                    <button style="margin-left: auto;" type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>