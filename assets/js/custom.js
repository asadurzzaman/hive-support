( function( $ ) {
    "use strict";

    $(document).ready(function() {

        /* 
        ========================================
            Navbar Toggler
        ========================================
        */
        $(document).on('click', '.navbar-toggler', function() {
            $(".navbar-toggler").toggleClass("active");
        });

        $(document).on('click', '.click-nav-right-icon', function() {
            $(".show-nav-content").toggleClass("show");
        });

        /* 
        ========================================
            Show nav right content
        ========================================
        */
        $(document).on('click', '.click-content-show', function() {
            $(".right-contents-show").toggleClass("show");
        });

        /* 
        ========================================
            Dropdown Submenu
        ========================================
        */
        $(document).on('click', '.dashboard-list .has-children a', function(e) {
            var sh = $(this).parent('.has-children');
            if (sh.hasClass('open')) {
                sh.removeClass('open');
                sh.find('.submenu').children('.has-children').removeClass("open"); //2nd children remove 
                sh.find('.submenu').removeClass('open');
                sh.find('.submenu').slideUp(300);
            } else {
                sh.addClass('open');
                sh.children('.submenu').slideDown(300);
                sh.siblings('.has-children').children('.submenu').slideUp(300);
                sh.siblings('.has-children').removeClass('open');
                sh.siblings().find('.submenu').children('.has-children').removeClass('open'); //2nd Submenu children remove 
                sh.siblings().find('.submenu').slideUp(300); //2nd Submenu children Slide Up Down 
            }
        });

        /* 
        ========================================
            Dashboard Responsive Sidebar
        ========================================
        */
        $(document).on('click', '.close-bars, .body-overlay', function() {
            $('.dashboard-close, .dashboard-left-content, .body-overlay').removeClass('active');
        });
        $(document).on('click', '.sidebar-icon', function() {
            $('.dashboard-close, .dashboard-left-content, .body-overlay').toggleClass('active');
        });

        /*      
        ========================================
            Dropdown Search Input js
        ========================================
        */
       $(document).on('keyup', '.myInput_search', function() {
            let input, filter, ul, li, a, i, txtValue, block;

            block = $(this).closest(".hive-status-dropdown");
            input = $(this);

            filter = input.val().toUpperCase();
            ul = block.find(".search_list");
            li = ul.find("li");
            
            for (i = 0; i < li.length; i++) {
                a = $($(li[i]).find("a")[0]);

                txtValue = a.text();
                
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "block";
                } 
                else {
                    li[i].style.display = "none";
                }
                
            };
        });

        /*
        ========================================
            Click add Value text Js
        ========================================
        */
        $(document).on('click','.select_open', function() {
            $(this).removeClass('select_open');
        })

        $(document).on('click', '.hive-status-dropdown-menu-search', function(e) {
            e.preventDefault();
            $(this).closest('.hive-status-dropdown-menu').slideDown('fast');
        });

        $(document).on('focusout', function() {
            $('.hive-status-dropdown-menu').slideUp();

        });

        $(document).on('click', '.hive-status-dropdown-toggler', function(e) {
            e.preventDefault();
            $('body').addClass('select_open');
            // $(this).closest('.hive-status-dropdown').find('.hive-status-dropdown-menu').toggleClass('show-dropdown');
            $(this).closest('.hive-status-dropdown').find('.hive-status-dropdown-menu').slideToggle('fast').toggleClass('show-dropdown');
            // return false;
        });
        

        $(document).on('click', '.hive-status-dropdown-menu-list', function(e) {
            e.preventDefault();
            let hiveel = $(this);
            // let value = hiveel.data('value');
            let value = hiveel.text();
            let parentWrap = hiveel.closest('.hive-status-dropdown');
            parentWrap.find('.hive-add-dropdown-text').text(value);
            parentWrap.find('.hive-add-dropdown-text').attr('value', value);

            $(hiveel).closest('.hive-status-dropdown-menu').slideUp('fast').removeClass('show-dropdown');
            $(hiveel).siblings().children().removeClass('selected');
            $(hiveel).children().addClass('selected');
            $('body').removeClass('select_open');
            
            return false;
        });




        // $(document).on('focusout', function() {
        //     $('.hive-status-dropdown-menu').removeClass('show-dropdown');
        // })

        // $(document).on('click', '.hive-status-dropdown-toggler', function(e) {
        //     e.preventDefault();
        //     let dropdownToggle = $(this).closest('.hive-status-dropdown').find('.hive-status-dropdown-menu');

        //     $('.hive-status-dropdown-menu').removeClass('show-dropdown');

        //     if(dropdownToggle.hasClass('show-dropdown')) {
        //         $(dropdownToggle).removeClass('show-dropdown');
        //     }else{
        //         $(dropdownToggle).toggleClass('show-dropdown');
        //     }
  
        // });

        // $(document).on('click', '.hive-status-dropdown-menu-list', function(e) {
        //     e.preventDefault();
        //     let hiveel = $(this);
        //     let value = hiveel.data('value');
        //     // let parentWrap = hiveel.parent().parent();
        //     let parentWrap = hiveel.closest('.hive-status-dropdown');
        //     parentWrap.find('.hive-add-dropdown-text').text(value);
        //     parentWrap.find('.hive-add-dropdown-text').attr('value', value);

        //     $(hiveel).closest('.hive-status-dropdown-menu').removeClass('show-dropdown');
        //     $(hiveel).siblings().children().removeClass('selected');
        //     $(hiveel).children().addClass('selected');
        //     // $(".myInput_search").val('');

        //     return false;
        // });



         /*
        ========================================
            Summer note code editor Js
        ========================================
        */
        $('#summernote_activation').summernote();

        /*-------------------------------
            Click Short Code Popup
        ------------------------------*/
        $(document).on('click', '.hivePopup_overlay, .hivePopup_close', function(e) {
            $('.hiveShortCode_popup, .hivePopup_overlay').removeClass('show');
        });
        $(document).on('click', '.short-code-click', function(e) {
            $('.hiveShortCode_popup, .hivePopup_overlay').addClass('show');
        });

        /* 
        ========================================
            Click and Copy Clipboard
        ========================================
        */
        $(document).on('click', '.click-copy', function() {
            let copyText = $(this).parent().find(".myInput");
            copyText.select();
            // /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

        });

        /*
        ========================================
            Sortable Accordion Js
        ========================================
        */
        $(document).on('click', '.sortable_accordion', function(e) {
            let hiveSortable = $(this).parent().parent().parent('.hiveSortable_drag__item');
            if (hiveSortable.hasClass('open')) {
                hiveSortable.removeClass('open');
                hiveSortable.find('.hiveInputField__contents').removeClass('open');
                hiveSortable.find('.hiveInputField__contents').slideUp(300, "swing");
            } else {
                hiveSortable.addClass('open');
                hiveSortable.children('.hiveInputField__contents').slideDown(300, "swing");
                hiveSortable.siblings('.hiveSortable_drag__item').children('.hiveInputField__contents').slideUp(300, "swing");
                hiveSortable.siblings('.hiveSortable_drag__item').removeClass('open');
                hiveSortable.siblings('.hiveSortable_drag__item').find('.sortable_accordion').removeClass('open');
                hiveSortable.siblings('.hiveSortable_drag__item').find('.hiveInputField__contents').slideUp(300, "swing");
            }
        });

        /*          
        ========================================
            Sortable js
        ========================================
        */
        // $(".hiveSortable_drag, .hiveSortableCustom__drag").sortable();
        /*          
        ========================================
            Sortable Remove js
        ========================================
        */
        $(document).on('click','.sortDelete', function() {
            $(this).closest('.sortItemRemove').hide();
        });

         /*
        ========================================
            Row Check All Add on Click
        ========================================
        */
        if ($('.check-all-row').length) {
            $(document).on("click", ".check-all-row", function() {
                if ($(".check-all-row").is(':checked')) {
                    $('.row-check').prop('checked', true);
                } else {
                    $('.row-check').prop('checked', false);
                }
            });
        }
        
        /* 
        ========================================
            Select Country Code Js
        ========================================
        */
        // Vanilla Javascript
        if (document.querySelector('#phone') != null) {
            let TellInput = document.querySelector("#phone");
            window.intlTelInput(TellInput, {
                allowDropdown: true,
                excludeCountries: ["bn"],
            });
        };


        /*
        ========================================
            wow js init
        ========================================
        */
        new WOW().init();
        /* 
        ========================================
            Nice Select
        ========================================
        */
        // $('.js_nice_select').niceSelect();
        /* 
        ========================================
            Select2 Js
        ========================================
        */
        $('.js_select2').select2({
            closeOnSelect: false,
        });
        $(".js_select2_multi").select2({
            closeOnSelect: false,
        });
        /*
        ========================================
            Subscription Plan Js
        ========================================
        */
        let currentPlan = $('.hiveIntegration__subscription__item.current__plan')
        if(currentPlan.hasClass('current__plan')) {
            $(currentPlan).find('.hive_btn').text('Current Plan');
        }
        /*
        ========================================
            Faq Accordion
        ========================================
        */

        $(document).on('click', '.hive_faq_supporttemplate .hive_faq_supporttemplate__title', function(e) {
            let hive = $(this).parent('.hive_faq_supporttemplate__item');
            if (hive.hasClass('open')) {
                hive.removeClass('open');
                hive.find('.hive_faq_supporttemplate__panel').removeClass('open');
                hive.find('.hive_faq_supporttemplate__panel').slideUp(300, "swing");
            } else {
                hive.addClass('open');
                hive.children('.hive_faq_supporttemplate__panel').slideDown(300, "swing");
                hive.siblings('.hive_faq_supporttemplate__item').children('.hive_faq_supporttemplate__panel').slideUp(300, "swing");
                hive.siblings('.hive_faq_supporttemplate__item').removeClass('open');
                hive.siblings('.hive_faq_supporttemplate__item').find('.hive_faq_supporttemplate__title').removeClass('open');
                hive.siblings('.hive_faq_supporttemplate__item').find('.hive_faq_supporttemplate__panel').slideUp(300, "swing");
            }
        });
        /*
        ========================================
           Faq accordion
        ========================================
        */
        $(document).on('click','.hive_faq_contents .hive_faq_title', function(e) {
            let faq = $(this).closest('.hive_faq_item');
            if (faq.hasClass('open')) {
                faq.removeClass('open');
                faq.find('.hive_faq_panel').removeClass('open');
                faq.find('.hive_faq_panel').slideUp(300);
            } else {
                faq.addClass('open');
                faq.children('.hive_faq_panel').slideDown(300);
                faq.siblings('.hive_faq_item').closest('.hive_faq_panel').slideUp(300);
                faq.siblings('.hive_faq_item').removeClass('open');
                faq.siblings('.hive_faq_item').find('.hive_faq_title').removeClass('open');
                faq.siblings('.hive_faq_item').find('.hive_faq_panel').slideUp(300);
            }
        });

        /*-------------------------------
            Radio box active
        ------------------------------*/
        $(document).on('click', '.custom-radio-single', function(e) {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            if ($(this).hasClass('active')) {
                $(this).find('.radio-input').prop('checked', true);
            } else {
                $(this).find('.radio-input').prop('checked', false);
            }
        });

        // if ($('.check-all-row').length) {
        //     $(document).on("click", ".check-all-row", function() {
        //         if ($(".check-all-row").is(':checked')) {
        //             $('.row-check').prop('checked', true);
        //         } else {
        //             $('.row-check').prop('checked', false);
        //         }
        //     });
        // }


        // $(document).on("click", ".tab-monthly", function() {
        //     $('.input-switch').prop('checked', false);
        // });
        // $(document).on("click", ".tab-yearly", function() {
        //     $('.input-switch').prop('checked', true);
        // });

        // $(document).on("click", ".input-switch", function() {
        //     if ($(".input-switch:checked").length) {
        //         $(".pricing-tabs-switch .tab-yearly").click();
        //     } else {
        //         $(".pricing-tabs-switch .tab-monthly").click();
        //     }

        // });

        /* 
        ========================================
            Tab
        ========================================
        */
        $(document).on('click', 'ul.tabs li', function(e) {
            e.preventDefault();
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('active');
            $('.tab-content-item').removeClass('active');

            $(this).addClass('active');
            $("#" + tab_id).addClass('active');
        });

        $(document).on('click', '.tabs2 li', function() {
            var tab_id2 = $(this).attr('data-tab2');

            $('.tabs2 li').removeClass('active');
            $('.tab-content-item2').removeClass('active');

            $(this).addClass('active');
            $("#" + tab_id2).addClass('active');

        })
        /* 
        ========================================
            Password Show Hide On Click
        ========================================
        */
        // $(document).on("click", ".toggle-password", function(e) {
        //     e.preventDefault();
        //     let inputPass = $(this).parent().find("input");
        //     $(this).toggleClass("show-pass");
        //     if (inputPass.attr("type") == "password") {
        //         inputPass.attr("type", "text");
        //     } else {
        //         inputPass.attr("type", "password");
        //     }
        // });

        $(document).on("click", ".toggle-password", function(e) {
            e.preventDefault();
            let inputPass = $(this).parent().find("input");
            // $(this).toggleClass("show-pass");
            if (inputPass.attr("type") == "password") {
                inputPass.attr("type", "text");
                $(this).children().addClass('fa-eye').removeClass('fa-eye-slash');
            } else {
                inputPass.attr("type", "password");
                $(this).children().addClass('fa-eye-slash').removeClass('fa-eye');
            }
        });
        /* 
        ========================================
            CountDown Timer
        ========================================
        */
        
        /*
        ========================================
            Media Uploader js
        ========================================
        */
        $('.grid').masonry({
            // options
            itemSelector: '.grid-item',
            // columnWidth: 200,
          });
        /*
        ========================================
            Media Uploader js
        ========================================
        */
        let uploadImage = document.querySelector("#uploadImage");
        let inputTag = document.querySelector("#inputTag");

        if(inputTag != null) {
            inputTag.addEventListener('change', ()=> {

                let inputTag = document.querySelector("#inputTag").files[0];
                
                uploadImage.innerText = inputTag.name;
            });
        };

        // if(('#inputTag').length) {
        //     $(document).on('change', "#inputTag", function() {

        //         let inputTag = document.querySelector("#inputTag").files[0];
                
        //         uploadImage.innerText = inputTag.name;
        //     });
        // };
        
        /*      
        ========================================
            Flat Picker js
        ========================================
        */
        $(".date-picker").flatpickr({
            mode: "single",
            enableTime: true,
            dateFormat: "d-m-Y H:i",
            altInput: true,
            altFormat: "F j, Y",
            time_12hr: true,
        });
        /* 
        ========================================
            Quantity js
        ========================================
        */
        $(document).on('click', '.plus', function() {
            let selectedInput = $(this).closest('.common-quantity').find(".quantity-input");
            if (selectedInput.val()) {
                selectedInput[0].stepUp(1);
            }
        });
        $(document).on('click', '.substract', function() {
            let selectedInput = $(this).closest('.common-quantity').find(".quantity-input");
            if (selectedInput.val() > 1) {
                selectedInput[0].stepDown(1);
            }
        });

        /*          
        ========================================
           Custom Radio Close Js
        ========================================
        */
       $(document).on('click', '.custom-radio-close', function(){
        $(this).closest('.custom-radio-item').hide();
       });

        /*          
        ========================================
            Group Bar Charts Js
        ========================================
        */
       if($('#hive_groupChart').length > 0) {
            new Chart(document.getElementById("hive_groupChart"), {
                type: 'bar',
                data: {
                    labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                    datasets: [{
                        label: "Received",
                        backgroundColor: "#685BE7",
                        data: [5, 8, 4, 12, 14, 9, 11],
                        barThickness: 10,
                        hoverBackgroundColor: '#fff',
                        hoverBorderColor: '#685BE7',
                        borderColor: '#fff',
                        borderWidth: 2,
                    }, {
                        label: "Resolved",
                        backgroundColor: "#50DE88",
                        data: [13, 7, 10, 11, 13, 16, 11],
                        barThickness: 10,
                        hoverBackgroundColor: '#fff',
                        hoverBorderColor: '#50DE88',
                        borderColor: '#fff',
                        borderWidth: 2,
                    }, {
                        label: "Unresolved",
                        backgroundColor: "#FEAC00",
                        data: [4, 9, 6, 8, 6, 12, 10],
                        barThickness: 10,
                        hoverBackgroundColor: '#fff',
                        hoverBorderColor: '#FEAC00',
                        borderColor: '#fff',
                        borderWidth: 2,
                    }]
                },
            });
        }

        /*          
        ========================================
            Circle ProgressBar js
        ========================================
        */
        $('.hive_circleProgress').easyPieChart({
            size: 200,
            barColor: "#685BE7",
            scaleLength: 0,
            lineWidth: 8,
            trackColor: "#f3f3f3",
            lineCap: "circle",
            animate: 2500,
        });

        /*
        ========================================
            Global Slider Init
        ========================================
        */
        var globalSlickInit = $('.global_slick_init');
        if (globalSlickInit.length > 0) {
            //todo have to check slider item 
            $.each(globalSlickInit, function(index, value) {
                if ($(this).children('div').length > 1) {
                    //todo configure slider settings object
                    var sliderSettings = {};
                    var allData = $(this).data();
                    var infinite = typeof allData.infinite == 'undefined' ? false : allData.infinite;
                    var arrows = typeof allData.arrows == 'undefined' ? false : allData.arrows;
                    var autoplay = typeof allData.autoplay == 'undefined' ? false : allData.autoplay;
                    var focusOnSelect = typeof allData.focusonselect == 'undefined' ? false : allData.focusonselect;
                    var swipeToSlide = typeof allData.swipetoslide == 'undefined' ? false : allData.swipetoslide;
                    var slidesToShow = typeof allData.slidestoshow == 'undefined' ? 1 : allData.slidestoshow;
                    var slidesToScroll = typeof allData.slidestoscroll == 'undefined' ? 1 : allData.slidestoscroll;
                    var speed = typeof allData.speed == 'undefined' ? '500' : allData.speed;
                    var dots = typeof allData.dots == 'undefined' ? false : allData.dots;
                    var cssEase = typeof allData.cssease == 'undefined' ? 'linear' : allData.cssease;
                    var prevArrow = typeof allData.prevarrow == 'undefined' ? '' : allData.prevarrow;
                    var nextArrow = typeof allData.nextarrow == 'undefined' ? '' : allData.nextarrow;
                    var centerMode = typeof allData.centermode == 'undefined' ? false : allData.centermode;
                    var centerPadding = typeof allData.centerpadding == 'undefined' ? false : allData.centerpadding;
                    var rows = typeof allData.rows == 'undefined' ? 1 : parseInt(allData.rows);
                    var autoplay = typeof allData.autoplay == 'undefined' ? false : allData.autoplay;
                    var autoplaySpeed = typeof allData.autoplayspeed == 'undefined' ? 2000 : parseInt(allData.autoplayspeed);
                    var lazyLoad = typeof allData.lazyload == 'undefined' ? false : allData.lazyload; // have to remove it from settings object if it undefined
                    var appendDots = typeof allData.appenddots == 'undefined' ? false : allData.appenddots;
                    var appendArrows = typeof allData.appendarrows == 'undefined' ? false : allData.appendarrows;
                    var asNavFor = typeof allData.asnavfor == 'undefined' ? false : allData.asnavfor;
                    var verticalSwiping = typeof allData.verticalswiping == 'undefined' ? false : allData.verticalswiping;
                    var vertical = typeof allData.vertical == 'undefined' ? false : allData.vertical;
                    var fade = typeof allData.fade == 'undefined' ? false : allData.fade;
                    var rtl = typeof allData.rtl == 'undefined' ? false : allData.rtl;
                    var responsive = typeof $(this).data('responsive') == 'undefined' ? false : $(this).data('responsive');
                    //slider settings object setup
                    sliderSettings.infinite = infinite;
                    sliderSettings.arrows = arrows;
                    sliderSettings.autoplay = autoplay;
                    sliderSettings.focusOnSelect = focusOnSelect;
                    sliderSettings.swipeToSlide = swipeToSlide;
                    sliderSettings.slidesToShow = slidesToShow;
                    sliderSettings.slidesToScroll = slidesToScroll;
                    sliderSettings.speed = speed;
                    sliderSettings.dots = dots;
                    sliderSettings.cssEase = cssEase;
                    sliderSettings.prevArrow = prevArrow;
                    sliderSettings.nextArrow = nextArrow;
                    sliderSettings.rows = rows;
                    sliderSettings.autoplaySpeed = autoplaySpeed;
                    sliderSettings.autoplay = autoplay;
                    sliderSettings.verticalSwiping = verticalSwiping;
                    sliderSettings.vertical = vertical;
                    sliderSettings.rtl = rtl;
                    if (centerMode != false) {
                        sliderSettings.centerMode = centerMode;
                    }
                    if (centerPadding != false) {
                        sliderSettings.centerPadding = centerPadding;
                    }
                    if (lazyLoad != false) {
                        sliderSettings.lazyLoad = lazyLoad;
                    }
                    if (appendDots != false) {
                        sliderSettings.appendDots = appendDots;
                    }
                    if (appendArrows != false) {
                        sliderSettings.appendArrows = appendArrows;
                    }
                    if (asNavFor != false) {
                        sliderSettings.asNavFor = asNavFor;
                    }
                    if (fade != false) {
                        sliderSettings.fade = fade;
                    }
                    if (responsive != false) {
                        sliderSettings.responsive = responsive;
                    }
                    $(this).slick(sliderSettings);
                }
            });
        }

        /*
        ========================================
            Mouse Cursor Js
        ========================================
        */
        var myCursor = $('.mouse-move');
        if (myCursor.length) {
            if ($('body')) {
                const e = document.querySelector('.mouse-inner'),
                    t = document.querySelector('.mouse-outer');
                let n, i = 0,
                    o = !1;
                window.onmousemove = function(s) {
                    o || (t.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)"), e.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)", n = s.clientY, i = s.clientX
                }, $('body').on("mouseenter", "a, .cursor-pointer", function() {
                    e.classList.add('mouse-hover'), t.classList.add('mouse-hover')
                }), $('body').on("mouseleave", "a, .cursor-pointer", function() {
                    $(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove('mouse-hover'), t.classList.remove('mouse-hover'))
                }), e.style.visibility = "visible", t.style.visibility = "visible"
            }
        }

        /* 
        ========================================
            back to top
        ========================================
        */
        $(document).on('click', '.back_toTop', function() {
            $("html,body").animate({
                scrollTop: 0
            }, 700);
        });

    });
    /* 
    ========================================
        back to top
    ========================================
    */
    $(window).on('scroll', function() {
        //back to top show/hide
        var ScrollTop = $('.back_toTop');
        if ($(window).scrollTop() > 200) {
            ScrollTop.fadeIn(10);
        } else {
            ScrollTop.fadeOut(10);
        }
    });


}( jQuery ) );