// Get the input element and table
const searchInput = document.getElementById('searchbox');
const tables = document.getElementsByClassName('tables');

// Loop through each table
for (let i = 0; i < tables.length; i++) {
    const dataTable = tables[i].querySelector('table');
    const rows = dataTable.getElementsByTagName('tr');

    // Add event listener to the search input
    searchInput.addEventListener('input', function() {
        const searchText = searchInput.value.toLowerCase();

        // Loop through all table rows, excluding the header row
        for (let i = 1; i < rows.length; i++) { // Start loop from index 1 to skip the header row
            const cells = rows[i].getElementsByTagName('td');
            let found = false;

            // Loop through all table cells in the current row
            for (let j = 0; j < cells.length; j++) {
                const cellText = cells[j].textContent.toLowerCase();
                if (cellText.includes(searchText)) {
                    found = true;
                    break;
                }
            }

            // Show or hide the row based on the search result
            if (found) {
                rows[i].style.display = '';
            } else {
                rows[i].style.display = 'none';
            }
        }
    });
}

//---------------- JavaScript for the slideshow ----------------

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("tables");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}