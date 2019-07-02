<?php
use yii\helpers\Html;
?>

<main class="project">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=041822d9-495d-475a-bb46-b61dfd7f6c59"
            type="text/javascript"></script>
    <div class="container">
        <div class="breadcrumbs">
            <?= Html::a('< К списку фотопроектов', ['/'], ['class' => 'text']) ?>
        </div>
        <div class="about-project">
            <div class="arrow-left"></div>


            <div class="project-information">
                <header class="project-header">
                    <p class="additional_text_red additional_text_mini">
                        <?= $project['theme'] ?>
                    </p>
                    <h2><?= $project['name'] ?></h2>
                    <p class="text"><span class="city">Город:</span> В базе не указан город</p>
                </header>
                <div class="project-content">
                    <div class="project-main-information">
                        <?= Html::img('images/project/lovestory.jpg', ['class' => 'project-image', 'alt' => $project['name']]) ?>
                        <div class="project-tabs">
                            <div class="tabs-container">
                                <ul class="tabs">
                                    <li class="tabs-item text_big active">
                                        <p>Описание</p>
                                    </li>
                                    <li class="tabs-item text_big">
                                        <p>Отзывы</p>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <div class="text tabs-panel active" data-index="0">
                                        <?= $project['info'] ?>
                                    </div>
                                    <div class="text tabs-panel" data-index="1">
                                        Отзывы о фотопроекте. Весьма существенно следующее: диониссийское
                                        начало дает синтез искусств. Мимезис неравномерен. Эпитет готично
                                        заканчивает символический метафоризм.
                                        Социально-психологический фактор изящно дает суггестивный декаданс.
                                        Интенция изящно просветляет суггестивный символический метафоризм.
                                        Выразительное фактурно. Текст, так или иначе, образует сокращенный
                                        горизонт ожидания. Теория вчувствования свободна. Восприятие
                                        сотворчества просветляет комплекс агрессивности. Инвариант дает
                                        незначительный синхронический подход.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-included">
                            <?php if ($project['makeup']): ?>
                                <div class="project-included-item">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7.46296L4.5 13.0139L13.5 1.40741" stroke="black"
                                              stroke-width="2"/>
                                    </svg>
                                    <p class="text">Макияж</p>
                                </div>
                            <?php endif; ?>
                            <?php if ($project['costume']): ?>
                                <div class="project-included-item">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7.46296L4.5 13.0139L13.5 1.40741" stroke="black"
                                              stroke-width="2"/>
                                    </svg>
                                    <p class="text">Костюм</p>
                                </div>
                            <?php endif; ?>
                            <?php if ($project['hairstyle']): ?>
                                <div class="project-included-item">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7.46296L4.5 13.0139L13.5 1.40741" stroke="black"
                                              stroke-width="2"/>
                                    </svg>
                                    <p class="text">Прическа</p>
                                </div>
                            <?php endif; ?>
                            <?php if ($project['studio']): ?>
                                <div class="project-included-item">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7.46296L4.5 13.0139L13.5 1.40741" stroke="black"
                                              stroke-width="2"/>
                                    </svg>
                                    <p class="text">Студия</p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if ($project['studio']): ?>
                            <div class="project-studio">
                                <p class="text"><span>Студия: </span>"<?= $project['studio'] ?>"</p>
                            </div>
                        <?php endif; ?>
                        <div class="project-photographer">
                            <div class="project-photographer-name">
                                <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.17451 0.624834C5.12878 0.644384 5.05721 0.690114 5.01471 0.729214C4.97238 0.768314 4.72775 1.22153 4.4702 1.73663L4.00083 2.67231L2.24354 2.68217C0.525344 2.69186 0.483014 2.69186 0.394954 2.76037C0.345994 2.79624 0.274254 2.86798 0.238384 2.91694C0.170044 3.00483 0.170044 3.00806 0.170044 7.89199C0.170044 12.7759 0.170044 12.7791 0.238554 12.8672C0.274424 12.9162 0.346164 12.9879 0.395124 13.0238L0.483185 13.0923H8.50006H16.5171L16.6052 13.0238C16.6541 12.9879 16.7259 12.9162 16.7617 12.8672C16.8302 12.7791 16.8302 12.7759 16.8302 7.89199C16.8302 3.00806 16.8302 3.00483 16.7617 2.91677C16.7259 2.86781 16.6541 2.79607 16.6052 2.7602C16.5171 2.69169 16.4748 2.69169 14.7566 2.682L12.9993 2.67214L12.5297 1.73646C12.2722 1.22136 12.0277 0.768144 11.9852 0.729044C11.9427 0.689944 11.8645 0.644214 11.8157 0.624664C11.6918 0.575874 5.29198 0.579104 5.17451 0.624834ZM11.7734 2.56793C12.031 3.08626 12.2754 3.53948 12.3179 3.57858C12.3604 3.61768 12.4386 3.66341 12.4874 3.68296C12.5495 3.70574 13.1297 3.71883 14.1925 3.71883H15.8031V7.89199V12.0651H8.50006H1.19702V7.89199V3.71883H2.8076C3.87044 3.71883 4.45082 3.70574 4.5127 3.68296C4.56166 3.66341 4.63986 3.61768 4.68219 3.57858C4.72452 3.53948 4.96915 3.08626 5.2267 2.56793L5.69624 1.63225H8.50006H11.3039L11.7734 2.56793Z"
                                          fill="black"/>
                                    <path d="M8.05996 3.21661C7.31009 3.33068 6.71339 3.56545 6.13641 3.97294C5.28216 4.57627 4.65299 5.51518 4.41822 6.52906C4.33339 6.90068 4.31724 7.70937 4.38881 8.07113C4.55507 8.91553 4.96256 9.67203 5.58204 10.2881C6.19166 10.8977 6.87965 11.276 7.72404 11.4682C8.05656 11.5432 8.94345 11.5432 9.27597 11.4682C10.1204 11.2758 10.8116 10.8945 11.418 10.2881C12.0244 9.68172 12.4058 8.9905 12.5981 8.1461C12.6372 7.97661 12.6503 7.75493 12.6503 7.37022C12.6503 6.98551 12.6372 6.76383 12.5981 6.59434C12.4057 5.74995 12.0276 5.06196 11.418 4.45234C10.8148 3.84595 10.104 3.45461 9.27597 3.27543C9.0446 3.22647 8.25886 3.18737 8.05996 3.21661ZM9.29892 4.33487C10.2802 4.57933 11.0399 5.23468 11.3986 6.14112C11.5648 6.55847 11.6138 6.84526 11.6104 7.38654C11.6104 7.99939 11.5387 8.31254 11.291 8.82101C10.9812 9.44695 10.577 9.85121 9.95104 10.1609C9.4424 10.4088 9.12943 10.4804 8.51658 10.4804C8.14819 10.4836 7.96238 10.4673 7.76671 10.4217C7.16678 10.2815 6.69741 10.0272 6.28329 9.61967C5.85285 9.19586 5.59207 8.71986 5.44859 8.1036C5.36376 7.74167 5.36376 6.99843 5.44859 6.6365C5.58884 6.03334 5.85285 5.54765 6.26697 5.13676C6.74943 4.6509 7.24175 4.4129 8.07645 4.25973C8.27195 4.22403 9.0446 4.26976 9.29892 4.33487Z"
                                          fill="black"/>
                                    <path d="M8.0437 4.81091C6.87002 5.04568 5.89185 6.2095 5.89185 7.37026C5.89185 8.7102 7.16004 9.97839 8.49998 9.97839C9.31836 9.97839 10.1888 9.47638 10.6811 8.72652C11.2417 7.86258 11.2417 6.87794 10.6811 6.014C10.0847 5.1011 9.01848 4.61541 8.0437 4.81091ZM8.86531 5.84128C9.58254 5.99122 10.065 6.60424 10.065 7.37043C10.065 8.2767 9.40642 8.93527 8.50015 8.93527C7.46009 8.93527 6.77873 8.08443 6.97117 7.02482C7.12434 6.17703 7.9655 5.65207 8.86531 5.84128Z"
                                          fill="black"/>
                                </svg>
                                <p class="text">Наталья Васильева</p>
                            </div>
                            <div class="project-photographer-description">
                                <p class="text">
                                    Откуда все же берем информацию о фотогрофах???
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="project-sub-information">
                        <div class="project-characteristics">
                            <div class="project-characteristics-item">
                                <div class="project-characteristics-icon">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M0.00012207 2H3.00012V5H7.00012V2H12.0001V5H16.0001V2H19.0001V18H0.00012207V2ZM17.0001 6H2.00012V16H17.0001V6Z"
                                              fill="black"/>
                                        <rect x="4.00012" width="2" height="4" fill="black"/>
                                        <rect x="13.0001" width="2" height="4" fill="black"/>
                                        <rect x="10.0001" y="7" width="2" height="2" fill="black"/>
                                        <rect x="13.0001" y="7" width="2" height="2" fill="black"/>
                                        <rect x="10.0001" y="10" width="2" height="2" fill="black"/>
                                        <rect x="13.0001" y="10" width="2" height="2" fill="black"/>
                                        <rect x="4.00012" y="10" width="2" height="2" fill="black"/>
                                        <rect x="7.00012" y="10" width="2" height="2" fill="black"/>
                                        <rect x="10.0001" y="13" width="2" height="2" fill="black"/>
                                        <rect x="13.0001" y="13" width="2" height="2" fill="black"/>
                                        <rect x="4.00012" y="13" width="2" height="2" fill="black"/>
                                        <rect x="7.00012" y="13" width="2" height="2" fill="black"/>
                                    </svg>
                                </div>
                                <div class="project-characteristics-text">
                                    <p class="text"><?= $project['date_start'] ?></p>
                                    <p class="text"><?= $project['date_end'] ?></p>
                                </div>
                            </div>
                            <div class="project-characteristics-item">
                                <div class="project-characteristics-icon">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.00012 3.53702V10.6018H14.0001" stroke="black"
                                              stroke-width="1.5"/>
                                        <circle cx="9.50012" cy="9.5" r="8.5" stroke="black" stroke-width="2"/>
                                    </svg>
                                </div>
                                <div class="project-characteristics-text">
                                    <p class="text"><?= $project['time_start'] ?> - <?= $project['time_end'] ?></p>
                                </div>
                            </div>
                            <div class="project-characteristics-item">
                                <div class="project-characteristics-icon">
                                    <svg width="26" height="28" viewBox="0 0 26 28" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5453 13.6653C10.1342 13.7013 9.75089 13.858 9.45293 14.1114C9.03399 14.4672 8.80084 14.9198 8.71263 15.5502C8.67187 15.8542 8.65332 15.9106 8.56728 15.9823C8.37691 16.1469 8.3215 16.6328 8.45752 16.9815C8.54357 17.199 8.63527 17.3041 8.78122 17.3454C8.84909 17.3614 8.88013 17.4238 8.93399 17.6493C9.11935 18.3874 9.4575 18.9837 9.83803 19.2331C10.0821 19.3919 10.4519 19.5069 10.7265 19.509C11.7212 19.5163 12.2424 19.0519 12.6364 17.8173C12.7051 17.6028 12.7624 17.4182 12.7638 17.4065C12.7648 17.3988 12.8077 17.3962 12.8573 17.4022C13.0519 17.4257 13.3079 17.0737 13.351 16.7192C13.388 16.4148 13.2483 16.003 13.107 15.9857C13.0803 15.9825 13.0538 15.9129 13.0522 15.8306C13.0104 14.8989 12.5852 14.1903 11.8734 13.8615C11.6346 13.7541 11.5071 13.7192 11.1897 13.6846C10.976 13.659 10.6864 13.6512 10.5453 13.6653Z"
                                              fill="black"/>
                                        <path d="M12.4395 19.4941C12.3656 19.5281 12.2671 19.6061 12.2248 19.6674C12.1826 19.7288 12.0794 19.8453 12.0032 19.9298C11.7323 20.2136 11.1845 20.323 10.4239 20.2384C9.87313 20.1794 9.68989 20.0944 9.43101 19.77C9.12864 19.3892 8.96391 19.3419 8.57687 19.5293C8.27253 19.676 7.92767 19.8025 7.45348 19.9442C6.73412 20.1579 6.31565 20.4473 6.12285 20.8539C6.05022 21.0055 6.02794 21.1238 6.00267 21.5234C5.9957 21.5186 5.95009 22.7174 5.95009 22.7174L10.7433 22.7759C10.7362 22.7744 15.542 22.834 15.542 22.834C15.542 22.834 15.5608 21.6921 15.554 21.6945C15.5465 20.767 15.2332 20.4122 14.0906 20.027C13.8266 19.9363 13.4427 19.7802 13.2416 19.6814C12.7672 19.444 12.6164 19.4101 12.4395 19.4941Z"
                                              fill="black"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M18.068 11.944L3.81462 11.8883L3.74141 24.0561L17.9948 24.1118L18.068 11.944ZM2.17493 10.2173L2.08168 25.7142L19.6345 25.7828L19.7277 10.2859L2.17493 10.2173Z"
                                              fill="black"/>
                                        <path d="M14.5398 12.5194C14.6866 12.4275 14.8293 12.3246 14.9672 12.2129C15.5527 11.7383 16.0812 11.0807 16.5247 10.3271C16.916 9.6622 17.2495 8.90796 17.5 8.11261C17.7505 8.90796 18.084 9.6622 18.4753 10.3271C18.9188 11.0807 19.4473 11.7383 20.0328 12.2129C20.1796 12.3318 20.3318 12.4407 20.4887 12.537C20.3202 12.6564 20.1587 12.7909 20.005 12.9355C19.4271 13.4794 18.9051 14.2166 18.4675 15.0176C18.0977 15.6943 17.7772 16.437 17.5309 17.1774C17.2773 16.36 16.9332 15.5591 16.5288 14.8454C16.0884 14.0683 15.5634 13.3708 14.9818 12.8615C14.8401 12.7374 14.6925 12.6223 14.5398 12.5194Z"
                                              fill="white" stroke="black"/>
                                        <path d="M21.1016 5.01418C21.1825 4.96092 21.2612 4.90291 21.3377 4.84097C21.7329 4.52067 22.0883 4.07799 22.3857 3.57254C22.6279 3.16094 22.8371 2.69838 23 2.21017C23.1629 2.69838 23.3721 3.16094 23.6143 3.57254C23.9117 4.07799 24.2671 4.52067 24.6623 4.84097C24.745 4.90796 24.8304 4.97035 24.9182 5.02711C24.822 5.09858 24.7297 5.17696 24.6414 5.26001C24.252 5.62656 23.9015 6.12204 23.6084 6.65842C23.3809 7.07483 23.181 7.52894 23.0219 7.9852C22.8562 7.47925 22.6398 6.98602 22.3888 6.54306C22.0936 6.02228 21.7409 5.55318 21.3486 5.20963C21.2691 5.14 21.1867 5.07444 21.1016 5.01418Z"
                                              fill="white" stroke="black" stroke-width="0.75"/>
                                    </svg>
                                </div>
                                <div class="project-characteristics-text">
                                    <p class="text"><?= $project['qty_photos'] ?> шт</p>
                                </div>
                            </div>
                            <div class="project-characteristics-item">
                                <div class="project-characteristics-icon">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8.50012 6.10352e-05H9.50012C14.7468 6.10352e-05 19.0001 4.25336 19.0001 9.50006C19.0001 14.7468 14.7468 19.0001 9.50012 19.0001C4.25342 19.0001 0.00012207 14.7468 0.00012207 9.50006C0.00012207 6.76784 0.942393 4.46489 2.78755 2.73311L4.27747 4.11725C2.81829 5.48678 2.00012 7.34293 2.00012 9.50006C2.00012 13.6422 5.35799 17.0001 9.50012 17.0001C13.6423 17.0001 17.0001 13.6422 17.0001 9.50006C17.0001 5.69698 14.1695 2.55504 10.5001 2.06615V4.57901H8.50012V6.10352e-05Z"
                                              fill="black"/>
                                        <path d="M10.3706 10.5001L3.00012 4.00006" stroke="black"
                                              stroke-width="1.5"/>
                                    </svg>
                                </div>
                                <div class="project-characteristics-text">
                                    <p class="text"><?= $project['duration'] ?> час</p>
                                </div>
                            </div>
                        </div>
                        <div class="project-processing">
                            <p class="text"><span>Время обработки фото:</span> 30 дней (нет в БД)</p>
                        </div>
                        <div class="project-payment">
                            <p class="text"><span>Способ оплаты:</span> <?= $project['payment_method'] ?></p>
                        </div>
                        <div class="project-pricing">
                            <div class="project-prepayment">
                                <p class="text">Предоплата:</p>
                                <p class="text_big"><?= $project['prepayment'] ?> р.</p>
                            </div>
                            <div class="project-price">
                                <p class="text">Стоимость:</p>
                                <p class="text_big"><?= $project['price'] ?> р.</p>
                            </div>
                        </div>
                        <div class="btn btn_border_red btn_red btn-project">Записаться</div>
                        <div class="project-location">
                            <div class="project-address">
                                <svg width="16" height="21" viewBox="0 0 16 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.7651 7.42645C14.7651 8.65888 14.3623 10.0486 13.6974 11.4842C13.0367 12.9105 12.1466 14.3203 11.2409 15.5759C10.3372 16.8288 9.4313 17.9099 8.7506 18.6783C8.60145 18.8466 8.46336 18.9997 8.33875 19.136C8.21414 18.9997 8.07604 18.8466 7.92689 18.6783C7.24619 17.9099 6.34029 16.8288 5.43658 15.5759C4.53091 14.3203 3.64075 12.9105 2.98013 11.4842C2.31522 10.0486 1.91235 8.65888 1.91235 7.42645C1.91235 3.87725 4.78955 1.00006 8.33875 1.00006C11.8879 1.00006 14.7651 3.87725 14.7651 7.42645Z"
                                          stroke="black" stroke-width="2"/>
                                    <circle cx="8.33889" cy="7.42644" r="2.62563" stroke="black"
                                            stroke-width="1.5"/>
                                </svg>
                                <p class="text"><?= $project['location'] ?></p>
                            </div>
                            <div id="map" class="project-map">

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="arrow-right"></div>
        </div>
    </div>
    <script>
        ymaps.ready(function () {
            let myMap = new ymaps.Map(
                'map',
                {
                    center: [55.751574, 37.573856],
                    zoom: 9,
                    controls: []
                },
            )
        })
    </script>
</main>
