<!DOCTYPE html>
<html>
<head onload="load()">
    <link rel="stylesheet" href= "{{ asset('page1.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <h1 class = "text1">Profile Website</h1>
    <div id = "divimg1">
        <p id = "pimg1">Powered by</p>
        <img id = "img1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Logo_of_Suleymen_Demirel_University%2C_Kazakhstan.png/250px-Logo_of_Suleymen_Demirel_University%2C_Kazakhstan.png">
    </div>
</head>
<body onload="load()">
    <div class="mainn">
        <h3 class = "text2">This is small presentation of my own</h3>
        <p> 
            You are welcome on my profile website !<br>
            My name is <b id = "name">Meirkhan Sultanov</b>, 19 y.o. <br>
            And I am a student of second course in Suleyman Demirel University <br>
            I'm studying on specialty "Information Systems" <br>
            My hometown is Ekiboston City(Ekibastuz) <br>
            I'have studied in russian school-gymnasium №35,
            because of that I don't speaking Kazakh well :( <br>
        </p>

        <h5>And now check out my some <a id ="linkskills" href="{{ URL::route('pageSkills') }}">SKILLS</a> in programming)</h5>
    </div>
    <script src="{{ asset('page1.js') }}"></script>
</body>
</html>