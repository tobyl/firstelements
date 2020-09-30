let navTrigger = document.getElementById('nav-trigger')
let navClose = document.getElementById('nav-close')
let nav = document.getElementById('nav-wrapper')
let navList = document.getElementById('nav-list')

const navTransition = () => {
  nav.classList.toggle('visible')
  setTimeout(() => {
    cls = document.querySelectorAll('.to-fade')
    cls.forEach((ch, i) => {
      setTimeout(() => {
        ch.classList.add('visible')
      }, i * 130)
    })
  }, 250)
}

if (navTrigger) {
  navTrigger.onclick = function fun() {
    navTransition()
  }
}

if (navClose) {
  navClose.onclick = function fun() {
    nav.classList.remove('visible')
    cls = document.querySelectorAll('.to-fade')
    cls.forEach((ch, i) => {
      ch.classList.remove('visible')
    })
  }
}

// animated titles

let animatedTitle = document.getElementById('animated-title')
if (animatedTitle) {
  animatedTitle.classList.add('visible')
}

// carousel

$('#projects-carousel').slick({
  dots: false,
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 500,
  prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492 492"><path d="M198.608 246.104L382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z"/></svg></button>',
  nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 492 492" xmlns="http://www.w3.org/2000/svg"><path d="M293.912 245.896L109.856 429.96c-5.068 5.056-7.856 11.816-7.856 19.024 0 7.212 2.788 13.968 7.856 19.032l16.128 16.12c5.06 5.072 11.824 7.864 19.032 7.864s13.964-2.792 19.028-7.864l219.148-219.144c5.084-5.08 7.868-11.868 7.848-19.084.02-7.248-2.76-14.028-7.848-19.112L164.248 7.864C159.184 2.792 152.428 0 145.216 0c-7.208 0-13.964 2.792-19.032 7.864l-16.124 16.12c-10.492 10.492-10.492 27.572 0 38.06l183.852 183.852z"/></svg></button>'
});

// accordion

$('#training-classes h4').click(function () {
  var clickedItem = $(this)
  var allItems = $('#training-classes').find('.active')
  allItems.slideUp()
  clickedItem.next().slideToggle(750, function() {
    clickedItem.next().addClass('active')
  })
})