(function () {
    "use strict";

    let forms = document.querySelectorAll(".php-email-form");

    forms.forEach(function (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault();

            const submitButton = form.querySelector("button[type='submit']");
            const originalButtonText = submitButton.innerHTML;

            let action = form.getAttribute("action");
            if (!action) {
                return displayError(form, "Form action tidak diset!");
            }

            const loading = form.querySelector(".loading");
            const errorMessage = form.querySelector(".error-message");
            const sentMessage = form.querySelector(".sent-message");

            if (loading) loading.classList.add("d-block");
            if (errorMessage) errorMessage.classList.remove("d-block");
            if (sentMessage) sentMessage.classList.remove("d-block");

            submitButton.disabled = true;
            submitButton.innerHTML = `<span class="spinner-border spinner-border-sm me-1"></span> Mengirim...`;

            const formData = new FormData(form);

            fetch(action, {
                method: "POST",
                body: formData,
                headers: { "X-Requested-With": "XMLHttpRequest" },
            })
                .then((response) => {
                    if (!response.ok) {
                        throw new Error(
                            `${response.status} ${response.statusText}`
                        );
                    }
                    return response.json();
                })
                .then((data) => {
                    if (loading) loading.classList.remove("d-block");
                    submitButton.disabled = false;
                    submitButton.innerHTML = originalButtonText;

                    if (data.message) {
                        alert(data.message);
                        form.reset();
                    } else {
                        throw new Error("Form submission failed.");
                    }
                })
                .catch((error) => {
                    submitButton.disabled = false;
                    submitButton.innerHTML = originalButtonText;
                    if (loading) loading.classList.remove("d-block");
                    displayError(form, error);
                });
        });
    });

    function displayError(form, error) {
        const errorMessage = form.querySelector(".error-message");
        if (errorMessage) {
            errorMessage.innerHTML = error;
            errorMessage.classList.add("d-block");
        } else {
            alert("Terjadi kesalahan: " + error);
        }
    }
})();
