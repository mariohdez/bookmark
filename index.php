<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bookmark</title>
    <link rel="stylesheet" href="bookmark.css" />
    <link rel="script" href="bookmark.js" />
    <meta charset="UTF-8">
</head>

<body>
    <h1>
        Bookmark
    </h1>
    <p>
        Keep track of what you want to visit.
    </p>
    <div class="container">
        <form>
            <fieldset>
                <legend>
                    New Bookmark
                </legend>
                Website name:
                <br/>
                <input type="text" name="websiteName" />
                <br /> Website Address:
                <br/>
                <input type="text" name="websiteAddress" />
                <br />
                Notes:
                <br/>
                <textarea placeholder="Some note..." name="websiteNotes"></textarea>
                <br/>
                <input type="submit" />
            </fieldset>
        </form>
    </div>
</body>

</html>