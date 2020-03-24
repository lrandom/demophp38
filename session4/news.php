<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="posts">

    </div>

    <a href="javascript:void" id="btn-load-news">Tải tin tức</a>

</body>

<script>
$('#btn-load-news').click(function() {
    $.ajax({
        type: "get",
        url: "http://newsapi.org/v2/everything?q=bitcoin&from=2020-02-24&sortBy=publishedAt&apiKey=33426eaf1f124fe0b7c3eb9277daa942",
        data: {},
        dataType: "json",
        success: function(response) {
            ///console.log(response);
            var posts = response.articles;
            for (let index = 0; index < posts.length; index++) {
                const element = posts[index];
                $('.posts').append(`<div class="post">
            <h4>${element.title}</h4>
            <img src="${element.urlToImage}" />
            <p>${element.content}</p>
        </div>`);
            }
        }
    });
})
</script>

<style>
.post {
    display: block;
    position: relative;
}

.post img {
    width: 500px;
    height: 500px;
}
</style>

</html>