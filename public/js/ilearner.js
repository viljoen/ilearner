
// Accordian
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}



//Tabs
var instance = M.Tabs.init(el, options);

//Tabs Method
var instance = M.Tabs.getInstance(elem);

// Tabs show tab that corresponds to the tab with the id
instance.select('tab_id');

// Tabs Recalculate Tabs indicator
instance.updateTabIndicator();

// Collaspsible

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
});




