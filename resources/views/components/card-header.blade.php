<div class="card-header">
    <div class="d-flex justify-content-between align-items-center w-100">
        <!-- Icon and Title -->
        <div class="d-flex align-items-center">
            <div class="me-3 d-flex align-items-center justify-content-center bg-primary text-white rounded-circle" style="width: 30px; height: 30px;">
                <i class="{{ $icon }} fs-5"></i>
            </div>
            <h5 class="card-title mb-0 fw-bold text-dark">{{ $title }}</h5>
        </div>

        <!-- Action Button -->
        @if($buttonText)
            @if($buttonCan && auth()->user()->can($buttonCan))
                @if($buttonRoute)
                    <!-- Route Button -->
                    <a href="{{ route($buttonRoute) }}" class="btn light btn-rounded btn-primary">
                        <span class="btn-icon-start text-primary"><i class="fa fa-plus"></i></span>{{ $buttonText }}
                    </a>
                @elseif($modalId)
                    <!-- Modal Trigger Button -->
                    <button type="button" class="btn light btn-rounded btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
                        <span class="btn-icon-start text-primary"><i class="fa fa-plus"></i></span>{{ $buttonText }}
                    </button>
                @endif
            @elseif(!$buttonCan)
                @if($buttonRoute)
                    <a href="{{ route($buttonRoute) }}" class="btn light btn-rounded btn-primary">
                        <span class="btn-icon-start text-primary"><i class="fa fa-plus"></i></span>{{ $buttonText }}
                    </a>
                @elseif($modalId)
                    <button type="button" class="btn light btn-rounded btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
                        <span class="btn-icon-start text-primary"><i class="fa fa-plus"></i></span>{{ $buttonText }}
                    </button>
                @endif
            @endif
        @endif
    </div>
</div>
