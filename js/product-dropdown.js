
function collapseSection(element) {
    let sectionHeight = element.scrollHeight;
    let elementTransition = element.style.transition;
    element.style.transition = '';
    
    requestAnimationFrame(function() {
      element.style.height = sectionHeight + 'px';
      element.style.transition = elementTransition;

      requestAnimationFrame(function() {
        element.style.height = 0 + 'px';
      });
    });
    
    element.classList.remove('active');
}
  
function expandSection(element) {
    let sectionHeight = element.scrollHeight;
    element.style.height = sectionHeight + 'px';
    element.classList.add('active');
}
  
function dropdown() {
    let productDropdown = this.parentElement.querySelector('.dropdown__content');
    let isActived = productDropdown.classList.contains('active');
    if(isActived) {
        collapseSection(productDropdown);
    } else {
        expandSection(productDropdown);
    }
}

let buttonDropdown = document.getElementsByClassName("button__dropdown");

for (i = 0; i < buttonDropdown.length; i++) {
    buttonDropdown[i].addEventListener("click", dropdown)
}
