<html>
    <head>
        <title>add a book!</title>
    </head>
    <body>
        <forms method="POST" action="/books">
            @csrf
            <label>title:</label><input type="text" name="title">
            <br>
            <label>author:</label><input type="text" name="author">
            <br>
            <label>blurb:</label><input type="text" name="blurb">
            <br>
            <label>genres:</label>
            <input type="radio" name="genre" value="nonfic">non-fiction!
            <input type="radio" name="genre" value="fiction">fiction!
            <br>
            <button type="submit">add now!</button>
            <br>
        </forms>
    </body>
</html>