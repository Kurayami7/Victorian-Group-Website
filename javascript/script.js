const searchBox = document.getElementById('search-box');
const searchBtn = document.getElementById('btn');
const mainContainer = document.querySelector('.container'); // Change to your main container

searchBtn.addEventListener('click', () => {
  const query = searchBox.value.trim().toLowerCase();
  if (query === '') {
    // If the search box is empty, restore the original content
    mainContainer.innerHTML = originalContent;
    return;
  }

  let found = false;

  mainContainer.querySelectorAll('*').forEach((element) => {
    const content = element.textContent.toLowerCase();
    if (content.includes(query)) {
      element.scrollIntoView({ behavior: 'smooth', block: 'start' });
      // element.style.color = 'yellow'; // Highlight the found elements
      found = true;
    } else {
      element.style.backgroundColor = ''; // Reset background color for non-matching elements
    }
  });

  if (!found) {
    alert(`No results found for '${query}'.`);
  }
});

// Controlling the subscribe button and the resulting popup using JS
const subscribeBtn = document.getElementById('subscribe-btn');
const popup = document.getElementById('popup');
const closeBtn = document.getElementById('close-btn');

subscribeBtn.addEventListener('click', () => {
  popup.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
  popup.style.display = 'none';
});
