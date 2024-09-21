// ------------ javascript for the hardness range -------------
var range = document.getElementById("hardness");
var value = document.querySelector(".value");

range.addEventListener("input", function () {
    if (range.value == 1) {
        value.textContent = "easy";
    } else if (range.value == 2) {
        value.textContent = "moderate";
    } else {
        value.textContent = "hard";
    }
});

// ------------ javascript for the multiple select -------------



const selectElements = document.querySelectorAll('.course');
selectElements.forEach(selectElement => {
    new MultiSelectTag(selectElement.id);
});