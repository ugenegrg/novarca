jQuery(document).ready(function ($) {
    var common = {
        init: function () {
            if ($('body').hasClass('page-template-tpl-fullpage'))
            // if( $(window).width() > 767 )
                this.fullPageInit(this);
            this.parallaxInit();
            this.tabInit();
            this.menuToggle();
            this.accordionInit();
            // this.magnificPopupInit();

            // this.fullPageRelationalBtnInit();
            $('.relational').on('click', this.fullPageRelationalBtnInit.bind(this));

            // trigger first relation button when page is loaded in software solution pages
            if ($('.relational.active').length > 0) {
                setTimeout(function () {
                    $('.relational.first').trigger('click', true);
                }, 1000);
            }

            if ($('.selectone').length > 0) {
                $('.selectone').on('click', function () {
                    // local
                    $('#wpforms-323-field_7').val('Request Demo Quote').trigger('change');

                    // live
                    $('#wpforms-210-field_5').val('Request Demo Quote').trigger('change');
                });
            }

            var requestHash = window.location.hash;
            if (requestHash && requestHash === "#request-demo-quote") {
                setTimeout(function () {
                    $('.selectone').trigger('click', undefined);
                }, 1000);
            } else if (requestHash && requestHash === "#regional-consultants") {
                setTimeout(function () {
                    $('.selecttwo').trigger('click', undefined);
                }, 1000);
            }
        },
        fullPageInit: function () {

            // first get all the section name to make dynamic menus in each of the page
            anchorArr = [];
            navigationToolTipsArr = [];
            $('.fullpage .section').not('.fp-auto-height').each(function (index, element) {
                var str = $(this).attr('data-menu');
                if (str != "") {
                    var sanitized = str.replace(/\s/g, '-').toLowerCase();
                    anchorArr.push(sanitized);
                    navigationToolTipsArr.push(str);
                } else {
                    str = 'Section ' + (index + 1);
                    sanitized = str.replace(/\s/g, '-').toLowerCase();
                    anchorArr.push(sanitized);
                    navigationToolTipsArr.push(str);
                }
            });

            // https://github.com/alvarotrigo/fullPage.js
            $('.fullpage').fullpage({

                // Navigation
                anchors: anchorArr,
                // sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C', 'red'],
                // normalScrollElements: '.video',
                autoScrolling: true,
                verticalScrolling: true,
                navigation: true,
                navigationPosition: 'right',
                navigationTooltips: navigationToolTipsArr,
                scrollBar: true, // https://github.com/alvarotrigo/fullPage.js/issues/203
                responsiveWidth: 768,
                scrollingSpeed: 1000,
                // scrollOverflow: true,

                // Design
                verticalCentered: true

            });

            //methods
            $.fn.fullpage.setAllowScrolling(true);
        },
        parallaxInit: function () {

            // https://github.com/markdalgleish/stellar.js
            // http://markdalgleish.com/projects/stellar.js/docs/
            if ($(window).width() > 767) {
                $.stellar({
                    horizontalScrolling: false,
                    verticalOffset: 40
                });
            }
        },
        tabInit: function () {

            // https://stackoverflow.com/questions/8608145/jquery-on-method-with-multiple-event-handlers-to-one-selector
            $(".tabs ul").on({
                mouseenter: function () {

                    // first revove all active class
                    $('ul.tabs-menus li').removeClass('active');
                    $('.tabs-contents .tabs-content').removeClass('active');

                    // make the hovered element active
                    var hoveredTab = $(this).find('a').attr('data-tab');
                    $(this).addClass('active');

                    // make the related hovered tabs content display
                    $('.tabs-contents div[data-tab="' + hoveredTab + '"]').addClass('active');
                },
                mouseleave: function () {
                    // Handle mouseleave...
                },
                click: function () {
                    // Handle click...
                }
            }, "li");
        },
        menuToggle: function () {
            $('body').on('click', '.novarca-menu-toggler', function () {
                $(this).find('i').toggleClass('fa-bars fa-times');
                $('#site-navigation').toggleClass('toggled');
            });
        },
        fullPageRelationalBtnInit: function (e, triggeredFlag) {

            $el = $(e.currentTarget);

            $('.fullpage-parts').addClass('section').removeClass('hide-for-now');

            var clickedCssRelationClass = $el.attr('data-relation-hide');
            $('div.section[data-relation="' + clickedCssRelationClass + '"]').addClass('hide-for-now').removeClass('section');

            // do some fullpage init section hide or show depending upon the relational class of each sections

            // remembering the active section / slide
            var activeSectionIndex = $('.fp-section.active').index();

            $.fn.fullpage.destroy('all');

            //setting the active section as before
            $('.section').eq(activeSectionIndex).addClass('active');

            // setting the button active too
            $el.parent().find('a.btn.relational').removeClass('active');
            $el.addClass('active');

            // rebuild fullpage again
            this.fullPageInit();

            // also scroll to first related section below it
            if (triggeredFlag == undefined) // undefined means actual button click
                fullpage_api.moveSectionDown();
        },
        accordionInit: function () {
            $('.accordion .accordion-head').click(function () {
                $('.accordion-block').removeClass('active');
                $(this).parent().addClass('active');
            });
        },
        magnificPopupInit: function() {
            $('.ajax-popup-link').magnificPopup({
                type: 'ajax',
                callbacks: {
                    parseAjax: function(mfpResponse) {
                        // mfpResponse.data is a "data" object from ajax "success" callback
                        // for simple HTML file, it will be just String
                        // You may modify it to change contents of the popup
                        // For example, to show just #some-element:
                        // mfpResponse.data = $(mfpResponse.data).find('#some-element');
                        mfpResponse.data = $(mfpResponse.data).find('#main');
                        // mfpResponse.data must be a String or a DOM (jQuery) element

                        // console.log('Ajax content loaded:', mfpResponse);
                    },
                    ajaxContentAdded: function() {
                        // Ajax content is loaded and appended to DOM
                        // console.log(this.content);
                    }
                }
            });
        }
    };
    common.init();
});