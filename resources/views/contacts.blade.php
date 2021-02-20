<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href= "{{ asset('page3.css') }}" />
    <header>
        <h1>My Contacts</h1>
    </header>
</head>
<body>
    <div id="main">
        <table>
            <tr>
                <td>
                    <div id="d11">
                        <img id="wats" src="https://logodownload.org/wp-content/uploads/2015/04/whatsapp-logo-1.png" alt="watsapp">
                    </div>
                </td>
                <td>
                    <h4>+7 776 246 4989</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="d22">
                        <img id="teleg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/600px-Telegram_logo.svg.png" alt="telegram">
                    </div>
                </td>
                <td>
                    <h4>@sMeirkhan</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="d33">
                        <img id="git" src="https://image.flaticon.com/icons/png/512/25/25231.png" alt="github">
                    </div>
                </td>
                <td>
                    <h4><a id="github" href="https://github.com/MeirkhanSultanov052">MeirkhanSultanov052</a></h4>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="d44">
                        <img id="insta" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Instagram-Icon.png/1025px-Instagram-Icon.png" alt="instagram">
                    </div>
                </td>
                <td>
                    <h4>yourhlghness</h4>
                </td>
            </tr>
        </table>
    </div>
    <a id ="linkcontacts" href="{{ URL::route('pageContacts') }}"></a>
</body>
</html>