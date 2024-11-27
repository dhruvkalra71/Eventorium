const shrink_btn = document.querySelector(".shrink-btn");
const search = document.querySelector(".search");
const sidebar_links = document.querySelectorAll(".sidebar-links a");
const active_tab = document.querySelector(".active-tab");
const shortcuts = document.querySelector(".sidebar-links h4");
const tooltip_elements = document.querySelectorAll(".tooltip-element");

let activeIndex;

shrink_btn.addEventListener("click", () => {
  document.body.classList.toggle("shrink");
  setTimeout(moveActiveTab, 400);

  shrink_btn.classList.add("hovered");

  setTimeout(() => {
    shrink_btn.classList.remove("hovered");
  }, 500);
});

search.addEventListener("click", () => {
  //document.body.classList.remove("shrink");
  search.lastElementChild.focus();
});

function moveActiveTab() {
  let topPosition = activeIndex * 58 + 2.5;

  if (activeIndex > 3) {
    topPosition += shortcuts.clientHeight;
  }

  active_tab.style.top = `${topPosition}px`;
}

function changeLink() {
  sidebar_links.forEach((sideLink) => sideLink.classList.remove("active"));
  this.classList.add("active");

  activeIndex = this.dataset.active;

  moveActiveTab();
}


sidebar_links.forEach((link) => link.addEventListener("click", changeLink));

le.display = "flex";



// Ensure cards animate when the page loads
window.addEventListener('DOMContentLoaded', () => {
    const smallCards = document.querySelectorAll('.card');
  
    // Add the animation class to all cards with a slight delay
    smallCards.forEach((card, index) => {
      // Use a small delay for each card to appear in sequence
      setTimeout(() => {
        card.classList.add('animate-card-in'); // Apply animation class
      }, index * 100); // Stagger the animations a little for effect
    });
  });
  
  // Show the big card and hide the smaller cards
  function showBigCard(title, description, btnText1, btnText2) {
    const bigCard = document.getElementById('bigcard');
    const grid = document.getElementById('grid');
    document.getElementById('recent').style.display='none';
    // Update big card content dynamically
    document.getElementById('bigcard-title').innerText = title;
    document.getElementById('bigcard-text').innerHTML = description;
  
    // Show big card and hide smaller cards
    bigCard.style.display = 'flex';
    grid.style.display = 'none';
  }
  
  // Hide the big card and show smaller cards again
  function closeBigCard() {
    const bigCard = document.getElementById('bigcard');
    const grid = document.getElementById('grid');
    document.getElementById('recent').style.display='block';
    // Hide big card and show smaller cards
    bigCard.style.display = 'none';
    grid.style.display = 'flex';
  }