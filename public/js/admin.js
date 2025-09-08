function imageRenderer(containerId, targetId, targetClass, canDelete = null) {
    let IMAGE_SHOWCASE_CONTAINER = document.getElementById(containerId);
    let images = document.getElementById(targetId).files;

    let icon = (
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="15"
            height="15"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
        >
            <path d="M10 11v6" />
            <path d="M14 11v6" />
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6" />
            <path d="M3 6h18" />
            <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
        </svg>
    );

    if (images && images.length > 0) {
        for (let file of images) {
            let imageElement = document.createElement("img");
            imageElement.src = URL.createObjectURL(file);
            imageElement.alt = `${file.name} image`;
            imageElement.classList.add(targetClass);
            IMAGE_SHOWCASE_CONTAINER.appendChild(imageElement);
        }
    }
}

function clearWindow(targetId, trigger = false) {
    let targetElement = document.getElementById(targetId);
    let triggerElement = document.getElementById(trigger);
    let children = Array.from(targetElement.children);

    for (let subElement of children) {
        if (subElement != triggerElement) {
            targetElement.removeChild(subElement);
        }
    }
}

function deleteOptionRenderer(deleteIcon, link) {
    let button = document.createElement("button");
    button.appendChild(deleteIcon);

    let link = document.createElement("a");
    link.href = link;
    link.appendChild(button);

    return link;
}
