// -------------- GPA Calculation-----------------
document.getElementById('get-grade').addEventListener('click', calculateGPA);

function calculateGPA() {
    const courseFields = document.querySelectorAll('.course-field');
    const originalGPAInput = document.querySelector('.original-gpa');
    const creditHoursInput = document.querySelector('.credit-hours');

    let originalGPA = parseFloat(originalGPAInput.value);
    let creditHours = parseInt(creditHoursInput.value);
    let totalUnits = creditHours;
    let totalGradePoints = originalGPA * creditHours;

    for (let i = 0; i < courseFields.length; i++) {
        const courseUnitInput = courseFields[i].querySelector('.course-unit');
        const courseGradeSelect = courseFields[i].querySelector('.course-grade');

        if (courseUnitInput.value && courseGradeSelect.value !== 'select') {
            const grade = courseGradeSelect.value;
            const unit = parseInt(courseUnitInput.value);
            totalGradePoints += calculateGrade(grade, unit);
            totalUnits += unit;
        }
    }

    if (totalUnits > 0) {
        const newGPA = totalGradePoints / totalUnits;
        document.getElementById('result').textContent = `Your expected GPA is :  ${newGPA.toFixed(2)}`;
    } else {
        document.getElementById('result').textContent = 'Please add at least one course.';
    }
}

function calculateGrade(grade, unit) {
    const gradePoints = {
        'A': 4.0,
        'A-': 3.75,
        'B+': 3.5,
        'B': 3.0,
        'B-': 2.75,
        'C+': 2.5,
        'C': 2.0,
        'C-': 1.75,
        'D+': 1.33,
        'D': 1.0,
        'D-': 0.66,
        'F': 0.0,
    }[grade];

    if (gradePoints) {
        return unit * gradePoints;
    }

    return 0;
}



// -------------- The buttons --------------------

document.getElementById('add-course').addEventListener('click', () => {
    const courseDiv = document.createElement('div');
    courseDiv.classList.add('course-field');
    courseDiv.innerHTML = ` 
        <div class="flex-container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <label for="course-unit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Course Hours:</label>
                        <input type="number" placeholder="1" class="course-unit get" min="1" max="3" required>
                    </div>
                    <div class="col">
                        <label for="course-grade">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Course Grade:</label>
                        <select class="course-grade get">
                            <option value="select" class="grade "> Select</option>
                            <option value="A" class="grade"> A &nbsp;&nbsp;| 4.00</option>
                            <option value="A-" class="grade"> A- | 3.75</option>
                            <option value="B+" class="grade"> B+ |&nbsp; 3.5</option>
                            <option value="B" class="grade"> B &nbsp;&nbsp;| 3</option>
                            <option value="B-" class="grade"> B- | 2.75</option>
                            <option value="C+" class="grade"> C+ | 2.5</option>
                            <option value="C" class="grade"> C &nbsp;&nbsp;| 2</option>
                            <option value="C-" class="grade"> C- | 1.75</option>
                            <option value="D+" class="grade"> D+ | 1.5</option>
                            <option value="D" class="grade"> D &nbsp;&nbsp;| 1.00</option>
                            <option value="D-" class="grade"> D- | 0.75</option>
                            <option value="F" class="grade"> F &nbsp;&nbsp;&nbsp;| 0</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    `;
    document.querySelector('.gpa').appendChild(courseDiv);
});

document.getElementById('remove-course').addEventListener('click', () => {
    const courseFields = document.getElementsByClassName('course-field');
    if (courseFields.length > 1) {
        const lastCourseField = courseFields[courseFields.length - 1];
        lastCourseField.remove();
    }
});


document.getElementById('get-grade').addEventListener('click', calculateGPA);

// -------------- Racalculate Section --------------------

document.addEventListener("DOMContentLoaded", function () {
    const coll = document.getElementsByClassName("collapsible");
    let i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            const content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
});

// Add event listeners to the buttons
document.getElementById('add-course-1').addEventListener('click', addCourse);
document.getElementById('remove-course-1').addEventListener('click', removeCourse);
document.getElementById('get-grade-1').addEventListener('click', RecalculateGPA);


function addCourse() {
    const courseField1 = document.querySelector('.course-field-1');
    const courseDiv2 = document.createElement('div');
    courseDiv2.classList.add('course-field-2');
    courseDiv2.innerHTML = `
    <div class="course-field-1">
      <div class="flex-container" style="margin-left: 2vw;">
      <div class="container">
        <div class="row">
            <div class="col">
                <label for="recalculate-course-unit"
                    id="recalculate-course-hours">Course
                        Hours:</label>
                <input type="number" placeholder="1" class="recalculate-course-unit get"
                    min="1" max="3" required>
            </div>

            <div class="col">
                <label for="recalculate-course-grade" id="recalculate-course-g">Old
                    Grade:</label>
                <select class="recalculate-course-grade get" id="recalculate-grades">
                    <option value="select" class="grade "> Select</option>
                    <option value="A" class="grade"> A &nbsp;&nbsp;| 4.00</option>
                    <option value="A-" class="grade"> A- | 3.75</option>
                    <option value="B+" class="grade"> B+ | 3.5</option>
                    <option value="B" class="grade"> B &nbsp;&nbsp;| 3</option>
                    <option value="B-" class="grade"> B- | 2.75</option>
                    <option value="C+" class="grade"> C+ | 2.5</option>
                    <option value="C" class="grade"> C &nbsp;&nbsp;| 2</option>
                    <option value="C-" class="grade"> C- | 1.75</option>
                    <option value="D+" class="grade"> D+ | 1.5</option>
                    <option value="D" class="grade"> D &nbsp;&nbsp;| 1.00</option>
                    <option value="D-" class="grade"> D- | 0.75</option>
                    <option value="F" class="grade"> F &nbsp;&nbsp;&nbsp;| 0</option>
                </select>
            </div>

            <div class="col">
                <label for="recalculate-new-grade" id="recalculate-new-g">New
                    Grade:</label>
                <select class="recalculate-new-grade get" id="recalculate-new-grades">
                    <option value="select" class="grade "> Select</option>
                    <option value="A" class="grade"> A &nbsp;&nbsp;| 4.00</option>
                    <option value="A-" class="grade"> A- | 3.75</option>
                    <option value="B+" class="grade"> B+ | 3.5</option>
                    <option value="B" class="grade"> B &nbsp;&nbsp;| 3</option>
                    <option value="B-" class="grade"> B- | 2.75</option>
                    <option value="C+" class="grade"> C+ | 2.5</option>
                    <option value="C" class="grade"> C &nbsp;&nbsp;| 2</option>
                    <option value="C-" class="grade"> C- | 1.75</option>
                    <option value="D+" class="grade"> D+ | 1.5</option>
                    <option value="D" class="grade"> D &nbsp;&nbsp;| 1.00</option>
                    <option value="D-" class="grade"> D- | 0.75</option>
                    <option value="F" class="grade"> F &nbsp;&nbsp;&nbsp;| 0</option>
                </select>
            </div>
        </div>
    </div>
</div>
</div>`
        ;
    document.querySelector('.recalculate-gpa').appendChild(courseDiv2);
}

function removeCourse() {
    const courseField2 = document.querySelector('.recalculate-gpa .course-field-2');
    if (courseField2) {
        courseField2.parentNode.removeChild(courseField2);
    }
}


function RecalculateGPA() {
    const courseFields = document.querySelectorAll('.course-field-1');
    const originalGPAInput = document.querySelector('.re-gpa');
    const creditHoursInput = document.querySelector('.re-credit-hours');
  
    let originalGPA = parseFloat(originalGPAInput.value);
    let creditHours = parseInt(creditHoursInput.value);
    let totalUnits = creditHours;
  
    let oldGradePoints = 0;
    let newGradePoints = 0;
  
    for (let i = 0; i < courseFields.length; i++) {
      const courseUnitInput = courseFields[i].querySelector('.recalculate-course-unit');
      const courseGradeSelect = courseFields[i].querySelector('.recalculate-course-grade');
      const courseNewGradeSelect = courseFields[i].querySelector('.recalculate-new-grade');
  
      if (courseUnitInput.value && courseGradeSelect.value && courseNewGradeSelect.value !== 'select') {
        const oldGrade = courseGradeSelect.value;
        const newGrade = courseNewGradeSelect.value;
        const unit = parseInt(courseUnitInput.value);
  
        oldGradePoints += calculateGrade(oldGrade, unit);
        newGradePoints += calculateGrade(newGrade, unit);
      }
    }
  
    // Added this line to get the value of originalGPA from the input field
    const gpa = originalGPA;
  
    const totalGradePoints = (gpa * totalUnits) - oldGradePoints + newGradePoints;
    const newGPA = totalGradePoints / totalUnits;
  
    document.getElementById('result').textContent = `Your expected GPA is :  ${newGPA.toFixed(2)}`;
  }