import anime from 'animejs';

export function translate() {
  var path = anime.path('#anime-svg circle');
  anime({
    targets: '#anime_first',
    translateX: path('100'),
    translateY: path('y'),
    rotate: path('angle'),
    easing: 'linear',
    duration: 10000,
    loop: true,
    delay: 1000,
  });
  anime({
    targets: '#anime_second',
    translateX: path('x'),
    translateY: path('y'),
    rotate: path('angle'),
    easing: 'linear',
    duration: 13000,
    loop: true
  });
  anime({
    targets: '#anime_three',
    translateX: path('x'),
    translateY: path('y'),
    rotate: function() { return anime.random(-360, 360); },
    easing: 'linear',
    duration: 15000,
    loop: true,
    delay: 2000,
  });
}

export function tele() {
  var path = anime.path('#anime-svg circle');
  anime({
    targets: '#anime_first',
    translateX: 900,
    translateY: 500,
    easing: 'easeInOutSine',
    direction: 'alternate',
    duration: 6000,
    loop: true,
  });
  anime({
    targets: '#anime_second',
    translateX: 1500,
    translateY: 0,
    easing: 'easeInOutSine',
    direction: 'reverse',
    duration: 8000,
    loop: true,
    endDelay: 1000,
  });
  anime({
    targets: '#anime_three',
    translateX: 800,
    translateY: -200,
    easing: 'easeInOutSine',
    direction: 'alternate',
    duration: 10000,
    loop: true,
  });
}