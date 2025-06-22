<div class="d-flex justify-content-between w-100 mt-4">
    <!-- Cancel Button -->
    <div>
        <a href="{{ $cancelRoute }}" class="btn light btn-rounded btn-dark">
            <span class="btn-icon-start text-muted">
                <i class="las la-times"></i>
            </span>
            Cancel
        </a>
    </div>

    <!-- Save Button -->
    <div>
        <button type="submit" class="btn light btn-rounded btn-primary">
            <span class="btn-icon-start text-primary">
                <i class="{{ $saveIcon }}"></i>
            </span>
            {{ $saveText }}
        </button>
    </div>
</div>
