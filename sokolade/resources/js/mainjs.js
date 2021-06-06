const x = document.getElementById("switch-to");
const lines = document.getElementById("switch-from");
const topnav = document.getElementById("navigation");
const logo = document.getElementById("logo");


function myFunction() {
  var toggleBtn = document.getElementById("open");
  if (toggleBtn.style.display === "block") {
    toggleBtn.style.display = "none";
    lines.style.display = "block";
    x.style.display = "none";
    topnav.style.backgroundColor = "transparent";
    logo.style.display = "block";

  } else {
    toggleBtn.style.display = "block";
    lines.style.display = "none";
    x.style.display = "block";
    topnav.style.backgroundColor = "white";
    logo.style.display = "none";
  }
}


const title = document.querySelector('h1');
// title.classList.remove('zoomindown');
const about = document.querySelector('.animate');
about.classList.remove('zoomin');
const white = document.querySelector('.white-h2');
white.classList.remove('zoomin');
const white2 = document.querySelector('.h2-2');
white2.classList.remove('zoomin');
const white3 = document.querySelector('.h2-3');
white2.classList.remove('zoomin');
const blog = document.querySelector('.h2-blog');
blog.classList.remove('zoomin');


const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      title.classList.add('zoomindown');
      about.classList.add('zoomin');
      white.classList.add('zoomin');
      white2.classList.add('zoomin');
      white3.classList.add('zoomin');
      blog.classList.add('zoomin');
      return;
    }

    // title.classList.remove('zoomindown');
    about.classList.remove('zoomin');
    white.classList.remove('zoomin');
    white2.classList.remove('zoomin');
    white3.classList.remove('zoomin');
    blog.classList.remove('zoomin');
  });
});

observer.observe(document.querySelector('h1'));
observer.observe(document.querySelector('.animate'));
observer.observe(document.querySelector('.white-h2'));
observer.observe(document.querySelector('.h2-2'));
observer.observe(document.querySelector('.h2-3'));
observer.observe(document.querySelector('.h2-blog'));