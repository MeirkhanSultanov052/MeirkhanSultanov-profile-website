<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href= "{{ asset('page2.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <h1 id="header1">My Skills</h1>
    <h2><a href="{{ URL::route('pageContacts') }}">Contact Me!</a></h2>
</head>
<body>
    <div id="main">
        <table id="table" style="width:100%">
            <tr>
                <td>
                    <div>
                        <img id="imgicon" src="https://icons.iconarchive.com/icons/cornmanthe3rd/plex/256/Other-html-5-icon.png" alt="HTML">
                        <h4>HTML</h4>
                    </div>
                </td>
                <td>
                    <h6>I have knowledges in HTML 5, so I can develop basic sites. <br> I am coding in Visual Studio Code, for me the best to Web Programming.</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <div>
                        <img id="imgicon" src="https://cdn.iconscout.com/icon/free/png-256/css-118-569410.png" alt="CSS">
                        <h4>CSS</h4>
                    </div>
                </td>
                <td>
                    <h6>How we can make sites without CSS?There is no way to do beautiful site. <br> Because of that, I know also a CSS 3 language. <br>Coding in VSCode.</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <div>
                        <img id="imgicon" src="https://cdn.iconscout.com/icon/free/png-256/javascript-2038874-1720087.png" alt="">
                        <h4>JavaScript</h4>
                    </div>
                </td>
                <td>
                    <h6>JS is the best friend of HTML and CSS. <br> With JS I can make site more active dynamic, give some motions, events. <br> For coding also using VSCode.</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <div>
                        <img id="imgjava" src="https://images.vexels.com/media/users/3/166401/isolated/preview/b82aa7ac3f736dd78570dd3fa3fa9e24-java-programming-language-icon-by-vexels.png" alt="Java">
                        <h4>Java</h4>
                    </div>
                </td>
                <td>
                    <h6>Java is my first programming language.It is not so hard like C++, and more faster than Pyton. <br> I'm practising in Java and JavaFX to become medium level proger.</h6>
                </td>
            </tr>
        </table>
        <div id="divarrup">
            <a href="#header1">
                <img id="arrup" src="https://www.pngkit.com/png/full/402-4029966_compre-com-segurana-white-arrow-black-background.png" alt="">
            </a>
        </div>
        <div id = "divimg1">
        <p id = "pimg1">Powered by</p>
        <img id = "img1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Logo_of_Suleymen_Demirel_University%2C_Kazakhstan.png/250px-Logo_of_Suleymen_Demirel_University%2C_Kazakhstan.png">
    </div>
    </div>
    <script src="{{ asset('page2.js') }}"></script>
</body>
</html>