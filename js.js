document.addEventListener("DOMContentLoaded", function() {
    const steps = Array.from(document.querySelectorAll(".form-step"));
    const nextBtns = document.querySelectorAll(".next");
    const prevBtns = document.querySelectorAll(".prev");
    let currentStep = 0;

    nextBtns.forEach(button => {
        button.addEventListener("click", () => {
            if (validateStep(currentStep)) {
                steps[currentStep].classList.remove("active");
                currentStep++;
                steps[currentStep].classList.add("active");
            }
        });
    });

    prevBtns.forEach(button => {
        button.addEventListener("click", () => {
            steps[currentStep].classList.remove("active");
            currentStep--;
            steps[currentStep].classList.add("active");
        });
    });

    function validateStep(step) {
        const inputs = steps[step].querySelectorAll("input");
        for (let input of inputs) {
            if (!input.checkValidity()) {
                input.reportValidity();
                return false;
            }
        }
        return true;
    }
});
