const posts = fetch('http://localhost:8888/wp-json/wp/v2/posts/')
  .then(response => response.json());

export default posts;