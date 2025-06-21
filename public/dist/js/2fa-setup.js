function copyToClipboard(text, button = null) {
    navigator.clipboard.writeText(text).then(() => {
        if (button) {
            // Find the icon inside the button
            const icon = button.querySelector('i');
            if (icon) {
                icon.classList.remove('bi-clipboard', 'text-muted');
                icon.classList.add('ri-checkbox-circle-line', 'text-info'); // Change to checkmark
            }

            // Disable further clicking
            button.style.pointerEvents = 'none';
        }
    }).catch(err => {
        console.error('Error copying text: ', err);
    });
}

function copyAllCodes() {
    const codes = window.recoveryCodes || [];
    const button = document.querySelector('[onclick="copyAllCodes()"]');

    navigator.clipboard.writeText(codes.join('\n')).then(() => {
        // Change "Copy All" button to checkmark icon
        const icon = button.querySelector('i');
        if (icon) {
            icon.classList.remove('bi-clipboard', 'text-muted');
            icon.classList.add('ri-checkbox-circle-line', 'text-info');
        }
        button.textContent = ' All Codes Copied!';

        // Update all individual copy buttons
        document.querySelectorAll('[onclick^="copyToClipboard"]').forEach(copyBtn => {
            const icon = copyBtn.querySelector('i');
            if (icon) {
                icon.classList.remove('bi-clipboard', 'text-muted');
                icon.classList.add('ri-checkbox-circle-line', 'text-info');
            }
            copyBtn.style.pointerEvents = 'none'; // Prevent further copying
        });
    }).catch(err => {
        console.error('Error copying text: ', err);
    });
}

// Update event listeners for copy buttons
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[onclick^="copyToClipboard"]').forEach(button => {
        const originalOnClick = button.getAttribute('onclick');
        const codeMatch = originalOnClick.match(/'([^']+)'/);
        if (codeMatch) {
            const code = codeMatch[1];
            button.onclick = function (e) {
                e.preventDefault();
                copyToClipboard(code, button);
            };
        }
    });
});