<header>
  <div class="header-b">
    <h1 class="header-title">estra inc.</h1>
    <nav class="header-nav">
      <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">service</a></li>
        <li><a href="#">works</a></li>
        <li><a href="#">price</a></li>
        <li><a href="#">contact</a></li>
      </ul>
    </nav>
  </div>
  <div id="hamburger" :class="{'active':isClass}">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="humberger-menu" :class="{'open':isClass}">
    <p class="menu-title">estra.inc</p>
    <ul>
      <li>
        <a href="#">home</a>
      </li>
      <li>
        <a href="#">about</a>
      </li>
      <li>
        <a href="#">service</a>
      </li>
      <li>
        <a href="#">works</a>
      </li>
      <li>
        <a href="#">price</a>
      </li>
      <li>
        <a href="#">contact</a>
      </li>
    </ul>
  </div>
</header>