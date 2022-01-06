// Selecting elements.
const mainNavAnchors = document.querySelectorAll('#main-nav a');

// Declaring necessary variables.
const mainPageLocation = '/index.php';


mainNavAnchors.forEach(anchor => {
  // We do not need a tags for the pages we are already in.
  const anchorLocation = anchor.attributes.href.value
    .replace(/\./, "")
  if (window.location.href.endsWith(anchorLocation)) {
    anchor.classList.add('hidden');
  }
  else if(window.location.href.endsWith('/') && anchorLocation == mainPageLocation) {
    anchor.classList.add("hidden");
  }
})



