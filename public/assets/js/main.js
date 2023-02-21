"use strict";

productScroll();

function productScroll() {
  let slider = document.getElementById("slider");
  let next = document.getElementsByClassName("pro-next");
  let prev = document.getElementsByClassName("pro-prev");
  let slide = document.getElementById("slide");
  let item = document.getElementById("slide");

  for (let i = 0; i < next.length; i++) {
    //refer elements by class name

    let position = 0; //slider postion

    prev[i].addEventListener("click", function() {
      //click previos button
      if (position > 0) {
        //avoid slide left beyond the first item
        position -= 1;
        translateX(position); //translate items
      }
    });

    next[i].addEventListener("click", function() {
      if (position >= 0 && position < hiddenItems()) {
        //avoid slide right beyond the last item
        position += 1;
        translateX(position); //translate items
      }
    });
  }

  function hiddenItems() {
    //get hidden items
    let items = getCount(item, false);
    let visibleItems = slider.offsetWidth / 210;
    return items - Math.ceil(visibleItems);
  }
}

function translateX(position) {
  //translate items
  slide.style.left = position * -210 + "px";
}

function getCount(parent, getChildrensChildren) {
  //count no of items
  let relevantChildren = 0;
  let children = parent.childNodes.length;
  for (let i = 0; i < children; i++) {
    if (parent.childNodes[i].nodeType != 3) {
      if (getChildrensChildren)
        relevantChildren += getCount(parent.childNodes[i], true);
      relevantChildren++;
    }
  }
  return relevantChildren;
}
// upload page redirection
// document.getElementById("myButton").onclick = function () {
//   location.href = "www.yoursite.com";
// };
// --------------


// err section
let toast = document.querySelector('.toastErr')

function alertFunc() {
  toast.className += ' hide';
}
setTimeout(alertFunc, 5000);


// ------------ upload multiple

let parent = document.querySelector('#apsection');
let add = document.querySelector('#add');
let btndiv = document.querySelector('.subbtn');
let submit = document.querySelector('#submit');

add.addEventListener('click', function(e){                
                $('#apsection').prepend ('<div class="form apsection"><div class="twoele"><div> <input name="title[]" class="subject" placeholder="Title" title="Title" type="text" required></div><div><input id="file" name="image[]" class="subject" type="file" required></div><div><input name="price[]" class="subject" type="text" placeholder="Price" title="Price" required></div><div><select style="padding: 12.5px;" name="categories[]" class="form-select" aria-label="Default select example"><option selected Disabled>Categorie</option><option value="clotes">Clotes</option><option value="accessories">Accessories</option><option value="makeup">makeup</option></select></div></div><div> <input name="description[]" class="subject" type="text" placeholder="description" required></div>');
            if (btndiv.childElementCount < 2 && parent.childElementCount > 1) {
                $('.subbtn').prepend('<button id="submit" type="submit" class="btn btn-success">Add Products</button>');
            }
          
});
           
