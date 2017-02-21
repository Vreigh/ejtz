/**
 * Created by Konrad on 03.11.2016.
 */


var pages = [].slice.call(document.querySelectorAll('.pages > .page')),
    currentPage = 0,
    revealerOpts = {
    // the layers are the elements that move from the sides
    nmbLayers : 3,
    // bg color of each layer
    bgcolor : ['#0092DD', '#fff', '#3E3A35'],
    // effect classname
    effect : 'anim--effect-3',
    onStart : function(direction) {
        // next page gets class page--animate-[direction]
        var nextPage = pages[currentPage === 0 ? 1 : 0];
        classie.add(nextPage, 'page--animate-' + direction);
    },
    onEnd : function(direction) {
        // remove class page--animate-[direction] from next page
        var nextPage = pages[currentPage === 0 ? 1 : 0];
        nextPage.className = 'page';
    }
};
revealer = new Revealer(revealerOpts);


$(document).ready(function () {



});


function reveal(direction) {
    var callbackTime = 750,
        callbackFn = function() {
            classie.remove(pages[currentPage], 'page--current');
            currentPage = currentPage === 0 ? 1 : 0;
            classie.add(pages[currentPage], 'page--current');
        };

    revealer.reveal(direction, callbackTime, callbackFn);
}