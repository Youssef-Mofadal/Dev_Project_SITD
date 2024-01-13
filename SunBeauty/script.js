// script.js

document.addEventListener("DOMContentLoaded", function () {
    const searchBar = document.getElementById("searchBar");
    const searchIcon = document.querySelector(".search-icon");

    searchIcon.addEventListener("click", performSearch);
    searchBar.addEventListener("keyup", (event) => {
        if (event.key === "Enter") {
            performSearch();
        }
    });

    function performSearch() {
        const searchTerm = searchBar.value.trim();
        if (searchTerm !== "") {
            window.location.href = `search.php?q=${encodeURIComponent(searchTerm)}`;
        }
    }
});
searchIcon.addEventListener("click", function() {
    console.log("Search icon clicked");
    performSearch();
});




const centerContainer = document.getElementById("centerContainer");
const pack1Container = document.getElementById("pack1");
const pack2Container = document.getElementById("pack2");

const elementsWithTooltip = [centerContainer, pack1Container, pack2Container];

elementsWithTooltip.forEach((element) => {
    element.addEventListener("mouseover", (event) => {
        showTooltip(element.getAttribute("alt") || "Offer", event);
    });

    element.addEventListener("mouseout", hideTooltip);
});



const orangeLine = document.querySelector(".orange-line");
const offerContainer = document.querySelector(".offer-of-the-month");

orangeLine.style.width = offerContainer.offsetWidth + "px"; 