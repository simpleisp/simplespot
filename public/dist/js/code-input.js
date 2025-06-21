document.addEventListener('DOMContentLoaded', () => {
    const codeInputs = document.querySelectorAll('.code-box');
    const fullCodeInput = document.getElementById('full-code');

    // Auto move to the next input on input
    codeInputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            if (e.target.value.length === 1 && index < codeInputs.length - 1) {
                codeInputs[index + 1].focus();
            }
            updateFullCode();
        });

        // Handle backspace to move to the previous input
        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && !e.target.value && index > 0) {
                codeInputs[index - 1].focus();
            }
        });
    });

    // Combine the values of all inputs into the hidden field
    function updateFullCode() {
        const fullCode = Array.from(codeInputs).map(input => input.value).join('');
        fullCodeInput.value = fullCode;
    }
});
