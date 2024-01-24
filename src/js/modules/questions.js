window.$ = jQuery;
window.addEventListener("load", () => {

    //======================= dropdown-select ==========================
    const dropdownSelects = document.querySelectorAll(".dropdown-select");
    if (dropdownSelects) {
        dropdownSelects.forEach(dropdown => {
            const activeSelect = dropdown.querySelector(".active-select");
            const options = dropdown.querySelectorAll(".options .option-item");


            activeSelect.addEventListener("click", toggleActiveClass);
            options.forEach(option => {
                option.addEventListener("click", closeDropdown);
            });
        });

        function toggleActiveClass(event) {
            const target = event.target;
            const currentDropdown = target.closest(".dropdown-select");
            currentDropdown.classList.toggle("active");
        }
        function closeDropdown(event) {
            const target = event.target;
            const currentDropdown = target.closest(".dropdown-select");
            const option = target.querySelector(".option");
            currentDropdown.classList.remove("active");

            currentDropdown.querySelector(".active-select .selected-option").innerText = option ? option.innerText : target.innerText;
        }
    }

    //=======================================================================


    //===================== Questions ==============================
    const questionsBlock = document.querySelector(".questions");
    if(questionsBlock) {
        const btnToOpenAnswer = questionsBlock.querySelectorAll(".open-question");
        btnToOpenAnswer.forEach(button => {
            button.addEventListener("click", toggleAnswer);
        });

        function toggleAnswer(event) {
            const target = event.target;
            const question = target.closest(".question");
            if (!question.classList.contains("opened")) {
                hideAllAnswers();
                question.classList.add("opened");
            } else {
                question.classList.remove("opened");
            }
        }
        function hideAllAnswers() {
            questionsBlock.querySelectorAll(".question").forEach(question => {
                question.classList.remove("opened")
            });
        }
    }
    //================================================================




    //================ Show more and show less text ======================
    const showMoreText = document.querySelectorAll(".show-more-text");

    if (showMoreText) {
        const showLessText = document.querySelectorAll(".show-less-text");
        showMoreText.forEach(element => {
            element.addEventListener("click", showMoreContent)
        });
        showLessText.forEach(element => {
            element.addEventListener("click", showLessContent)
        });

        function showMoreContent(event) {
            event.target.closest(".text").classList.add("visible-all-content");

        }
        function showLessContent(event) {
            event.target.closest(".text").classList.remove("visible-all-content");
        }
    }


    //====================================================================

});

const items = document.querySelectorAll(".accordion a");
function toggleAccordion(){
    this.classList.toggle('active');
    this.nextElementSibling.classList.toggle('active');
}
items.forEach(item => item.addEventListener('click', toggleAccordion));


window.onscroll = function() {myFunction()};
var header = document.getElementById("header");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}


function toggleqMenu(){
    this.nextElementSibling.classList.toggle('active');
    this.querySelector('.handler').classList.toggle('handler-a');
}

var qMenu_items = document.querySelectorAll('.handler');
qMenu_items.forEach(qMenu_item => qMenu_item.parentElement.addEventListener('click', toggleqMenu));

$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('.scroll-to-top').fadeIn();
    } else {
        $('.scroll-to-top').fadeOut();
    }
});

$('.scroll-to-top').click(function() {
    $('html, body').animate({scrollTop : 0},700);
    return false;
});