<!-- Footer -->
<footer class="footer bg-light py-4 border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center small text-muted">
                    <p class="mb-1">
                        &copy; <span id="currentYear">{{ now()->year }}</span>

                        @if (hasBrandingLicense() && setting('company'))
                            {{ setting('company') }}
                        @else
                            SimpleSpot. Designed & developed by 
                            <a href="https://simplux.africa" target="_blank">SIMPLUX</a>
                        @endif
                    </p>

                    @unless (hasBrandingLicense())
                        <p class="mb-0">
                            <span class="badge bg-success-subtle text-success fw-medium">
                                Version {{ appVersion() }}
                            </span>
                        </p>
                    @endunless
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->