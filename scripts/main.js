// Search functionality
const searchToggle = document.getElementById("searchToggle");
const searchBox = document.getElementById("searchBox");
const searchOverlay = document.getElementById("searchOverlay");

searchToggle.addEventListener("click", function () {
  searchBox.classList.toggle("active");
  searchOverlay.classList.toggle("active");
});

searchOverlay.addEventListener("click", function () {
  searchBox.classList.remove("active");
  searchOverlay.classList.remove("active");
});

// Close search on escape key
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    searchBox.classList.remove("active");
    searchOverlay.classList.remove("active");
  }
});

// Search suggestions
document.querySelectorAll(".search-suggestion").forEach((suggestion) => {
  suggestion.addEventListener("click", function () {
    const searchInput = document.querySelector(".search-input");
    searchInput.value = this.textContent;
    searchInput.focus();
  });
});

// Search form submission
document.querySelector(".search-form").addEventListener("submit", function (e) {
  // e.preventDefault();
  const searchTerm = this.querySelector(".search-input").value.trim();
  if (searchTerm) {
    // console.log("Searching for:", searchTerm);
    // alert(`Searching for "${searchTerm}"... (This is a demo)`);
    searchBox.classList.remove("active");
    searchOverlay.classList.remove("active");
  }
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }
  });
});

// Newsletter form submission
document
  .querySelector(".newsletter-form")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    const email = this.querySelector(".newsletter-input").value;
    const button = this.querySelector(".newsletter-button");
    const originalText = button.textContent;

    // Show loading state
    button.innerHTML = '<span class="loading"></span> Subscribing...';
    button.disabled = true;

    // Simulate API call
    setTimeout(() => {
      button.innerHTML = "✓ Subscribed!";
      button.style.background = "var(--success-color)";
      this.querySelector(".newsletter-input").value = "";

      setTimeout(() => {
        button.textContent = originalText;
        button.disabled = false;
        button.style.background = "var(--accent-color)";
      }, 2000);
    }, 1500);
  });

// Add scroll effect to header
window.addEventListener("scroll", function () {
  const header = document.querySelector(".header");
  if (window.scrollY > 100) {
    header.style.background =
      "linear-gradient(135deg, rgba(37, 99, 235, 0.95) 0%, rgba(14, 165, 233, 0.95) 100%)";
    header.style.backdropFilter = "blur(10px)";
  } else {
    header.style.background =
      "linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%)";
    header.style.backdropFilter = "none";
  }
});

// Animate elements on scroll (only if JS runs)
document.body.classList.add("js-animate");
const observerOptions = {
  threshold: 0.1,
  rootMargin: "0px 0px -50px 0px",
};

const observer = new IntersectionObserver(function (entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = "1";
      entry.target.style.transform = "translateY(0)";
    }
  });
}, observerOptions);

document
  .querySelectorAll(".post-card, .widget, .featured-post")
  .forEach((el) => {
    observer.observe(el);
  });

// Add click handlers for tags and categories
document.querySelectorAll(".tag, .category").forEach((element) => {
  element.addEventListener("click", function (e) {
    e.preventDefault();
    const term = this.textContent;
    console.log(`Filtering by: ${term}`);
    // In a real app, this would filter the posts
  });
});

jQuery(document).ready(function ($) {
  // Smooth scroll to comment form when replying
  $(".comment-reply-link").on("click", function (e) {
    e.preventDefault();
    var replyContainer = $(this).closest(".comment").next(".comment-respond");
    if (!replyContainer.length) {
      replyContainer = $("#respond");
    }
    $("html, body").animate(
      {
        scrollTop: replyContainer.offset().top - 20,
      },
      300
    );
    replyContainer.find("textarea").focus();
  });

  // Add dynamic placeholder for comment form
  $("#comment").attr(
    "placeholder",
    "Share your thoughts... (Markdown supported)"
  );
  $("#author").attr("placeholder", "Your name");
  $("#email").attr("placeholder", "Your email (never shared)");
  $("#url").attr("placeholder", "Your website (optional)");
});
