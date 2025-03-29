
function applyFilters() {
   
    let category = document.getElementById("categoryFilter").value.toLowerCase();
    let status = document.getElementById("statusFilter").value.toLowerCase();
    let keyword = document.getElementById("searchKeyword").value.toLowerCase();

    let tenders = document.querySelectorAll(".announcement-card");
    let noResultsMessage = document.getElementById("noResultsMessage");
    let foundResults = false;

    tenders.forEach(tender => {
        let tenderCategory = tender.getAttribute("data-category").toLowerCase();
        let tenderStatus = tender.getAttribute("data-status").toLowerCase();
        let tenderTitle = tender.getAttribute("data-title").toLowerCase();

        let categoryMatch = category === "" || tenderCategory === category;
        let statusMatch = status === "" || tenderStatus === status;
        let keywordMatch = keyword === "" || tenderTitle.includes(keyword);

        if (categoryMatch && statusMatch && keywordMatch) {
            tender.style.display = "flex";
            foundResults = true;
        } else {
            tender.style.display = "none";
        }
    });

    // Afficher ou masquer le message selon les résultats
    if (foundResults) {
        noResultsMessage.style.display = "none";
    } else {
        noResultsMessage.style.display = "block";
    }
}

function resetFilters() {
    document.getElementById("categoryFilter").value = "";
    document.getElementById("statusFilter").value = "";
    document.getElementById("searchKeyword").value = "";
    applyFilters();
}

