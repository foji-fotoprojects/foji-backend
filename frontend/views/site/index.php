<?php
use yii\helpers\Html;
?>

<main class="main">
    <div class="slider">
        <div class="slider__panel slider__panel_current" id="slider__panel-1">
            <div class="slider__part slider__part-1">
                <img src='./images/test-slider-images/32064b1aac54770337ec95ea346e2db2.jpg'
                     class="bg-img slider__part-1"/>
            </div>
            <div class="slider__part slider__part-2">
                <img src='./images/test-slider-images/32064b1aac54770337ec95ea346e2db2.jpg'
                     class="bg-img slider__part-2"/>
            </div>
            <div class="slider__part slider__part-3">
                <img src='./images/test-slider-images/32064b1aac54770337ec95ea346e2db2.jpg'
                     class="bg-img slider__part-3"/>
            </div>
            <div class="slider__part slider__part-4">
                <img src='./images/test-slider-images/32064b1aac54770337ec95ea346e2db2.jpg'
                     class="bg-img slider__part-4"/>
            </div>
        </div>
        <div class="slider__panel" id="slider__panel-2">
            <div class="slider__part slider__part-1">
                <img src='./images/test-slider-images/3146278.jpg' class="bg-img slider__part-1"/>
            </div>
            <div class="slider__part slider__part-2">
                <img src='./images/test-slider-images/3146278.jpg' class="bg-img slider__part-2"/>
            </div>
            <div class="slider__part slider__part-3">
                <img src='./images/test-slider-images/3146278.jpg' class="bg-img slider__part-3"/>
            </div>
            <div class="slider__part slider__part-4">
                <img src='./images/test-slider-images/3146278.jpg' class="bg-img slider__part-4"/>
            </div>
        </div>
        <div class="slider__panel" id="slider__panel-3">
            <div class="slider__part slider__part-1">
                <img src='./images/test-slider-images/IMG_5762_web-1024x684.jpg' class="bg-img slider__part-1"/>
            </div>
            <div class="slider__part slider__part-2">
                <img src='./images/test-slider-images/IMG_5762_web-1024x684.jpg' class="bg-img slider__part-2"/>
            </div>
            <div class="slider__part slider__part-3">
                <img src='./images/test-slider-images/IMG_5762_web-1024x684.jpg' class="bg-img slider__part-3"/>
            </div>
            <div class="slider__part slider__part-4">
                <img src='./images/test-slider-images/IMG_5762_web-1024x684.jpg' class="bg-img slider__part-4"/>
            </div>
        </div>
        <div class="slider__panel" id="slider__panel-4">
            <div class="slider__part slider__part-1">
                <img src='./images/test-slider-images/s1200.webp' class="bg-img slider__part-1"/>
            </div>
            <div class="slider__part slider__part-2">
                <img src='./images/test-slider-images/s1200.webp' class="bg-img slider__part-2"/>
            </div>
            <div class="slider__part slider__part-3">
                <img src='./images/test-slider-images/s1200.webp' class="bg-img slider__part-3"/>
            </div>
            <div class="slider__part slider__part-4">
                <img src='./images/test-slider-images/s1200.webp' class="bg-img slider__part-4"/>
            </div>
        </div>
        <div class ="slider__nav">
            <i class="fa fa-chevron-up" aria-hidden="true" id="prev"></i>
            <div class ="slider__nav-point slider__nav-point_current"></div>
            <div class ="slider__nav-point"></div>
            <div class ="slider__nav-point"></div>
            <div class ="slider__nav-point"></div>
            <i class="fa fa-chevron-down" aria-hidden="true" id="next" ></i>
        </div>
        <div class="take-part">Участвуйте в уникальных <br> фотопроектах в Москве</div>
        <i class="fa fa-chevron-down" aria-hidden="true" id="down" ></i>
    </div>
    <div class="container">
        <section class="advantages">
            <div class="advantages-item">
                <img class="advantage-img" src="./images/icons/advantage_1.png" alt="">
                <h5 class="advantage-title">Профессиональные и опытные фотографы</h5>
            </div>
            <div class="advantages-item">
                <img class="advantage-img" src="./images/icons/advantage_2.png" alt="">
                <h5 class="advantage-title">Гарантированное качество обработанных фото</h5>
            </div>
            <div class="advantages-item">
                <img class="advantage-img" src="./images/icons/advantage_3.png" alt="">
                <h5 class="advantage-title">Дополнительные услуги стилистов и визажистов</h5>
            </div>
            <div class="advantages-item">
                <img class="advantage-img" src="./images/icons/advantage_4.png" alt="">
                <h5 class="advantage-title">Ваши фото принадлежат только вам</h5>
            </div>
        </section>
        <section class="projects">
            <header class="projects-header">
                <div class="btn-filter-projects">
                    <svg width="52" height="40" viewBox="0 0 52 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="41" cy="7" r="5.5" stroke="black" stroke-width="3"/>
                        <circle cx="10.75" cy="19.6667" r="5.5" stroke="black" stroke-width="3"/>
                        <circle cx="29.75" cy="32.3333" r="5.5" stroke="black" stroke-width="3"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.2171 34.25C36.3474 33.7439 36.4167 33.2134 36.4167 32.6667C36.4167 32.1199 36.3474 31.5894 36.2171 31.0833H51.4583V34.25H36.2171ZM23.9495 34.25H0V31.0833H23.9495C23.8193 31.5894 23.75 32.1199 23.75 32.6667C23.75 33.2134 23.8193 33.7439 23.9495 34.25Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2171 21.5833C17.3474 21.0773 17.4167 20.5467 17.4167 20C17.4167 19.4533 17.3474 18.9227 17.2171 18.4167H51.4583V21.5833H17.2171ZM4.94952 21.5833H0V18.4167H4.94953C4.81928 18.9227 4.75 19.4533 4.75 20C4.75 20.5467 4.81927 21.0773 4.94952 21.5833Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M47.3005 8.91667C47.4307 8.4106 47.5 7.88006 47.5 7.33333C47.5 6.78661 47.4307 6.25606 47.3005 5.75H51.4583V8.91667H47.3005ZM35.0329 8.91667H0V5.75H35.0329C34.9026 6.25606 34.8333 6.78661 34.8333 7.33333C34.8333 7.88006 34.9026 8.4106 35.0329 8.91667Z" fill="black"/>
                    </svg>
                </div>
                <div class="filter-form">
                    <div class="filter-form-header">
                        <div class="btn-filter-projects">
                            <svg width="52" height="40" viewBox="0 0 52 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="41" cy="7" r="5.5" stroke="black" stroke-width="3"/>
                                <circle cx="10.75" cy="19.6667" r="5.5" stroke="black" stroke-width="3"/>
                                <circle cx="29.75" cy="32.3333" r="5.5" stroke="black" stroke-width="3"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.2171 34.25C36.3474 33.7439 36.4167 33.2134 36.4167 32.6667C36.4167 32.1199 36.3474 31.5894 36.2171 31.0833H51.4583V34.25H36.2171ZM23.9495 34.25H0V31.0833H23.9495C23.8193 31.5894 23.75 32.1199 23.75 32.6667C23.75 33.2134 23.8193 33.7439 23.9495 34.25Z" fill="black"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2171 21.5833C17.3474 21.0773 17.4167 20.5467 17.4167 20C17.4167 19.4533 17.3474 18.9227 17.2171 18.4167H51.4583V21.5833H17.2171ZM4.94952 21.5833H0V18.4167H4.94953C4.81928 18.9227 4.75 19.4533 4.75 20C4.75 20.5467 4.81927 21.0773 4.94952 21.5833Z" fill="black"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M47.3005 8.91667C47.4307 8.4106 47.5 7.88006 47.5 7.33333C47.5 6.78661 47.4307 6.25606 47.3005 5.75H51.4583V8.91667H47.3005ZM35.0329 8.91667H0V5.75H35.0329C34.9026 6.25606 34.8333 6.78661 34.8333 7.33333C34.8333 7.88006 34.9026 8.4106 35.0329 8.91667Z" fill="black"/>
                            </svg>
                        </div>
                        <div class="btn-filter-projects-close">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L30 30" stroke="black" stroke-width="2"/>
                                <path d="M30 1L0.999999 30" stroke="black" stroke-width="2"/>
                            </svg>
                        </div>
                    </div>
                    <div class="filter-form-half">
                        <input type="hidden" id="datepicker">
                    </div>
                    <div class="filter-form-half"></div>
                </div>
                <a class="btn btn_border_black btn_transparent btn-new-project" href="new.html">Создать проект</a>
            </header>
            <div class="projects-date">
                <h3>2&nbsp;февраля</h3>
                <hr class="projects-horizontal-line">
            </div>
            <div class="projects-preview">
                <?php foreach ($dataProvider as $item): ?>
                    <article class="project-card">
                        <header class="project-card-header">
                            <p class="additional_text_red"><?= $item['theme'] ?></p>
                            <h2><?= $item['name'] ?></h2>
                            <p class="text"><span class="city">Город:</span> Москва</p>
                        </header>
                        <?= Html::img('images/lovestory.jpg', ['class' => 'project-img', 'alt' => $item['name']]) ?>
                        <div class="descriptions">
                            <div class="location">
                                <svg class="icon" width="17" height="23" viewBox="0 0 17 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.7547 8.03738C15.7547 9.38588 15.31 10.9011 14.5809 12.4602C13.8563 14.0099 12.8805 15.5402 11.889 16.9017C10.8995 18.2605 9.90773 19.4328 9.16261 20.2659C8.97018 20.481 8.79454 20.6732 8.64005 20.8397C8.48555 20.6732 8.30992 20.481 8.11749 20.2659C7.37236 19.4328 6.38061 18.2605 5.39108 16.9017C4.39956 15.5402 3.42382 14.0099 2.69916 12.4602C1.9701 10.9011 1.52539 9.38588 1.52539 8.03738C1.52539 4.15974 4.70169 1 8.64005 1C12.5784 1 15.7547 4.15974 15.7547 8.03738Z" stroke="black" stroke-width="2"/>
                                    <path d="M11.5786 8.03739C11.5786 9.63411 10.2698 10.9407 8.64014 10.9407C7.01048 10.9407 5.70166 9.63411 5.70166 8.03739C5.70166 6.44066 7.01048 5.13403 8.64014 5.13403C10.2698 5.13403 11.5786 6.44066 11.5786 8.03739Z" stroke="black" stroke-width="1.5"/>
                                </svg>
                                <p class="text location_text"><?= $item['location'] ?></p>
                            </div>
                            <div class="characteristics">
                                <div class="characteristics_date">
                                    <div class="characteristics-item">
                                        <svg class="icon" width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.543945 2.9032H3.57275V5.9032H7.61122V2.9032H12.6593V5.90318H16.6978V2.9032H19.7266V18.9032H0.543945V2.9032ZM17.7075 6.9032H2.56323V16.9032H17.7075V6.9032Z" fill="black"/>
                                            <rect x="4.58252" y="0.903198" width="2.01923" height="4" fill="black"/>
                                            <rect x="13.6689" y="0.903198" width="2.01923" height="4" fill="black"/>
                                            <rect x="10.6401" y="7.9032" width="2.01923" height="2" fill="black"/>
                                            <rect x="13.6689" y="7.9032" width="2.01923" height="2" fill="black"/>
                                            <rect x="10.6401" y="10.9032" width="2.01923" height="2" fill="black"/>
                                            <rect x="13.6689" y="10.9032" width="2.01923" height="2" fill="black"/>
                                            <rect x="4.58252" y="10.9032" width="2.01923" height="2" fill="black"/>
                                            <rect x="7.61133" y="10.9032" width="2.01923" height="2" fill="black"/>
                                            <rect x="10.6401" y="13.9032" width="2.01923" height="2" fill="black"/>
                                            <rect x="13.6689" y="13.9032" width="2.01923" height="2" fill="black"/>
                                            <rect x="4.58252" y="13.9032" width="2.01923" height="2" fill="black"/>
                                            <rect x="7.61133" y="13.9032" width="2.01923" height="2" fill="black"/>
                                        </svg>
                                        <div>
                                            <p class="text"><?= $item['date_start'] ?>,</p>
                                            <p class="text"><?= $item['date_end'] ?></p>
                                        </div>
                                    </div>
                                    <div class="characteristics-item">
                                        <svg class="icon" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.21969 5.89036C8.81203 5.97545 8.44684 6.17712 8.17892 6.46448C7.80216 6.86801 7.62335 7.34528 7.61139 7.98177C7.6074 8.28845 7.59564 8.34664 7.5181 8.42815C7.34726 8.61447 7.35065 9.10349 7.52926 9.4333C7.64189 9.63895 7.74654 9.73221 7.89785 9.75573C7.96781 9.7635 8.00649 9.82169 8.08782 10.0391C8.36311 10.7495 8.77436 11.3009 9.186 11.5028C9.44993 11.6311 9.83446 11.7009 10.11 11.67C11.1079 11.5578 11.5739 11.0341 11.8191 9.76111C11.862 9.53991 11.8971 9.3498 11.8971 9.33804C11.8971 9.33027 11.9397 9.3225 11.9902 9.3225C12.1881 9.3225 12.402 8.94228 12.4022 8.58518C12.4024 8.27849 12.2124 7.88651 12.0687 7.88631C12.0416 7.88631 12.0065 7.82035 11.9949 7.73885C11.8401 6.81899 11.3279 6.16656 10.5746 5.92563C10.3223 5.84772 10.1903 5.82839 9.86795 5.83217C9.65067 5.83237 9.35943 5.85947 9.21969 5.89036Z" fill="black"/>
                                            <path d="M11.8252 11.4495C11.7553 11.4921 11.666 11.5814 11.6311 11.6473C11.5962 11.7133 11.5069 11.8414 11.4407 11.9345C11.2037 12.2488 10.6678 12.4231 9.89517 12.4305C9.33601 12.4381 9.14205 12.3757 8.84323 12.0848C8.49398 11.743 8.32314 11.7159 7.95794 11.9484C7.67068 12.1306 7.34037 12.2976 6.88227 12.4953C6.18716 12.7938 5.80282 13.1313 5.65889 13.5582C5.60447 13.7174 5.5965 13.8376 5.61962 14.2373C5.61205 14.2333 5.71172 15.429 5.71172 15.429L10.5231 14.9112C10.5157 14.9106 15.3399 14.3925 15.3399 14.3925C15.3399 14.3925 15.2203 13.2567 15.2137 13.2599C15.0937 12.34 14.7367 12.0254 13.5448 11.7803C13.2691 11.7219 12.8654 11.6131 12.6519 11.5391C12.1476 11.3604 11.9923 11.3449 11.8252 11.4495Z" fill="black"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.553 3.28143L2.25961 4.93506L3.66445 17.0233L17.9578 15.3697L16.553 3.28143ZM0.413086 3.47278L2.20229 18.8684L19.8043 16.8319L18.0151 1.43636L0.413086 3.47278Z" fill="black"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2769 3.22712L2.54862 0.968018L0 16.4943L3.56196 17.0805L2.1476 4.86751L16.2769 3.22712ZM16.6551 3.28936L18.0651 15.4652L3.80628 17.1207L17.7222 19.4106L20.2708 3.88436L16.6551 3.28936Z" fill="black"/>
                                        </svg>
                                        <div>
                                            <p class="text"><?= $item['qty_photos'] ?> шт.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="characteristics_time">
                                    <div class="characteristics-item">
                                        <svg class="icon" width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.08643 3.53699V10.6018H14.1345" stroke="black" stroke-width="1.5"/>
                                            <path d="M18.1827 9.5C18.1827 14.1854 14.3453 18 9.59135 18C4.83744 18 1 14.1854 1 9.5C1 4.81458 4.83744 1 9.59135 1C14.3453 1 18.1827 4.81458 18.1827 9.5Z" stroke="black" stroke-width="2"/>
                                        </svg>
                                        <div>
                                            <p class="text"><?= $item['time_start'] ?> - <?= $item['time_end'] ?></p>
                                        </div>
                                    </div>
                                    <div class="characteristics-item">
                                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.58174 0.166504H9.59135C14.8885 0.166504 19.1827 4.4198 19.1827 9.6665C19.1827 14.9132 14.8885 19.1665 9.59135 19.1665C4.2942 19.1665 0 14.9132 0 9.6665C0 6.93429 0.951332 4.63134 2.81423 2.89955L4.31848 4.28369C2.84526 5.65322 2.01923 7.50938 2.01923 9.6665C2.01923 13.8086 5.40939 17.1665 9.59135 17.1665C13.7733 17.1665 17.1635 13.8086 17.1635 9.6665C17.1635 5.86343 14.3056 2.72148 10.601 2.23259V4.74545H8.58174V0.166504Z" fill="black"/>
                                            <path d="M10.4702 10.6665L3.02881 4.1665" stroke="black" stroke-width="1.5"/>
                                        </svg>
                                        <div>
                                            <p class="text"><?= $item['duration'] ?> час</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="characteristics-price">
                                    <div class="characteristics-item">
                                        <p><span class="text">Предоплата:</span> <span class="text_big"><?= $item['prepayment'] ?>р.</span></p>
                                    </div>
                                    <div class="characteristics-item">
                                        <h2><?= $item['price'] ?>р.</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-btn-group">
                            <?= Html::a('Подробнее', ['/project', 'id' => $item['id']], ['class' => 'btn btn_border_red btn_transparent btn-project']) ?>
                            <div class="btn btn_border_red btn_red btn-project">Записаться</div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</main>