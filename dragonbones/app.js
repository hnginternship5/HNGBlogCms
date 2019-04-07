function createNode(element) {
    return document.createElement(element);
}

function append(parent, el) {
  return parent.appendChild(el);
}
const $ = document.querySelector('.main-section-articles');
const url = "https://ziki.hng.tech/post.php";
//const url = "http://localhost:8000/post.php";
fetch(url)
    .then((resp) => resp.json()) // Transform the data into json
    .then(function(data) {
        if(data.error === false){
            console.log(data);
            let posts = data.result;
            return posts.map(function(post) {
                $.innerHTML = `<div>
            <div class="img-holder">
            </div>
            <div class="article-content">
                <div>
                    <h2>${post.title}</h2>
                    <h4>${post.post_timestamp}</h4>
                </div>

                <h4>By Ogungiji Bolade</h4>
                ${post.body}
                <div>
                    <h6>Microsoft group</h6>
                    <button class="comment-button">comment</button>
                </div>

            </div>
        </div>`;
            })
        }
    })
  .catch(function(error) {
    console.log(error);
  });