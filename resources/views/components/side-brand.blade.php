<!-- Footer Section -->
<div class="plus-box text-center">
    @if (hasBrandingLicense())
    <p class="fs-14 font-w600 mb-2">
            {{ companyName() }} <br>
            Manage Your Hotspot <br>
            System Efficiently
    </p>
    @else
    <p class="fs-14 font-w600 mb-2">
            Simplespot. <br>
            Manage Your Hotspot <br>
            System Efficiently
    </p>
    @endif
</div>

<div class="copyright text-center">
    <p><strong>Hotspot Admin Panel</strong> © <span class="current-year">{{ now()->year }}</span> All Rights Reserved</p>

    @if (hasBrandingLicense())
    <p class="fs-12">Powered by {{ companyName() }}</p>
    @else
    <p class="fs-12">Made with ❤️ by <a href="https://simplux.africa" target="_blank">SIMPLUX</a></p>
    @endif
</div>