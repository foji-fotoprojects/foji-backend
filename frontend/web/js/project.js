//Slider
const slides = [
    './images/project/lovestory.jpg',
    './images/project/pair.png',
    './images/project/lovestory.jpg',
    './images/project/pair.png',

];

let prevPage = 0;
let current;

document.addEventListener("DOMContentLoaded", () => {
    // Slider
    const previewsBlock = document.getElementsByClassName('project-preview-block')[0];
    const hasLefts = document.getElementsByClassName('hasLefts')[0];
    const hasRights = document.getElementsByClassName('hasRights')[0];

    function renderNavs() {
        if (lefts) {
            hasLefts.style.display = 'flex'
        } else {
            hasLefts.style.display = 'none'
        }
        if (rights) {
            hasRights.style.display = 'flex'
        } else {
            hasRights.style.display = 'none'
        }
    }

    const mainImages = document.getElementsByClassName('project-main-slide');
    const width = mainImages[0].clientWidth;
    const staticLimit = Math.floor(width / 120);
    mainImages[0].src = slides[0];
    mainImages[1].src = slides[0];
    const previews = [];
    let lefts = 0;
    let rights = slides.length - staticLimit;
    if (rights) {
        hasRights.style.display = 'flex'
    }
    slides.forEach((src, index) => {
        const preview = document.createElement('img');
        preview.src = src;
        preview.className = 'preview';
        if (index === 0) preview.classList.add('preview-current');
        previewsBlock.appendChild(preview);
        previews.push(preview);
        preview.addEventListener('click', () => {
            prevPage = current ? current : 0;
            current = index;
            previews[prevPage].classList.remove('preview-current');
            preview.classList.add('preview-current');
            console.log(current > staticLimit - 1);

            if (current > staticLimit - 1) {
                console.log('работает');
                lefts = current - staticLimit + 1;
                rights = slides.length - staticLimit - lefts;
                previewsBlock.style.transform = 'translateX(-' + 115 * lefts + 'px)';
            } else {
                previewsBlock.style.transform = 'translateX(0)';
                lefts = 0;
                rights = slides.length - staticLimit;
            }

            if (lefts) {
                hasLefts.style.display = 'flex'
            } else {
                hasLefts.style.display = 'none'
            }
            if (rights) {
                hasRights.style.display = 'flex'
            } else {
                hasRights.style.display = 'none'
            }
            const slide1 = document.getElementsByClassName('project-slide-prev')[0];
            const slide2 = document.getElementsByClassName('project-slide-current')[0] ?
                document.getElementsByClassName('project-slide-current')[0] :
                document.getElementsByClassName('project-slide-prev')[1];
            slide1.classList.remove('project-slide-prev');
            slide2.classList.remove('project-slide-current');
            slide2.classList.add('project-slide-prev');
            slide1.classList.add('project-slide-current');
            slide1.src = slides[index];

        })
    });
    hasLefts.addEventListener('click', () => {
        lefts = Math.max(lefts - staticLimit, 0);
        rights = slides.length - staticLimit - lefts;
        previewsBlock.style.transform = 'translateX(-' + 115 * lefts + 'px)';
        renderNavs();
    });
    hasRights.addEventListener('click', () => {
        lefts = Math.min(lefts + staticLimit, slides.length - staticLimit - 1);
        rights = slides.length - staticLimit - lefts;
        previewsBlock.style.transform = 'translateX(-' + 115 * lefts + 'px)';
        renderNavs();
    });
    //How-to-reach
    const reachButton = document.getElementsByClassName('how-to-reach')[0];
    const reachText = document.getElementsByClassName('how-to-reach-text')[0];
    reachButton.addEventListener('click', () => {
        reachText.classList.toggle('shown')
    });

    //tabs
    const tabs = document.getElementsByClassName('tabs-item text_big switchable');
    const tabContents = document.getElementsByClassName('text tabs-panel switchable');
    for (let j = 0; j < tabs.length; j++) {
        tabs[j].addEventListener('click', () => {
            for (let i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove('active');
                tabContents[i].classList.remove('active');
            }
            tabs[j].classList.add('active');
            tabContents[j].classList.add('active');
        })

    }
});

