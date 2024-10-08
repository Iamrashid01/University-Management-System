//GSAP variables
var master = new TimelineMax({delay:1.5}),
    student = $("#student"),
    studentWhole = $('#stud_whole'),
    head = $('#stud_head'),
    eyes = $('.eye'),
    reflection = $('.reflection'),
    hair = $('#hair'),
    body = $('#stud_body'),
    pgFld = $("#pgFld"),
    stars = $(".stars"),
    circle = $(".circle"),
    dashed = $("#dashed"),
    servicesIcons = $(".srvc_icon"),
    pageFold = $("#pgFld");

//book snap variables
var s = Snap("#student");
    bottomPages = s.select("#btm_pgs"),
    bottomEdge = s.select("#bk_edg"),
    bottomBody = s.select("#bk_bdy"),
    bottomRight = s.select("#btm_r"),
    bottomLeft = s.select("#btm_l"),
    line = s.select("#line");


bottomPages.attr({points:"199.827,333.441 200.188,334 198.801,334 198.14,333.344 190.077,333.696 190,333 209,333 208.487,333.463"});
bottomEdge.attr({ d:"M184.5,332l0.5,9.5c0,0,5.635,7,14.661,7s14.839-7,14.839-7V332"});
bottomBody.attr({ d:"M205.94,333H200h-7.524l-8.602,0.26l0.639,4.74 c0,0,0.044,0.473,0.138,0.637c0.779,1.371,4.964,7.938,15.35,7.938c10.182,0,14.449-6.029,15.356-7.561 c0.13-0.219,0.191-0.299,0.191-0.299l0.664-5.716H205.94z"});
bottomRight.attr({ points:"199,326 199.016,326 199.7,326 199,326"});
bottomLeft.attr({ points:"199,326 199.016,326 198.359,325.984 199,326"});

function bookIn() {
    bottomPages.animate({ points:"199,174 200,305 200,304 199,174 190,174 190,333 209,333 209,174"}, 350,mina.easeInOut,function(){
        setTimeout(function(){
            bottomPages.animate({ points:"313.061,304.975 200.188,305 198.801,305 85.44,304.975 30.5,333 190,333 209,333 370,333"}, 1000, mina.bounce);
        },350)
    });

    bottomEdge.animate({ d:"M184.5,169l0.5,172.5c0,0,5.635,7,14.661,7s14.839-7,14.839-7V169"}, 350,mina.easeInOut,function(){
        setTimeout(function(){
            bottomEdge.animate({ d:"M13,341.5h172.224c0,0,5.973,7,15,7s14.776-7,14.776-7h172"}, 1000,mina.bounce);
        },350)
    });

    bottomBody.animate({ d:"M205.94,174L200,307l-7.524-133l-8.602,0.26L184.512,338  c0,0,0.044,0.473,0.138,0.637c0.779,1.371,4.964,7.938,15.35,7.938c10.182,0,14.449-6.029,15.356-7.561 c0.13-0.219,0.191-0.299,0.191-0.299L216.212,174H205.94z"}, 350,mina.easeInOut,function(){
        setTimeout(function(){
            bottomBody.animate({ d:"M328.178,308.28L200,307.238L72.591,308.28 l-60.046,30.913l171.995-0.196c0,0,0.016,0.49,0.11,0.654c0.779,1.371,4.964,6.932,15.35,6.932 c10.182,0,14.449-6.033,15.356-7.564c0.13-0.219,0.191-0.063,0.191-0.063L387.241,339L328.178,308.28z"}, 1000,mina.bounce);
        },350)
    });

    bottomRight.animate({ points:"199,299 199.016,174 199.7,174 199,326"}, 350,mina.easeInOut,function(){
        setTimeout(function(){
            bottomRight.animate({ points:"199,299 300.647,299 355.376,326 199,326"}, 1000,mina.bounce);
        },350)
    });

    bottomLeft.animate({ points:"199,299 199.016,174 198.359,173.984 199,326"}, 350,mina.easeInOut,function(){
        setTimeout(function(){
            line.attr({opacity:1});
            bottomLeft.animate({ points:"199,299 96,299 44,326 199,326"}, 1000,mina.bounce);

        },350)

    });
}

master.set([studentWhole,stars,circle],{css:{display:'block'}})
    .add( circleScale())
    .add('circleEnd')
    .add(bodyRotateIn(),'circleEnd -= 1.25')
    .add( repeatAnim(),'circleEnd -= 1')
    .call(bookIn())


//circles scale in
function circleScale(){
    var tl = new TimelineMax();
    tl.staggerFrom(circle,.7, {transformOrigin:"50% 100%",scale:0,ease:Back.easeOut},0.2, 'cirlceIn')
      .staggerFrom(stars,1, {transformOrigin:"50% 50%",scale:0,opacity:0,ease:Elastic.easeOut},0.1,'cirlceIn+=.5')
    return tl;
}

//body rotate in animation
function bodyRotateIn (){
    var tl = new TimelineMax();
    tl.from(studentWhole,.5, {rotation:90, transformOrigin:"106 260",scale:0, fillOpacity:.5},'bodyRotation')
      .from(head,.5,{rotation:45, transformOrigin:"85 180",ease:Back.easeOut},"bodyRotation+=.35")
      .from(hair,2,{rotation:15, transformOrigin:"10 50%",ease:Elastic.easeOut},"bodyRotation+=.37");
    tl.set(pageFold, {opacity:1});
      tl.timeScale(1.5);
    return tl;
}

// reapeated animations
function repeatAnim (){
    var tl = new TimelineMax({repeat:-1});
    tl.to(eyes,.1, {rotationX:90,transformOrigin:"50% 50%"},'repeatStart')
      .to(eyes,.1, {rotationX:0})
      .to(eyes,3, {rotationX:0})
      .to(eyes,.1, {rotationX:90,transformOrigin:"50% 50%"})
      .to(eyes,.1, {rotationX:0})
      .to(eyes,.1, {rotationX:90,transformOrigin:"50% 50%"})
      .to(eyes,.1, {rotationX:0})
      .to(eyes,4, {rotationX:0})
      .to(eyes,.1, {rotationX:90,transformOrigin:"50% 50%"})
      .to(eyes,.1, {rotationX:0})
      .to(eyes,3, {rotationX:0})
      .to(reflection,1.5,{x:12,opacity:.15},1,'repeatStart')
      .to(reflection,4,{x:12,opacity:.35},2.5)
      .to(reflection,1,{x:0,opacity:.1},4)
      .to(reflection,4,{x:0,opacity:.15})
      .to(dashed,15,{rotation:180,transformOrigin:"50% 50%", ease:Linear.easeNone},'repeatStart')


    return tl;
}