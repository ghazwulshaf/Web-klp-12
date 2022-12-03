// SECTION LEFT
const content1 = document.querySelector('#content_1');
const content2 = document.querySelector('#content_2');
const content3 = document.querySelector('#content_3');

function showContent1() {
    content1.classList.add('show');
    content2.classList.remove('show');
    content3.classList.remove('show');
}

function showContent2() {
    content1.classList.remove('show');
    content2.classList.add('show');
    content3.classList.remove('show');
}

function showContent3() {
    content1.classList.remove('show');
    content2.classList.remove('show');
    content3.classList.add('show');
}

function slideContents() {
    timeout1 = setTimeout(showContent1, 0);
    timeout2 = setTimeout(showContent2, 3000);
    timeout3 = setTimeout(showContent3, 6000);
    timeout4 = setTimeout(slideContents, 9000);
}