function toggleDisplay(dropdownId, triggerId, closeOnOutsideClick = false) {
    let dropdown = document.getElementById(dropdownId);
    let trigger = document.getElementById(triggerId);

    dropdown.classList.add("hidden");

    trigger.addEventListener("click", (e) => {
        e.stopPropagation();
        dropdown.classList.toggle("hidden");
    });

    if (closeOnOutsideClick) {
        document.addEventListener("click", (e) => {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.add("hidden");
            }
        });
    }
}

function toggleStyling(targetId, params) {
    let target = document.getElementById(targetId);
    let [styleClass, condition] = params;

    if (condition) {
        target.classList.add(styleClass);
    }
}
