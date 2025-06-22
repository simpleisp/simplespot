<div class="alert alert-{{ $type }} left-icon-big alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span><i class="mdi mdi-btn-close"></i></span>
    </button>
    <div class="media">
        <div class="alert-left-icon-big">
            <span><i class="{{ $icon }}"></i></span>
        </div>
        <div class="media-body">
            <h5 class="mt-1 mb-2">{{ ucfirst($title ?? ($type == 'success' ? 'Congratulations!' : 'Oops!')) }}</h5>
            <p class="mb-0">{!! $message !!}</p>
        </div>
    </div>
</div>
