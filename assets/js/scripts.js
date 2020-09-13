window.onload = function(){

  // open/close search
  document.getElementById('toggle-search-collapse').onclick = function() {
    document.getElementById('search-collapse').classList.toggle('open');
    document.getElementById('toggle-search-collapse').classList.toggle('active');
    document.getElementById('bubbles-animated').classList.toggle('hidden');
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    document.getElementById('search-collapse--input').value = "";
  };

  // toggle Settings from Navigation
  document.getElementById('toggle-settings').onclick = function() {
    document.getElementById('settings').classList.toggle('open');
    document.getElementById('toggle-settings').classList.toggle('active');
    document.getElementById("light-dark-switch").focus();
  };

  // Close Settings
  document.getElementById('settings__close').onclick = function() {
    document.getElementById('settings').classList.remove('open');
    document.getElementById('toggle-settings').classList.remove('active');
  };

  // Add language to all Code Blocks
  var allCodeBlocks = document.querySelectorAll(".wp-block-code");
  for (var i = 0; i < allCodeBlocks.length; i++) {
    var singleCodeBlock = allCodeBlocks[i].children;
    for (var j = 0; j < singleCodeBlock.length; j++) {
      if (singleCodeBlock[j].hasAttribute("lang")) {
        var codeLang = singleCodeBlock[j].getAttribute("lang");
      }
    }
    allCodeBlocks[i].insertAdjacentHTML('afterbegin', '<div class="prism-language">'+ codeLang +'</div>');
  }
};


// script to load YouTube Videos only on
// click on Preview Image
// ----------------------------------------
document.addEventListener("DOMContentLoaded",function() {
  var div, n,
    v = document.getElementsByClassName("youtube-wrapper__video");
  for (n = 0; n < v.length; n++) {
    div = document.createElement("div");
    div.setAttribute("data-id", v[n].dataset.id);
    div.innerHTML = ytThumb(v[n].dataset.id);
    div.onclick = ytIframe;
    v[n].appendChild(div);
  }
});

function ytThumb(id) {
  var thumbRes = (document.body.clientWidth > 640) ? 'maxresdefault.jpg' : 'hqdefault.jpg',
  thumbImg = '<img src="https://i.ytimg.com/vi/ID/'+thumbRes+'" alt="Youtube Thumbnail">',
  thumbBut = '<button type="button" class="video--play-btn" aria-label="Play Video"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle class="video--play-btn__bg" cx="256" cy="256" r="256"/><path class="video--play-btn__play" d="M371.91,244.63,198.36,144.43a13.69,13.69,0,0,0-20.54,11.86v200.4a13.69,13.69,0,0,0,20.54,11.86l173.55-100.2A13.69,13.69,0,0,0,371.91,244.63Z"/></svg></button>';
  return thumbImg.replace("ID", id) + thumbBut;
}


function ytIframe() {
  var iframe = document.createElement("iframe");
  iframe.setAttribute("src", "https://www.youtube-nocookie.com/embed/" + this.dataset.id + "?autoplay=1");
  iframe.setAttribute("frameborder", "0");
  iframe.setAttribute("allowfullscreen", "1");
  iframe.setAttribute("mute", "1");
  iframe.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture");
  this.parentNode.replaceChild(iframe, this);
}


// script to toggle between light and dark
// mode and store setting in local storage
// ----------------------------------------
const toggleThemeSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
toggleThemeSwitch.addEventListener('change', switchTheme, false);

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }
}

// currentTheme variable set in head
if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'light') {
        toggleThemeSwitch.checked = true;
    }
}


// script to toggle between color themes
// and store setting in local storage
// ----------------------------------------
const toggleColorSwitch = document.getElementById("color-switch");
toggleColorSwitch.addEventListener('click', switchColor, false);

function switchColor(e) {
  document.documentElement.setAttribute('data-color', e.target.value);
  localStorage.setItem('color', e.target.value);
}

// currentColor variable set in head
if (currentColor) {
  document.documentElement.setAttribute('data-color', currentColor);
  document.getElementById('switch--'+currentColor).checked = true;
}


// make Settings draggagle
// ----------------------------------------
dragElement(document.getElementById("settings"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "__header")) {
    // if present, the header is where you move the DIV from
    document.getElementById(elmnt.id + "__header").onmousedown = dragMouseDown;
  } else {
    // otherwise, move the DIV from anywhere inside the DIV
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    // stop moving when mouse button is released
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
