<section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>M</span>ohamed <span>Z</span>oubir</h1></div>
      <h2>welcome in my portfolio</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png"/></a>
        </div>
      </div>
    </div>
</section>


<script>
const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelector('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () =>{
  hamburger.classList.toggle('active');
  mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll',()=>{
  var scroll_position = window.scrollY;
  if(scroll_position > 250) {
    header.style.backgroundColor = "#29323c"
  }else{
    header.style.backgroundColor = 'transparent';
  }
})

menu_item.forEach((item) =>{
  item.addEventListener('click', ()=>{
    hamburger.classList.toggle('active');
    mobile_menu.classList.toggle('active');
  });
});
</script>
</body>
</html>
