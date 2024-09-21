let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("Container");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}
// Add event listeners to all drop pin buttons
document.querySelectorAll('.dropPin').forEach((button, index) => {
    button.addEventListener('click', () => dropPin(index));
});


function dropPin(slideIndex) {
    const slides = document.getElementsByClassName('Container');
    const selectElements = slides[slideIndex].getElementsByClassName('labSelector');
    const selectedLab = selectElements[0].value;

    let pin = document.createElement('div');
    pin.classList.add('pin');

    let pinPosition = getPinPosition(selectedLab);
    pin.style.top = pinPosition.top;
    pin.style.left = pinPosition.left;

    // Remove any existing pin before adding a new one
    const existingPin = slides[slideIndex].querySelector('.pin');
    if (existingPin) {
        existingPin.remove();
    }

    slides[slideIndex].appendChild(pin);
}

function getPinPosition(lab) {
    const viewportWidth = window.innerWidth;
    if (viewportWidth <= 768) {
        switch (lab) {
            //gf coordinates//
            case 'lab1':
                return { top: '30%', left: '60%' };
            case 'lab2':
                return { top: '30%', left: '48%' };
            case 'classroom1':
                return { top: '30%', left: '69%' };
            //1st floor coordinates//
            case 'classroom105':
                return { top: '55%', left: '75%' };
            case 'lab107':
                return { top: '55%', left: '65%' };
            case 'classroom101':
                return { top: '43%', left: '55%' };
            case 'lab101':
                return { top: '43%', left: '40%' };
            case 'lab105':
                return { top: '35%', left: '2%' };
            case 'lab104':
                return { top: '25%', left: '2%' };
            case 'classroom103':
                return { top: '18%', left: '2%' };
            case 'lab103':
                return { top: '18%', left: '30%' };
            case 'lab102':
                return { top: '18%', left: '45%' };
            case 'classroom102':
                return { top: '18%', left: '70%' };
            //2nd floor coordinates//
            case 'classroom205':
                return { top: '55%', left: '75%' };
            case 'lab207':
                return { top: '55%', left: '65%' };
            case 'lab206':
                return { top: '55%', left: '55%' };
            case 'classroom201':
                return { top: '43%', left: '53%' };
            case 'lab201':
                return { top: '43%', left: '40%' };
            case 'lab205':
                return { top: '35%', left: '1%' };
            case 'lab204':
                return { top: '25%', left: '1%' };
            case 'classroom203':
                return { top: '18%', left: '1%' };
            case 'lab203':
                return { top: '18%', left: '30%' };
            case 'lab202':
                return { top: '18%', left: '45%' };
            case 'classroom202':
                return { top: '18%', left: '70%' };
            //3rd floor coordinates//
            case 'classroom301':
                return { top: '43%', left: '53%' };
            case 'lab301':
                return { top: '43%', left: '40%' };
            case 'lab304':
                return { top: '25%', left: '1%' };
            case 'classroom303':
                return { top: '18%', left: '1%' };
            case 'lab303':
                return { top: '18%', left: '30%' };
            case 'lab302':
                return { top: '18%', left: '45%' };
            case 'classroom302':
                return { top: '18%', left: '70%' };
            default:
                return { top: '18%', left: '50%' };
        }
    } else {
        switch (lab) {
            //gf coordinates//
            case 'lab1':
                return { top: '55%', left: '65%' };
            case 'lab2':
                return { top: '55%', left: '57%' };
            case 'classroom1':
                return { top: '55%', left: '73%' };
            //1st floor coordinates//
            case 'classroom105':
                return { top: '85%', left: '77%' };
            case 'lab107':
                return { top: '85%', left: '70%' };
            case 'classroom101':
                return { top: '66%', left: '60%' };
            case 'lab101':
                return { top: '66%', left: '50%' };
            case 'lab105':
                return { top: '53%', left: '20%' };
            case 'lab104':
                return { top: '38%', left: '20%' };
            case 'classroom103':
                return { top: '30%', left: '20%' };
            case 'lab103':
                return { top: '32%', left: '43%' };
            case 'lab102':
                return { top: '30%', left: '55%' };
            case 'classroom102':
                return { top: '30%', left: '70%' };
            //2nd floor coordinates//
            case 'classroom205':
                return { top: '85%', left: '77%' };
            case 'lab207':
                return { top: '85%', left: '70%' };
            case 'lab206':
                return { top: '85%', left: '60%' };
            case 'classroom201':
                return { top: '66%', left: '60%' };
            case 'lab201':
                return { top: '66%', left: '50%' };
            case 'lab205':
                return { top: '53%', left: '20%' };
            case 'lab204':
                return { top: '38%', left: '20%' };
            case 'classroom203':
                return { top: '30%', left: '20%' };
            case 'lab203':
                return { top: '32%', left: '43%' };
            case 'lab202':
                return { top: '30%', left: '55%' };
            case 'classroom202':
                return { top: '30%', left: '70%' };
            //3rd floor coordinates//
            case 'classroom301':
                return { top: '66%', left: '60%' };
            case 'lab301':
                return { top: '66%', left: '50%' };
            case 'lab304':
                return { top: '38%', left: '20%' };
            case 'classroom303':
                return { top: '30%', left: '20%' };
            case 'lab303':
                return { top: '32%', left: '43%' };
            case 'lab302':
                return { top: '30%', left: '55%' };
            case 'classroom302':
                return { top: '30%', left: '70%' };
            default:
                return { top: '50%', left: '50%' };
        }
    }
}
