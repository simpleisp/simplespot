document.addEventListener("DOMContentLoaded", function () {
    // Define credentials for different payment gateways
    const credentialsData = {
        mpesa_paybill: [
            "MPESA_CONSUMER_KEY",
            "MPESA_CONSUMER_SECRET",
            "MPESA_PASSKEY",
            "MPESA_SHORTCODE"
        ],
        mpesa_till: [
            "MPESA_CONSUMER_KEY",
            "MPESA_CONSUMER_SECRET",
            "MPESA_PASSKEY",
            "MPESA_SHORTCODE",
            "MPESA_TILL"
        ],
        kopokopo: [
            "KOPOKOPO_CLIENT_ID",
            "KOPOKOPO_CLIENT_SECRET",
            "KOPOKOPO_API_KEY",
            "KOPOKOPO_STK_TILL"
        ]
    };

    const paymentTypeSelect = document.getElementById("paymentType");
    const credentialsContainer = document.getElementById("credentials-container");

    // Function to populate credentials
    function populateCredentials(selectedType) {
        credentialsContainer.innerHTML = ""; // Clear previous fields

        if (credentialsData[selectedType]) {
            credentialsData[selectedType].forEach(key => {
                const div = document.createElement("div");
                div.classList.add("input-group", "mb-2", "credential-row");

                div.innerHTML = `
                    <input type="text" name="credentials[keys][]" class="form-control" value="${key}" readonly>
                    <input type="text" name="credentials[values][]" class="form-control" placeholder="Enter ${key}">
                `;
                credentialsContainer.appendChild(div);
            });
        }
    }

    // Event listener for payment type change
    if (paymentTypeSelect) {
        paymentTypeSelect.addEventListener("change", function () {
            populateCredentials(this.value);
        });

        // Populate fields on page load if a value is already selected
        if (paymentTypeSelect.value) {
            populateCredentials(paymentTypeSelect.value);
        }
    }
});
