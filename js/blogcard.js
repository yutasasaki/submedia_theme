async function fetchOpenGraphData(url) {
  // console.log(`Fetching Open Graph data for URL: ${url}`);
  const response = await fetch(`https://api.microlink.io?url=${encodeURIComponent(url)}`);
  const data = await response.json();
  // console.log(`Data fetched for URL: ${url}`, data);
  return data;
}

async function updateBlogCard(card) {
  const url = card.getAttribute('data-url');
  const title = card.getAttribute('data-title');
  const excerpt = card.getAttribute('data-excerpt');
  const nofollow = card.getAttribute('data-nofollow');
  // console.log(`Updating blog card for URL: ${url}, title: ${title}, excerpt: ${excerpt}, nofollow: ${nofollow}`);
  try {
    const data = await fetchOpenGraphData(url);
    if (data && data.data && data.data.image && data.data.title && data.data.description) {
      card.querySelector('.blogcard_thumbnail').innerHTML = `<img src="${data.data.image.url}" alt="${data.data.title}">`;
      card.querySelector('.blogcard_title').innerText = title || data.data.title;
      card.querySelector('.blogcard_excerpt').innerText = excerpt || data.data.description;
      card.querySelector('a').setAttribute('href', url);
      // console.log(`Blog card updated for URL: ${url}`);
    } else {
      console.error(`Incomplete Open Graph data for URL: ${url}`, data);
    }
  } catch (error) {
    console.error(`Error fetching Open Graph data for URL: ${url}`, error);
  }
}

async function updateLinkCard(card) {
  const url = card.getAttribute('data-url');
  const title = card.getAttribute('data-title');
  const nofollow = card.getAttribute('data-nofollow');
  // console.log(`Updating link card for URL: ${url}, title: ${title}, nofollow: ${nofollow}`);
  try {
    const data = await fetchOpenGraphData(url);
    if (data && data.data && data.data.image && data.data.title) {
      card.querySelector('.linkcard_thumbnail').innerHTML = `<img src="${data.data.image.url}" alt="${data.data.title}">`;
      card.querySelector('.linkcard_title').innerText = title || data.data.title;
      card.querySelector('a').setAttribute('href', url);
      // console.log(`Link card updated for URL: ${url}`);
    } else {
      console.error(`Incomplete Open Graph data for URL: ${url}`, data);
    }
  } catch (error) {
    console.error(`Error fetching Open Graph data for URL: ${url}`, error);
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const blogcards = document.querySelectorAll('.dc_blogcard');
  // console.log(`Found ${blogcards.length} blog cards`);
  blogcards.forEach(updateBlogCard);

  const linkcards = document.querySelectorAll('.dc_linkcard');
  // console.log(`Found ${linkcards.length} link cards`);
  linkcards.forEach(updateLinkCard);
});