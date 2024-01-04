document.addEventListener("DOMContentLoaded", function () {
    const itemsPerPage = 5;
    const itemsContainer = document.getElementById("paginationContainer");
    const items = itemsContainer.getElementsByClassName("item");
    const totalPages = Math.ceil(items.length / itemsPerPage);
    const prevButton = document.getElementById("prev");
    const nextButton = document.getElementById("next");

    let currentPage = 1;

    function showPage(page) {
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        for (let i = 0; i < items.length; i++) {
            if (i >= start && i < end) {
                items[i].style.display = "block";
            } else {
                items[i].style.display = "none";
            }
        }
    }

    function updateButtons() {
        prevButton.disabled = currentPage === 1; // Disable prev on first page
        nextButton.disabled = currentPage === totalPages; // Disable next on last page
    }

    function nextPage() {
        if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
            updateButtons();
        }
    }

    function prevPage() {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
            updateButtons();
        }
    }

    prevButton.addEventListener("click", function () {
        prevPage();
    });

    nextButton.addEventListener("click", function () {
        nextPage();
    });

    // Initial setup
    showPage(currentPage);
    updateButtons();
});
