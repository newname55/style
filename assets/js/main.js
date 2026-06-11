(() => {
  const header = document.querySelector("[data-header]");
  const menuButton = document.querySelector("[data-menu-button]");
  const nav = document.querySelector("[data-nav]");
  const navLinks = [...document.querySelectorAll(".site-nav a")];
  const sections = navLinks
    .map((link) => document.querySelector(link.getAttribute("href")))
    .filter(Boolean);

  const setScrolled = () => {
    if (!header) return;
    header.classList.toggle("is-scrolled", window.scrollY > 12);
  };

  const closeMenu = () => {
    document.body.classList.remove("nav-open");
    nav?.classList.remove("is-open");
    menuButton?.setAttribute("aria-expanded", "false");
  };

  menuButton?.addEventListener("click", () => {
    const isOpen = nav?.classList.toggle("is-open") ?? false;
    document.body.classList.toggle("nav-open", isOpen);
    menuButton.setAttribute("aria-expanded", String(isOpen));
  });

  navLinks.forEach((link) => {
    link.addEventListener("click", closeMenu);
  });

  if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          navLinks.forEach((link) => {
            link.classList.toggle("is-active", link.getAttribute("href") === `#${entry.target.id}`);
          });
        });
      },
      { rootMargin: "-40% 0px -50% 0px", threshold: 0 }
    );

    sections.forEach((section) => observer.observe(section));
  }

  setScrolled();
  window.addEventListener("scroll", setScrolled, { passive: true });
})();
