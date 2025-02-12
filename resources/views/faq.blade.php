<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FAQ</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
<nav>
    <ul class="navlist">
        <li><a class="active" href="{{ route('faq') }}">Home</a></li>
        <li><a href="{{ route('profile') }}">Profile</a></li>
        <li><a href="{{ route('home') }}">FAQ</a></li>
        <li><a href="{{ route('blogs') }}">Blogs</a></li>
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
    </ul>
</nav>

<div class="container">
    <h1>Freaquent Ask Questions</h1>
    <details>
        <summary><b><u>How can you print a document from your laptop at HZ?</u></b></summary>
        <div>
            <br><b><u>Web print</u></b><br>

            <ol>
                <li>Click <a href="https://hz.mynetpay.nl/">here</a> and log in with your HZ username and password.</li><br>
                <li>Tap <b>Web Print.</b></li><br>
                <li>At <b>Step 1: Select a printer,</b> check the settings (format, single/double sided etc).</li><br>
                <li>Click in the field at <b>Step 2: Select files</b> to choose your files (you can also drag and drop).</li><br>
                <li>Click on <b>Upload files now.</b></li></ol><br>

            <br><b>Print</b><br>

            <ol><li>In the desired application, choose print/print and select the HZ_Printer.</li><br>
                <li>When the print command is given, log on to the printer by entering your HZ card or username/password.</li><br>
                <li>On the printer, press <b>Print Release.</b></li><br>
                <li>After scanning, press the following symbol on the printer to log of.</li></ol></div>
    </details>

    <details>
        <summary> <b> <u>How do I scan documents? </u> </b> </summary>
        <div>
            <ol><li>Log on to the printer using your HZ card or by entering your HZ user name and password. </li>
                <br><li>Choose the <b>Scan</b> option in the menu. </li>
                <br><li>Place the original(s) on the feeder or glass plate. </li></ol>
            <br><b>Double-sided scanning (optional)</b>
            <ol><li>Press <b>Change settings</b></li>
                <br><li>For duplex mode, select the <b>2-sided</b> option</li>
                <br><li>Press <b>Start</b></li>
                <br><li>After scanning, press the following symbol on the printer to log off</li></ol>
        </div>
    </details>

    <details>
        <summary><b><u>How to buy something from HZ webshop?</u></b></summary>
        <div>
            You go to the <a href="https://webshop.hz.nl/webshopapp/default.aspx?menu=082076044027019251066025111065201099237062130097">HZ Webshop</a> and log in into your HZ account. After that, you should be able to see the options.
        </div>
    </details>

    <details>
        <summary><b><u>How to book a project group space?</u></b></summary>
        <div>
            You can book a room <a href="https://hzuniversity.topdesk.net/tas/public/ssp/">here.</a>
            Select "make a reservation", then your room of choice. Be aware that only the rooms that start with GW are in
            Middelburg!
            <br><br><b>Terms of supply</b>
            <br>If you are not present in the meeting room 15 minutes after the start of your reservation, your reservation will be
            canceled. The space is then free to use by others.
        </div>
    </details>

    <details>
        <summary><b><u>Parking at HZ?</u></b></summary>
        <div>
            <b>Free parking near HZ</b><br>
            Free parking is available at the car park at Poelendaelesingel 12 in Middelburg. This is at a few minutes’ walk from HZ.
            Unfortunately, it is not possible to park directly at the HZ premises. However, there is a disabled parking space available
            right next to the HZ building at Het Groene woud 1-3.

            <br><br><b>Car park Poelendaelesingel</b><br>
            At the barrier of the car park the Poelendaelesingel you can ring the bell. After passing the barrier, follow the signs to
            the HZ parking places, marked with a white sign with the HZ logo.

            <br><br><b>With HZ pass or ring the bell</b><br>
            Students and staff can only enter by presenting their HZ pass at the barriers, guests can ring the bell at the barrier.

            <br><br><b>Walking to HZ location</b><br>
            If you park at the Poelendaelesingel you can reach the HZ via the pedestrian tunnel.
        </div>
    </details>
</div>
<footer class="contents">
    <a target="_blank" href="mailto::khat0007@hz.nl"><img src="{{asset ('images/email.png') }}" alt="Gmail icon" height="30" width="30"></a>
    <a target="_blank" href="https://github.com/khat0007"> <img src="{{asset ('/github.png') }}" alt="Github icon" height="30" width="30"></a>
</footer>
</body>

</html>
