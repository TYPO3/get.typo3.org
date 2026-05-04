// Custom JavaScript for Bootstrap Carousel

// Automatically pause the carousel after 5 seconds on page load
document.addEventListener('DOMContentLoaded', () => {
  const carouselElement = document.querySelector('#carouselExampleIndicators');
  const carousel = new bootstrap.Carousel(carouselElement, {
    interval: 5000, // Slide every 5 seconds
    ride: 'carousel',
  });

  // Pause carousel after 5 seconds
  setTimeout(() => {
    carousel.pause();
  }, 5000);

  // Add custom behavior: Log to console when the slide changes
  carouselElement.addEventListener('slid.bs.carousel', (event) => {
    console.log(`Slide changed to: ${event.to}`);
  });
});
