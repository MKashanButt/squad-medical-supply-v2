let dropdownElement = document.querySelectorAll('[data-dropdown]')
dropdownElement.forEach(dropdown => {
    let dropdownTargetClick = dropdown.querySelector('[data-click]')
    let dropdownTargetAction = dropdown.querySelector('[data-target]')
    let display = dropdown.querySelector('[data-hidden]')
    let clickedOutside = dropdown.querySelector('[data-clicked-outside]')

    if (display) {
        display.classList.add('hidden');
    }
    dropdownTargetClick.addEventListener('click', (e) => {
        e.stopPropagation()
        dropdownElement.forEach(other => {
            if (other !== dropdown) {
                let otherTargetAction = other.querySelector('[data-target]');
                if (otherTargetAction) {
                    otherTargetAction.classList.add('hidden');
                }
            }
        });
        dropdownTargetAction.classList.toggle('hidden')
    });

    if (clickedOutside) {
        document.addEventListener('click', (e) => {
            if (!dropdown.contains(e.target)) {
                dropdownTargetAction.classList.add('hidden')
            }
        })
    }
})
