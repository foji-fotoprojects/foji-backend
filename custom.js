const btn = document.getElementById('btn-test');
const canselSection = document.getElementById('cancel-section');

btn.addEventListener('click', () => {
    canselSection.insertAdjacentHTML('beforebegin', 
                           
`
    <section class='project-section'>
        <img class='project-section__img' src='images/card-section.jpg'/>
        
        <div class='project-section__body'>
            <div class='body-about'>
                <p class='body-about__tags'>Для пар</p>
                <svg width="4" height="3" viewBox="0 0 4 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2.2998" cy="1.5" r="1.5" fill="#FF4546" fill-opacity="0.8"/>
                </svg>
                <p class='body-about__tags'>На природе</p>
            </div>
            <p class='body-about__title'>Зимняя Love Story</p>
            <div class='body-location'>
                <div class='location__city'>
                    <p class='city__word'>Город: </p>
                    <p class='city__name'>Москва</p>
                </div>
                <div class='location__address'>
                    
                    <svg width="15" height="21" viewBox="0 0 15 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.8528 7.42639C13.8528 8.65881 13.4499 10.0485 12.785 11.4841C12.1244 12.9105 11.2342 14.3203 10.3286 15.5758C9.42484 16.8287 8.51894 17.9098 7.83825 18.6782C7.6891 18.8466 7.551 18.9996 7.42639 19.1359C7.30178 18.9996 7.16369 18.8466 7.01454 18.6782C6.33384 17.9098 5.42794 16.8287 4.52423 15.5758C3.61856 14.3203 2.72839 12.9105 2.06777 11.4841C1.40287 10.0485 1 8.65881 1 7.42639C1 3.87719 3.87719 1 7.42639 1C10.9756 1 13.8528 3.87719 13.8528 7.42639Z" stroke="black" stroke-width="2"/>
                    <circle cx="7.42641" cy="7.42641" r="2.62563" stroke="black" stroke-width="1.5"/>
                    </svg>
                    
                    <p class='address'>
                        м. Речной вокзал, ул. Фестивальная, д.2, к.3, кв.61
                    </p>
                </div>
            </div>
            <div class='body-information'>
                <div class='information1'>
                    <div class='information__data'>
                        <div class='data__img tagImg'>
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2H3V5H7V2H12V5H16V2H19V18H0V2ZM17 6H2V16H17V6Z" fill="black"/>
                                <rect x="4" width="2" height="4" fill="black"/>
                                <rect x="13" width="2" height="4" fill="black"/>
                                <rect x="10" y="7" width="2" height="2" fill="black"/>
                                <rect x="13" y="7" width="2" height="2" fill="black"/>
                                <rect x="10" y="10" width="2" height="2" fill="black"/>
                                <rect x="13" y="10" width="2" height="2" fill="black"/>
                                <rect x="4" y="10" width="2" height="2" fill="black"/>
                                <rect x="7" y="10" width="2" height="2" fill="black"/>
                                <rect x="10" y="13" width="2" height="2" fill="black"/>
                                <rect x="13" y="13" width="2" height="2" fill="black"/>
                                <rect x="4" y="13" width="2" height="2" fill="black"/>
                                <rect x="7" y="13" width="2" height="2" fill="black"/>
                            </svg> 
                        </div>
                        <p class='data__text'>02.02.2019</p>
                    </div>
                    <div class='information__sum'>
                        <div class='sum__img tagImg'>
                            <svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.6499 13.6653C9.23883 13.7012 8.85551 13.858 8.55755 14.1114C8.13861 14.4672 7.90546 14.9197 7.81724 15.5502C7.77649 15.8542 7.75793 15.9105 7.67189 15.9822C7.48153 16.1469 7.42612 16.6328 7.56213 16.9814C7.64818 17.199 7.73989 17.304 7.88584 17.3454C7.95371 17.3614 7.98474 17.4238 8.0386 17.6493C8.22397 18.3873 8.56212 18.9837 8.94264 19.233C9.18675 19.3918 9.55648 19.5068 9.83109 19.5089C10.8258 19.5163 11.347 19.0518 11.741 17.8172C11.8097 17.6027 11.8671 17.4182 11.8685 17.4065C11.8694 17.3988 11.9123 17.3962 11.9619 17.4022C12.1565 17.4257 12.4125 17.0737 12.4556 16.7192C12.4926 16.4147 12.3529 16.003 12.2116 15.9857C12.1849 15.9825 12.1584 15.9128 12.1568 15.8305C12.115 14.8989 11.6898 14.1903 10.978 13.8615C10.7392 13.7541 10.6117 13.7192 10.2943 13.6846C10.0807 13.659 9.79102 13.6512 9.6499 13.6653Z" fill="black"/>
                                <path d="M11.5441 19.494C11.4702 19.528 11.3717 19.606 11.3295 19.6674C11.2872 19.7287 11.184 19.8453 11.1078 19.9298C10.837 20.2136 10.2891 20.3229 9.52848 20.2383C8.97774 20.1793 8.79451 20.0943 8.53562 19.7699C8.23325 19.3891 8.06852 19.3419 7.68148 19.5293C7.37715 19.6759 7.03229 19.8024 6.5581 19.9442C5.83873 20.1578 5.42026 20.4472 5.22747 20.8538C5.15483 21.0054 5.13256 21.1238 5.10728 21.5234C5.10031 21.5185 5.0547 22.7174 5.0547 22.7174L9.84795 22.7758C9.84077 22.7743 14.6466 22.8339 14.6466 22.8339C14.6466 22.8339 14.6654 21.6921 14.6586 21.6944C14.6511 20.767 14.3378 20.4121 13.1953 20.027C12.9312 19.9362 12.5473 19.7802 12.3463 19.6814C11.8718 19.4439 11.721 19.41 11.5441 19.494Z" fill="black"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.1729 11.9439L2.91948 11.8882L2.84626 24.0561L17.0997 24.1118L17.1729 11.9439ZM1.27979 10.2172L1.18653 25.7142L18.7394 25.7828L18.8326 10.2858L1.27979 10.2172Z" fill="black"/>
                                <path d="M13.6447 12.5193C13.7916 12.4274 13.9343 12.3246 14.0721 12.2128C14.6577 11.7383 15.1862 11.0806 15.6297 10.3271C16.0209 9.66214 16.3545 8.9079 16.605 8.11255C16.8554 8.9079 17.189 9.66214 17.5803 10.3271C18.0238 11.0806 18.5523 11.7383 19.1378 12.2128C19.2846 12.3318 19.4367 12.4406 19.5937 12.5369C19.4252 12.6563 19.2636 12.7908 19.11 12.9355C18.5321 13.4794 18.0101 14.2166 17.5725 15.0175C17.2027 15.6942 16.8822 16.4369 16.6358 17.1773C16.3823 16.36 16.0382 15.5591 15.6337 14.8453C15.1934 14.0683 14.6684 13.3708 14.0868 12.8614C13.9451 12.7373 13.7975 12.6223 13.6447 12.5193Z" fill="white" stroke="black"/>
                                <path d="M20.2066 5.01412C20.2875 4.96086 20.3662 4.90285 20.4427 4.84091C20.8379 4.52061 21.1932 4.07793 21.4907 3.57248C21.7329 3.16088 21.9421 2.69832 22.105 2.2101C22.2678 2.69832 22.4771 3.16088 22.7193 3.57248C23.0167 4.07793 23.3721 4.52061 23.7673 4.84091C23.85 4.9079 23.9353 4.97029 24.0232 5.02705C23.927 5.09852 23.8347 5.1769 23.7464 5.25995C23.3569 5.6265 23.0065 6.12198 22.7134 6.65836C22.4859 7.07477 22.286 7.52887 22.1269 7.98514C21.9612 7.47919 21.7447 6.98596 21.4937 6.543C21.1986 6.02222 20.8459 5.55312 20.4536 5.20957C20.3741 5.13994 20.2917 5.07438 20.2066 5.01412Z" fill="white" stroke="black" stroke-width="0.75"/>
                            </svg>
                        </div>
                        <p class='sum__text'>10 шт.</p>
                    </div>
                </div>
                <div class='information2'>
                    <div class='information__time'>
                        <div class='time__img tagImg'>
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 3.53699V10.6018H14" stroke="black" stroke-width="1.5"/>
                                <circle cx="9.5" cy="9.5" r="8.5" stroke="black" stroke-width="2"/>
                            </svg>
                        </div>
                        <p class='time__text'>9:00-10:00</p>
                    </div>
                    <div class='information__hours'>
                        <div class='hours__img tagImg'>
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 0H9.5C14.7467 0 19 4.25329 19 9.5C19 14.7467 14.7467 19 9.5 19C4.25329 19 0 14.7467 0 9.5C0 6.76778 0.942271 4.46483 2.78742 2.73305L4.27734 4.11719C2.81816 5.48672 2 7.34287 2 9.5C2 13.6421 5.35786 17 9.5 17C13.6421 17 17 13.6421 17 9.5C17 5.69692 14.1694 2.55498 10.5 2.06609V4.57895H8.5V0Z" fill="black"/>
                                <path d="M10.3705 10.5L3 4" stroke="black" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <p class='hours__text'>1 час</p>
                    </div>
                </div>
                <div class='information3'>
                    <div class='information__money'>
                        <p class='price'>5 000 р.</p>
                    </div>
                    <div class='information__undo-price'>
                        <p class='undo-price__text'>Предоплата:</p>
                        <p class='undo-price__price'>2 500 р.</p>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class='project-section__buttons'>
            <div class='buttons-request'>
                <div class='buttons-request__status'>
                    <div class='status-check'></div>
                    <div class='status-text'>
                        
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 7.05555L4.5 12.6065L13.5 1" stroke="#FF4546" stroke-width="2"/>
                        </svg>

                        
                        <p class='status-text__undone'>Заявка отправлена</p>
                        <p class='status-text__done hidden'>Проект завершен</p>
                        <p class='status-text__checked hidden'>Заявка подтверждена</p>
                        <p class='status-text__notChecked hidden'>Заявка отклонена</p>
                        <p class='status-text__cancel'>(Отменить)</p>
                    </div>
                    <button class='button-request hidden'>Записаться</button>
                    <button class='button-message'>Написать организатору</button>
                    <button class='button-review hidden'>Оставить отзыв</button>
                    <button class='button-moreReview hidden'>Дополнить отзыв</button>
                    <button class='button-about'>Подробнее</button>
                </div>
            </div>
        </div>
    </section>
    
    `
                          
                          );
});