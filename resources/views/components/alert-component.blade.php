<div>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        @php
        $notifies = is_array($notifies) ? $notifies : [$notifies]
        @endphp
        @foreach ( $notifies as $notify )
        <div class="toast align-items-center text-bg-{{$type}} border-0 alert" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body alert__body">
                    {{$notify}}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
        @endforeach
    </div>
</div>